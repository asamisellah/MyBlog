<?php

// namespace creates a container tha restricts the scope of this contriller to app\http\controllers

namespace App\Http\Controllers;

// use - if you want the controller to access other files outside scope

 class PagesController extends Controller  {
 	
 	public function getIndex(){
 		return view('pages/index'); 	}

 	public function getAbout(){
 		$first = "Asami";
 		$last = "Rachael";
 		$email = "asami@gmail.com";

 		$fullname = $first . " " . $last;

 		$data = [];

 		$data['email'] = $email;
 		$data['fullname'] = $fullname;

 		return view('pages/about')->withData($data);

 		// return view('pages/about')->withFullname($fullname)->withEmail($email);
 	}

 	public function getContact(){
 		return view('pages/contact');
 		#return "Hello Contact Page";
 	}

 	public function postAbout(){
 		# code...
 	}
 }
 # process variable data or params
 # talk to the model
 # receive from the model
 # compile or process data from the model if needed
 # pass that data to the correct view
