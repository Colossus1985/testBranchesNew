<?php

namespace App\Http\Controllers;

use App\Models\auteurs;
use App\Models\Livres;
use Illuminate\Http\Request;


class livreControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout/main');
    }

    public function getAll()
    {
        $title = 'Liste of Books';
        // $data['arrayBooks'] = Livres::orderBy('id','desc')->paginate(1000);


        // $arrayBooks['arrayBooks'] = Auteurs::rightJoin('livres', 'auteurs.id', '=', 'livres.id_auteur')
        //         ->select('*')
        //         ->get();

        $arrayBooks = Livres::with('auteurs')->get();
        return view('pages/listLivres', ['arrayBooks' => $arrayBooks, 'title' => $title]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBook()
    {
        $title = 'Book Creation in Data Base';
        return view('pages.createBook', ['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required', 
            'firstName' => 'required',
            'lastName' => 'required'
        ]);

        $auteur = new auteurs();
        $auteur -> firstName = $validate['firstName'];
        $auteur -> lastName = $validate ['lastName'];
        $auteur -> save();
        
// dd($auteur);
        $book = new Livres();
        $book -> title = $request -> title;
        $book -> save();

        // $auteur -> new Auteurs;
        // $auteur -> firstName = $request -> firstname;
        // $auteur -> lastName = $request -> lastName;
        // $auteur -> save();

        return redirect()->route('livres')
            ->with('success', 'Book is added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
