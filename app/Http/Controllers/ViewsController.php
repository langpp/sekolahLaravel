<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ViewsController extends Controller
{

    public function dashboard(){
    	$title = ["title" => "Dashboard Admin"];
    	return view('dashboard', $title);
    }

    public function index(){
    	$title = ["title" => "Log In"];
    	return view('login', $title);
    }
}
