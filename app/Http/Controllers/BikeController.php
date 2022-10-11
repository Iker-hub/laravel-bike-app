<?php

namespace App\Http\Controllers;

use App\Http\Requests\BikeEditRequest;
use App\Models\Bike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BikeController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //$bikes = Bike::all()->sortBy('nombre');
        return view('bike.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('bike.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        return redirect('bike')->with('message', 'Añadido');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show($id) {//(Bike $bike) {
        return view('bike.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {//(Bike $bike) {
        return view('bike.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {//Bike $bike) {
        return redirect('bike')->with('message', 'Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {//(Bike $bike) {
        return redirect('bike')->with('message', 'Borrado');
    }
}