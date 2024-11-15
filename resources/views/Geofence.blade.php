<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere - Geofence Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBivJGWyHia-NL-dzeJEAxd6ccdz__q5qw&libraries=drawing&callback=initMap"
        async defer></script>
</head>

<body class="bg-gray-100">
    {{-- sidebar --}}
    <x-sidebar />

    <div class="flex mx-auto w-8/12">

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

            <!-- Geofence Creation Modal -->
            <div id="geofenceModal"
                class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
                <div class="bg-white p-6 rounded-lg shadow-lg w-3/4">
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
                        <div class="mb-6">
                            <label class="block text-gray-700 mb-2">Draw Geofence on Map</label>
                            <div id="map" class="w-full h-64 bg-gray-300 rounded-lg"></div>
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
    <script src="{{ asset('assets/js/geofence.js') }}"></script>
</body>

</html>
