@extends('layouts.index')

@section('container')

  @include('components.navbar')
  

  <div class="container mb-5 mt-5">
    <h1 class="text-center mb-5 pt-5" data-aos="fade-up">{{ $destination->name }}</h1>
      <div class="row justify-content-center mt-5">
        <div class="col-lg-12">
          <p class="pb-2" style="line-height: 25px;">{{ $destination->description }}</p>
        </div>
        <div class="col-lg-12">
          <img src="{{ asset('storage/'. $destination->photos->first()->image) }}" class="figure-img img-fluid rounded" alt="{{ $destination->name }}">
        </div>
      </div>
  </div>

  @include('components.footer')
  

@endsection
