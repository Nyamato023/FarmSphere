<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere - Attendance Tracking</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex">
    <!-- Sidebar -->
    <?php if (isset($component)) { $__componentOriginal2880b66d47486b4bfeaf519598a469d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2880b66d47486b4bfeaf519598a469d6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $attributes = $__attributesOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $component = $__componentOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__componentOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>

    <div class="flex w-1/2 mx-auto">

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Attendance Tracking</h1>
                <button onclick="openMarkAttendanceModal()"
                    class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                    Mark Attendance
                </button>
            </header>

            <!-- Attendance Table -->
            <div class="bg-white rounded-lg shadow overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-green-600 text-white">
                        <tr>
                            <th class="py-3 px-6 text-left">Worker ID</th>
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">Date</th>
                            <th class="py-3 px-6 text-left">Status</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-b">
                            <td class="py-3 px-6">001</td>
                            <td class="py-3 px-6">John Doe</td>
                            <td class="py-3 px-6">2024-11-13</td>
                            <td class="py-3 px-6">Present</td>
                            <td class="py-3 px-6 text-center">
                                <button onclick="editAttendance('001')"
                                    class="bg-blue-500 text-white px-3 py-1 rounded mr-2 hover:bg-blue-600">
                                    Edit
                                </button>
                                <button onclick="deleteAttendance('001')"
                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <!-- Additional attendance records can be added here -->
                    </tbody>
                </table>
            </div>

            <!-- Modals -->
            <!-- Mark Attendance Modal -->
            <div id="markAttendanceModal"
                class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
                <div class="bg-white p-8 rounded-lg shadow-lg w-96">
                    <h2 class="text-xl font-semibold mb-4">Mark Attendance</h2>
                    <form id="markAttendanceForm">
                        <label class="block mb-2 text-gray-700">Worker ID</label>
                        <input type="text" id="attendanceWorkerId" class="w-full mb-4 px-4 py-2 border rounded-lg"
                            placeholder="Enter worker ID" />

                        <label class="block mb-2 text-gray-700">Date</label>
                        <input type="date" id="attendanceDate" class="w-full mb-4 px-4 py-2 border rounded-lg" />

                        <label class="block mb-2 text-gray-700">Status</label>
                        <select id="attendanceStatus" class="w-full mb-4 px-4 py-2 border rounded-lg">
                            <option value="Present">Present</option>
                            <option value="Absent">Absent</option>
                            <option value="On Leave">On Leave</option>
                        </select>

                        <div class="flex justify-end">
                            <button type="button" onclick="closeMarkAttendanceModal()"
                                class="bg-gray-400 text-white px-4 py-2 rounded-lg mr-2">
                                Cancel
                            </button>
                            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Edit Attendance Modal -->
            <div id="editAttendanceModal"
                class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
                <div class="bg-white p-8 rounded-lg shadow-lg w-96">
                    <h2 class="text-xl font-semibold mb-4">Edit Attendance</h2>
                    <form id="editAttendanceForm">
                        <label class="block mb-2 text-gray-700">Worker ID</label>
                        <input type="text" id="editAttendanceWorkerId"
                            class="w-full mb-4 px-4 py-2 border rounded-lg" readonly />

                        <label class="block mb-2 text-gray-700">Date</label>
                        <input type="date" id="editAttendanceDate" class="w-full mb-4 px-4 py-2 border rounded-lg" />

                        <label class="block mb-2 text-gray-700">Status</label>
                        <select id="editAttendanceStatus" class="w-full mb-4 px-4 py-2 border rounded-lg">
                            <option value="Present">Present</option>
                            <option value="Absent">Absent</option>
                            <option value="On Leave">On Leave</option>
                        </select>

                        <div class="flex justify-end">
                            <button type="button" onclick="closeEditAttendanceModal()"
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
        function openMarkAttendanceModal() {
            document
                .getElementById("markAttendanceModal")
                .classList.remove("hidden");
        }

        function closeMarkAttendanceModal() {
            document.getElementById("markAttendanceModal").classList.add("hidden");
        }

        function editAttendance(workerId) {
            document
                .getElementById("editAttendanceModal")
                .classList.remove("hidden");
            // Populate fields with worker's attendance data (using workerId)
        }

        function closeEditAttendanceModal() {
            document.getElementById("editAttendanceModal").classList.add("hidden");
        }

        function deleteAttendance(workerId) {
            if (
                confirm("Are you sure you want to delete this attendance record?")
            ) {
                // Code to delete the attendance record by workerId
                alert("Attendance record deleted successfully!");
            }
        }
    </script>
</body>

</html>
<?php /**PATH C:\Users\Simba Elton\OneDrive\Desktop\tailwind-learning\FarmSphere\resources\views/Attendance.blade.php ENDPATH**/ ?>