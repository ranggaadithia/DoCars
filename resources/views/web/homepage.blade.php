@extends('layouts.index')

@section('container')

  {{-- <livewire-navbar /> --}}

  @include('components.navbar')
  
  {{-- jumbotron --}}
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">" Enjoy your Holiday in <br> Bali Island "</h1>
      <div class="line-patern mx-auto" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800"></div>
    </div>
  </div>


  {{-- about --}}
  <section id="home" class="home pt-5 mb-5">
    <div class="container">
      <h1 class="text-center mb-5 pt-3 title" data-aos="fade-up">DoCars</h1>
      <div class="row">
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
          <figure class="">
            <img src="img/testimoni/testimoni8.jpg" class="figure-img img-fluid rounded"
              alt="Mount Batur">
            <figcaption class="figure-caption">*Mount Batur</figcaption>
          </figure>
          <!-- <img src="img/Group 7.svg" alt="" style="margin-top: -170px; margin-left: 350px; position: relative; z-index: -1;"> -->
        </div>
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="500">
          {{-- <h3 class="pb-2 ">Forget Busy Work,<br>and Enjoy your Holiday</h3> --}}
          <p class="pb-2">{{ $description }}</p>
          <a href="{{ config('app.whatsapp') }}" class="btn btn-primary">Contact Us</a>
        </div>
        
      </div>
    </div>
  </section>


  {{-- services --}}
  <section id="services" class="services pt-5 pb-5">
    <div class="container">
      <h1 class="text-center mb-5 title pt-3" data-aos="fade-up">Services</h1>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-10 col-sm-4" data-aos="fade-up" data-aos-delay="300">
          <div class="box-service">
            <div class="icon-place">
              <i class="fas fa-plane-arrival"></i>
            </div>
            <h4>Airport Trasport Service</h4>
            <p>Provide Airport Transport Service to attractive and beautiful tourist attractions for tourists...</p>
            <a href="/airport" class="btn btn-primary tombol">Read More</a>
          </div>
        </div>
        <div class="col-lg-3 col-10 col-sm-4" data-aos="fade-up" data-aos-delay="400">
          <div class="box-service">
            <div class="icon-place">
              <i class="fas fa-car"></i>
            </div>
            <h4>Car Charter Service</h4>
            <p>Provide Transportation services to attractive and beautiful tourist attractions for tourists...</p>
            <a href="/cars" class="btn btn-primary tombol">Read More</a>
          </div>
        </div>
        <div class="col-lg-3 col-10 col-sm-4" data-aos="fade-up" data-aos-delay="500">
          <div class="box-service">
            <div class="icon-place">
              <i class="icofont-island-alt"></i>
            </div>
            <h4>Guest <br>Activities</h4>
            <p>Provide tourist attractions that provide interesting activities such as cycling rafting etc.</p>
            <a href="" class="btn btn-primary tombol">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- destinations --}}
  <section class="destination pt-5 pb-5" id="destination">
    <div class="container">
      <h1 class="text-center mb-5 pt-3 title" data-aos="fade-up">Top Destination</h1>
      <div class="row pb-3 justify-content-center">
        <div class="col-lg-4 col-sm-10">
          <div class="des filter" data-aos="fade-up" data-aos-delay="300">
            <div class="des-body utama">
              <img src="img/thumbs/klingking.jpg" alt="" class="img-fluid">
              <p>Klingking Beach</p>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-sm-10">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="des filter" data-aos="fade-up" data-aos-delay="400">
                <div class="des-body">
                  <img src="img/thumbs/waterfall.jpg" alt="" class="img-fluid">
                  <p>Sekumpul Waterfall</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-10">
              <div class="des filter" data-aos="fade-up" data-aos-delay="500">
                <div class="des-body">
                  <img src="img/slider/beratan.jpg" alt="" class="img-fluid">
                  <p>Beratan Temple</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row jarak justify-content-center">
            <div class="col-lg-6 col-sm-10">
              <div class="des filter" data-aos="fade-up" data-aos-delay="600">
                <div class="des-body">
                  <img src="img/thumbs/tegalalang.jpg" alt="" class="img-fluid">
                  <p>Tegalalang</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-10">
              <div class="des filter" data-aos="fade-up" data-aos-delay="700">
                <div class="des-body">
                  <img src="img/thumbs/abel.jpg" alt="" class="img-fluid">
                  <p>Monkey Forest</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="" class="float-right" data-aos="fade-right" data-aos-delay="750">More Destination <i class="fas fa-arrow-right"></i></a>
    </div>
  </section>

  {{-- tour packages --}}
  <section id="tour" class="tour pt-5 pb-5">
    <div class="container">
      <h1 class="text-center title pt-3" data-aos="fade-up">Tour Package</h1>
      <div class="row">
        @foreach ($packages as $package)
        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
          <div class="box-tour">
            <p>{{ $package->name }}</p>
            <a href="{{ route('package', $package->slug) }}" class="btn btn-primary">View Details</a>
            <img src="{{ asset('storage/'. $package->image_cover) }}" alt="">
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- gallery --}}
  <section id="gallery" class="gallery pt-5 pb-5">
    <div class="container">
      <h1 class="text-center mb-5 title pt-3" data-aos="fade-up">Galery</h1>
      <div class="row">
        @foreach ($photos->take(10)->shuffle() as $photo)
            
        <div class="col-lg-3 col-6">
          <a href="" data-toggle="modal" data-target="#exampleModalCenter{{ $photo->id }}">
            <img src="{{ asset('storage/'. $photo->image) }}" alt="" class="img-thumbnail img-fluid" 
            data-aos="fade-up" data-aos-delay="300">
          </a>
        </div>
        <div class="modal fade" id="exampleModalCenter{{ $photo->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ isset($photo->de) }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="{{ asset('storage/'. $photo->image) }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        @endforeach


      </div>
      
      <a href="" class="float-right sr-only" data-aos="fade-right" data-aos-delay="750">More Image <i class="fas fa-arrow-right"></i></a>
    </div>
  </section>

  {{-- modal gallery section --}}


  {{-- testimonial --}}
  <section id="testimoni" class="testimoni pt-3 pb-5">
    <div class="container">
      <h1 class="text-center mb-5 title pt-5" data-aos="fade-up">Testimonial</h1>
      <div class="row">
        <div class="col-12">
          <div class="owl-carousel owl-theme" data-aos="fade-up" data-aos-delay="300">
            @foreach ($reviews as $review)
            <div class="item example-popover" data-trigger="hover" data-container="body" data-toggle="popover"
              data-placement="bottom" data-offset="0px 10px" data-content="{{ $review->description }}"><img
                class="rounded-circle" data-original-title src="{{ asset('storage/'. $review->image) }}" alt="">
              <h5 style="margin-top:10px;"> {{ $review->name }} </h5>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="cta-section black-trans-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="cta-title">
                    <h2>Excited about exploring Bali?</h2>
                    <a href="{{ config('app.whatsapp') }}">Booking Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>

  {{-- footer --}}

  @include('components.footer')
  

@endsection
