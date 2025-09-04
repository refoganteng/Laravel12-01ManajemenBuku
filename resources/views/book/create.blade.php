<x-layout>
    <section class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold text-gray-700 mb-4">Add Book</h2>

        <form action="{{ route('books.store') }}" method="post" class="space-y-4">
            @csrf

            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Book Title</label>
                <input type="text" name="title" id="title"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 
                           focus:border-indigo-500 text-sm">
            </div>

            <!-- Slug (auto) -->
            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">Slug (Auto Generated)</label>
                <input type="text" name="slug" id="slug"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 bg-gray-100 text-gray-500 text-sm"
                    readonly>
            </div>

            <!-- Category -->
            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                <select name="category_id" id="category_id"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 
                           focus:border-indigo-500 text-sm">
                    <option value="">-- Select Category --</option>
                    @foreach ($allCategory as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Author -->
            <div>
                <label for="author_id" class="block text-sm font-medium text-gray-700 mb-1">Author</label>
                <select name="author_id" id="author_id"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 
                           focus:border-indigo-500 text-sm">
                    <option value="">-- Select Author --</option>
                    @foreach ($allAuthor as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Publisher -->
            <div>
                <label for="publisher_id" class="block text-sm font-medium text-gray-700 mb-1">Publisher</label>
                <select name="publisher_id" id="publisher_id"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 
                           focus:border-indigo-500 text-sm">
                    <option value="">-- Select Publisher --</option>
                    @foreach ($allPublisher as $publisher)
                        <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Year Published -->
            <div>
                <label for="year_published" class="block text-sm font-medium text-gray-700 mb-1">Year Published</label>
                <input type="number" name="year_published" id="year_published"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 
                           focus:border-indigo-500 text-sm" min="1900" max="2100">
            </div>

            <!-- Submit -->
            <div>
                <button type="submit"
                    class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 transition font-medium cursor-pointer">
                    Submit
                </button>
            </div>
        </form>
    </section>

    <!-- Script auto generate slug -->
    <script src="{{ asset('js/slugify-forbook.js') }}"></script>
</x-layout>
