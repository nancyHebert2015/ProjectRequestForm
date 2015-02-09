<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	
	public function redirectRootToLogin()
	{
		//show the form
		return Redirect::to('admin');
	
	}
	

	
	public function showLogin()
	{
		//show the form
		return View::make('admin');
	
	}
	
	
	public function doLogin()
	{
		//process the form
		//validate the info, create rules for the inputs
		
		$rules = array(
			'email' => 'required|email', //make sure the email is an actual email
			'password' => 'required|alphaNum|min:5' //password can only be alphanumeric and has to be greater than 3 characters
			);
			
		//run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);
		
		//if the validator fails, redirect back to the form
		if ($validator->fails()) {
			
			return Redirect::to('admin')
				->withErrors($validator) //send back all errors to the login form 
				->withInput(Input::except('password')); //send back the input (not the password) so that we can repopulate the form
				
		
		
		} else {
		
			//create our user data for the authentication
			$userdata = array (
				
				'email' => Input::get('email'),
				'password' => Input::get('password')
				
				);
				
			//attempt to do the login
			if (Auth::attempt($userdata) ) {
				
				//validation successful
				//redirect the user to the secure section or whatever
				//return Redirect::to('secure');
				//for now we'll just echo success (even though echoing in a controller is bad)
				//echo('Success!');
				
				return Redirect::to('dashboard');
				//return View::make('pages.home');
				
				
				
				
			} else {
				
				//validation not successful, send back to form
				return Redirect::to('admin');
				
			}
				
			
			
		}
	
	
	
	
	}
	
	
public function doLogout() {
		
		Auth::logout(); //log the user out of your application
		return Redirect::to('admin');
	
				
				
	}
	
	
	
	
// public function authenticateUser()
// {
//     include (app_path() . "/lib/adldap/adLDAP.php");
//     $adldap = new adldap\adLDAP();

//     //get username from form
//     $username = Input::get('username');

//     //check if username/password passes auth
//     if ( $adldap->authenticate($username, Input::get('password') ) )
//     {
//         //I have an extra check to see if the user loggin in is in our staff ou... this allows me to identify staff over regular AD users.
//         if($adldap->user()->inGroup($username,"SIRKit Staff")) {
//             $ldap_user_info = $adldap->user()->info($username);
//             $ldap_user_name = $ldap_user_info[0]["displayname"][0];

//             //to take advantage of laravel's user object I add the user to the database of my app if they don't already exist. Adding them to my DB won't allow them to login as the auth method checks LDAP but it allows you to use the model

//             //check for user and create user object
//             $docs_user = User::find($username);
//             //if doesn't exist yet add them
//             if(!$docs_user) {
//                 $user = new User;
//                 $user->id = $username;
//                 $user->name = $ldap_user_name;
//                 $user->username = $username;
//                 $user->email = $ldap_user_info[0]["mail"][0];
//                 $user->save();
//                 $docs_user = User::find($username);
//             }
//             //log user in
//             Auth::login($docs_user);
//             //redirect
//             return Redirect::intended('home')->with('message', 'Login Success');
//         }

//     }
//     //login failed
//     return Redirect::route('home')->with('message', 'Login Failed <br /> Please Try Again');

// }
	

}
