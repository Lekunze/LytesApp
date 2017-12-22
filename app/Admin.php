<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    //
    protected $table = 'admin';

    protected $guard = "admin";

    protected $fillable = ['username', 'password'];

    protected $hidden = ['password', 'remember_token'];

}
