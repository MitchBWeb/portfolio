<?php

class BlogController extends BaseController{
	
	protected $blog;
	
	public function __construct(Blog $blog){
		$this->blog = $blog;
	}
	
	public function index(){
		$blogs = $this->blog->all();
		
		return View::make('blog/index', ['blogs' => $blogs]);
	}
	
	public function show($title){
		$title = $this->blog->whereTitle($title)->first(); // Select * from users where name = NAME LIMIT 1
	
		return View::make('blog/show', ['title' => $title]);
	}
	
	public function create(){
	
	}
	
	public function store(){
	
	}
}


?>