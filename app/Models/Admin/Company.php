<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'ms_Company';
    protected $primaryKey = 'id_Company';
    protected $fillable = ['chCompanyCode', 'chCompanyName', 'chRefCode', 'AIDX'];
    protected $guards = ['daCreateDate'];
}
