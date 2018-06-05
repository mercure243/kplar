<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Task;

/*
Route::get('/', function () {
	//$names = DB::table('tasks')->get();
	$names = Task::all();
    return view('welcome', compact('names'));
});
*/

/*
Route::get('/tasks', function () {
	
	$tasks = DB::table('tasks')->get();
	//dd($names);
    return view('tasks/index', compact('tasks'));
});
*/

/*
App::bind('App\Billing\Stripe', function(){
	return new \App\Billing\Stripe(config('services.stripe.secret'));
});

//$stripe = App::make('App\Billing\Stripe');
$stripe = resolve('App\Billing\Stripe');
//$stripe = app('App\Billing\Stripe');
*/

/*
App::singleton('App\Billing\Stripe', function(){
	return new \App\Billing\Stripe(config('services.stripe.secret'));
});

App::instance('App\Billing\Stripe', $stripe);
*/

/*
$stripe = resolve('App\Billing\Stripe');
dd($stripe);
*/

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostsController@index');

//Route::get('/posts/{post}', 'PostsController@show');

Route::get('/blog/tags/{tag}', 'TagsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/blog', 'BlogsController@index')->name('home');

Route::get('/blog/{post}', 'BlogsController@show');

Route::post('/blog/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

/*
Route::get('/tasks/{task}', function ($id) {
	$task = Task::find($id);
	//$task = DB::table('tasks')->find($id);
	//dd($names);
    return view('tasks/show', compact('task'));
});
*/

Route::get('/about', function () {
    return view('about');
});

Route::get('/kpedit', function () {
    return view('kpedit');
});


/*
posts

GET /posts
GET /posts/create
POST /posts
GET /posts/{id}/edit
GET /posts/{id}
PATCH /posts/{id}
DELETE /posts/{id}

*/