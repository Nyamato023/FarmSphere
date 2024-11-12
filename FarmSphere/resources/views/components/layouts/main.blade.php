<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Sidebar -->
    <div class="flex">
        <div class="w-1/5 h-screen bg-green-600 p-5 text-white">
            <h1 class="text-2xl font-bold mb-5">Farm Manager</h1>
            <ul>
                <li><a href="{{ route('dashboard') }}" class="hover:text-green-300">Dashboard</a></li>
                <li><a href="{{ route('geofence') }}" class="hover:text-green-300">Geofences</a></li>
                <li><a href="{{ route('notifications') }}" class="hover:text-green-300">Notifications</a></li>
                <li><a href="{{ route('activity-logs') }}" class="hover:text-green-300">Activity Logs</a></li>
            </ul>

        </div>

        <!-- Main Content -->
        <div class="w-4/5 p-8">
            <!-- Navbar -->
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-2xl font-semibold">Dashboard</h2>
                <div>
                    <span>Welcome, Admin</span>
                    <!-- Add other user profile links here if needed -->
                </div>
            </div>

            <!-- Main Section for Component Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>

    @livewireScripts
</body>

</html>
