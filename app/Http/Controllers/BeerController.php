<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Beer;

class BeerController extends Controller
{
    private $beerValidation = [
        'name' => 'required|max:40',
        'brand' => 'required|max:30',
        'price' => 'required|numeric',
        'alcohol_content' => 'required|numeric'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();
        return view('beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
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

        $request->validate($this->bookValidation);

        $beer = new Beer();
        // $beer->name = $data["name"];
        // $beer->brand = $data["brand"];
        // $beer->price = $data["price"];
        // $beer->alcohol_content = $data["alcohol_content"];
        // $beer->description = $data["description"];
        $beer->fill($data);
        $result = $beer->save();

        // $newBeer = Beer::orderBy('id', 'DESC')->first();

        // return redirect()->route('beers.show', $newBeer);
        return redirect()
            ->route('beers.index')
            ->with('message', "Birra '". $beer->name ."' aggiunta correttamente!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        // $beer = Beer::find($id);
        return view('beers.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('beers.edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $data = $request->all();

        $request->validate($this->bookValidation);

        $beer->update($data);

        return redirect()
            ->route('beers.index')
            ->with('message', "Birra '". $beer->name ."' aggiornata correttamente!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    // public function destroy($id)
    {
        // $beer = Beer::findOrFail($id);
        $name = $beer->name;
        $beer->delete();

        return redirect()
            ->route('beers.index')
            ->with('message', "Birra '". $name ."' eliminata correttamente!");
    }
}
