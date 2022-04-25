<?php

namespace App\Http\Controllers;

use App\Models\BigBike;
use Illuminate\Http\Request;

class BigBikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(BigBike::orderBy('model_name')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BigBike  $bigBike
     * @return \Illuminate\Http\Response
     */
    public function show(BigBike $bigBike)
    {
        return response()->json($bigBike);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BigBike  $bigBike
     * @return \Illuminate\Http\Response
     */
    public function edit(BigBike $bigBike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BigBike  $bigBike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BigBike $bigBike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BigBike  $bigBike
     * @return \Illuminate\Http\Response
     */
    public function destroy(BigBike $bigBike)
    {
        //
    }
}
