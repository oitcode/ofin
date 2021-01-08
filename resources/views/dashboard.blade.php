@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  <div class="row">
    <div class="col">
      @livewire('salesbook-entry-component')
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      @livewire('expense-component')
    </div>
    <div class="col-md-6">
      @livewire('expense-component')
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      @livewire('product-component')
    </div>
    <div class="col-md-6">
      @livewire('inventory-component')
    </div>
  </div>
@stop
