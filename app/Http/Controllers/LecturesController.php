<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecturesController extends Controller
{
    public function index(){
    	return view('Lectures.index');
    }
    public function show($language, $id){
    	return view('Lectures.show', ['id' => $id]);
    }
}

