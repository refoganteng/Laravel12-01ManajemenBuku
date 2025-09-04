<x-layout>
    <section>
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-2xl font-bold text-gray-700">Book</h3>
            <a href="{{ route('categories.create') }}"
                class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
                Add Book
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($allBook as $key => $book)
            <div class="bg-white shadow-lg rounded-lg p-5 hover:shadow-xl transition">
                
                <!-- Category badge -->
                <div class="mb-3 flex justify-start">
                    <span class="bg-indigo-100 text-indigo-700 text-xs font-semibold px-3 py-1 rounded-md shadow-sm">
                        {{ $book->category->name }}
                    </span>
                </div>

                <h4 class="text-lg font-semibold text-gray-800 mb-2">
                    {{ $book->title }}
                </h4>
                <p class="text-gray-600 text-sm mb-4">
                    by {{ $book->author->name }}, {{ $book->year_published }}
                </p>
                
                <div class="flex flex-wrap gap-2">
                    <a href="{{ route('books.show', $book->id) }}"
                        class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition text-sm">
                        Detail
                    </a>
                    <a href="{{ route('books.edit', $book->id) }}"
                        class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition text-sm">
                        Edit
                    </a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST"
                        onsubmit="return confirm('Yakin hapus data ini?')" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition text-sm cursor-pointer">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-layout>
