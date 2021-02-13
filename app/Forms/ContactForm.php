<?php

namespace BookStack\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class ContactForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('prenom', Field::TEXT, [
            'rules' => 'required|min:3','attr' => ['class' => 'form-input input-group-text'],['aria-label' => 'Votre prénom']
        ])
        ->add('nom', Field::TEXT, [
            'rules' => 'required|min:5','attr' => ['class' => 'form-input input-group-text'],['aria-label' => 'Votre nom']
        ])
        ->add('mail', Field::EMAIL, [
            'rules' => 'required|min:5','attr' => ['class' => 'form-input input-group-text'],['aria-label' => 'Votre email']
        ])
        ->add('message', Field::TEXTAREA, [
            'rules' => 'required|max:5000','attr' => ['class' => 'contact form-textarea'],['aria-label' => 'Votre  message']
        ])
        ->add('Envoyer', 'submit', ['attr' => ['class' => 'button is-info send-form'],['aria-label' => 'Bouton envoyer']]);


        $formOptions = [
            'id' => 'contact'
        ]; 


        }  
}
