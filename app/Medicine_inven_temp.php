<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  Medicine_inven_temp extends Model
{
      protected $table="medicine_inven_temps";

      public function stock()
	{
		return $this->belongsTo('App\Stock','stock_id','id');
	}
}
