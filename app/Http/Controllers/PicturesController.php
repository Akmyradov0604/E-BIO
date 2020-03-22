<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PicturesController extends Controller
{
    public function index(){
    	return view('Pictures.index');
    }
    public function human(){
    	return view('Pictures.human');
    }
    public function cell(){
    	return view('Pictures.cell');
    }
    public function plants(){
    	return view('Pictures.plants');
    }
}
