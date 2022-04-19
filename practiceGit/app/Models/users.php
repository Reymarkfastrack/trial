<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable = ['firstname', 'middlename', 'lastname', 'address', 'age', 'gender'];
    protected $primaryKey = 'user_id';


    protected function scopeGetusers($query)
    {

    }
}
