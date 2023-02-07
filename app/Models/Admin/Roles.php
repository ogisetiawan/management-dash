<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'ms_Role';
    protected $primaryKey = 'id_Role';
    protected $fillable = ['chRoleName', 'chRoleType', 'Remarks', 'AIDX'];
    // protected $guards = ['daCreateDate'];
}
