
@extends('admin.master.medicines.stock')
@section('name',$editstock->name)
@section('category',$editstock->category)
@section('description',$editstock->description)
@section('qty',$editstock->qty)
@section('price',$editstock->price)
@section('gst',$editstock->tax)
@section('total',$editstock->total)
@section('purchased_date',$editstock->purchased_date)
@section('expiry_date',$editstock->expiry_date)
@section('edit_id',$editstock->id)
@section('edit')
{{ method_field('PUT') }}

@endsection 