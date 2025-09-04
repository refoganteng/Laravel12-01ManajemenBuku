<x-layout>
    <section class="max-w-full mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold text-gray-700 mb-4">Add Category</h2>
        
        <form action="{{ route('categories.store') }}" method="post" class="space-y-4">
            @csrf
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                    Category Name
                </label>
                <input type="text" name="name" id="name"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 
                           focus:border-indigo-500 text-sm">
            </div>

            <!-- Slug (auto) -->
            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">
                    Slug (Auto Generated)
                </label>
                <input type="text" name="slug" id="slug"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 bg-gray-100 text-gray-500 text-sm"
                    readonly>
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">
                    Description
                </label>
                <input type="text" name="description" id="description"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 
                           focus:border-indigo-500 text-sm">
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

    <!-- Script untuk auto generate slug -->
    <script src="{{ asset('js/slugify.js') }}"></script>
</x-layout>
