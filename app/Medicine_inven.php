<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  Medicine_inven extends Model
{
    public function patient_detail()
	{
		return $this->belongsTo('App\Patient','patient_id','patient_code');
	} 

	public function stock()
	{
		return $this->belongsTo('App\Stock','stock_id','id');
	}
	public function payment()
	{
		return $this->belongsTo('App\Medicine_payment','bill_number','bill_number');
	}
}
