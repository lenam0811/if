<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return \view('home');
    }
    public function about(){
        return 'about';   
    }
    public function contact(){
        return 'contact';   
    }
    public function news(){
        return 'news';   
    }
    public function newsDetail(){
        return 'newsDetail';   
    }   
    public function service(){
        return 'service';   
    }
    public function serviceDetail(){
        return 'serviceDetail';   
    }
}