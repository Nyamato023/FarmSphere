<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere - Alerts & Notifications</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
</head>

<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="flex">
        <x-sidebar />

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <header class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">
                    Alerts & Notifications
                </h1>
            </header>

            <!-- Alerts Section -->
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Recent Alerts
                </h2>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="space-y-6">
                        <div class="flex justify-between items-center border-b py-4">
                            <div>
                                <p class="text-gray-800 font-semibold">Geofence Alert</p>
                                <p class="text-gray-600 text-sm">
                                    The geofence boundary for the North Farm was breached.
                                    Please review the area.
                                </p>
                            </div>
                            <span class="text-sm text-gray-500">2 hours ago</span>
                        </div>
                        <div class="flex justify-between items-center border-b py-4">
                            <div>
                                <p class="text-gray-800 font-semibold">Attendance Reminder</p>
                                <p class="text-gray-600 text-sm">
                                    Reminder: Worker John Doe has not checked in today. Please
                                    verify his status.
                                </p>
                            </div>
                            <span class="text-sm text-gray-500">1 day ago</span>
                        </div>
                        <div class="flex justify-between items-center border-b py-4">
                            <div>
                                <p class="text-gray-800 font-semibold">System Update</p>
                                <p class="text-gray-600 text-sm">
                                    A new update for the FarmSphere app is available. Please
                                    update to the latest version.
                                </p>
                            </div>
                            <span class="text-sm text-gray-500">3 days ago</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Notifications Section -->
            <section>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Recent Notifications
                </h2>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="space-y-6">
                        <div class="flex justify-between items-center border-b py-4">
                            <div>
                                <p class="text-gray-800 font-semibold">New Worker Assigned</p>
                                <p class="text-gray-600 text-sm">
                                    A new worker, Alice Johnson, has been assigned to the South
                                    Field. Please review her profile.
                                </p>
                            </div>
                            <span class="text-sm text-gray-500">1 hour ago</span>
                        </div>
                        <div class="flex justify-between items-center border-b py-4">
                            <div>
                                <p class="text-gray-800 font-semibold">Geofence Created</p>
                                <p class="text-gray-600 text-sm">
                                    A new geofence for the East Farm has been successfully
                                    created and activated.
                                </p>
                            </div>
                            <span class="text-sm text-gray-500">4 hours ago</span>
                        </div>
                        <div class="flex justify-between items-center border-b py-4">
                            <div>
                                <p class="text-gray-800 font-semibold">Task Deadline</p>
                                <p class="text-gray-600 text-sm">
                                    The task "Plant Seeds in North Field" is due tomorrow.
                                    Please ensure completion.
                                </p>
                            </div>
                            <span class="text-sm text-gray-500">1 day ago</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
