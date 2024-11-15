<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere - Task Management</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <!-- Sidebar -->
    <x-sidebar />
    <div class="flex w-8/12 mx-auto">
        <!-- Main Content -->
        <div class="flex-1 p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold">Task Management</h1>
                <button @click="openModal = true" class="bg-green-600 text-white px-4 py-2 rounded">
                    Add Task
                </button>
            </div>

            <!-- Task Table -->
            <div class="overflow-x-auto bg-white shadow rounded-lg">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-2 px-4 text-left text-sm font-semibold">Task</th>
                            <th class="py-2 px-4 text-left text-sm font-semibold">
                                Assigned To
                            </th>
                            <th class="py-2 px-4 text-left text-sm font-semibold">
                                Status
                            </th>
                            <th class="py-2 px-4 text-left text-sm font-semibold">
                                Deadline
                            </th>
                            <th class="py-2 px-4 text-left text-sm font-semibold">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-3 px-4">Plant new crops in zone 1</td>
                            <td class="py-3 px-4">John Doe</td>
                            <td class="py-3 px-4 text-green-600">In Progress</td>
                            <td class="py-3 px-4">2024-11-20</td>
                            <td class="py-3 px-4">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded">
                                    Edit
                                </button>
                                <button class="bg-red-500 text-white px-3 py-1 rounded ml-2">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <!-- Additional tasks will be added here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Task Modal -->
    <div x-data="{ openModal: false }" x-show="openModal" x-cloak
        class="fixed inset-0 bg-gray-500 bg-opacity-75 z-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-xl font-semibold mb-4">Add New Task</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2">Task Name</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded"
                        placeholder="Task Name" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2">Assigned To</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded"
                        placeholder="Worker Name" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2">Status</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded">
                        <option value="in-progress">In Progress</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2">Deadline</label>
                    <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded" required />
                </div>
                <div class="flex justify-end">
                    <button type="button" @click="openModal = false"
                        class="bg-gray-400 text-white px-4 py-2 rounded mr-2">
                        Cancel
                    </button>
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
                        Save Task
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>


</html>
