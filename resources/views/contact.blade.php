<section id="contact" class="section has-background-light">
{!! form_start($form,$formOptions = [])!!}
   <!-- Titre -->
   <div class="container is-small">
      <div class="columns">
         <div class="column is-half is-offset-one-quarter has-text-centered">
            <h1 class="title is-spaced">Une mission ? Je suis là !</h1>
         </div>
      </div>
   </div>

   <div class="columns is-centered">
   
      <div class="column is-half">
         <div class="has-background-white card fiche">
            <div id="contact_box" class="card-content is-half is-flex is-horizontal-center">
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
</section>
