$(document).ready(function($) {

   new TypeIt('#anim1', {
       strings: ['Alexis Legeay', 'Administrateur Systèmes & Réseaux'],
       speed: 50,
       waitUntilVisible: true,
   }).go();

   (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
       $notification = $delete.parentNode;

       $delete.addEventListener('click', () => {
           $notification.parentNode.removeChild($notification);
       });
   });


   $(".close").click(function() {
      
      animateCSS('.modal-content', 'backOutUp').then((message) => {
        $(".modal").removeClass("is-active");
        unFreeze();
      }) 
       
   });


   $(document).on('click', '.competence', function(e) {
       var id = $(this).attr('data-id');

       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });

       $.ajax({
           type: 'POST',
           url: '/competence',
           data: {
               id_competence: id
           },
           success: function(data) {
               $('#titre').html(data.competence.titre);
               $('#contenu').html(data.competence.description);
               animateCSS('.modal-content', 'backInDown');
               $(".modal").addClass("is-active");
               
               freeze();

           }
       });
   });

   document.querySelector("#contact").addEventListener("submit", function(e) { // il est impératif de commencer avec cette méthode qui va empêcher le navigateur d'envoyer le formulaire lui-même
       e.preventDefault();
       $form = $(e.target);

       var $submitButton = $form.find(':submit');
       $submitButton.html('<i class="fas fa-spinner fa-pulse"></i>');
       $submitButton.prop('disabled', true);

       // ajaxSubmit du plugin ajaxForm nécessaire pour l'upload du form
       $form.ajaxSubmit({
           type: 'post',
           success: function(data) {
               $("#confirm").attr("class", "field");
               // $('#confirm').html('');
               console.log(data);
               if (data === true) {
                   $('form').trigger("reset");
                   $("#confirm").attr("class", "field notification is-success");
                   $('#confirm').html('Merci, je vous répondrais au plus vite !');
               } else {
                   $("#confirm").attr("class", "field notification is-danger");
                   $('#confirm').html('Aie, il y a une erreur, merci de renvoyer votre message plus tard');
               }

               $submitButton.html('Envoyer');
               $submitButton.prop('disabled', false);


           },
           error: function(jqXHR, status, error) {

               $("#confirm").attr("class", "field notification is-danger");

               $('#confirm').html('Aie, il y a une erreur, merci de renvoyer votre message plus tard');

               $submitButton.html(button.data('label'));
               $submitButton.prop('disabled', false);

           }

       });
   });

});

$(function() {
   /**
    * Smooth scrolling to page anchor on click
    **/
   $("a[href*='#']:not([href='#'])").click(function() {
       if (
           location.hostname == this.hostname &&
           this.pathname.replace(/^\//, "") == location.pathname.replace(/^\//, "")
       ) {
           var anchor = $(this.hash);
           anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) + "]");
           if (anchor.length) {
               $("html, body").animate({
                   scrollTop: anchor.offset().top
               }, 1500);
           }
       }
   });
});

 // Freeze scrollbars
 var freeze = function () {
   document.getElementsByTagName('html')[0].style.overflow = "hidden"
   document.getElementsByTagName('body')[0].style.overflowY = "scroll";
};

var unFreeze = function () {
   document.getElementsByTagName('html')[0].style.overflow = ""
   document.getElementsByTagName('body')[0].style.overflowY = "";
};

const animateCSS = (element, animation, prefix = 'animate__') =>
  // We create a Promise and return it
  new Promise((resolve, reject) => {
    const animationName = `${prefix}${animation}`;
    const node = document.querySelector(element);

    node.classList.add(`${prefix}animated`, animationName);

    // When the animation ends, we clean the classes and resolve the Promise
    function handleAnimationEnd() {
      node.classList.remove(`${prefix}animated`, animationName);
      node.removeEventListener('animationend', handleAnimationEnd);

      resolve('Animation ended');
    }

    node.addEventListener('animationend', handleAnimationEnd);
  });
