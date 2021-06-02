<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    static $rules = [
        'title' => 'required',
        'description' => 'required',
        // 'picture' => 'required',
        'date' => 'required',
    ];

    protected $fillable = ['capacity', 'isFavorite'];


    use HasFactory;
}
