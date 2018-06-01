<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function booking()
	{
		return $this->belongsTo('App\Booking','id','p_id');
	}  
}
