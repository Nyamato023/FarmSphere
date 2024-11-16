<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmSphere - Geofence Management</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBivJGWyHia-NL-dzeJEAxd6ccdz__q5qw&libraries=drawing,places&callback=initMap"
        async defer></script>
</head>

<body class="bg-gray-100">
    <!-- Sidebar Component -->
    <x-sidebar />

    <div class="flex mx-auto w-8/12">
        <!-- Main Content -->
        <div class="flex-1 p-8">
            <header class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Geofence Management</h1>
            </header>

            <!-- Search Section -->
            <section class="mb-6">
                <div class="bg-white p-4 rounded-lg shadow">
                    <input id="searchBox" type="text" placeholder="Search for a geofence"
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
            </section>

            <!-- Map Section -->
            <section id="mapSection" class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Farm Geofence Zones</h2>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div id="map-container" class="w-full h-96 bg-gray-300 rounded-lg"></div>
                </div>
            </section>

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
                    <ul class="space-y-4" id="geofenceList">
                        @foreach ($zones as $zone)
                            <li class="geofence-item flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                                <span class="geofence-name">{{ $zone->name }}</span>
                                <div>
                                    <form action="{{ route('geofences.destroy', $zone->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-600 text-white px-4 py-1 rounded-lg hover:bg-red-700">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <!-- Geofence Creation Modal -->
            <div id="geofenceModal"
                class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
                <div class="bg-white p-6 rounded-lg shadow-lg w-3/4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">
                        Create/Edit Geofence
                    </h3>
                    <form id="geofenceForm" action="{{ route('geofences.store') }}" method="POST">
                        @csrf
                        <input type="hidden" id="geofenceId" name="id">
                        <div class="mb-4">
                            <label for="geofenceName" class="block text-gray-700">Geofence Name</label>
                            <input type="text" id="geofenceName" name="name" class="w-full p-2 border rounded-lg"
                                placeholder="Enter geofence name" required>
                        </div>
                        <div class="mb-4">
                            <label for="geofenceRadius" class="block text-gray-700">Radius (meters)</label>
                            <input type="number" id="geofenceRadius" name="radius"
                                class="w-full p-2 border rounded-lg" placeholder="Enter radius in meters" required>
                        </div>
                        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                            Save Geofence
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

    <!-- Script for Map and Geofence -->
    <script src="{{ asset('assets/js/geofence.js') }}"></script>
    <script>
        // JavaScript for Geofence Search
        document.addEventListener("DOMContentLoaded", () => {
            setupSearchFunctionality();
        });

        function setupSearchFunctionality() {
            const searchBox = document.getElementById("searchBox");
            const geofenceItems = document.querySelectorAll(".geofence-item");

            searchBox.addEventListener("input", (event) => {
                const query = event.target.value.toLowerCase();
                geofenceItems.forEach((item) => {
                    const geofenceName = item.querySelector(".geofence-name").textContent.toLowerCase();
                    if (geofenceName.includes(query)) {
                        item.style.display = "flex"; // Show matching geofence
                    } else {
                        item.style.display = "none"; // Hide non-matching geofence
                    }
                });
            });
        }

        function openGeofenceModal() {
            document.getElementById("geofenceModal").classList.remove("hidden");
        }

        function closeGeofenceModal() {
            document.getElementById("geofenceModal").classList.add("hidden");
        }
    </script>
</body>

</html>
