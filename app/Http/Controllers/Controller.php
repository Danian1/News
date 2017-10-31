<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	function insert(Request $req){
		
		$link=$req->input('link');
		$title=$req->input('title');
		$desc=$req->input('desc');
		$source=$req->input('source');
		$path = $req->input('img');
		
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		
		$data=array('link'=>$link,'title'=>$title,'desc'=>$desc,'source'=>$source, 'img'=>$base64);
		DB::table('news')->insert($data);
		return response()->redirectTo('/');
	
	}
	
	function getData(){
		$data['data']=DB::table('news')->orderBy('datatime', 'desc')->get();
		if(count($data)>0)
		{
			return view('index',$data);
		}
		else
		{
			return view('index');
		}
	}
	
}
