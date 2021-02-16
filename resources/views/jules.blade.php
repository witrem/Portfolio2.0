@extends('simple-layout')
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
@section('body')
    
    <section  class="section is-medium">
    <div class="container has-background-white card">
         <div class="columns is-mobile is-centered">
            <div class="column is-half twitch_container">
               <h1 class="twitch_title">Ponce en live ?</h1>
            </div>
         </div>
         <div class="columns is-mobile is-centered">
           <div class="column">
             <div id="twitch-embed"></div>
           </div>
         </div> 
     </div>
    </section>
   
    <script type="text/javascript" src="{{ URL::asset('js/sopra.js') }}"></script>

    <script type="text/javascript">
      new Twitch.Embed("twitch-embed", {
        width: "100%",
        height: "100%",
        channel: "ponce",
      });
    </script> 
@stop
 