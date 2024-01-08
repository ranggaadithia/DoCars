@extends('layouts.index')

@section('container')

@include('components.navbar')

@push('style')
    <style>
      .header {
      background-color: #d3d3d3;
      height: 80vh;
    }

    .content {
      margin-top: -350px;
    }
    </style>
@endpush

<div class="header"></div>
    
<section class="air-service">
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 mt-5">
          <div class="card">
            <div class="card-header">
              <h4 class="text-center">AIRPORT SERVICE PRICE LIST</h4>
            </div>
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>Airport – Kuta and Legian</td>
                  <td style="width: 40%;"><b>IDR 200.000</b></td>
                </tr>
                <tr>
                  <td>Airport – Jimbaran Area</td>
                  <td><b>IDR 250.000</b></td>
                </tr>
                <tr>
                  <td>Airport – Seminyak Area</td>
                  <td><b>IDR 250.000</b></td>
                </tr>
                <tr>
                  <td>Airport – Nusa Dua Area</td>
                  <td><b>IDR 250.000</b></td>
                </tr>
                <tr>
                  <td>Airport – Sanur Area</td>
                  <td><b>IDR 300.000</b></td>
                </tr>
                <tr>
                  <td>Airport – Ubud Area</td>
                  <td><b>IDR 350.000</b></td>
                </tr>
                <tr>
                  <td>Airport – Lovina Area</td>
                  <td><b>IDR 650.000</b></td>
                </tr>
                <tr>
                  <td>Airport <–> Karangasem Area</td>
                  <td><b>IDR 650.000</b></td>
                </tr>
              </tbody>
            </table>
            <div class="card-body mx-auto">
              <a href="https://gustidriver.setmore.com" class="btn btn-primary">Booking Now !</a>
            </div>
          </div>
        </div>
        <div class="col-lg-10 bg-white mt-5" style="box-shadow: 0px 10px 30px rgba(0,0,0,.3); border-radius: 20px;">
          <h3 class="pt-5 mb-3">Airport Service</h3>
          <p>Provide AIRPORT TRANSPORT SERVICE to attractive and beautiful tourist attractions for tourists, we are also supported by
          a team of highly experienced and professional people who are always focused on providing timely services to the
          satisfaction of our guests who are friendly, enthusiastic and warm, one of our services We provides AIRPORT TRANSPORT
          SERVICE for our guests who need transportation upon arrival in Bali or departure to the airport according to flight time
          requirements, we are ready to adjust our services to the needs of our customers and also We deliver a trusted service
          which are timely with enthusiasm to create memorable experience for our guest with flexibility based on our individual
          guest request and preferences.</p>
          <h3 class="pt-4 mb-2">INCLUSIONS</h3>
          <ul>
            <li>Private a/c vehicle for tours in Bali Island</li>
            <li>English speaking driver as guide tour</li>
            <li>Car parking fee</li>
          </ul>
          <div class="line-patern mx-auto mt-5 mb-5"></div>
        </div>
        
        <!-- akhir content -->
      </div>
    </div>
  </div>
</section>
@include('components.footer')
@endsection
