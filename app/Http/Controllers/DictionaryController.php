<?php

namespace App\Http\Controllers;
use App\Dictionary;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
	public function index(){
		$words = Dictionary::all()->sortBy('name');
		return view('Dictionary.index', ['words' => $words]);
	}

	public function create(){
		return view('Dictionary.create');
	}

	public function store(){
		$word = new Dictionary(); 
		
		$word->name = request('name');
		$word->description = request('description');	

		$word->save();

		return redirect(route('dictionary', app()->getLocale()));
	}

	public function search(Request $request){
		if($request->ajax()){
			$output ="";
			$words=Dictionary::where('name', 'LIKE', '%'.$request->search."%")->get();
			if($words){
				foreach ($words as $key => $word) {
					$output.='<div class="card">'.
						'<button class="btn btn-link" style = "color: #33e333;" type="button" data-toggle="collapse" data-target="#'.$word->id.'" aria-expanded="true" aria-controls="'.$word->id.'">'.
								'<div class="card-header" id="headingOne" style="display: flex;">'.
									'<h5>'
										. $word->name .
									'</h5>'.
								'</div>'.
								'</button>'.

						'<div id="'.$word->id.'" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">'.
							'<div class="card-body">'.
								'<p class="descript">'
									. $word->description .
								'</p>'.
							'</div>'.
						'</div>'.
					'</div>';
				
				}
				return Response($output);
			}
		}
	}
}
