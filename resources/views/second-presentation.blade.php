<section id="presentation" class="section has-background-white is-medium">
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
                  <figure class="image is-128x128 is-inline-block icon-presentation"><img
                     src="{{ asset('images/eye.png') }}" alt="Icone d'oeil"></figure>
                  <br><br>
               </div>
               <h5 class="title is-5 is-spaced">Curieux</h5>
               <p class="subtitle is-6">Chaque jour je m'efforce d'etre à jour sur les dernieres actualités IT, rester en alerte sur les dernieres sorties me permet d'etre toujours à jour dans le domaine.
               </p>
            </div>
            <div class="column">
               <div class="card-image has-text-centered">
                  <figure class="image is-128x128 is-inline-block icon-presentation"><img
                     src="{{ asset('images/puzzle.png') }}" alt="Icone de Puzzle"></figure>
                  <br><br>
               </div>
               <h5 class="title is-5 is-spaced">Organisé</h5>
               <p class="subtitle is-6">L'organisation doit faire partie intégrante d'un SysAdmin, prioriser ses taches, planifier les prochaines évolution tout en permettant assurer le fonctionnement opérationnel d'une infrastructure.
               </p>
            </div>
            <div class="column">
               <div class="card-image has-text-centered">
                  <figure class="image is-128x128 is-inline-block icon-presentation"><img
                     src="{{ asset('images/rocket.png') }}" alt="Icone de fusée"></figure>
                  <br><br>
               </div>
               <h5 class="title is-5 is-spaced">Autodidacte</h5>
               <p class="subtitle is-6"> J'aime entreprendre régulièrement de nouvelles choses et explorer de nouvelles technologies afin de parfaire mes connaissances dans le monde vaste de l'informatique ! 
               </p>
            </div>
         </div>
       <!--  @isset($news->page_date) -->
         <div class="columns">
            <div class="column">
               <div class="notification news">
                  <button class="delete" aria-hidden="true"></button>
                  <strong> [{{$news->page_date}}] - Nouvel article ! <br> {{ $news->name }}, Découvrez le <a href="https://alexislegeay.fr/books/{{$news->book_name}}/page/{{$news->slug}}">ici</a></strong>
               </div>
            </div>
         </div>
       <!--   @endisset -->
      </div>
   </section>