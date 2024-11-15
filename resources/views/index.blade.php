<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

</head>

<body style="background-image: url('{{ asset('assets/img/image.png') }}')"
    class="bg-cover bg-center bg-no-repeat text-gray-800">
    <!-- Navigation Bar -->
    <nav class="w-full bg-green-800 py-10 px-4 shadow-lg">
        <div class="container mx-auto flex items-center justify-between">
            <a href="./index.html" class="underline-animation text-2xl text-yellow-300 font-bold">FarmSphere</a>
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
        <div class="flex sm:flex-row">
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

    <!-- Footer -->
    <footer class="w-full bg-gray-800 p-6 mt-10">
        <div class="container mx-auto text-center text-white">
            © 2024 FarmSphere - All Rights Reserved
        </div>
    </footer>
</body>

</html>
