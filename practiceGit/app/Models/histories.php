<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class histories extends Model
{
    protected $fillable = ['history_id', 'FK_user_history', 'remarks'];
}
