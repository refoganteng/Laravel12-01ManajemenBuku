<x-layout>
    <section class="max-w-full mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold text-gray-700 mb-4">Edit Author</h2>

        <form action="{{ route('authors.update', $author->id) }}" method="post" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                    Name
                </label>
                <input type="text" name="name" id="name"
                    class="w-full border border-gray-300 rounded-md px-3 py-2
                           focus:outline-none focus:ring-2 focus:ring-indigo-500
                           focus:border-indigo-500 text-sm" value="{{$author->name}}">
            </div>

            <!-- Username -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">
                    Username
                </label>
                <input type="text" name="username" id="username"
                    class="w-full border border-gray-300 rounded-md px-3 py-2
                           focus:outline-none focus:ring-2 focus:ring-indigo-500
                           focus:border-indigo-500 text-sm" value="{{$author->username}}">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                    Email
                </label>
                <input type="email" name="email" id="email"
                    class="w-full border border-gray-300 rounded-md px-3 py-2
                           focus:outline-none focus:ring-2 focus:ring-indigo-500
                           focus:border-indigo-500 text-sm" value="{{$author->email}}">
            </div>

            

            <!-- Submit -->
            <div>
                <button type="submit"
                    class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 transition font-medium cursor-pointer">
                    Update
                </button>
            </div>
        </form>
    </section>

   
</x-layout>
