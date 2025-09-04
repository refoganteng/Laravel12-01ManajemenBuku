<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    
<section class="relative bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 text-white min-h-[80vh] flex items-center justify-center overflow-hidden">
  <!-- Background effect -->
  <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=1350&q=80')] bg-cover bg-center opacity-20"></div>
  <div class="absolute inset-0 bg-black/40"></div>

  <!-- Content -->
  <div class="relative z-10 text-center px-6 md:px-12">
    <h1 class="text-4xl md:text-6xl font-extrabold drop-shadow-lg">
      📚 Manajemen Data Buku
    </h1>
    <p class="mt-4 text-lg md:text-2xl max-w-2xl mx-auto text-gray-200">
      Tenang aja, semua koleksi bukumu bisa diatur rapi, aman, dan gampang dicari ✨
    </p>

    <!-- Buttons -->
    <div class="mt-8 flex flex-wrap gap-4 justify-center">
      <a href="/books" 
         class="px-6 py-3 bg-white text-indigo-700 font-semibold rounded-2xl shadow-md hover:bg-indigo-100 transition">
        🚀 Mulai Kelola
      </a>
    </div>
  </div>

  <!-- Floating shapes -->
  <div class="absolute top-10 left-10 animate-bounce text-4xl">📖</div>
  <div class="absolute bottom-10 right-10 animate-pulse text-5xl">✨</div>
</section>
</body>
</html>

