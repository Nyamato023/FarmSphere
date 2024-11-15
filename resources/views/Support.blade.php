<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere - Help and Support</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <!-- Sidebar -->
    <x-sidebar />

    <div class="flex w-8/12 mx-auto">
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
                <div class="bg-white p-6 rounded-lg shadow" x-data="{ openIndex: null }">
                    <div class="space-y-6">
                        <!-- FAQ 1 -->
                        <div class="w-full mt-5">
                            <a @click="openIndex = openIndex === 1 ? null : 1" :aria-expanded="openIndex === 1"
                                :class="openIndex === 1 ? 'bg-[#cee8e2]' : 'bg-[#f0f9f5]'"
                                class="hover:cursor-pointer w-full p-5 relative flex justify-between items-center">
                                <h3 id="faq1" class="pr-12 text-lg md:text-xl lg:text-xlg font-semibold">
                                    How do I create a geofence?
                                </h3>
                                <i
                                    :class="openIndex === 1 ? 'fa-solid fa-chevron-up fa-xl' : 'fa-solid fa-chevron-down fa-xl'"></i>
                            </a>
                            <div x-show="openIndex === 1" class="p-5 font-semibold transition ease-out duration-300"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                id="faq1-panel" aria-labelledby="faq1">
                                <p>
                                    To create a geofence, go to the Geofence Management page,
                                    click the "Create Geofence" button, and fill in the required
                                    fields such as name, description, and radius.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="w-full mt-5">
                            <a @click="openIndex = openIndex === 2 ? null : 2" :aria-expanded="openIndex === 2"
                                :class="openIndex === 2 ? 'bg-[#cee8e2]' : 'bg-[#f0f9f5]'"
                                class="hover:cursor-pointer w-full p-5 relative flex justify-between items-center">
                                <h3 id="faq2" class="pr-12 text-lg md:text-xl lg:text-xlg font-semibold">
                                    How can I track worker attendance?
                                </h3>
                                <i
                                    :class="openIndex === 2 ? 'fa-solid fa-chevron-up fa-xl' : 'fa-solid fa-chevron-down fa-xl'"></i>
                            </a>
                            <div x-show="openIndex === 2" class="p-5 font-semibold transition ease-out duration-300"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                id="faq2-panel" aria-labelledby="faq2">
                                <p>
                                    You can track attendance through the Attendance Tracking page,
                                    where you can mark attendance for workers based on their
                                    check-ins.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="w-full mt-5">
                            <a @click="openIndex = openIndex === 3 ? null : 3" :aria-expanded="openIndex === 3"
                                :class="openIndex === 3 ? 'bg-[#cee8e2]' : 'bg-[#f0f9f5]'"
                                class="hover:cursor-pointer w-full p-5 relative flex justify-between items-center">
                                <h3 id="faq3" class="pr-12 text-lg md:text-xl lg:text-xlg font-semibold">
                                    What should I do if I face a technical issue?
                                </h3>
                                <i
                                    :class="openIndex === 3 ? 'fa-solid fa-chevron-up fa-xl' : 'fa-solid fa-chevron-down fa-xl'"></i>
                            </a>
                            <div x-show="openIndex === 3" class="p-5 font-semibold transition ease-out duration-300"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                id="faq3-panel" aria-labelledby="faq3">
                                <p>
                                    If you encounter any technical issues, please submit an
                                    inquiry through the contact form below, and our support team
                                    will assist you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Support Section -->
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Contact Support
                </h2>
                <div class="bg-white p-5 font-semibold rounded-lg shadow">
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
                <div class="bg-white p-5 font-semibold rounded-lg shadow">
                    <form action="/submit-inquiry" method="POST">
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
                        <button type="submit"
                            class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">
                            Submit Inquiry
                        </button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
