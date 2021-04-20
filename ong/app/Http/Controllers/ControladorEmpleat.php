<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleat;

class ControladorEmpleat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleat = Empleat::all();
        return view('indexempleats', compact('empleat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creaempleat');
    }
    public function store(Request $request)
    {
        $nouEmpleat = $request->validate([
            'nif' => 'required|max:255',
            'nom' => 'required|max:255',
            'cognoms' => 'required|max:255',
            'adreça' => 'required|max:255',
            'poblacio' => 'required|max:255',
            'comarca' => 'required|max:255',
            'telfix' => 'required|max:255',
            'telf' => 'required|max:255',
            'email' => 'required|max:255',
            'dataingres' => 'required|max:255',
            ]);
            $empleat = Empleat::create($nouEmpleat);
            return redirect('/empleats')->with('completed', 'Empleat creat!');
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
        $empleat = Empleat::findOrFail($id);
        return view('actualitzaempleats', compact('empleat'));
    }
    public function update(Request $request, $id)
    {
        $dades = $request->validate([
            'nif' => 'required|max:255',
            'nom' => 'required|max:255',
            'cognoms' => 'required|max:255',
            'adreça' => 'required|max:255',
            'poblacio' => 'required|max:255',
            'comarca' => 'required|max:255',
            'telfix' => 'required|max:255',
            'telf' => 'required|max:255',
            'email' => 'required|max:255',
            'dataingres' => 'required|max:255',
            ]);
            Empleat::whereId($id)->update($dades);
            return redirect('/empleats')->with('completed', 'Empleat actualitzat');
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
        $empleat = empleat::findOrFail($id);
        $empleat->delete();

        return redirect('/empleats')->with('completed', 'Empleat esborrat');    }
}

