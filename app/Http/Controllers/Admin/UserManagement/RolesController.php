<?php

namespace App\Http\Controllers\Admin\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\Admin\Roles;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\DB; /// penggunaan librarty untuk query builder

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user_management/roles');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = DB::select(DB::raw(" 
        SELECT T0.id_Role, T0.chRoleName, T0.chRoleType,
            --COMPANY_TYPE
            ISNULL(SUBSTRING((SELECT ', '+CONVERT(NVARCHAR(100),TX.chDisplay,100) AS [text()] FROM ms_RoleDataAccess TX WHERE id_Data=9
            AND TX.id_Role=T0.id_Role  ORDER BY TX.chDisplay FOR XML PATH ('') ), 2, 1000),'')'COMPANY_TYPE',
            --COMPANY
            ISNULL(SUBSTRING((SELECT ', '+CONVERT(NVARCHAR(100),TX.chDisplay,100) AS [text()] FROM ms_RoleDataAccess TX WHERE id_Data=1
            AND TX.id_Role=T0.id_Role  ORDER BY TX.chDisplay FOR XML PATH ('') ), 2, 1000),'')'COMPANY',
            --DIVISION
            ISNULL(SUBSTRING((SELECT ', '+CONVERT(NVARCHAR(100),TX.chDisplay,100) AS [text()] FROM ms_RoleDataAccess TX WHERE id_Data=4
            AND TX.id_Role=T0.id_Role  ORDER BY TX.chDisplay FOR XML PATH ('') ), 2, 1000),'')'DIVISION',
            --DEPARTMENT
            ISNULL(SUBSTRING((SELECT ', '+CONVERT(NVARCHAR(100),TX.chDisplay,100) AS [text()] FROM ms_RoleDataAccess TX WHERE id_Data=3
            AND TX.id_Role=T0.id_Role  ORDER BY TX.chDisplay FOR XML PATH ('') ), 2, 1000),'')'DEPARTMENT',
            --COUNTRY
            ISNULL(SUBSTRING((SELECT ', '+CONVERT(NVARCHAR(100),TX.chDisplay,100) AS [text()] FROM ms_RoleDataAccess TX WHERE id_Data=2
            AND TX.id_Role=T0.id_Role  ORDER BY TX.chDisplay FOR XML PATH ('') ), 2, 1000),'')'COUNTRY',
            --REGION
            ISNULL(SUBSTRING((SELECT ', '+CONVERT(NVARCHAR(100),TX.chDisplay,100) AS [text()] FROM ms_RoleDataAccess TX WHERE id_Data=7
            AND TX.id_Role=T0.id_Role  ORDER BY TX.chDisplay FOR XML PATH ('') ), 2, 1000),'')'REGION',
            --STATE
            ISNULL(SUBSTRING((SELECT ', '+CONVERT(NVARCHAR(100),TX.chDisplay,100) AS [text()] FROM ms_RoleDataAccess TX WHERE id_Data=8
            AND TX.id_Role=T0.id_Role  ORDER BY TX.chDisplay FOR XML PATH ('') ), 2, 1000),'')'STATE',
            --LOCATION
            ISNULL(SUBSTRING((SELECT ', '+CONVERT(NVARCHAR(100),TX.chDisplay,100) AS [text()] FROM ms_RoleDataAccess TX WHERE id_Data=5
            AND TX.id_Role=T0.id_Role  ORDER BY TX.chDisplay FOR XML PATH ('') ), 2, 1000),'')'LOCATION'
            FROM ms_Role T0 WHERE id_Role=1
        "));
        return Datatables::of($roles)->toJson();
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
     * @param  \App\Models\Admin\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(Roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit(Roles $roles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roles $roles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roles $roles)
    {
        //
    }
}
