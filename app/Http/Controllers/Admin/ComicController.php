<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsArray = Comic::all();
        return view('comics.index', compact('comicsArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();


        if (isset($data['sale_date'])) {
            $data['sale_date'] = date('Y-m-d', strtotime($data['sale_date']));
        }


        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return redirect()->route('comics.show',['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}