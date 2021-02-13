<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="Je suis Alexis Legeay, administrateur système et réseau étudiant à l'EPSI Nantes. Vous pouvez retrouver mon CV et les documents techniques que j'ai pu réaliser.">
<meta property="og:title" content="AlexisLegeay.fr" />
<meta property="og:type" content="Portfolio" />
<meta property="og:locale" content="fr_FR" />
{!! NoCaptcha::renderJs() !!}

<noscript>Votre navigateur ne supporte pas JavaScript !</noscript>

@extends('simple-layout')



<div class="modal">
   <div class="modal-background"></div>
   <div class="modal-content">
      <header class="modal-card-head">
         <p class="modal-card-title" aria-hidden="true" id="titre"></p>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-tooltip@3.0.2/dist/css/bulma-tooltip.min.css">
<script crossorigin="anonymous" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" src="https://code.jquery.com/jquery-3.3.1.min.js" defer></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.js" defer></script>
<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js" async></script> 
<script type="text/javascript" src="{{ URL::asset('/js/portfolio.js') }}" defer></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" async></script> 
<script src="https://cdn.jsdelivr.net/npm/typeit@6.0.3/dist/typeit.min.js" async></script>
<script type="text/javascript" src="{{ URL::asset('js/particles.js') }}" defer></script>
<script type="text/javascript" src="{{ URL::asset('js/app_particles.js') }}" defer></script>
@stop
