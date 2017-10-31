<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Businesses extends Authenticatable
{
    //
    public $table = 'businesses';

    protected $guard = 'businesses';

    protected $fillable = ['business_owner_last_name', 'business_owner_given_names', 'date_of_birth', 'nationality', 'id_type', 'id_number', 'phone_number',
        'phone_number_2', 'business_name', 'country', 'region', 'area', 'address','business_name', 'business_number',
        'business_number_2', 'delivery_services', 'industry', 'email', 'profile_picture', 'id_picture', 'business_logo', 'cover_image_1',
        'cover_image_2', 'cover_image_3'];

}
