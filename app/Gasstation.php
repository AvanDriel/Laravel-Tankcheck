<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasstation extends Model
{
    //
    protected $fillable = ['name', 'adress', 'gasprice', 'latitude', 'longitude', 'created_by', 'updated_by' ];
}
