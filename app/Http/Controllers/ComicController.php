<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view("index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //validazione
        $request->validate([
        "title"=>"required|string|max:50|unique:comics,title,{$comic->id}",
        "description"=>"required|string|max:1500",
        "series"=>"required|string|max:60",
        "thumb"=>"nullable|url",
        "sale_date"=>"required|date",
        "type"=>"required|string|max:40",
        "price"=>"required|numeric"
        ]);
        $newComic = Comic::create($data);
            
        

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Comic::find($id);
        return view("show", compact("item"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("edit", compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        
        $request->validate([
            "title"=>"required|string|max:50|unique:comics,title,{$comic->id}",
            "description"=>"required|string|max:1500",
            "series"=>"required|string|max:60",
            "thumb"=>"nullable|url",
            "sale_date"=>"required|date",
            "type"=>"required|string|max:40",
            "price"=>"required|numeric"
            ]);
            
        $comic->update($data);
        
        

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
