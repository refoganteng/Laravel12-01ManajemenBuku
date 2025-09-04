<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPublisher = Publisher::all(); //Model Publisher sudah harus ada
        return view('publisher.index', compact('allPublisher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publisher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi
        $validated_data = $request->validate([
            'name' => 'required|max:35|unique:publishers,name',
            'slug' => 'required|max:35|unique:publishers,slug',
            'address' => 'required|max:100',
            'phone' => 'required|max:13',
        ]);

        //simpan
        Publisher::create($validated_data);

        //redirect ke Publisher.index
        return redirect()->route('publishers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        return view('publisher.show', compact('publisher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        return view('publisher.edit', compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publisher $publisher)
    {
        //validasi
        $validated_data = $request->validate([
            'name' => 'required|max:15|unique:publishers,name,' . $publisher->id,
            'slug' => 'required|max:35|unique:publishers,slug,' . $publisher->id,
            'address' => 'required|max:100',
            'phone' => 'required|max:13',
        ]);


        //update
        $publisher->update($validated_data);

        //redirect ke Publisher.index
        return redirect()->route('publishers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        //hapus
        $publisher->delete();

        //redirect ke Publisher.index
        return redirect()->route('publishers.index');
    }
}
