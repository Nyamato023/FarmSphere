<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere - Settings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
</head>

<body class="bg-gray-100">
    <!-- Sidebar -->
    <x-sidebar />

    <div class="flex mx-auto w-8/12">

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <header class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Settings</h1>
            </header>

            <!-- Profile Settings Section -->
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Profile Settings
                </h2>
                <div class="bg-white p-6 rounded-lg shadow">
                    <form action="#">
                        <div class="mb-4">
                            <label class="block text-gray-700">Full Name</label>
                            <input type="text" placeholder="John Doe" class="w-full p-2 border rounded-lg" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Email Address</label>
                            <input type="email" placeholder="john.doe@example.com"
                                class="w-full p-2 border rounded-lg" />
                        </div>
                        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                            Save Changes
                        </button>
                    </form>
                </div>
            </section>

            <!-- Notification Preferences Section -->
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Notification Preferences
                </h2>
                <div class="bg-white p-6 rounded-lg shadow">
                    <form>
                        <div class="flex items-center mb-4">
                            <input type="checkbox" id="emailNotifications" class="mr-2" checked />
                            <label for="emailNotifications" class="text-gray-700">Enable Email Notifications</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input type="checkbox" id="smsNotifications" class="mr-2" />
                            <label for="smsNotifications" class="text-gray-700">Enable SMS Notifications</label>
                        </div>
                        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                            Save Preferences
                        </button>
                    </form>
                </div>
            </section>

            <!-- Roles and Permissions Section -->
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Roles and Permissions
                </h2>
                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-gray-700 mb-4">
                        Assign or modify roles for different users within the system.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                            <span>Worker Manager</span>
                            <button class="bg-green-600 text-white px-4 py-1 rounded-lg hover:bg-green-700">
                                Edit Permissions
                            </button>
                        </li>
                        <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                            <span>Geofence Administrator</span>
                            <button class="bg-green-600 text-white px-4 py-1 rounded-lg hover:bg-green-700">
                                Edit Permissions
                            </button>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- Account Management Section -->
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Account Management
                </h2>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="mb-4">
                        <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
                            Deactivate Account
                        </button>
                        <p class="text-sm text-gray-500 mt-2">
                            Note: Deactivating your account will restrict your access to the
                            system until reactivated by an admin.
                        </p>
                    </div>
                    <div>
                        <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
                            Delete Account
                        </button>
                        <p class="text-sm text-gray-500 mt-2">
                            Warning: Deleting your account is permanent and cannot be
                            undone.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
