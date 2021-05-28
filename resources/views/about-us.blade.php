@extends('layouts.master')
@section('title','About Us')
@section('content')
  @php
    $title = 'About Us';
    $padding = 'paddin-100';
  @endphp

<!-- ##### Welcome Area Start ##### -->
@include('includes.welcome-page')
<!-- ##### Welcome Area End ##### -->

<!-- ##### About Us 1 Area Start ##### -->
@include('includes.demo-2.about-us-1')
<!-- ##### About Us 1 Area End ##### -->

<!-- ##### About Us 2 Area Start ##### -->
@include('includes.demo-2.about-us-2')
<!-- ##### About Us 2 Area End ##### -->

<!-- ##### Spread Map Area Start ##### -->
@include('includes.spread-map')
<!-- ##### Spread Map Area End ##### -->

<!-- ##### Team Area Start ##### -->
@include('includes.team')
<!-- ##### Team Area End ##### -->

@endsection
