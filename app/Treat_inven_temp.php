<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Treat_inven_temp extends Model
{
// use SoftDeletes;
// protected $dates = ['deleted_at'];


	public function service()
	{
		return $this->belongsTo('App\Service','treat_id','id');
	}
    
}