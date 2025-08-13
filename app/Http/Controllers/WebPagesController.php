<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.home');
    }

    public function get_quote(){
        echo 'get_quote';
    }

    public function privacy_policy(){
        echo 'PP';
    }

    public function terms_and_conditionss(){
        echo 'TC';
    }
}
