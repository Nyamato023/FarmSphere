<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere - Help and Support</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
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
            <header class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Help and Support</h1>
            </header>

            <!-- FAQ Section -->
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Frequently Asked Questions (FAQ)
                </h2>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-700">
                                How do I create a geofence?
                            </h3>
                            <p class="text-gray-600">
                                To create a geofence, go to the Geofence Management page,
                                click the "Create Geofence" button, and fill in the required
                                fields such as name, description, and radius.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-700">
                                How can I track worker attendance?
                            </h3>
                            <p class="text-gray-600">
                                You can track attendance through the Attendance Tracking page,
                                where you can mark attendance for workers based on their
                                check-ins.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-700">
                                What should I do if I face a technical issue?
                            </h3>
                            <p class="text-gray-600">
                                If you encounter any technical issues, please submit an
                                inquiry through the contact form below, and our support team
                                will assist you.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Support Section -->
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Contact Support
                </h2>
                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-gray-600 mb-4">
                        For further assistance, you can contact our support team at:
                    </p>
                    <p class="text-gray-800 font-semibold">
                        Email:
                        <a href="mailto:support@farmsphere.com"
                            class="text-blue-600 hover:text-blue-800">support@farmsphere.com</a>
                    </p>
                    <p class="text-gray-800 font-semibold">Phone: +123 456 7890</p>
                </div>
            </section>

            <!-- Submit Inquiry Form Section -->
            <section>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Submit an Inquiry
                </h2>
                <div class="bg-white p-6 rounded-lg shadow">
                    <form action="#" method="POST">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">Your Name</label>
                            <input type="text" id="name" name="name" class="w-full p-2 border rounded-lg"
                                placeholder="Enter your name" required />
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">Your Email</label>
                            <input type="email" id="email" name="email" class="w-full p-2 border rounded-lg"
                                placeholder="Enter your email" required />
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block text-gray-700">Subject</label>
                            <input type="text" id="subject" name="subject" class="w-full p-2 border rounded-lg"
                                placeholder="Enter the subject of your inquiry" required />
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700">Message</label>
                            <textarea id="message" name="message" class="w-full p-2 border rounded-lg"
                                placeholder="Describe your issue or question" required></textarea>
                        </div>
                        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">
                            Submit Inquiry
                        </button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\Users\Simba Elton\OneDrive\Desktop\tailwind-learning\FarmSphere\resources\views/Support.blade.php ENDPATH**/ ?>