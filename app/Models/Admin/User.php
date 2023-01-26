<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'ms_User';
    protected $primaryKey = 'id_User';
    protected $fillable = ['chUsername', 'chEmail', 'chEmployeeCode', 'chFirstName', 'chMiddleName', 'chLastName', 'vbAvatar', 'chCountry', 'chLanguage', 'chCurrency', 'chPhoneNo', 'loActive'];
    protected $hidden = ['chPassword', 'AIDX'];
    protected $guards = ['daCreateDate', 'daUpdateDate'];

    //? set custom password field
    public function getAuthPassword() {
        return $this->chPassword;
    }
}
