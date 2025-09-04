<x-layout>
    <section class="max-w-full mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-700 mb-4">Book Detail</h2>

        <div class="space-y-4">
            <!-- Title -->
            <div>
                <h3 class="text-sm font-medium text-gray-500">Title</h3>
                <p class="text-lg font-semibold text-gray-800">{{ $book->title }}</p>
            </div>

            <!-- Slug -->
            <div>
                <h3 class="text-sm font-medium text-gray-500">Slug</h3>
                <p class="text-gray-700">{{ $book->slug }}</p>
            </div>

            <!-- Category -->
            <div>
                <h3 class="text-sm font-medium text-gray-500">Category</h3>
                <p class="text-gray-700">
                    {{ $book->category ? $book->category->name : '-' }}
                </p>
            </div>

            <!-- Author -->
            <div>
                <h3 class="text-sm font-medium text-gray-500">Author</h3>
                <p class="text-gray-700">
                    {{ $book->author ? $book->author->name : '-' }}
                </p>
            </div>

            <!-- Year Published -->
            <div>
                <h3 class="text-sm font-medium text-gray-500">Year Published</h3>
                <p class="text-gray-700">{{ $book->year_published }}</p>
            </div>

            <!-- Publisher -->
            <div>
                <h3 class="text-sm font-medium text-gray-500">Publisher</h3>
                <p class="text-gray-700">
                    {{ $book->publisher ? $book->publisher->name : '-' }}
                </p>
            </div>
        </div>

        <!-- Back + Edit -->
        <div class="mt-6 flex justify-between">
            <a href="{{ route('books.index') }}"
                class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 transition">
                Back
            </a>
            <a href="{{ route('books.edit', $book->id) }}"
                class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition">
                Edit
            </a>
        </div>
    </section>
</x-layout>
