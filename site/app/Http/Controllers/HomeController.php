<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\Identity;
use App\BirthCertificate;
use Auth;
use App\Wallet;
use App\Election;
use App\RationCard;
use Mail;
use App\Mail\ContactMail;
use App\Mail\ThankMail;



class HomeController extends Controller
{
    public function about()
    {
        return view('about-us');
    }
     public function contact()
    {
        return view('contact-us');
    }
    public function web()
    {
        return view('web');
    }
    public function app()
    {
        return view('app');
    }
    public function soft()
    {
        return view('soft');
    }
    public function seo()
    {
        return view('seo');
    }
    public function services()
    {
        return view('services');
    }
      public function project()
    {
        return view('project');
    }
    
    public function mail(Request $request){
      $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'message'=>'required',
         ]);
      Mail::to('sadcompiler@gmail.com')->send(new ContactMail($request));
         Mail::to($request['email'])->send(new ThankMail($request));
        return redirect()->back();
      
   }
    
}