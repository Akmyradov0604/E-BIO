<?php

namespace App\Http\Controllers;
use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function quiz(){
    	$tema = "cell";
    	return view('Quiz.quiz');
    }
    public function index($language, $theme){
    	return view('Quiz.index', ['theme' => $theme]);
    }
    public function numb($language,$theme, $num){
    	return view('Quiz.Tests.test', ['num' => $num, 'theme' => $theme]);
    }
}
