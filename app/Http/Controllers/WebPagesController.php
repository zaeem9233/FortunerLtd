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
        echo 'contact us';
    }

    public function get_quote(){
        echo 'get_quote';
    }
}
