<meta name="csrf-token" content="{{ csrf_token() }}">
{!! NoCaptcha::renderJs() !!}

<noscript>Votre navigateur ne supporte pas JavaScript !</noscript>

@extends('simple-layout')



<div class="modal">
   <div class="modal-background"></div>
   <div class="modal-content">
      <header class="modal-card-head">
         <p class="modal-card-title" id="titre"></p>
      </header>
      <section class="modal-card-body" id="contenu">
      </section>
      <footer class="modal-card-foot">
         <div class="container has-text-centered">
         <div class="button is-info close is-rounded">OK</div>
         </div>
      </footer>
   </div>
</div>

@section('body')

<div id="landing-page">

@include('first-presentation')
@include('second-presentation')

</div>

@include('competences')
@include('experiences')

@include('contact')

@include('reseaux')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="{{ versioned_asset('dist/main.css') }}">
<link rel="stylesheet" href="{{ versioned_asset('dist/bulma-tooltip.css') }}">
<script crossorigin="anonymous" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('/js/jquery.form.js') }}"></script>
<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script> 
<script type="text/javascript" src="{{ URL::asset('/js/portfolio.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/icon.js') }}"></script> 
<script src="https://cdn.jsdelivr.net/npm/typeit@6.0.3/dist/typeit.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/particles.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/app_particles.js') }}"></script>
@stop
