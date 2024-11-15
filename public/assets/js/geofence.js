let map;
let drawingManager;
let selectedShape = null;
const geofences = [];

function initMap() {
    // Initialize the map
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -1.286389, lng: 36.817223 }, // Nairobi coordinates as default
        zoom: 12,
    });

    // Initialize the Drawing Manager
    drawingManager = new google.maps.drawing.DrawingManager({
        drawingMode: google.maps.drawing.OverlayType.POLYGON,
        drawingControl: true,
        drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: ["polygon", "circle"],
        },
        polygonOptions: {
            draggable: true,
            editable: true,
            fillColor: "#FF0000",
            fillOpacity: 0.5,
            strokeWeight: 2,
            clickable: true,
            zIndex: 1,
        },
        circleOptions: {
            draggable: true,
            editable: true,
            fillColor: "#FF0000",
            fillOpacity: 0.5,
            strokeWeight: 2,
            clickable: true,
            zIndex: 1,
        },
    });

    // Add Drawing Manager to the map
    drawingManager.setMap(map);

    // Event listener for when a new shape is created
    google.maps.event.addListener(drawingManager, "overlaycomplete", (event) => {
        if (selectedShape) {
            selectedShape.setMap(null); // Remove any existing shape
        }
        selectedShape = event.overlay;

        // Store the geofence data based on shape type
        if (event.type === "polygon") {
            const path = selectedShape.getPath().getArray();
            console.log("Polygon coordinates:", path);
        } else if (event.type === "circle") {
            console.log("Circle center:", selectedShape.getCenter());
            console.log("Circle radius:", selectedShape.getRadius());
        }

        // Disable drawing mode after creation
        drawingManager.setDrawingMode(null);
    });
}

// Modal management
function openGeofenceModal() {
    document.getElementById("geofenceModal").classList.remove("hidden");
}

function closeGeofenceModal() {
    document.getElementById("geofenceModal").classList.add("hidden");
}

// Create geofence from modal input
function createGeofence() {
    const name = document.getElementById("geofenceName").value;
    const description = document.getElementById("geofenceDescription").value;
    const radius = document.getElementById("geofenceRadius").value;

    if (!selectedShape) {
        alert("Please draw a geofence on the map first.");
        return;
    }

    let geofenceData = {
        name,
        description,
    };

    // Collect geofence data based on shape type
    if (selectedShape instanceof google.maps.Polygon) {
        geofenceData.type = "polygon";
        geofenceData.coordinates = selectedShape
            .getPath()
            .getArray()
            .map((latLng) => ({ lat: latLng.lat(), lng: latLng.lng() }));
    } else if (selectedShape instanceof google.maps.Circle) {
        geofenceData.type = "circle";
        geofenceData.center = {
            lat: selectedShape.getCenter().lat(),
            lng: selectedShape.getCenter().lng(),
        };
        geofenceData.radius = parseFloat(radius);
    }

    geofences.push(geofenceData);
    console.log("Geofences:", geofences);

    // Clear input fields and modal
    document.getElementById("geofenceName").value = "";
    document.getElementById("geofenceDescription").value = "";
    document.getElementById("geofenceRadius").value = "";
    closeGeofenceModal();
    alert("Geofence created successfully!");
}

// Assign the createGeofence function to the form submit button
document.querySelector("form").addEventListener("submit", (event) => {
    event.preventDefault(); // Prevent page reload
    createGeofence();
});
