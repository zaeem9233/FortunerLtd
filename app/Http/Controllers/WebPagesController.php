<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Http\Requests\QuoteRequest;
use App\Mail\ContactUsMail;
use App\Mail\GetQuoteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebPagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function about_us(){
        echo 'About us';

    }

    public function why_us(){
        echo 'Why US';
    }

    public function contact_us(){
        return view('pages.contact-us');
    }

    public function contact_us_store(ContactUsRequest $request){
        Mail::to('info@domain.com')->send(new ContactUsMail($request));
        return response()->json(['success' => 'Message recieved, we will contact you shortly.']);
    }

    public function get_quote(){
        return view('pages.get-quote');
    }

    public function get_quote_store(QuoteRequest $request){
        Mail::to('info@domain.com')->send(new GetQuoteMail($request));
        return response()->json([
            'success'   => 'Form submitted, we will contact you shortly.'
        ]);
    }

    public function privacy_policy(){
        return view('pages.privacy-policy');
    }

    public function terms_and_conditions(){
        return view('pages.terms-and-conditions');
    }
}
