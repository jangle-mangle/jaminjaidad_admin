<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Vendor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'approved',
        'mobile',
        'email',
        'address',
        'role',
        'category',
        'profile_pic',
        'loc_latitude',
        'loc_longitude',
        'loc_address',
        'owner_name',
        'owner_mobile',
        'email_verified_at',
        'remember_token',
        'device_token',
        'deleted_at',
        'is_active',
    ];
}
