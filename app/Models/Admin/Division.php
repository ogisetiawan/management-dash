<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $table = 'ms_Division';
    protected $primaryKey = 'id_Division';
    protected $fillable = ['chDivisionCode', 'chDivisionName', 'chRefCode', 'AIDX'];
    protected $guards = ['daCreateDate'];
}
