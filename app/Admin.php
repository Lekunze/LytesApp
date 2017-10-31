<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    //
    public $table = 'admins';

    protected $guard = "admins";

    protected $fillable = ['username', 'password'];

    protected $hidden = ['password', 'remember_token'];

}
