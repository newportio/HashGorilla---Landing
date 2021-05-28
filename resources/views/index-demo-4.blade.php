@extends('layouts.master')
@section('title','Nitrix - Multipurpose Template')
@section('content')
  @php
    $navbar = 'navbar-dark';
  @endphp

  <!-- ##### Welcome Area Start ##### -->
  @include('includes.demo-4.welcome')
  <!-- ##### Welcome Area End ##### -->

  <div class="clearfix"></div>

  <!-- ##### Demo Video Area Start ##### -->
  @include('includes.demo-4.demo-video')
  <!-- ##### Demo Video Area End ##### -->

  <div class="clearfix"></div>

  <div class="double-bg-1">

    <!-- ##### How Section Start ##### -->
    @include('includes.how-section')
    <!-- ##### How Section End ##### -->

    <!-- ##### About Us 1 Area Start ##### -->
    @include('includes.demo-1.about-us-1')
    <!-- ##### About Us 1 Area End ##### -->

    <!-- ##### About Us 2 Area Start ##### -->
    @include('includes.demo-1.about-us-2')
    <!-- ##### About Us 2 Area End ##### -->

    <!-- ##### About Us 3 Area Start ##### -->
    @include('includes.about-us-3')
    <!-- ##### About Us 3 Area End ##### -->
  </div>

  <div class="clearfix"></div>

  <!-- ##### Our Services Area Start ##### -->
  @include('includes.services')
  <!-- ##### Our Services Area End ##### -->

  <!-- ##### Spread Map Area Start ##### -->
  @include('includes.spread-map')
  <!-- ##### Spread Map Area End ##### -->

  <!-- ##### Our features Area Start ##### -->
  @include('includes.features')
  <!-- ##### Our features Area End ##### -->

  <!-- ##### Pricing Area Start ##### -->
  @include('includes.pricing')
  <!-- ##### Pricing Area End ##### -->

  <!-- ##### Team Area Start ##### -->
  @include('includes.team')
  <!-- ##### Team Area End ##### -->

  <!-- ##### Blog Area Start ##### -->
  @include('includes.blog')
  <!-- ##### Blog Area End ##### -->

@endsection

@section('contact')
  @include('includes.contact')
@endsection
