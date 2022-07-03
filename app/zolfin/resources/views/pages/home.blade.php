@extends('components.layout')

@section('content')
  <!-- Hero Area Starts -->
  @include('components.hero')
    <!-- About Area Starts -->
    @include('components.about')

    <!-- Feature Area Starts -->
    @include('components.features')

    <!-- Experience & Skills Area Starts -->
    @include('components.experience')
    <!-- Client Area Starts -->
    @include('components.client')

    <!-- CounterUP Area Starts -->
    @include('components.counterup')

    <!-- Award Area Starts -->
    @include('components.award')

    <!-- Social Link Area Starts -->
    @include('components.social-link')


  @endsection
