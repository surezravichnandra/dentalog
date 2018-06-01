<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Laracasts\Flash\Flash;
use App\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $service=Service::all();
        return view('admin.master.services.service',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service=new Service;
        $service->services=$request->service;
        $service->cost=$request->cost;
        $service->save();
        return redirect('admin/addServices')->with('success','Successfully Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id=decrypt($id);
        $service=Service::all();
        $editservice = Service::where('id', $id)->first();      
        return view('admin.master.services.editservice',compact('editservice','service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->services=$request->service;
        $service->cost=$request->cost;
        $service->save();
        return redirect('admin/addServices')->with('success','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);       
        $service->delete();
        session(['success' => 'Successfully Deleted ..']);
    }
}
