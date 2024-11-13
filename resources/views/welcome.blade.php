<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-green-200 text-gray-800">
    <!-- Navigation Bar -->
    <nav class="w-full bg-green-600 py-10 px-4 shadow-lg">
        <div class="container mx-auto flex items-center justify-between">
            <a href="./index.html" class="text-2xl font-bold text-white">FarmSphere</a>
            <div>
                <a href="./src/LogIn/LogIn.html"
                    class="text-white font-semibold hover:text-green-600 hover:bg-white rounded-lg transition-all py-2 px-4 mx-4">Login</a>
                <a href="./src/LogIn/SignUp.html"
                    class="text-white font-semibold hover:text-green-600 hover:bg-white rounded-lg transition-all py-2 px-4 mx-4">Sign
                    Up</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="w-full h-screen flex flex-col items-center justify-center">
        <h1 class="text-5xl text-green-700 my-4">
            Empowering Agriculture with Precision & Technology
        </h1>
        <p class="text-3xl text-gray-600 max-w-2xl">
            FarmSphere is your cloud-based solution for managing workers, tracking
            tasks, and optimizing farm productivity. Discover real-time insights,
            geofencing features, and much more.
        </p>
        <div class="mt-10">
            <a href="#" class="bg-green-600 text-white font-semibold py-3 px-8 rounded-lg hover:bg-green-700">
                Get Started
            </a>
        </div>
    </div>

    <!-- Features Section (optional) -->
    <section class="mx-auto flex flex-wrap justify-center py-16 gap-8 h-1/2">
        <div class="w-full sm:w-1/2 lg:w-1/4 p-4 text-center">
            <h3 class="text-4xl font-bold text-green-700">Geofencing</h3>
            <p class="text-gray-600 mt-2 text-3xl">
                Define farm zones and get real-time alerts for activity outside
                boundaries.
            </p>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/4 p-4 text-center">
            <h3 class="text-4xl font-bold text-green-700">Worker Management</h3>
            <p class="text-gray-600 mt-2 text-3xl">
                Easily track, assign tasks, and manage worker profiles.
            </p>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/4 p-4 text-center">
            <h3 class="text-4xl font-bold text-green-700">Real-Time Insights</h3>
            <p class="text-gray-600 mt-2 text-3xl">
                Access real-time data on worker productivity and farm efficiency.
            </p>
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
