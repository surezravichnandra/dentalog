<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Stock;
use Session;
class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock=Stock::where('stocks.deleted_at','=',NULL)->get();
        return view('admin.master.medicines.stock',compact('stock'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $stock=new Stock;
        $stock->name=$request->name;
        $stock->category=$request->category;
        $stock->description=$request->description;
        $stock->qty=$request->qty;
        $stock->price=$request->price;
        $stock->tax=$request->gst;
        $stock->total=$request->total;
        $stock->purchased_date=$request->purchased_date;
        $stock->expiry_date=$request->expiry_date;
        $stock->save();
        return redirect('admin/addStock')->with('success','Successfully Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $id=decrypt($id);
        $stock=Stock::where('stocks.deleted_at','=',NULL)->get();
        $editstock = Stock::where('id', $id)->first();      
        return view('admin.master.medicines.editstock',compact('editstock','stock'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stock = Stock::find($id);
         $stock->name=$request->name;
        $stock->category=$request->category;
        $stock->description=$request->description;
        $stock->qty=$request->qty;
        $stock->price=$request->price;
        $stock->tax=$request->gst;
        $stock->total=$request->total;
        $stock->purchased_date=$request->purchased_date;
        $stock->expiry_date=$request->expiry_date;
        $stock->save();
        return redirect('admin/addStock')->with('success',' Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        $service = Stock::find($id);       
        $service->delete();
        session(['success' => 'Successfully Deleted ..']);
    }
}
