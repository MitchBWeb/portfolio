<?php
	
	class PagesController extends BaseController{
		
		public function index(){
			return View::make('home');
		}
		
		public function about(){
			return View::make('about');
		}
		
	}

?>