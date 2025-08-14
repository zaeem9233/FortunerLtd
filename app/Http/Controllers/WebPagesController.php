<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Mail\ContactUsMail;
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
        echo 'get_quote';
    }

    public function get_quote_store(Request $request){
        dd($request);
    }

    public function privacy_policy(){
        return view('pages.privacy-policy');
    }

    public function terms_and_conditions(){
        return view('pages.terms-and-conditions');
    }
}
