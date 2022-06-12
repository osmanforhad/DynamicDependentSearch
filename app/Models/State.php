<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = 'states';
    protected $fillable = [
        'name',
        'country_id',
    ];

    //Relationship with country Table__//
    public function country(){
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

      //Relationship with company Table__//
      public function companies(){
        return $this->hasMany(Company::class);
    }

}
