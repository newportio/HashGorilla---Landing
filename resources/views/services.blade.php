@extends('layouts.master')
@section('title','Services')
@section('content')
  @php
    $title = 'Services';
  @endphp

<!-- ##### Welcome Area Start ##### -->
@include('includes.welcome-page')
<!-- ##### Welcome Area End ##### -->

<!-- ##### Our Services Area Start ##### -->
@include('includes.services')
<!-- ##### Our Services Area End ##### -->

<!-- ##### Spread Map Area Start ##### -->
@include('includes.spread-map')
<!-- ##### Spread Map Area End ##### -->

<!-- ##### About Us Area Start ##### -->
@include('includes.about-us-3')
<!-- ##### About Us Area End ##### -->

@endsection
