<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';
    protected $fillable = [
        'name',
    ];

       //Relationship with state Table__//
       public function states(){
        return $this->hasMany(State::class);
    }

}
