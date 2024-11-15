<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere - Reports & Analytics</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
</head>

<body class="bg-gray-100">
    <!-- Sidebar -->
    <x-sidebar />
    <div class="flex w-8/12 mx-auto">


        <!-- Main Content -->
        <div class="flex-1 p-8">
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Reports & Analytics</h1>
                <button onclick="exportData()" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                    Export Data
                </button>
            </header>

            <!-- Summary Section -->
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Summary</h2>
                <div class="grid grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow text-center">
                        <h3 class="text-xl font-bold text-gray-700">Total Workers</h3>
                        <p class="text-3xl font-bold text-green-600">120</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow text-center">
                        <h3 class="text-xl font-bold text-gray-700">
                            Average Attendance
                        </h3>
                        <p class="text-3xl font-bold text-green-600">87%</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow text-center">
                        <h3 class="text-xl font-bold text-gray-700">Tasks Completed</h3>
                        <p class="text-3xl font-bold text-green-600">542</p>
                    </div>
                </div>
            </section>

            <!-- Attendance Overview Chart -->
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Attendance Overview
                </h2>
                <div class="bg-white p-6 rounded-lg shadow">
                    <canvas id="attendanceChart"></canvas>
                </div>
            </section>

            <!-- Productivity Analysis Chart -->
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Productivity Analysis
                </h2>
                <div class="bg-white p-6 rounded-lg shadow">
                    <canvas id="productivityChart"></canvas>
                </div>
            </section>
        </div>
    </div>

    <!-- JavaScript for Charts -->
    <script>
        // Attendance Overview Chart
        const attendanceCtx = document
            .getElementById("attendanceChart")
            .getContext("2d");
        const attendanceChart = new Chart(attendanceCtx, {
            type: "line",
            data: {
                labels: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                ],
                datasets: [{
                    label: "Attendance Percentage",
                    data: [90, 85, 88, 92, 87, 85, 89],
                    backgroundColor: "rgba(34, 197, 94, 0.2)",
                    borderColor: "rgba(34, 197, 94, 1)",
                    borderWidth: 2,
                    fill: true,
                }, ],
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                    },
                },
            },
        });

        // Productivity Analysis Chart
        const productivityCtx = document
            .getElementById("productivityChart")
            .getContext("2d");
        const productivityChart = new Chart(productivityCtx, {
            type: "bar",
            data: {
                labels: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                ],
                datasets: [{
                    label: "Tasks Completed",
                    data: [80, 92, 75, 88, 95, 78, 85],
                    backgroundColor: "rgba(34, 197, 94, 0.7)",
                    borderColor: "rgba(34, 197, 94, 1)",
                    borderWidth: 1,
                }, ],
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });

        // Export Data Function (placeholder)
        function exportData() {
            alert("Data export functionality will be available soon!");
        }
    </script>
</body>

</html>
