<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allBook = Book::all(); //Model Publisher sudah harus ada
        return view('book.index', compact('allBook'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create', [
        'allCategory' => Category::all(),
        'allAuthor' => User::all(),
        'allPublisher' => Publisher::all(),
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:100|unique:books,title',
            'slug' => 'required|max:100|unique:books,slug',
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|exists:users,id',
            'publisher_id' => 'required|exists:publishers,id',
            'year_published' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Book added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('book.edit', [
            'book' => $book,
            'allCategory' => Category::all(),
            'allAuthor' => User::all(),
            'allPublisher' => Publisher::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|max:100|unique:books,title,' . $book->id,
            'slug' => 'required|max:100|unique:books,slug,' . $book->id,
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|exists:users,id',
            'publisher_id' => 'required|exists:publishers,id',
            'year_published' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Book updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
    }
}
