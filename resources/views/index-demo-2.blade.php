@extends('layouts.master')
@section('title','Nitrix - Multipurpose Template')
@section('content')

  <!-- ##### Welcome Area Start ##### -->
  @include('includes.demo-2.welcome')
  <!-- ##### Welcome Area End ##### -->

  <div class="clearfix"></div>

  <!-- ##### Main Features Start ##### -->
  @include('includes.main-features')
  <!-- ##### Main Features End ##### -->

  <!-- ##### About Us 1 Area Start ##### -->
  @include('includes.demo-2.about-us-1')
  <!-- ##### About Us 1 Area End ##### -->

  <!-- ##### About Us 2 Area Start ##### -->
  @include('includes.demo-2.about-us-2')
  <!-- ##### About Us 2 Area End ##### -->

  <!-- ##### About Us Area Start ##### -->
  @include('includes.about-us-3')
  <!-- ##### About Us Area End ##### -->

  <!-- ##### Our features Area Start ##### -->
  @include('includes.demo-2.features')
  <!-- ##### Our features Area End ##### -->

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

  <!-- ##### Blog Area Start ##### -->
  @include('includes.blog')
  <!-- ##### Blog Area End ##### -->

@endsection

@section('contact')
  @include('includes.contact')
@endsection
