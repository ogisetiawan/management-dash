<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'ms_User';
    protected $primaryKey = 'id_User';
    protected $fillable = ['chUsername', 'chPassword', 'chEmail', 'chEmployeeCode', 'chFirstName', 'chMiddleName', 'chLastName', 'vbAvatar', 'chCountry', 'chLanguage', 'chCurrency', 'chPhoneNo', 'loActive', 'AIDX'];
    protected $guards = ['daCreateDate', 'daUpdateDate'];
}
