<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Admin\DataMapping;
use Illuminate\Http\Request;
use DataTables;

class DataMappingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master_data/data_mapping');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Datatables::of(DataMapping::query())->make(true);
    }

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
     * @param  \App\Models\Admin\DataMapping  $dataMapping
     * @return \Illuminate\Http\Response
     */
    public function show(DataMapping $dataMapping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\DataMapping  $dataMapping
     * @return \Illuminate\Http\Response
     */
    public function edit(DataMapping $dataMapping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\DataMapping  $dataMapping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataMapping $dataMapping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\DataMapping  $dataMapping
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataMapping $dataMapping)
    {
        //
    }
}
