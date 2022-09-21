<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Celular;
class CelularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $celulares = Celular::all();
        return view('index', compact('celulares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'model' => 'required',
            'imgUrl' => 'required',
            'price' => 'required',
            'description' => 'required|max:255',
        ]);
        $celular = new Celular();
        $celular->name = $request->name;
        $celular->model = $request->model;
        $celular->imgUrl = $request->imgUrl;
        $celular->price = $request->price;
        $celular->description = $request->description;
        $celular->save();
        return back();
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
        $celular = Celular::find($id);
        return view('edit', compact('celular'));
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
        $validated = $request->validate([
            'name' => 'required',
            'model' => 'required',
            'imgUrl' => 'required',
            'price' => 'required',
            'description' => 'required|max:255',
        ]);
        $celular = Celular::find($id);
        $celular->name = $request->name;
        $celular->model = $request->model;
        $celular->imgUrl = $request->imgUrl;
        $celular->price = $request->price;
        $celular->description = $request->description;
        $celular->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $celular = Celular::find($id);
        $celular->delete();
        return back()->with(['success' => 'Celular eliminado correctamente']);
    }
}
