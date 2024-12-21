@extends('frontend.main_master')
@section('main')

    <!-- Carousel Start -->
    @include('frontend.home_all.home_slide')
  <!-- Carousel End -->


  <!-- Banner Start -->
@include('frontend.home_all.home_banner')
  <!-- Banner Start -->


  <!-- About Start -->
  @include('frontend.home_all.home_about')
  <!-- About End -->


  <!-- Facts Start -->
 @include('frontend.home_all.home_facts')
  <!-- Facts End -->
  

  <!-- Services Start -->
@include('frontend.home_all.home_services')
  <!-- Services End -->


  <!-- Features Start -->
@include('frontend.home_all.home_features')
  <!-- Features Start -->


  <!-- Products Start -->
 @include('frontend.home_all.home_product')
 
  <!-- Products End -->


  <!-- Testimonial Start -->
@include('frontend.home_all.home_testimonial')
  <!-- Testimonial End -->


  <!-- Team Start -->
@include('frontend.home_all.home_team')
  <!-- Team End -->


  <!-- Blog Start -->
@include('frontend.home_all.home_blog')
  <!-- Blog End -->

  @endsection
