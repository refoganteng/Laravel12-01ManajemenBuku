<x-layout>
    <section class="max-w-full mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-700 mb-4">Author Detail</h2>

        <div class="space-y-4">
            <!-- Name -->
            <div>
                <h3 class="text-sm font-medium text-gray-500">Name</h3>
                <p class="text-lg font-semibold text-gray-800">{{ $author->name }}</p>
            </div>

            <!-- Username -->
            <div>
                <h3 class="text-sm font-medium text-gray-500">Username</h3>
                <p class="text-gray-700">{{ $author->username }}</p>
            </div>

            <!-- Email -->
            <div>
                <h3 class="text-sm font-medium text-gray-500">Email</h3>
                <p class="text-gray-700">{{ $author->email }}</p>
            </div>

        </div>

        <!-- Back button -->
        <div class="mt-6 flex justify-between">
            <a href="{{ route('authors.index') }}"
                class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 transition">
                Back
            </a>
            <a href="{{ route('authors.edit', $author->id) }}"
                class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition">
                Edit
            </a>
        </div>
    </section>
</x-layout>
