<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Form - {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @filamentStyles
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-lg font-semibold">My Website</div>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-gray-300">Home</a></li>
                <li><a href="#" class="hover:text-gray-300">About</a></li>
                <li><a href="#" class="hover:text-gray-300">Services</a></li>
                <li><a href="#" class="hover:text-gray-300">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex container mx-auto mt-4">
        <!-- Sidebar -->
        <aside class="w-64 bg-white p-4 shadow-lg">
            <ul class="space-y-2">
                <li><a href="#" class="block p-2 hover:bg-blue-100 rounded">Dashboard</a></li>
                <li><a href="#" class="block p-2 hover:bg-blue-100 rounded">Profile</a></li>
                <li><a href="#" class="block p-2 hover:bg-blue-100 rounded">Settings</a></li>
                <li><a href="#" class="block p-2 hover:bg-blue-100 rounded">Messages</a></li>
                <li><a href="#" class="block p-2 hover:bg-blue-100 rounded">Reports</a></li>
            </ul>
        </aside>

        <!-- Content -->
        <main class="flex-1 ml-4 bg-white p-6 shadow-lg">
            <h1 class="text-2xl font-bold mb-4">Welcome to the Content Page</h1>
            <p class="text-gray-700">
                This is the main content area. You can add your content here. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </main>
    </div>

    @filamentScripts
</body>

</html>