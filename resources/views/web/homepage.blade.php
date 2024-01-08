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
      <h1 class="text-center mb-5 pt-3 title" data-aos="fade-up">Gusti Driver</h1>
      <div class="row">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
          <h3 class="pb-2 ">Forget Busy Work,<br>and Enjoy your Holiday</h3>
          <p class="pb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, repellat, voluptas beatae vero doloremque, odit aperiam vel ex ratione consequatur itaque deserunt ipsa ullam exercitationem! Cumque blanditiis accusantium quas temporibus, voluptates recusandae ex voluptas! Quibusdam?</p>
          <a href="" class="btn btn-primary">Contact Us</a>
        </div>
        <div class="col-6" data-aos="fade-left" data-aos-delay="500" data-aos-duration="800">
          <figure class="figure">
            <img src="img/thumbs/pantai.jpg" class="figure-img img-fluid rounded"
              alt="Klingking Beach">
            <figcaption class="figure-caption">*Klingking Beach</figcaption>
          </figure>
          <!-- <img src="img/Group 7.svg" alt="" style="margin-top: -170px; margin-left: 350px; position: relative; z-index: -1;"> -->
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
            <a href="" class="btn btn-primary tombol">Read More</a>
          </div>
        </div>
        <div class="col-lg-3 col-10 col-sm-4" data-aos="fade-up" data-aos-delay="400">
          <div class="box-service">
            <div class="icon-place">
              <i class="fas fa-car"></i>
            </div>
            <h4>Car Charter Service</h4>
            <p>Provide Transportation services to attractive and beautiful tourist attractions for tourists...</p>
            <a href="" class="btn btn-primary tombol">Read More</a>
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
        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
          <div class="box-tour">
            <p>West Nusa Penida</p>
            <a href="West-Nusa-Penida.html" class="btn btn-primary">View Details</a>
            <img src="img/thumbs/klingking.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="350">
          <div class="box-tour">
            <p>Bedugul Lake Temple</p>
            <a href="" class="btn btn-primary">View Details</a>
            <img src="img/thumbs/pura.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="400">
          <div class="box-tour">
            <p>Ubud Art Village</p>
            <a href="" class="btn btn-primary">View Details</a>
            <img src="img/thumbs/monyet.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="450">
          <div class="box-tour">
            <p>Lovina Dolphin</p>
            <a href="" class="btn btn-primary">View Details</a>
            <img src="img/thumbs/lovina.jpg" alt="" style="width: 120%;">
          </div>
        </div>
        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="500">
          <div class="box-tour">
            <p>Heaven Gate Temple</p>
            <a href="" class="btn btn-primary">View Details</a>
            <img src="img/thumbs/lempuyang.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="550">
          <div class="box-tour">
            <p>Uluwatu Cliff Temple</p>
            <a href="" class="btn btn-primary">View Details</a>
            <img src="img/thumbs/kecak.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="600">
          <div class="box-tour">
            <p>Batur Volcano Tour</p>
            <a href="" class="btn btn-primary">View Details</a>
            <img src="img/thumbs/batur.jpg" alt="" style="width: 130%;">
          </div>
        </div>
        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="650">
          <div class="box-tour">
            <p>East Area Nusa Penida Island</p>
            <a href="" class="btn btn-primary">View Details</a>
            <img src="img/thumbs/nusa-penida.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="700">
          <div class="box-tour">
            <p>Tanah Lot Temple Tour</p>
            <a href="" class="btn btn-primary">View Details</a>
            <img src="img/thumbs/tanah.jpg" alt="" style="width: 160%; margin-left: -40%;">
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- gallery --}}
  <section id="gallery" class="gallery pt-5 pb-5">
    <div class="container">
      <h1 class="text-center mb-5 title pt-3" data-aos="fade-up">Galery</h1>
      <div class="row">
        <div class="col-lg-3 col-6">
          <a href="" data-toggle="modal" data-target="#exampleModalCenter">
            <img src="img/thumbs/sekumpul2.jpg" alt="" class="img-thumbnail img-fluid" 
            data-aos="fade-up" data-aos-delay="300">
          </a>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sekumpul Waterfall</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="img/sekumpul.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <a href="" data-toggle="modal" data-target="#exampleModalCenter2">
            <img src="img/thumbs/pura.jpg" alt="" class="img-thumbnail img-fluid" 
            data-aos="fade-up" data-aos-delay="350">
          </a>
        </div>
        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Beratan Temple</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="img/pura.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <a href="" data-toggle="modal" data-target="#exampleModalCenter3">
            <img src="img/thumbs/lempuyang.jpg" alt="" class="img-thumbnail img-fluid" 
            data-aos="fade-up" data-aos-delay="400">
          </a>
        </div>
        <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lempuyang Temple</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="img/lempuyang.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <a href="" data-toggle="modal" data-target="#exampleModalCenter4">
            <img src="img/thumbs/klingking.jpg" alt="" class="img-thumbnail img-fluid" 
            data-aos="fade-up" data-aos-delay="450">
          </a>
        </div>
        <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Klingking Beach</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="img/klingking.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row jarak pb-3">
        <div class="col-lg-3 col-6">
          <a href="" data-toggle="modal" data-target="#exampleModalCenter5">
            <img src="img/thumbs/gwk2.jpg" alt="" class="img-thumbnail img-fluid" 
            data-aos="fade-up" data-aos-delay="500">
          </a>
        </div>
        <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Garuda Wisnu Kencana</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="img/gwk2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <a href="" data-toggle="modal" data-target="#exampleModalCenter6">
            <img src="img/thumbs/airterjun.jpg" alt="" class="img-thumbnail img-fluid" 
            data-aos="fade-up" data-aos-delay="550">
          </a>
        </div>
        <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sekumpul Waterfall</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="img/airterjun.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <a href="" data-toggle="modal" data-target="#exampleModalCenter7">
            <img src="img/thumbs/tukad.jpg" alt="" class="img-thumbnail img-fluid" 
            data-aos="fade-up" data-aos-delay="600">
          </a>
        </div>
        <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tukad Cepung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="img/tukad.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <a href="" data-toggle="modal" data-target="#exampleModalCenter8">
            <img src="img/thumbs/monyet.jpg" alt="" class="img-thumbnail img-fluid" 
            data-aos="fade-up" data-aos-delay="650">
          </a>
        </div>
        <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Monkey Forest</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="img/thumbs/monyet.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
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
            <div class="item example-popover" data-trigger="hover" data-container="body" data-toggle="popover"
              data-placement="bottom" data-offset="0px 10px" data-content="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ex quia nam non esse voluptates fugit modi voluptas maiores labore?"><img
                class="rounded-circle" data-original-title src="img/testimoni/IMG-20190604-WA0069[1].jpg" alt="">
              <h5 style="margin-top:10px;"> Hazar Hamzah </h5>
            </div>
            <div class="item example-popover" data-trigger="hover" data-container="body" data-toggle="popover"
              data-placement="bottom" data-offset="0px 10px" data-content="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ex quia nam non esse voluptates fugit modi voluptas maiores labore?"><img
                class="rounded-circle" data-original-title src="img/testimoni/testimoni (2).jpg" alt="">
              <h5 style="margin-top:10px;"> Paula </h5>
            </div>
            <div class="item example-popover" data-trigger="hover" data-container="body" data-toggle="popover"
              data-placement="bottom" data-offset="0px 10px" data-content="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ex quia nam non esse voluptates fugit modi voluptas maiores labore?"><img
                class="rounded-circle" data-original-title src="img/testimoni/testi (1)crop.jpeg" alt="">
              <h5 style="margin-top:10px;"> Selly </h5>
            </div>
            <div class="item example-popover" data-trigger="hover" data-container="body" data-toggle="popover"
              data-placement="bottom" data-offset="0px 10px" data-content="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ex quia nam non esse voluptates fugit modi voluptas maiores labore?"><img
                class="rounded-circle" data-original-title src="img/testimoni/testi (2).jpeg" alt="">
              <h5 style="margin-top:10px;"> Wendy Chan </h5>
            </div>
            <div class="item example-popover" data-trigger="hover" data-container="body" data-toggle="popover"
              data-placement="bottom" data-offset="0px 10px" data-content="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ex quia nam non esse voluptates fugit modi voluptas maiores labore?"><img
                class="rounded-circle" data-original-title src="img/testimoni/testi (3).jpeg" alt="">
              <h5 style="margin-top:10px;"> Hazar Hamzah </h5>
            </div>
            <div class="item example-popover" data-trigger="hover" data-container="body" data-toggle="popover"
              data-placement="bottom" data-offset="0px 10px" data-content="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ex quia nam non esse voluptates fugit modi voluptas maiores labore?"><img
                class="rounded-circle" data-original-title src="img/testimoni/testimoni (23).jpg" alt="">
              <h5 style="margin-top:10px;"> Hazar Hamzah </h5>
            </div>
            <div class="item example-popover" data-trigger="hover" data-container="body" data-toggle="popover"
              data-placement="bottom" data-offset="0px 10px" data-content="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ex quia nam non esse voluptates fugit modi voluptas maiores labore?"><img
                class="rounded-circle" data-original-title src="img/testimoni/testimoni (19).jpg" alt="">
              <h5 style="margin-top:10px;"> Hazar Hamzah </h5>
            </div>
            <div class="item example-popover" data-trigger="hover" data-container="body" data-toggle="popover"
              data-placement="bottom" data-offset="0px 10px" data-content="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ex quia nam non esse voluptates fugit modi voluptas maiores labore?"><img
                class="rounded-circle" data-original-title src="img/testimoni/testimoni (1).jpg" alt="">
              <h5 style="margin-top:10px;"> Hazar Hamzah </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- footer --}}

  @include('components.footer')
  

@endsection
