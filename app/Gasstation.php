<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasstation extends Model
{

	public function user()
    {
        return $this->belongsTo('App\User');
    }
    //
    protected $fillable = ['name', 'adress', 'gasprice', 'latitude', 'longitude', 'user_id' ];
}
