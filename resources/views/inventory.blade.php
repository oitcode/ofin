@extends('adminlte::page')

@section('title', 'Inventory')

@section('content_header')
    <h1>Inventory</h1>
@stop

@section('content')
  <div>
    @livewire('inventory-component')
  </div>
@stop
