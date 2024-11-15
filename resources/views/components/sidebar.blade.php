<div class="fixed w-1/8 bg-green-600 h-screen p-5 text-white">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <h2 class="text-2xl font-bold mb-8">FarmSphere</h2>
    <ul class="space-y-4">
        <li>
            <a href="{{ route('dashboard') }}" class="text-white underline-animation py-2 px-4 block">Dashboard</a>
        </li>
        <li>
            <a href="{{ route('workers') }}" class="text-white underline-animation py-2 px-4 block">Workers</a>
        </li>
        <li>
            <a href="{{ route('taskManagement') }}" class="text-white underline-animation py-2 px-4 block">Task
                Management</a>
        </li>
        <li>
            <a href="{{ route('attendance') }}" class="text-white underline-animation py-2 px-4 block">Attendance</a>
        </li>
        <li>
            <a href="{{ route('geofence') }}" class="text-white underline-animation py-2 px-4 block">Geofences</a>
        </li>
        <li>
            <a href="{{ route('reports') }}" class="text-white underline-animation py-2 px-4 block">Reports</a>
        </li>
        <li>
            <a href="{{ route('support') }}" class="text-white underline-animation py-2 px-4 block">Help and Support</a>
        </li>
        <li>
            <a href="{{ route('settings') }}" class="text-white underline-animation py-2 px-4 block">Settings</a>
        </li>
    </ul>
</div>
