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
        $data =[
            'comics' => $comics
        ];
        
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //valido i dati
        $request->validate($this->getValidationRules());
        //*************** */
        $form_data = $request->all();
        //salvo nel database
        $new_comic = new Comic();

        $new_comic->title = $form_data['title'];
        $new_comic->description = $form_data['description'];
        $new_comic->thumb = $form_data['thumb'];
        $new_comic->price = $form_data['price'];
        $new_comic->series = $form_data['series'];
        $new_comic->sale_date = $form_data['sale_date'];
        $new_comic->type = $form_data['type'];


        $new_comic->save();
       return redirect()->route('comics.show', ['comic' => $new_comic->id]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::findOrFail($id);
        $data =[
            'comics' => $comics
        ];
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics = Comic::findOrFail($id);
        $data = [
            'comics' => $comics
        ];
       return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->getValidationRules());

        $comics_data = $request->all();
        $comics_update = Comic::find($id);
        $comics_update->update($comics_data);

        return redirect()->route('comics.show', $comics_update->id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic_delete = Comic::findOrFail($id);
        $comic_delete->delete();

        return redirect()->route('comics.index');
    }
    private function getValidationRules(){
        return [
            'title' => 'required|max:50',
            'description ' => 'max:6000',
            'thumb' => 'required|max:6000',
            'price' => 'required|max:10',
            'series' => 'required|max:50',
            'sale_date' => 'required|max:20'
        ];
    }
}
