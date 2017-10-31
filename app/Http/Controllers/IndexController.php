<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;

class IndexController extends Controller
{
    public function index(){
		return View('index');
	}
	 public function admin(){
		return view('admin');
	}
}
