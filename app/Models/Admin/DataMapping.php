<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class DataMapping extends Model
{
    protected $table = 'ms_DataMapping';
    protected $primaryKey = 'id_DataMapping';
    protected $fillable = ['chDataMappingName', 'id_Location', 'id_ProfitCtr', 'id_Division', 'id_Department', 'id_Country', 'id_Type', 'id_Company', 'id_Region', 'id_State', 'chControllingArea', 'chRemarks'];
}