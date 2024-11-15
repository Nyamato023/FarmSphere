<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>


<body style="background-image: url('{{ asset('assets/img/image.png') }}')"
    class="bg-cover bg-center bg-no-repeat text-gray-800">
    <!-- Navigation Bar -->
    <nav class="w-full bg-green-800 py-10 px-4 shadow-lg">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex">
                <img src="{{ asset('assets/img/favicon.png') }}" alt="icon" class="w-10 h-10 mr-4">
                <a href="{{ route('landing') }}"
                    class="underline-animation text-2xl text-yellow-300 font-bold">FarmSphere</a>
            </div>

            <div>
                <a href="{{ route('login') }}"
                    class="text-white font-semibold hover:text-green-600 hover:bg-yellow-300 rounded-[16px] transition-all py-2 px-4 mx-4">Login</a>
                <a href="{{ route('signup') }}"
                    class="text-white font-semibold hover:text-green-600 hover:bg-yellow-300 rounded-[16px] transition-all py-2 px-4 mx-4">Sign
                    Up</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="md:w-1/2 sm:5/6 sm:mx-auto text-center h-screen flex flex-col items-center justify-center">
        <h1 class="text-7xl text-white font-bold my-4">
            Mapping Progress, Cultivating Sustainability
        </h1>
        <p class="text-lg text-white font-semibold max-w-2xl">
            FarmSphere is your cloud-based solution for managing workers, tracking
            tasks, and optimizing farm productivity. Discover real-time insights,
            geofencing features, and much more.
        </p>
    </div>

    <!-- CTA -->
    <div class="bg-green-800">
        <div class="font-bold text-2xl flex text-center">
            <div class="w-1/2 bg-yellow-300 text-green-800 py-24 px-8">
                <p>Are you a farmer?</p>
            </div>
            <div class="w-1/2 text-white py-24 px-8">We have a solution!</div>
        </div>
    </div>

    <!-- Features Section (optional) -->
    <section class="bg-white text-center mx-auto justify-center py-16 gap-8 h-1/2">
        <h2 class="text-5xl py-6 font-bold">What is FarmSphere about?</h2>
        <div class="flex sm:flex-row items-center justify-center">
            <div class="w-full sm:w-1/2 lg:w-1/4 p-4 text-center underline-animation">
                <h3 class="text-4xl font-bold text-green-700">Geofencing</h3>
                <p class="text-gray-600 mt-2 font-semibold">
                    Define farm zones and get real-time alerts for activity outside
                    boundaries.
                </p>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/4 p-4 text-center underline-animation">
                <h3 class="text-4xl font-bold text-green-700">Worker Management</h3>
                <p class="text-gray-600 mt-2 font-semibold">
                    Easily track, assign tasks, and manage worker profiles.
                </p>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/4 p-4 text-center underline-animation">
                <h3 class="text-4xl font-bold text-green-700">Real-Time Insights</h3>
                <p class="text-gray-600 mt-2 font-semibold">
                    Access real-time data on worker productivity and farm efficiency.
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="">
        <div class="bg-white p-6 rounded-lg shadow" x-data="{ openIndex: null }">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center p-3">
                Frequently Asked Questions (FAQ)
            </h2>
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
                        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" id="faq1-panel"
                        aria-labelledby="faq1">
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
                        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" id="faq2-panel"
                        aria-labelledby="faq2">
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
                        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" id="faq3-panel"
                        aria-labelledby="faq3">
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

    <!-- Footer -->
    <footer class="w-full bg-gray-800 p-6 mt-10">
        <div class="container mx-auto text-center text-white">
            © 2024 FarmSphere - All Rights Reserved
        </div>
    </footer>
</body>

</html>
