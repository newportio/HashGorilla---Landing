@extends('layouts.master')
@section('title','Pricing')
@section('content')
  @php
    $title = 'Pricing';
  @endphp

<!-- ##### Welcome Area Start ##### -->
@include('includes.welcome-page')
<!-- ##### Welcome Area End ##### -->

<!-- ##### Pricing Area Start ##### -->
@include('includes.pricing')
<!-- ##### Pricing Area End ##### -->

<!-- ##### Spread Map Area Start ##### -->
@include('includes.spread-map')
<!-- ##### Spread Map Area End ##### -->

<!-- ##### How Section Start ##### -->
@include('includes.how-section')
<!-- ##### How Section End ##### -->

@endsection
