@extends('adminlte::page')

@section('title', 'Product')

@section('content_header')
    <h1>Product</h1>
@stop

@section('content')
  <div>
    @livewire('product-component')
  </div>
@stop
