@extends('simple-layout')
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<body class="relative">
@section('body')
    
    <section  class="section is-medium">
    <div class="container has-background-white card">
         <div class="columns is-mobile is-centered">
            <div class="column is-half">
               <h1 class="title is-spaced has-text-centered">On part en live ?</h1>
            </div>
         </div>
         <div class="columns is-mobile is-centered">
           <div class="column">
             <div id="twitch-embed"></div>
           </div>
         </div> 
     </div>
    </section>
   
    <script src="https://embed.twitch.tv/embed/v1.js"></script>

   
    <script type="text/javascript">
      new Twitch.Embed("twitch-embed", {
        width: "100%",
        height: "100%",
        channel: "witrem",
      
       
      });
    </script> 
@stop
    </body>
  </html>