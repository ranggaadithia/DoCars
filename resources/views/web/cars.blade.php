@extends('layouts.index')

@section('container')
@include('components.navbar')
<div class="container mt-5">
  <h1 class="title pt-5">Available Cars</h1>
  <div class="card-group mt-4">
    <!-- Regular Cars -->
    <div class="card">
      <img class="card-img-top" src="img/car/apv.jpg" alt="APV">
      <div class="card-body">
        <h5 class="card-title">APV</h5>
        <p class="card-text"><b>Capacity:</b> 7 people</p>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="img/car/avanza.png" alt="Avanza">
      <div class="card-body">
        <h5 class="card-title">Avanza</h5>
        <p class="card-text"><b>Capacity:</b> 7 people</p>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="img/car/innova.png" alt="Innova">
      <div class="card-body">
        <h5 class="card-title">Innova</h5>
        <p class="card-text"><b>Capacity:</b> 7 people</p>
      </div>
    </div>
  </div>

  <div class="card-group mt-4">
    <!-- Big Vans -->
    <div class="card">
      <img class="card-img-top" src="img/car/elf-short.png" alt="Elf Short">
      <div class="card-body">
        <h5 class="card-title">Elf Short</h5>
        <p class="card-text"><b>Capacity:</b> 10-14 people</p>
      </div>
    </div>

    <!-- On smaller screens, display only one card per row -->
    <div class="w-100 d-md-none"></div>

    <div class="card">
      <img class="card-img-top" src="img/car/elf-long.png" alt="Elf Long">
      <div class="card-body">
        <h5 class="card-title">Elf Long</h5>
        <p class="card-text"><b>Capacity:</b> 16-19 people</p>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="img/car/hiace.png" alt="Hiace">
      <div class="card-body">
        <h5 class="card-title">Hiace</h5>
        <p class="card-text"><b>Capacity:</b> 10-16 people</p>
      </div>
    </div>
  </div>

  <div class="card-group mt-4">
    <!-- Luxury Cars -->
    <div class="card">
      <img class="card-img-top" src="img/car/alphard.jpeg" alt="Alphard">
      <div class="card-body">
        <h5 class="card-title">Alphard</h5>
        <p class="card-text"><b>Capacity:</b> 5 people</p>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="img/car/artic-white.jpg" alt="Hyundai H1">
      <div class="card-body">
        <h5 class="card-title">Hyundai H1</h5>
        <p class="card-text"><b>Capacity:</b> 9 people</p>
      </div>
    </div>
  </div>
  </div>
</div>



@include('components.footer')
@endsection