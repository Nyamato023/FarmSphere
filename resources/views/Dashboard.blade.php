<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex">
    <!-- Sidebar -->
    <x-sidebar />

    <div class="flex w-1/2 mx-auto">
        
        <!-- Main Dashboard Content -->
        <div class="flex-1 p-8">
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
                <div>
                    <a href="login.html" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Log
                        Out</a>
                </div>
            </header>

            <!-- Overview Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-700">Active Workers</h3>
                    <p class="text-3xl font-bold text-green-600 mt-4">24</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Workers in Geofenced Zones
                    </h3>
                    <p class="text-3xl font-bold text-green-600 mt-4">18</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-700">Recent Alerts</h3>
                    <p class="text-3xl font-bold text-red-500 mt-4">3</p>
                </div>
            </div>

            <!-- Chart & Recent Activities Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Placeholder for Charts/Graphs -->
                <div class="bg-white p-6 rounded-lg shadow-lg h-64">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Worker Distribution
                    </h3>
                    <div class="mt-4 h-full flex items-center justify-center text-gray-500">
                        <!-- Placeholder for a chart or map -->
                        <span>Chart/Graph Placeholder</span>
                    </div>
                </div>

                <!-- Recent Activities -->
                <div class="bg-white p-6 rounded-lg shadow-lg h-64">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Recent Activities
                    </h3>
                    <ul class="mt-4 space-y-3 text-gray-600">
                        <li>Worker John checked into Zone A at 9:15 AM</li>
                        <li>Alert: Worker Sarah left Zone B</li>
                        <li>New task assigned to Zone C workers</li>
                        <li>Worker Alex completed task in Zone D</li>
                        <li>Worker Maria checked out at 5:00 PM</li>
                    </ul>
                </div>
            </div>

            <!-- Notification Center & Quick Insights Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                <!-- Notification Center -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Notification Center
                    </h3>
                    <ul class="mt-4 space-y-3 text-gray-600">
                        <li class="flex justify-between">
                            <span>Zone C: High Temperature Alert</span>
                            <button class="text-blue-600 hover:underline">View</button>
                        </li>
                        <li class="flex justify-between">
                            <span>Zone B: Worker Left Boundary</span>
                            <button class="text-blue-600 hover:underline">
                                Acknowledge
                            </button>
                        </li>
                        <li class="flex justify-between">
                            <span>Zone A: Task Completed</span>
                            <button class="text-blue-600 hover:underline">Review</button>
                        </li>
                    </ul>
                </div>

                <!-- Quick Insights -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-700">Quick Insights</h3>
                    <ul class="mt-4 space-y-3 text-gray-600">
                        <li>Zone B is currently the most active area</li>
                        <li>Task completion rate this week: 85%</li>
                        <li>3 new alerts in the last hour</li>
                        <li>Worker attendance rate: 92%</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
