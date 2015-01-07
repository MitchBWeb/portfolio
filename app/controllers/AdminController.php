<?php

class AdminController extends BaseController{
	
	public function showLogin(){
		// show the form
		return View::make('admin/login');
	}

	public function doLogin(){
		// process the form
		
		// Create some rules for the form:
		$rules = array(
			'email' => 'required|email', // Make sure the email is a real email
			'password' => 'required|alphaNum' // The password may only be alpha numeric characters
		);
		
		// Run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(),$rules);
		
		// If the validator fails send back to the login form.
		if($validator->fails()){
			// Send user back to the login page.
			// withErrors: will show the errors where specified in the form.
			// withInput: will place all the values from the form into the form except the password.
			return Redirect::to('admin')->withErrors($validator)->withInput(Input::except('password'));
		}
		else{
			// Get the users data from the form
			$user_data = array(
				'email'     => Input::get('email'),
				'password'  => Input::get('password')
			);
			
			//If the user is in the databse send them to the portfolio page.
			if(Auth::attempt($user_data)){
				echo 'SUCCESS';
			}
			else{
				//if the users info fails send them back to the login page
				return 'No dice!';
			}
		}
	}
}


?>