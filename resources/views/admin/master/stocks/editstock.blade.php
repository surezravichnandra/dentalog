
@extends('admin.master.stocks.stock')
@section('product_name',$editstock->product_name)
@section('qty',$editstock->qty)
@section('price',$editstock->price)
@section('tax',$editstock->tax)
@section('purchase_date',$editstock->purchased_date)
@section('expiry_date',$editstock->expiry_date)
@section('edit_id',$editstock->id)
@section('edit')
{{ method_field('PUT') }}

@endsection 