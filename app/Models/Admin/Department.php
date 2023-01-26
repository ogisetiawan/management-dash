<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'ms_Department';
    protected $primaryKey = 'id_Department';
    protected $fillable = ['chDepartmentCode', 'chDepartmentName', 'chRefCode', 'AIDX', 'id_Devision'];
    protected $guards = ['daCreateDate'];
}
