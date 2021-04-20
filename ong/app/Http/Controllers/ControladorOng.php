<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ong;

class ControladorOng extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ong = ong::all();
        return view('index', compact('ong'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crea');
    }
    public function store(Request $request)
    {
        $nouOng = $request->validate([
            'cif' => 'required|max:255',
            'nom' => 'required|max:255',
            'adreça' => 'required|max:255',
            'poblacio' => 'required|max:255',
            'comarca' => 'required|max:255',
            'tipusong' => 'required|max:255',
            'declaracio' => 'required|max:255',
            ]);
            $ong = ong::create($nouOng);
            return redirect('/ong')->with('completed', 'Ong creada!');
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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
            $ong = ong::findOrFail($id);
            return view('actualitza', compact('ong'));
    }
    public function update(Request $request, $id)
    {
            $dades = $request->validate([  
                'cif' => 'required|max:255',
                'nom' => 'required|max:255',
                'adreça' => 'required|max:255',
                'poblacio' => 'required|max:255',
                'comarca' => 'required|max:255',
                'tipusong' => 'required|max:255',
                'declaracio' => 'required|max:255',  
                        ]);  
            ong::whereId($id)->update($dades); 
            return redirect('/ong')->with('completed', 'Ong actualitzada');
        }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ong = ong::findOrFail($id);
        $ong->delete();

        return redirect('/ong')->with('completed', 'Ong esborrada');    }
}

