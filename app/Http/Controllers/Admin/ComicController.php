<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateComicRequest;
use App\Http\Requests\StoreComicRequest;
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

    public function create()
    {
        return view("comics.create");
    }

    public function store(Request $request)
    {
        $data = $request->validated();

        if (isset($data['sale_date'])) {
            $data['sale_date'] = date('Y-m-d', strtotime($data['sale_date']));
        }

        $comic = Comic::create($data);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(UpdateComicRequest $request, Comic $comic)
    {
        // Ottieni tutti i dati dal request
        $data = $request->validated();

        // Aggiorna il fumetto con i dati validati
        $comic->update($data);

        // Reindirizza alla vista del fumetto aggiornato
        return redirect()->route('comics.index');
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}