@extends('simple-layout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="{{ versioned_asset('dist/main.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
{!! NoCaptcha::renderJs() !!}
<script type="text/javascript" src="{{ URL::asset('js/icon.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/typeit@6.0.3/dist/typeit.min.js"></script>
<noscript>Votre navigateur ne supporte pas JavaScript !</noscript>
@section('body')
<div id="landing-page">
   <section class="hero-container has-overlay-image">
      <div class="hero is-medium back" id="particles-js">
         <div class="hero-body">
            <div class="container is-small has-text-centered">
               <div class="columns">
                  <div class="column is-half is-offset-one-quarter">
                     <h1 id="anim1" class="title is-2 is-spaced"></h1>
                     <div class="card-content is-flex is-horizontal-center">
                        <figure class="image"><img src="{{ asset('images/profil.png') }}"></figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section  class="section has-background-white is-medium">
      <div class="container is-small has-text-centered">
         <div class="columns">
            <div class="column is-half is-offset-one-quarter">
               <h1 class="title is-spaced">Qui suis-je ?</h1>
               <h5 class="subtitle  is-spaced">
                  Alexis {{$age}} ans, étudiant passionné en 4ème année à l'EPSI Nantes en spécialité infrastructure système et réseaux 
               </h5>
            </div>
         </div>
         <div class="columns">
            <div class="column">
               <div class="card-image has-text-centered">
                  <figure class="image is-128x128 is-inline-block"
                     style="background-color: #12415C; border-radius: 50%; padding: 30px;"><img
                     src="{{ asset('images/eye.png') }}"></figure>
                  <br><br>
               </div>
               <h5 class="title is-5 is-spaced">Curieux</h5>
               <p class="subtitle is-6">Chaque jour je m'efforce d'etre à jour sur les dernieres actualités IT, rester en alerte sur les dernieres sorties me permet d'etre toujours à jour dans le domaine.
               </p>
            </div>
            <div class="column">
               <div class="card-image has-text-centered">
                  <figure class="image is-128x128 is-inline-block"
                     style="background-color: #12415C; border-radius: 50%; padding: 30px;"><img
                     src="{{ asset('images/puzzle.png') }}"></figure>
                  <br><br>
               </div>
               <h5 class="title is-5 is-spaced">Organisé</h5>
               <p class="subtitle is-6">L'organisation doit faire partie intégrante d'un SysAdmin, prioriser ses taches, planifier les prochaines évolution tout en permettant assurer le fonctionnement opérationnel d'une infrastructure.
               </p>
            </div>
            <div class="column">
               <div class="card-image has-text-centered">
                  <figure class="image is-128x128 is-inline-block"
                     style="background-color: #12415C; border-radius: 50%; padding: 30px;"><img
                     src="{{ asset('images/rocket.png') }}"></figure>
                  <br><br>
               </div>
               <h5 class="title is-5 is-spaced">Autodidacte</h5>
               <p class="subtitle is-6"> J'aime entreprendre régulièrement de nouvelles choses et explorer de nouvelles technologies afin de parfaire mes connaissances dans le monde vaste de l'informatique ! 
               </p>
            </div>
         </div>
         <div class="columns">
            <div class="column">
               <div class="notification news">
                  <button class="delete"></button>
                  <strong> [{{$news->page_date}}] - Nouvel article ! <br> {{ $news->name }}, Découvrez le <a href="https://test.alexislegeay.fr/books/{{$news->book_name}}/page/{{$news->slug}}">ici</a></strong>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section  class="section has-background-light">
      <div class="container  is-small has-text-centered">
         <div class="columns">
            <div class="column is-half is-offset-one-quarter">
               <h1 class="title is-spaced">Compétences</h1>
            </div>
         </div>
         <div class="columns">
            <div class="column">
               <article class="BundleCard card">
                  <header class="card-header">
                     <p class="card-header-title">
                        Développement
                     </p>
                  </header>
                  <div class="card-content is-flex is-horizontal-center">
                     <div class="columns">
                        <div class="column">
                           <figure class="image is-48x48 is-inline-block tooltip competence truc"
                              data-tooltip="Git" data-id="1" ><img src="{{ asset('images/git.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="9" data-tooltip="C#"><img
                              src="{{ asset('images/csharp.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence truc" data-id="10" data-tooltip="Javascript" ><img
                              src="{{ asset('images/js.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence truc" data-id="11" data-tooltip="PHP" ><img
                              src="{{ asset('images/php.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block  tooltip competence truc" data-id="12" data-tooltip="Java" ><img
                              src="{{ asset('images/java.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence truc" data-id="16" data-tooltip="HTML" ><img
                              src="{{ asset('images/html.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence truc" data-id="17" data-tooltip="SQL" ><img
                              src="{{ asset('images/sql.png') }}"></figure>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
            <div class="column">
               <article class="BundleCard card">
                  <header class="card-header">
                     <p class="card-header-title">Système</p>
                  </header>
                  <div class="card-content is-flex is-horizontal-center">
                     <div class="columns">
                        <div class="column">
                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="3" data-tooltip="Apache"><img
                              src="{{ asset('images/apache.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="2" data-tooltip="MariaDB" ><img
                              src="{{ asset('images/mariadb.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="5" data-tooltip="Windows" ><img
                              src="{{ asset('images/windows.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="6" data-tooltip="VmWare" ><img
                              src="{{ asset('images/vmware.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="21" data-tooltip="Nginx" ><img
                              src="{{ asset('images/nginx.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="20" data-tooltip="Proxmox" ><img
                              src="{{ asset('images/proxmox.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="6" data-tooltip="Docker" ><img
                              src="{{ asset('images/docker.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="6" data-tooltip="Gitlab" ><img
                              src="{{ asset('images/gitlab.png') }}"></figure>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
         </div>
         <div class="columns">
            <div class="column">
               <article class="BundleCard card">
                  <header class="card-header">
                     <p class="card-header-title">Réseau</p>
                  </header>
                  <div class="card-content is-flex is-horizontal-center">
                     <div class="columns">
                        <div class="column">
                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="4" data-tooltip="Cisco" ><img
                              src="{{ asset('images/cisco.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="19" data-tooltip="Sophos" ><img
                              src="{{ asset('images/sophos.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="18" data-tooltip="Pfsense" ><img
                              src="{{ asset('images/pfsense.png') }}"></figure>

                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="22" data-tooltip="Debian" ><img
                              src="{{ asset('images/debian.png') }}"></figure>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
            <div class="column">
               <article class="BundleCard card">
                  <header class="card-header">
                     <p class="card-header-title">Supervision</p>
                  </header>
                  <div class="card-content is-flex is-horizontal-center">
                     <div class="columns">
                        <div class="column">
                           <figure class="image modal-button is-48x48 is-inline-block tooltip competence"
                              data-id="18" data-target="modal-id" data-tooltip="Zabbix"><img src="{{ asset('images/zabbix.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="1" data-tooltip="ELK"><img
                              src="{{ asset('images/elk.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block tooltip competence" data-id="7" data-tooltip="Grafana" ><img
                              src="{{ asset('images/grafana.png') }}"></figure>
                           <figure class="image is-48x48 is-inline-block competence" data-id="8" data-tooltip="PRTG"><img
                              src="{{ asset('images/prtg.png') }}"></figure>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
         </div>
         <div class="columns">
            <div class="column">
               <a href="{{ asset('cv/CV_AlexisLegeay.pdf') }}" id="cv" class="button is-medium" download="">
               <span class="icon">
               <i class="fas fa-file-pdf"></i>
               </span>
               <span>Besoin de mon CV ?</span>
               </a>
            </div>
         </div>
      </div>
</div>
</section>
<section class="section has-background-white is-medium">
   <!-- <div class="container  is-small has-text-centered"> -->
      <div class="columns">
         <div class="column is-half   is-offset-one-quarter has-text-centered">
            <h1 class="title is-spaced">Experiences & Formations</h1>
         </div>
      </div>
      <div class="timeline is-centered">
         <header class="timeline-header">
            <span class="is-medium is-primary"><i class="fas fa-school"></i> Lycée</span>
         </header>
         <div class="timeline-item is-primary">
            <div class="timeline-marker is-icon">
               <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="timeline-content">
               <p class="heading">Juillet</p>
               <p>Obtention du BAC STI2D Option Systeme Numérique & Informatique Mention Très Bien</p>
            </div>
         </div>
         <header class="timeline-header">
            <span class="is-primary">2018</span>
         </header>
         <div class="timeline-item is-primary">
            <div class="timeline-marker is-icon">
               <i class="fas fa-briefcase"></i>
            </div>
            <div class="timeline-content">
               <p class="heading">Mai-Juin</p>
               <p>Stage Administration Réseau chez Lengow</p>
            </div>
         </div>
         <header class="timeline-header">
            <span class="is-primary">2019</span>
         </header>
         <div class="timeline-item is-primary">
            <div class="timeline-marker is-icon">
               <i class="fas fa-briefcase"></i>
            </div>
            <div class="timeline-content">
               <p class="heading">Janvier-Février</p>
               <p>Stage Administration Réseau chez Woodbrass</p>
            </div>
         </div>
         <div class="timeline-item is-primary">
            <div class="timeline-marker is-icon">
               <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="timeline-content">
               <p class="heading">Mai</p>
               <p>Obtention du BTS SIO Option SISR</p>
            </div>
         </div>
         <div class="timeline-item is-primary">
            <div class="timeline-marker is-icon">
               <i class="fas fa-building"></i>
            </div>
            <div class="timeline-content">
               <p class="heading">Septembre</p>
               <p>Technicien Support Client en Alternance chez Dynamips</p>
            </div>
         </div>
         <div class="timeline-item is-primary">
            <div class="timeline-marker is-icon">
               <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="timeline-content">
               <p class="heading">Juillet</p>
               <p>Obtention du Titre ASRBD avec les félicitations du jury</p>
            </div>
         </div>
         <header class="timeline-header">
            <span class="is-medium is-primary">...Et Apres ?</span>
         </header>
      </div>
   <!-- </div> -->
</section>
<section id="contact" class="section has-background-light">
   {!! form_start($form,$formOptions = [])!!}
   <div class="container is-small">
      <div class="columns">
         <div class="column is-half is-offset-one-quarter has-text-centered">
            <h1 class="title is-spaced">Une mission ? Je suis là !</h1>
         </div>
      </div>
   <div class="columns is-centered">
      <div class="column is-half">
       <div class="has-background-white card fiche">
         <div id="contact" class="card-content is-half is-flex is-horizontal-center">
            <div class="columns is-centered is-desktop">
               <div class="column">
                  <div class="field">
                     <label class="label">Nom</label>
                     <div class="control ">
                        {!! form_widget($form->nom) !!}
                     </div>
                  </div>
                  <div class="field">
                     <label class="label">Prénom</label>
                     <div class="control has-icons-left has-icons-right">
                        {!! form_widget($form->prenom) !!}
                        <span class="icon is-small is-left">
                        </span>
                        </span>
                     </div>
                  </div>
                  <div class="field">
                     <label class="label">Email</label>
                     <div class="control">
                        {!! form_widget($form->mail) !!}
                        <span class="icon is-small is-left">
                        </span>
                        <span class="icon is-small is-right">
                        </span>
                     </div>
                  </div>
               </div>
               <div class="column">
                  <div class="field">
                     <label class="label">Message</label>
                     <div class="control">
                        {!! form_widget($form->message) !!}
                     </div>
                  </div>
               </div>
            </div>
            <br>
         </div>
         <div class="is-flex is-horizontal-center">
            <div class="columns is-centered">
               <div class="column">
                  {!! NoCaptcha::display() !!}
                  <div id="confirm" class="field"></div>
                  <div class="field">
                     <div class="control">
                        <div class="buttons is-centered ergo">
                           {!! form_widget($form->Envoyer) !!}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
</div>
      {!! form_end($form) !!}
   </div>
</section>
<section id="reseaux" class="section has-background-white is-medium has-text-centered">
   <div class="container is-small">
      <div class="card-content  is-horizontal-center">
         <div class="columns is-centered">
            <div class="column is-narrow">
               <h1 class="title is-spaced">Vous voulez me suivre ? C'est juste ici !</h1>
            </div>
         </div>
      </div>
      <div class="columns is-centered">
         <div class="card-content is-flex is-horizontal-center">
            <div class="column">
               <div class="card-image has-text-centered">
                  <figure class="image is-128x128 is-inline-block">
                     <a href="https://www.linkedin.com/in/alexis-legeay-6773aa140/">
                     <img class="is-rounded " src="{{ asset('images/linkedin.png') }}">
                     </a>
                  </figure>
                  <br>
                  <h5 class="title is-5 is-spaced">Linkedin</h5>
               </div>
            </div>
            <div class="column">
               <div class="card-image has-text-centered">
                  <figure class="image is-128x128 is-inline-block">
                     <a href="https://github.com/witrem">
                     <img class="is-rounded " src="{{ asset('images/github.png') }}">
                     </a>
                  </figure>
                  <br>
                  <h5 class="title is-5 is-spaced">GitHub</h5>
               </div>
            </div>
            <div class="column">
               <div class="card-image has-text-centered">
                  <figure class="image is-128x128 is-inline-block">
                     <a href="https://t.me/joinchat/AAAAAFXEvWJ9_vhQ8_Z2xg">
                     <img class="is-rounded " src="{{ asset('images/telegram.png') }}">
                     </a>
                  </figure>
                  <br>
                  <h5 class="title is-5 is-spaced">Telegram</h5>
               </div>
            </div>
            <div class="column">
               <div class="card-image has-text-centered">
                  <figure class="image is-128x128 is-inline-block">
                     <a href="https://discord.gg/VxYXsaa">
                     <img class="is-rounded " src="{{ asset('images/discord.png') }}">
                     </a>
                  </figure>
                  <br>
                  <h5 class="title is-5 is-spaced">Discord</h5>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</div>
<div class="modal">
   <div class="modal-background"></div>
   <div class="modal-content">
      <header class="modal-card-head">
         <p class="modal-card-title" id="titre"></p>
      </header>
      <section class="modal-card-body" id="contenu">
      </section>
      <footer class="modal-card-foot">
         <div class="button is-info close is-rounded">OK</div>
      </footer>
   </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/particles.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/app_particles.js') }}"></script>
<script crossorigin="anonymous" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('/js/jquery.form.js') }}"></script>
<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('/js/portfolio.js') }}"></script>
@stop
