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

    public function filter(Request $request){
        $ch_ag = $request->ch_ag; 
        $bu =(empty($request->bu) || $request->bu === '') ? 'NULL' : $request->bu ;
        $dept = (empty($request->dept) || $request->dept === '') ? 'NULL' : $request->dept ;
        $product_group = (empty($request->product_group) || $request->product_group === '') ? 'NULL' : $request->product_group ;
        $product = (empty($request->product) || $request->product === '') ? 'NULL' : $request->product ;
        $country =  (empty($request->country) || $request->country === '') ? 'NULL' : $request->country ;
        $company = (empty($request->company) || $request->company === '') ? 'NULL' : $request->company ;
        $location = NULL;

        // $turnover = DB::select('EXEC SP_Turnover_YTD(?,?,?,?,?,?)', array($bu,$dept,$product_group, $product, $country, $company));

        // $turnOverYTD = DB::select("EXEC [SP_Turnover_YTD] NULL,NULL,NULL,NULL,NULL,NULL");
        // $turnOverMTD = DB::select("EXEC [dbo].[SP_Turnover_MTD] NULL,NULL,NULL,NULL,NULL,NULL");
        // $turnOverBudgetSales = DB::select("EXEC [dbo].[SP_Turnover] NULL,NULL,NULL,NULL,NULL,NULL");
        // $grossProfitYTD = DB::select("EXEC [SP_GP_YTD] NULL,NULL,NULL,NULL,NULL,NULL");
        // $grossProfitMTD = DB::select("EXEC [SP_GP_MTD] NULL,NULL,NULL,NULL,NULL,NULL");
        // $grossProfitMarginYTD = DB::select("EXEC [SP_GP_MARGIN_YTD] NULL,NULL,NULL,NULL,NULL,NULL");
        // $grossProfitMarginMTD = DB::select("EXEC [SP_GP_MARGIN_MTD] NULL,NULL,NULL,NULL,NULL,NULL");
        // $op3YTD = DB::select("EXEC [SP_OP3_YTD] NULL,NULL,NULL,NULL,NULL,NULL");
        // $op3MTD = DB::select("EXEC [SP_OP3_MTD] NULL,NULL,NULL,NULL,NULL,NULL");
        // $op3MarginYTD = DB::select("EXEC [SP_OP3_MARGIN_YTD] NULL,NULL,NULL,NULL,NULL,NULL");
        // $op3MarginMTD = DB::select("EXEC [SP_OP3_MARGIN_MTD] NULL,NULL,NULL,NULL,NULL,NULL");

        $turnOverYTD = DB::select("EXEC [SP_Turnover_YTD] '$bu','$dept','$product_group','$product','$country','$company'");
        $turnOverBudgetSales = DB::select("EXEC [dbo].[SP_Turnover] '$bu','$dept','$product_group','$product','$country','$company'");
        $turnOverMTD = DB::select("EXEC [SP_Turnover_MTD] '$bu','$dept','$product_group','$product','$country','$company'");
        $grossProfitYTD = DB::select("EXEC [SP_GP_YTD] '$bu','$dept','$product_group','$product','$country','$company'");
        $grossProfitMTD = DB::select("EXEC [SP_GP_MTD] '$bu','$dept','$product_group','$product','$country','$company'");
        $grossProfitMarginYTD = DB::select("EXEC [SP_GP_MARGIN_YTD] '$bu','$dept','$product_group','$product','$country','$company'");
        $grossProfitMarginMTD = DB::select("EXEC [SP_GP_MARGIN_MTD] '$bu','$dept','$product_group','$product','$country','$company'");
        $op3YTD = DB::select("EXEC [SP_OP3_YTD] '$bu','$dept','$product_group','$product','$country','$company'");
        $op3MTD = DB::select("EXEC [SP_OP3_MTD] '$bu','$dept','$product_group','$product','$country','$company'");
        $op3MarginYTD = DB::select("EXEC [SP_OP3_MARGIN_YTD] '$bu','$dept','$product_group','$product','$country','$company'");
        $op3MarginMTD = DB::select("EXEC [SP_OP3_MARGIN_MTD] '$bu','$dept','$product_group','$product','$country','$company'");
        
        $data = array(
            'turnOverYTD' => $turnOverYTD,
            'turnOverMTD' => $turnOverMTD,
            'turnOverBudgetSales' => $turnOverBudgetSales,
            'grossProfitYTD' => $grossProfitYTD,
            'grossProfitMTD' => $grossProfitMTD,
            'grossProfitMarginYTD' => $grossProfitMarginYTD,
            'grossProfitMarginMTD' => $grossProfitMarginMTD,
            'op3YTD' => $op3YTD,
            'op3MTD' => $op3MTD,
            'op3MarginYTD' => $op3MarginYTD,
            'op3MarginMTD' => $op3MarginMTD,
        );
        
        return response()->json($data);
    }
}
