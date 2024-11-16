let searchBox;

function initMap() {
    const map = new google.maps.Map(document.getElementById("map-container"), {
        center: { lat: -0.4371, lng: 36.9580 },
        zoom: 13,
    });

    // Initialize the search box
    const input = document.getElementById("searchBox");
    searchBox = new google.maps.places.SearchBox(input);

    // Bias the search results towards the current map's viewport.
    map.addListener("bounds_changed", () => {
        searchBox.setBounds(map.getBounds());
    });

    let markers = [];
    let selectedCircle = null;

    // Listen for the event fired when the user selects a prediction.
    searchBox.addListener("places_changed", () => {
        const places = searchBox.getPlaces();

        if (places.length === 0) {
            return;
        }

        // Clear out the old markers.
        markers.forEach((marker) => marker.setMap(null));
        markers = [];

        const bounds = new google.maps.LatLngBounds();

        places.forEach((place) => {
            if (!place.geometry || !place.geometry.location) {
                console.error("Returned place has no geometry");
                return;
            }

            // Create a marker for each place.
            markers.push(
                new google.maps.Marker({
                    map,
                    title: place.name,
                    position: place.geometry.location,
                })
            );

            if (place.geometry.viewport) {
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });

        map.fitBounds(bounds);
    });

    // Initialize Drawing Manager
    const drawingManager = new google.maps.drawing.DrawingManager({
        drawingMode: google.maps.drawing.OverlayType.CIRCLE,
        drawingControl: true,
        drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: ["circle"],
        },
        circleOptions: {
            fillColor: "#FF0000",
            fillOpacity: 0.35,
            strokeWeight: 2,
            clickable: true,
            editable: true,
            zIndex: 1,
        },
    });

    drawingManager.setMap(map);

    // Event listener for drawing a circle
    google.maps.event.addListener(drawingManager, "overlaycomplete", (event) => {
        if (event.type === google.maps.drawing.OverlayType.CIRCLE) {
            if (selectedCircle) {
                selectedCircle.setMap(null); // Remove the previously selected circle
            }
            selectedCircle = event.overlay;

            // Update radius input field when circle is drawn
            const radiusInput = document.getElementById("geofenceRadius");
            radiusInput.value = Math.round(selectedCircle.getRadius());

            // Attach event listener to update radius dynamically when resized
            google.maps.event.addListener(selectedCircle, "radius_changed", () => {
                radiusInput.value = Math.round(selectedCircle.getRadius());
            });
        }
    });

    loadGeofences();
}
