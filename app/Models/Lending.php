<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lending extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * * This allows your LendingController to save these fields 
     * into the MySQL database.
     */
    protected $fillable = [
        'book_id',
        'member_id',
        'due_date',
    ];
}