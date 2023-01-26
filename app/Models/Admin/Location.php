<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'ms_Location';
    protected $primaryKey = 'id_Location';
    protected $fillable = ['chDivisionName', 'chSalesOfficeMedium', 'AIDX'];
    protected $guards = ['daCreateDate'];
}
