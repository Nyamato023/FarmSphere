<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere - Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
</head>

<body class="bg-gray-50 flex items-center justify-center h-screen">
    <div class="w-full max-w-md p-8 space-y-8 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center text-green-600">
            Create Your Account
        </h2>
        <form action="#" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" required
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500" />
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500" />
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500" />
            </div>
            <div>
                <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500" />
            </div>
            <button onclick="window.location.href={{ route('login') }}" type="submit"
                class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700">
                Sign Up
            </button>
        </form>
        <p class="text-center text-gray-600">
            Already have an account?
            <a href="{{ route('login') }}" class="text-green-600 hover:underline">Login</a>
        </p>
    </div>
</body>

</html>
