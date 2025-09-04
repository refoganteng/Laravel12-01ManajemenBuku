<nav class="bg-white shadow-md rounded-lg mb-5">
    <ul class="flex space-x-6 px-6 py-4 font-semibold text-gray-600">
        <li>
            <a href="/books"
                class="{{ request()->is('books*') 
                ? 'bg-gray-200 text-indigo-600 font-semibold px-3 py-2 rounded-lg' 
                : 'text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-lg' }}">
                Book
            </a>
        </li>
        <li>
            <a href="/categories"
                class="{{ request()->is('categories*') 
                ? 'bg-gray-200 text-indigo-600 font-semibold px-3 py-2 rounded-lg' 
                : 'text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-lg' }}">
                Category
            </a>
        </li>
        <li>
            <a href="/authors"
                class="{{ request()->is('authors*') 
                ? 'bg-gray-200 text-indigo-600 font-semibold px-3 py-2 rounded-lg' 
                : 'text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-lg' }}">
                Author
            </a>
        </li>
        <li>
            <a href="/publishers"
                class="{{ request()->is('publishers*') 
                ? 'bg-gray-200 text-indigo-600 font-semibold px-3 py-2 rounded-lg' 
                : 'text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-lg' }}">
                Publisher
            </a>
        </li>

    </ul>
</nav>