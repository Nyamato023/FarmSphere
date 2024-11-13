<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere - Worker Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Sidebar -->
    <x-sidebar />
    <div class="flex mx-auto w-1/2">


        <!-- Main Content -->
        <div class="flex-1 p-8">
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Worker Management</h1>
                <button onclick="openAddWorkerModal()"
                    class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                    Add New Worker
                </button>
            </header>

            <!-- Worker Table -->
            <div class="bg-white rounded-lg shadow overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-green-600 text-white">
                        <tr>
                            <th class="py-3 px-6 text-left">ID</th>
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">Role</th>
                            <th class="py-3 px-6 text-left">Status</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-b">
                            <td class="py-3 px-6">001</td>
                            <td class="py-3 px-6">John Doe</td>
                            <td class="py-3 px-6">Field Worker</td>
                            <td class="py-3 px-6">Active</td>
                            <td class="py-3 px-6 text-center">
                                <button onclick="editWorker('001')"
                                    class="bg-blue-500 text-white px-3 py-1 rounded mr-2 hover:bg-blue-600">
                                    Edit
                                </button>
                                <button onclick="deleteWorker('001')"
                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <!-- Add more worker rows as needed -->
                    </tbody>
                </table>
            </div>

            <!-- Modals -->
            <!-- Add Worker Modal -->
            <div id="addWorkerModal"
                class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
                <div class="bg-white p-8 rounded-lg shadow-lg w-96">
                    <h2 class="text-xl font-semibold mb-4">Add New Worker</h2>
                    <form id="addWorkerForm">
                        <label class="block mb-2 text-gray-700">Name</label>
                        <input type="text" id="workerName" class="w-full mb-4 px-4 py-2 border rounded-lg"
                            placeholder="Enter worker's name" />

                        <label class="block mb-2 text-gray-700">Role</label>
                        <input type="text" id="workerRole" class="w-full mb-4 px-4 py-2 border rounded-lg"
                            placeholder="Enter worker's role" />

                        <label class="block mb-2 text-gray-700">Status</label>
                        <select id="workerStatus" class="w-full mb-4 px-4 py-2 border rounded-lg">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>

                        <div class="flex justify-end">
                            <button type="button" onclick="closeAddWorkerModal()"
                                class="bg-gray-400 text-white px-4 py-2 rounded-lg mr-2">
                                Cancel
                            </button>
                            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg">
                                Add Worker
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Edit Worker Modal -->
            <div id="editWorkerModal"
                class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
                <div class="bg-white p-8 rounded-lg shadow-lg w-96">
                    <h2 class="text-xl font-semibold mb-4">Edit Worker</h2>
                    <form id="editWorkerForm">
                        <label class="block mb-2 text-gray-700">Name</label>
                        <input type="text" id="editWorkerName" class="w-full mb-4 px-4 py-2 border rounded-lg"
                            placeholder="Enter worker's name" />

                        <label class="block mb-2 text-gray-700">Role</label>
                        <input type="text" id="editWorkerRole" class="w-full mb-4 px-4 py-2 border rounded-lg"
                            placeholder="Enter worker's role" />

                        <label class="block mb-2 text-gray-700">Status</label>
                        <select id="editWorkerStatus" class="w-full mb-4 px-4 py-2 border rounded-lg">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>

                        <div class="flex justify-end">
                            <button type="button" onclick="closeEditWorkerModal()"
                                class="bg-gray-400 text-white px-4 py-2 rounded-lg mr-2">
                                Cancel
                            </button>
                            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Modal Handling -->
    <script>
        function openAddWorkerModal() {
            document.getElementById("addWorkerModal").classList.remove("hidden");
        }

        function closeAddWorkerModal() {
            document.getElementById("addWorkerModal").classList.add("hidden");
        }

        function editWorker(workerId) {
            document.getElementById("editWorkerModal").classList.remove("hidden");
            // Load worker data by workerId (fetching data can be done here)
        }

        function closeEditWorkerModal() {
            document.getElementById("editWorkerModal").classList.add("hidden");
        }

        function deleteWorker(workerId) {
            if (confirm("Are you sure you want to delete this worker?")) {
                // Code to delete worker by workerId
                alert("Worker deleted successfully!");
            }
        }
    </script>
</body>

</html>
