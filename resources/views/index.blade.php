@extends('components.base')

@section('basePrincipal')
<head>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
  <section class="portadaPrincipal">
    <div class="contenidoOculto1 " >
        <img src="{{  asset('logo.svg') }}" class="logo contenidoOculto2" alt="">
        <p class="contenidoOculto3">
            Energia sin limites...
        </p>
    </div>
  </section>
    <section class="informacionIndex container">
      <div class="card objeto1" style="width: 18rem;">
        <img src="{{ asset('imagenes/portada1.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">¿Necesitas Baterias?</h5>
          <p class="card-text">Si se trata de baterias somos tú mejor opción. Con más de x años en el área de baterias podremos asesorarte y ayudarte cuando más lo necesites.</p>
          <a href="#" class="btn btn-primary">Solicitar Asesoramiento</a>
        </div>
      </div>

      <div class="card objeto1" style="width: 18rem;">
        <img src="{{ asset('imagenes/portada2.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">¿Energías Alternativas?</h5>
          <p class="card-text">Serguat, también está en disposición de comercializar e instalar sistemas de paneles solares para la generación de energía eléctrica limpia.</p>
          <a href="#" class="btn btn-primary">Solicitar Asesoramiento</a>
        </div>
      </div>

      <div class="card objeto1" style="width: 18rem;">
        <img src="{{ asset('imagenes/portada3.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Vehículos Eléctricos</h5>
          <p class="card-text">Somos representantes de Taylor Dunn, novedosos vehículos eléctricos para usos comerciales, industriales y turísticos con amplio Stock de repuestos. </p>
          <a href="#" class="btn btn-primary">Solicitar Asesoramiento</a>
        </div>
      </div>
    </section>
    <section class="seccion2Index container">

    </section>
    <script src="{{ asset('js/index.js') }}"></script>
@endsection
