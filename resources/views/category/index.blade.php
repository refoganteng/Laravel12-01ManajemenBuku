<x-layout>
   <section>
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-2xl font-bold text-gray-700">Category</h3>
            <a href="{{ route('categories.create') }}"
                class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
                Add Category
            </a>
        </div>
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="w-full border-collapse">
                <thead class="bg-indigo-600 text-white">
                    <tr>
                        <th class="px-4 py-3 text-left">No.</th>
                        <th class="px-4 py-3 text-left">Name</th>
                        <th class="px-4 py-3 text-left">Description</th>
                        <th class="px-4 py-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allCategory as $key => $category)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">{{ $key+1 }}</td>
                        <td class="px-4 py-3 font-medium">{{ $category->name }}</td>
                        <td class="px-4 py-3 text-gray-600">{{ $category->description }}</td>
                        <td class="px-4 py-3 text-center">
                            <div class="flex gap-2">
                                <a href="{{ route('categories.show', $category->id) }}"
                                    class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition">
                                    Detail
                                </a>
                                <a href="{{ route('categories.edit', $category->id) }}"
                                    class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition">
                                    Edit
                                </a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?')" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition cursor-pointer">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section> 
</x-layout>