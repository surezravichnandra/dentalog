<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Session;

class AjaxController extends Controller
{
    function categoryautocomplete(){
	    $term = $request->term;

	    $queries = DB::table('New_Themes') //Your table name
	        ->where('TagName', 'like', '%'.$term.'%') //Your selected row
	        ->take(6)->get();

	    foreach ($queries as $query)
	    {
	        $results[] = ['id' => $query->id, 'value' => $query->TagName]; //you can take custom values as you want
	    }
		return response()->json($results);    
	}
}
