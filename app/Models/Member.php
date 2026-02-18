<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // These fields match the columns you created in your migration
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];
}
