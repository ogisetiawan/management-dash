<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ProfitCenter extends Model
{
    protected $table = 'ms_ProfitCtr';
    protected $primaryKey = 'id_ProfitCtr';
    protected $fillable = ['chProfitCtrCode', 'chShortDesc', 'chLongDesc', 'chRefCode', 'AIDX'];
    protected $guards = ['daCreateDate'];
}
