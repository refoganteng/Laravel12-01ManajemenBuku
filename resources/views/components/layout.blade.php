<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Data Buku</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="max-w-6xl mx-auto px-6 py-8">
        <!-- Header -->
        <header class="mb-8">
            <h1 class="text-4xl font-extrabold text-indigo-600 mb-2">📚 Manajemen Data Buku</h1>
        </header>

        <!-- Navbar -->
        <x-navbar></x-navbar>

        <!-- Section -->
        {{ $slot }}

        <!-- Footer -->
        <footer class="mt-10 text-center text-gray-500">
            &copy; 2025 - <span class="font-semibold">Revo Nando</span>
        </footer>
    </div>
</body>

</html>