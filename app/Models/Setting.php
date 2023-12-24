<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';
    protected $fillable = [
        'id',
        'app_name',
        'about',
        'email',
        'phone',
        'address',
        'twitter',
        'facebook',
        'instagram',
        'maps',
    ];
}
