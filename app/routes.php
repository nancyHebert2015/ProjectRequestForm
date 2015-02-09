
<?php




// Change Blade Delimiters
// ~~~~~~~~~~~~~~~~~~~~
 
// This can be placed anywhere you wish after all the Laravel initializing has completed (for quick and easy configuration, dropping it into the Routes.php file may be simplest)
 
Blade::setContentTags('<%', '%>'); // for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); // for escaped data
 
//See more at: http://laravelsnippets.com/snippets/using-laravel-blade-with-angularjs-templates-redux-alternate-method#sthash.kZsRHW4b.dpuf



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




Route::get('hello', function()
{


    
    // $response = '{"employees":[
    // {"firstName":"John", "lastName":"Doe"},
    // {"firstName":"Anna", "lastName":"Smith"},
    // {"firstName":"Peter", "lastName":"Jones"}
    // ]}';

    $myArray = array( 
        "firstName" => "John",
        "lastName" => "Doe"
    );
 

	
   return Response::json($myArray);
   


//     return '{"employees":[
//     {"firstName":"John", "lastName":"Doe"},
//     {"firstName":"Anna", "lastName":"Smith"},
//     {"firstName":"Peter", "lastName":"Jones"}
// ]}';



});



//route to redirect the root to the login
Route::get('/', array('uses' => 'HomeController@redirectRootToLogin'));


Route::get('dashboard', function()
{
    return View::make('pages.home');
});

Route::get('projects', function()
{
    return View::make('pages.home');
});


Route::get('dashboard/projects/{id}', function()
{
    return View::make('pages.home');
});





//route to show the login form
Route::get('admin', array('uses' => 'HomeController@showLogin'));

 
//route to process the login form
Route::post('admin', array('uses' => 'HomeController@doLogin'));

//this is for the logout button
Route::get('logout', array('uses' => 'HomeController@doLogout'));



Route::filter('csrf', function()
{
   $token = Request::header('X-CSRF-Token') ?: Input::get('_token');
   if (Session::token() !== $token) {
      throw new Illuminate\Session\TokenMismatchException;
   }
});





// REST API ROUTES ==================================  
Route::group(array('prefix' => 'api'), function() {
    
    Route::get('projects', array('uses' => 'ProjectsController@index'));
    Route::get('projects/{id}', array('uses' => 'ProjectsController@show'));
    Route::put('projects/{id}', array('uses' => 'ProjectsController@update'));
    Route::delete('projects/{id}', array('uses' => 'ProjectsController@destroy'));
    
});



// // CATCH ALL ROUTE =============================  
// // all routes that are not home or api will be redirected to the frontend 
// // this allows angular to route them 
// App::missing(function($exception) { 
//     return View::make('admin'); 
// });


