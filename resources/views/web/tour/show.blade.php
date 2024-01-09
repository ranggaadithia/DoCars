@extends('layouts.index')

@section('container')

  @include('components.navbar')

    <div class="h-75 bg-white overflow-hidden">
      <img src="{{ asset('storage/'. $package->image) }}" alt="" class="img-fluid w-100">
      <h1 class="display-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">Bedugul Lake Temple</h1>
      <div class="line-patern mx-auto" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800"></div>
    </div>


  <div class="container">
    <h1 class="text-center mb-5 pt-3" data-aos="fade-up">Tours Destination</h1>
    <div class="row justify-content-center">
      <div class="col-lg-6 mt-5-desktop" data-aos="fade-right" data-aos-delay="300">
        <h3 class="pb-2" style="font-weight: 700;">Jatiluwih Rice </h3>
        <p class="pb-2" style="line-height: 25px;">WEST NUSA PENIDA TOURS Kelingking Cliff Beach is one of the
          famous beaches on Nusa Penida Island due
          to the beauty of its beaches and if you want a different experience you can go down by walking down
          the stairs, below there you will
          find a natural cave with white sand and clear sea water at WEST NUSA PENIDA TOURS .</p>
      </div>
      <div class="col-lg-6 d-desktop" data-aos="fade-left" data-aos-delay="500" data-aos-duration="800">
        <img src="img/thumbs/jatiluih (2).jpg" class="figure-img img-fluid rounded" alt="Klingking Beach">
      </div>
      <div class="col-6 d-mobile" data-aos="fade-up" data-aos-delay="300">
        <img src="img/thumbs/klingking.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-6 d-mobile" data-aos="fade-up" data-aos-delay="350">
        <img src="img/thumbs/pantai.jpg" class="img-fluid" alt="">
      </div>
    </div>
    <div class="row justify-content-center mt-5 mb-5">
      <div class="col-lg-6 d-desktop" data-aos="fade-right" data-aos-duration="800">
        <img src="img/slider/beratan.jpg" class="figure-img img-fluid rounded" alt="">
      </div>
      <div class="col-lg-6 mt-5-desktop" data-aos="fade-right" data-aos-delay="500">
        <h3 class="pb-2" style="font-weight: 700;">Broken Beach</h3>
        <p class="pb-2" style="line-height: 25px;">Broken Beach is a naturally created cliff trough with the
          beauty of the unique broken beach location that will amaze the
          tourists who visit this beach.</p>
      </div>
      <div class="col-6 d-mobile" data-aos="fade-up" data-aos-delay="300">
        <img src="img/thumbs/broken-beach (1).jpg" class="img-fluid" alt="">
      </div>
      <div class="col-6 d-mobile" data-aos="fade-up" data-aos-delay="350">
        <img src="img/thumbs/broken-beach (2).jpg" class="img-fluid" alt="">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6 mt-5-desktop" data-aos="fade-right" data-aos-delay="300">
        <h3 class="pb-2" style="font-weight: 700;">Klingking Beach Cliff View</h3>
        <p class="pb-2" style="line-height: 25px;">WEST NUSA PENIDA TOURS Kelingking Cliff Beach is one of the
          famous beaches on Nusa Penida Island due
          to the beauty of its beaches and if you want a different experience you can go down by walking down
          the stairs, below there you will
          find a natural cave with white sand and clear sea water at WEST NUSA PENIDA TOURS .</p>
      </div>
      <div class="col-lg-6 d-desktop" data-aos="fade-left" data-aos-delay="500" data-aos-duration="800">
        <img src="img/thumbs/Wanagiri-Hidden-Hills.jpg" class="figure-img img-fluid rounded" alt="Klingking Beach">
      </div>
      <div class="col-6 d-mobile" data-aos="fade-up" data-aos-delay="300">
        <img src="img/thumbs/klingking.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-6 d-mobile" data-aos="fade-up" data-aos-delay="350">
        <img src="img/thumbs/pantai.jpg" class="img-fluid" alt="">
      </div>
    </div>
  </div>

  {{-- @include('components.footer') --}}
  
@endsection
