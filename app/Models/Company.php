<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
    protected $fillable = [
        'name',
        'email',
        'address',
        'state_id',
        'phone',
    ];

       //Relationship with state Table__//
       public function state(){
        return $this->belongsTo(State::class, 'state_id', 'id');
    }

}
