<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmSphere - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 flex items-center justify-center h-screen">
    <div class="w-full max-w-md p-8 space-y-8 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center text-green-600">
            Welcome Back to FarmSphere
        </h2>
        <form action="#" method="POST" class="space-y-6">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" required
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500" />
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500" />
            </div>
            <div class="flex items-center justify-between">
                <a href="#" class="text-sm text-green-600 hover:underline">Forgot Password?</a>
            </div>
            <button onclick="window.location.href='../Dashboard.html';" type="submit"
                class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700">
                Login
            </button>
        </form>
        <p class="text-center text-gray-600">
            Don’t have an account?
            <a href="signup.html" class="text-green-600 hover:underline">Sign Up</a>
        </p>
    </div>
</body>

</html>