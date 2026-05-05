<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-indigo-700 text-white p-6 min-h-screen">
            <div class="flex items-center gap-2 mb-8">
                <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center text-indigo-700 font-bold">AH</div>
                <span class="text-xl font-bold">AmikomEventHub</span>
            </div>
            <nav class="space-y-4">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-indigo-600 transition">Dashboard</a>
                <a href="{{ route('admin.events.index') }}" class="block px-4 py-2 rounded hover:bg-indigo-600 transition">Manajemen Event</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <div class="bg-white shadow-sm p-4 mb-6">
                <h1 class="text-2xl font-bold">Admin Panel</h1>
            </div>
            <div class="px-6">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
