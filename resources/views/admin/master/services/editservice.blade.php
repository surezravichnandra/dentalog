
@extends('admin.master.services.service')
@section('service',$editservice->services)
@section('cost',$editservice->cost)
@section('edit_id',$editservice->id)
@section('edit')
{{ method_field('PUT') }}

@endsection 