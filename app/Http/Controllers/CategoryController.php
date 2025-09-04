<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allCategory = Category::all(); //Model Category sudah harus ada
        return view('category.index', compact('allCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi
        $validated_data = $request->validate([
            'name' => 'required|max:15|unique:categories,name',
            'description' => 'required|max:100',
        ]);

        //simpan
        Category::create($validated_data);

        //redirect ke category.index
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $book)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $book)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $book)
    {
        //validasi
        $validated_data = $request->validate([
            'name' => 'required|max:15|unique:categories,name,' . $book->id,
            'description' => 'required|max:100',
        ]);

        //update
        $book->update($validated_data);

        //redirect ke category.index
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $book)
    {
        //hapus
        $book->delete();

        //redirect ke category.index
        return redirect()->route('categories.index');
    }
}
