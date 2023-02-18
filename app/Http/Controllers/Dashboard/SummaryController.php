<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Summary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyTypes = DB::table('ms_CompanyType')->get();
        $departments = DB::table('ms_Department')->get();
        $BUs = DB::table('ms_Division')->get();
        $countries = DB::table('ms_Country')->get();
        $companies = DB::table('ms_Company')->get();
        $locations = DB::table('ms_Location')->get();
        $product_groups = DB::table('ms_Hierarchy')->where(DB::raw('LEN(chProdHierarchy)'), '=', 5)->get();
        $products = DB::table('ms_Hierarchy')->where(DB::raw('LEN(chProdHierarchy)'), '=', 10)->get();
        
        return view('dashboard.summary')
            ->with(compact('companyTypes'))
            ->with(compact('departments'))
            ->with(compact('BUs'))
            ->with(compact('countries'))
            ->with(compact('product_groups'))
            ->with(compact('products'))
            ->with(compact('companies'))
            ->with(compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Dashboard\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function show(Summary $summary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function edit(Summary $summary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Summary $summary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Summary $summary)
    {
        //
    }
}
