@extends('layouts.app')
@section('page-title')
<title>Contacto - SAGA Service</title>
@endsection

@section('content')
  {{-- Title Section --}}
  <section class="title-section pd-lr" style="background-image: url('{{asset('/img/para_empresas.jpg')}}')">
    <img src="{{ asset('/icons/saga_icon.png') }}">
    <h1>Contáctese con Nosotros</h1>
  </section>

  {{-- Formulario --}}
  <section class="contact-form pd-lr">
    <p>Si tiene dudas, consultas o cualquier motivo por el que desea que sepamos de usted puede contactarnos personalmente desde su correo a info@sagaservice.cl</p>
    <p>También puede enviarnos un mensaje desde este formulario de contacto.</p>

    <div class="the-form">
      <form class="" action="" method="post">

          {{-- For: Selección: Empresa / Hogar --}}
          <div class="fields-for">
            <p><b>Consultar para:</b></p>
            <button type="button" class="select-button button-empresa">
              Empresa
            </button>
            <button type="button" class="select-button button-hogares">
              Hogar
            </button>
          </div>

          {{-- Datos Generales: Nombre, Apellido, Correo, Numero --}}
          <div class="fields-general">
            <input type="text" name="input-nombre" placeholder="Nombre">
            <input type="text" name="input-correo" placeholder="Correo">
            <input type="text" name="input-numero" placeholder="Número de Contacto">
            <input type="text" name="input-direccion" placeholder="Dirección" class="animated fast fadeIn">
          </div>

          {{-- Opcional: Data Empresa --}}
          <div class="fields-empresa bd-none animated fast fadeIn" id="campos-datosEmpresa">
            <input type="text" name="input-nombreEmpresa" placeholder="Nombre de la Empresa">
            <input type="text" name="input-direccionEmpresa" placeholder="Dirección de la Empresa">
          </div>

          {{-- Seleccionar Motivo --}}
          <div class="fields-motivo">
            <p><b>Motivo:</b></p>
            <button type="button" class="select-button-b">
              Consultas Generales
            </button>
            <button type="button" class="select-button-b">
              Solicitar una Visita
            </button>
          </div>

          {{-- Seleccionar Servicios --}}
          <div class="fields-servicios">
            <p><b>Seleccione uno o más servicios:</b></p>
            <button type="button" class="select-button-c">
              Desratización
            </button>
            <button type="button" class="select-button-c">
              Sanitización
            </button>
            <button type="button" class="select-button-c">
              Desinsectación
            </button>
            <button type="button" class="select-button-c">
              Otras Plagas
            </button>
            <button type="button" class="select-button-c">
              Ornamental
            </button>
          </div>

          {{-- Mensaje --}}
          <textarea class="mensaje" placeholder="Su mensaje"></textarea>
          <button type="submit" class="send-button">Enviar</button>

      </form>
    </div>
  </section>

  {{-- Dirección y Mapa --}}
  <section class="ubicacion">
    <div class="datos-direccion background-lightGray">
      <div class="item">
        <img src="{{ asset('/icons/contacto_ubicacion.png') }}">
        <p>Av. Rauquén 441<br>Lote No. 4<br>Sarmiento, Curicó</p>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/contacto_telefono.png') }}">
        <p>Llámenos al<br>(075) 2 223 696</p>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/contacto_horario.png') }}">
        <p>Horario de Atención<br>Lunes a Viernes<br>09:00 a 18:00 hrs</p>
      </div>
    </div>
    <div class="mapa" id="map">

    </div>
  </section>
@endsection

@section('specialScripts')
  <script>
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      var uluru = {lat: -34.9658882, lng: -71.2066924};
      // The map, centered at Uluru
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 15, center: uluru});
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({position: uluru, map: map});
    }
  </script>
  <!--Load the API from the specified URL
  * The async attribute allows the browser to render the page while the API loads
  * The key parameter will contain your own API key (which is not needed for this tutorial)
  * The callback parameter executes the initMap() function
  -->
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo_hhejFMvhP3S4rt0jwlcE3YHACYV0b0&callback=initMap">
  </script>
@endsection
