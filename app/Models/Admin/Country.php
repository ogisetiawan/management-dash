<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'ms_Country';
    protected $primaryKey = 'id_Country';
    protected $fillable = ['chCountryCode', 'chCountryName', 'chRefCode', 'AIDX'];
    protected $guards = ['daCreateDate'];
}
