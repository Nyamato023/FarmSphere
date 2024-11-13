<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere - Geofence Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBivJGWyHia-NL-dzeJEAxd6ccdz__q5qw&libraries=drawing&callback=initMap"
        async defer></script>
</head>

<body class="bg-gray-100">
    {{-- sidebar --}}
    <x-sidebar />

    <div class="flex mx-auto w-1/2">


        <!-- Main Content -->
        <div class="flex-1 p-8">
            <header class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Geofence Management</h1>
            </header>

            <!-- Geofence List Section -->
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Geofences</h2>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-semibold">Current Geofences</h3>
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700"
                            onclick="openGeofenceModal()">
                            Create Geofence
                        </button>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                            <span>Geofence 1 - Health Center</span>
                            <button class="bg-blue-600 text-white px-4 py-1 rounded-lg hover:bg-blue-700"
                                onclick="editGeofence()">
                                Edit
                            </button>
                            <button class="bg-red-600 text-white px-4 py-1 rounded-lg hover:bg-red-700"
                                onclick="deleteGeofence()">
                                Delete
                            </button>
                        </li>
                        <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                            <span>Geofence 2 - Farm Boundary</span>
                            <button class="bg-blue-600 text-white px-4 py-1 rounded-lg hover:bg-blue-700"
                                onclick="editGeofence()">
                                Edit
                            </button>
                            <button class="bg-red-600 text-white px-4 py-1 rounded-lg hover:bg-red-700"
                                onclick="deleteGeofence()">
                                Delete
                            </button>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- Map Section -->
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Geofence Map
                </h2>
                <div id="map" class="w-full h-96 bg-gray-300 rounded-lg"></div>
                <p class="text-sm text-gray-600 mt-4">
                    View geofences and their boundaries on the map above.
                </p>
            </section>

            <!-- Geofence Creation Modal -->
            <div id="geofenceModal"
                class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
                <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">
                        Create New Geofence
                    </h3>
                    <form>
                        <div class="mb-4">
                            <label for="geofenceName" class="block text-gray-700">Geofence Name</label>
                            <input type="text" id="geofenceName" class="w-full p-2 border rounded-lg"
                                placeholder="Enter geofence name" />
                        </div>
                        <div class="mb-4">
                            <label for="geofenceDescription" class="block text-gray-700">Description</label>
                            <textarea id="geofenceDescription" class="w-full p-2 border rounded-lg" placeholder="Enter geofence description"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="geofenceRadius" class="block text-gray-700">Radius (meters)</label>
                            <input type="number" id="geofenceRadius" class="w-full p-2 border rounded-lg"
                                placeholder="Enter radius in meters" />
                        </div>
                        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                            Create Geofence
                        </button>
                        <button type="button"
                            class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 mt-4"
                            onclick="closeGeofenceModal()">
                            Cancel
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script for Modal functionality and Google Maps -->
    <script>
        let map, drawingManager;

        function initMap() {
            // Initialize map centered on a default location
            map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -1.286389,
                    lng: 36.817223
                }, // Example: Nairobi's coordinates
                zoom: 12,
            });

            // Initialize drawing manager
            drawingManager = new google.maps.DrawingManager({
                drawingMode: google.maps.drawing.OverlayType.CIRCLE,
                circleOptions: {
                    fillColor: "#FF0000",
                    fillOpacity: 0.35,
                    strokeColor: "#FF0000",
                    strokeWeight: 2,
                    clickable: false,
                    editable: true,
                    zIndex: 1,
                },
            });

            // Set the drawing manager on the map
            drawingManager.setMap(map);

            // Listen for the circle's completion and store the geofence data
            google.maps.event.addListener(
                drawingManager,
                "circlecomplete",
                function(circle) {
                    const center = circle.getCenter();
                    const radius = circle.getRadius(); // In meters
                    alert(
                        "Geofence Created!\nCenter: " + center + "\nRadius: " + radius
                    );

                    // Optionally, you can save this data (e.g., send it to the backend)
                    saveGeofence(center, radius);
                }
            );
        }

        function saveGeofence(center, radius) {
            const name = document.getElementById("geofenceName").value;
            const description = document.getElementById(
                "geofenceDescription"
            ).value;

            // You can save this data to your database or Firebase here
            console.log("Saving geofence:", {
                name: name,
                description: description,
                center: {
                    lat: center.lat(),
                    lng: center.lng(),
                },
                radius: radius,
            });
        }

        function openGeofenceModal() {
            document.getElementById("geofenceModal").classList.remove("hidden");
        }

        function closeGeofenceModal() {
            document.getElementById("geofenceModal").classList.add("hidden");
        }

        function editGeofence() {
            alert("Edit Geofence functionality goes here");
        }

        function deleteGeofence() {
            alert("Delete Geofence functionality goes here");
        }
    </script>
</body>

</html>
