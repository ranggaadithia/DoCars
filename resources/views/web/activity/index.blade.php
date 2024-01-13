@extends('layouts.index')

@section('container')
@include('components.navbar')

<section id="tour" class="tour pt-5 pb-5">
  <div class="container">
    <h1 class="text-center title pt-3" data-aos="fade-up">Tour activity</h1>
    <div class="row">
      @foreach ($activities as $activity)
      <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
        <div class="box-tour">
          <p>{{ $activity->name }}</p>
          <a href="{{ route('activity', $activity->slug) }}" class="btn btn-primary">View Details</a>
          <img src="{{ asset('storage/'. $activity->image_cover) }}" alt="">
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@include('components.footer')
@endsection