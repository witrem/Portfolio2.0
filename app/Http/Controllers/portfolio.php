<?php

namespace BookStack\Http\Controllers;
use Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use BookStack\Forms\ContactForm;
use Mail;
use Validator,Redirect,Response;
use DateTime;

class portfolio extends Controller
{

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(ContactForm::class, [
            'method' => 'POST',
            'url' => route('portfolio.store')
        ]);

        $anniv = new DateTime('1999-10-25 00:00:00');
        $age = $anniv->diff(new DateTime())->format('%Y');

       $news = DB::table('books as b')
       ->join('chapters as c','c.book_id','=','b.id')
       ->join('pages as p','p.book_id','=','b.id')
       ->select('p.created_at AS page_date','p.slug','p.name','b.name as book_name')
       ->orderBy('p.created_at', 'DESC')->first();
       $news->page_date = date('d/m/Y', strtotime($news->page_date));

            return view('portfolio', compact('form','news','age'));   
    }

    public function store(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create(ContactForm::class);

        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha'
        ]);

        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
       }

      

        $data = $request->all();;
      
        Mail::send('mail', ['data' =>  $data], function($message){
            $message->to('alexislegeay@hotmail.fr')->subject('Contact sur le site'); 
        });

        $form = $formBuilder->create(ContactForm::class, [
            'method' => 'POST',
            'url' => route('portfolio.store')
        ]);

        $envoi = 'Merci votre message est envoyé ! je vous répondrais au plus vite';
        return Response()->json(true);
    }

    public function competence(Request $request) {


       
        $data = $request->id_competence; // Recupere par l'ID

       
        
        $competence = DB::table('competences')->find($data);
        
        return Response()->json(array('competence' => $competence));

    }
  
}
