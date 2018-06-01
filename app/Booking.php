<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{

	public function doctor()
	{
		return $this->belongsTo('App\Doctor','doctor_id','id');
	}  
	public function patient_detail()
	{
		return $this->belongsTo('App\Patient','p_id','id');
	} 

	public function treatment()
	{
		return $this->belongsTo('App\treat_inven','id','b_id');
	}
}