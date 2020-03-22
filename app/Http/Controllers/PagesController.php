<?php

namespace App\Http\Controllers;
use App\Dictionary;
use Illuminate\Http\Request;
class PagesController extends Controller
{
    public function home(){
    	return view('welcome');
    }
    
    public function about(){
    	return view('about');
    }
    public function quiz(){
    	return view('Quiz.quiz');
    }

    
}
