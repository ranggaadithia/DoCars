@extends('layouts.index')

@section('container')

  @include('components.navbar')

    <div class="d-show h-100 bg-white" style="overflow: hidden">
      <img src="{{ asset('storage/'. $package->image) }}" alt="" class="img-fluid w-100" style="background-size: cover">
      <h1 class="display-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" style="z-index: 1000; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">{{ $package->name }}</h1>
      <div class="line-patern mx-auto" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" style="z-index: 1000; position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%)"></div>
    </div>


  <div class="container mb-5">
    <h1 class="text-center mb-5 pt-3" data-aos="fade-up">Tours Destination</h1>

    @foreach ($destinations as $destination)
      <div class="row justify-content-center">
        <div class="col-lg-6 mt-5-desktop">
          <h3 class="pb-2" style="font-weight: 700;">{{ $destination->name }} </h3>
          <p class="pb-2" style="line-height: 25px;">{{ $destination->description }}</p>
        </div>
        <div class="col-lg-6 d-desktop">
          <img src="{{ asset('storage/'. $destination->photos->first()->image) }}" class="figure-img img-fluid rounded" alt="Klingking Beach">
        </div>
      </div>
    @endforeach

  </div>

  @include('components.footer')
  
@endsection
