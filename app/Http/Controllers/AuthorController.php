<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allAuthor = User::all(); //Model author sudah harus ada
        return view('author.index', compact('allAuthor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi
        $validated_data = $request->validate([
            'name' => 'required|max:35|unique:users,name',
            'username' => 'required|max:35|unique:users,username',
            'email' => 'required|max:100',
            'password' => 'required|max:20',
        ]);

        //simpan
        User::create($validated_data);

        //redirect ke author.index
        return redirect()->route('authors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $author)
    {
        return view('author.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $author)
    {
        return view('author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $author)
    {
        //validasi
        $validated_data = $request->validate([
            'name' => 'required|max:15|unique:users,name,' . $author->id,
            'username' => 'required|max:35|unique:users,username,' . $author->id,
            'email' => 'required|max:100',
        ]);


        //update
        $author->update($validated_data);

        //redirect ke author.index
        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $author)
    {
        //hapus
        $author->delete();

        //redirect ke author.index
        return redirect()->route('authors.index');
    }
}
