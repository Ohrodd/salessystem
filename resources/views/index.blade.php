@extends('components.base')

@section('basePrincipal')
<head>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
    <div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('imagenes/banner1.jpg') }}" class="d-block w-100 banner" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('imagenes/banner2.jpg') }}" class="d-block w-100 banner" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('imagenes/banner3.jpg') }}" class="d-block w-100 banner" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('imagenes/banner4.jpg') }}" class="d-block w-100 banner" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('imagenes/banner5.jpg') }}" class="d-block w-100 banner" alt="...">
              </div>
            </div>
          </div>
    </div>
    <section class="informacionIndex">
      <div class="objeto1">

      </div>
      <div class="objeto1">

      </div>
      <div class="objeto1">

      </div>
    </section>
    <section class="seccion2Index">

    </section>
@endsection
