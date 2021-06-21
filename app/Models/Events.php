<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class Events extends Model
{
    static $rules = [
        'title' => 'required',
        'description' => 'required',
        'picture',
        'date' => 'required',

    ];

    protected $fillable = ['capacity', 'isFavorite', 'title', 'description', 'date'];


    use HasFactory;

    public function bookedInUsers(){
        return $this->belongsToMany(User::class,'events_user');
    }

    public function isSubcribed($id){

    if($this->bookedInUsers->find($id)){
       return true;
     }
       return false;

    }
}
