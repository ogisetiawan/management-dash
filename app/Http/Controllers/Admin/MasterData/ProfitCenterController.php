<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Admin\ProfitCenter;
use Illuminate\Http\Request;
use DataTables;

class ProfitCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('master_data/profit_center');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Datatables::of(ProfitCenter::query())->make(true);
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
     * @param  \App\Models\Admin\ProfitCenter  $profitCenter
     * @return \Illuminate\Http\Response
     */
    public function show(ProfitCenter $profitCenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\ProfitCenter  $profitCenter
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfitCenter $profitCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\ProfitCenter  $profitCenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfitCenter $profitCenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\ProfitCenter  $profitCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfitCenter $profitCenter)
    {
        //
    }
}
