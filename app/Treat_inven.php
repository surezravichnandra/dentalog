<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treat_inven extends Model
{
    public function patient_detail()
	{
		return $this->belongsTo('App\Patient','patient_id','patient_code');
	} 

	public function service()
	{
		return $this->belongsTo('App\Service','treat_id','id');
	}

	public function payment()
	{
		return $this->belongsTo('App\Treat_payment','bill_number','bill_number');
	}
}
