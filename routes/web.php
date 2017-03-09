<?php
use App\Task;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!


|	php artisan route:list 
*/

Route::get('/', 'PostsController@index')->name('home');


//register controller
Route::resource('register','RegisterController');
// Route::get('/register','RegisterController@create');
// Route::post('/register','RegisterController@store');

//sessions Controller
Route::resource('/login','SessionsController');
// Route::get('/login','SessionsController@create');
// Route::post('/login','SessionsController@store');
// Route::get('/logout','SessionsController@destroy');

//post controller

Route::resource('/posts','PostsController');

// Route::get('/posts','PostsController@index');
// Route::get('/posts/create','PostsController@create');
// Route::post('/posts/create','PostsController@store');

// // Route::get('/posts/{id}','PostsController@show');
// Route::post('/posts/{id}/edit','PostsController@update');
// Route::get('/posts/{id}/delete','PostsController@destroy');

//Comment Controller

Route::resource('/comments','CommentsController');
// Route::post('/comments/create','CommentsController@store');
// Route::get('/comments/{id}/delete','CommentsController@destroy');

//admin Controller

Route::group(['middleware' => 'admin','prefix' =>'admin',],function(){ //middleware with router

	Route::get('/','AdminController@index')->name('admin');
	Route::get('users','AdminController@users');
	Route::get('usersdata','AdminController@usersData');

	Route::get('posts','AdminController@posts');
	Route::get('postsdata','AdminController@postsData');
	Route::get('posts/csv','AdminController@postsExcel')->name('postcsv');


	Route::get('comments','AdminController@comments');
	Route::get('commentsdata','AdminController@commentsData');

});

// Route::get('/admin','AdminController@index')->name('admin');

// Route::get('/admin/users','AdminController@users');
// Route::get('/admin/usersdata','AdminController@usersData');

// Route::get('/admin/posts','AdminController@posts');
// Route::get('/admin/postsdata','AdminController@postsData');
// Route::get('/admin/posts/csv','AdminController@postsExcel')->name('postcsv');


// Route::get('/admin/comments','AdminController@comments');
// Route::get('/admin/commentsdata','AdminController@commentsData');

//export csv

Route::get('/csv','CsvController@excel')->name('csv'); //test excel


// test ajax

// Route::get('/ajax', function(){
// 	return view('ajax');
// });

// Route::get('/getRequest',function ()
// {
// 	if(Request::ajax()){
// 		return 'Request Load haha';
// 	}
// });

// Route::post('/register',function ()
// {
// 	if(Request::ajax()){
// 		return Response::json(Request::all());
// 	}
// });

// Route::get('/tasks/{task_id?}',function($task_id){
//     $task = Task::find($task_id);

//     return Response::json($task);
// });

// Route::post('/tasks',function(Request $request){
//     $task = Task::create($request->all());

//     return Response::json($task);
// });

// Route::put('/tasks/{task_id?}',function(Request $request,$task_id){
//     $task = Task::find($task_id);

//     $task->task = $request->task;
//     $task->description = $request->description;

//     $task->save();

//     return Response::json($task);
// });

// Route::delete('/tasks/{task_id?}',function($task_id){
//     $task = Task::destroy($task_id);

//     return Response::json($task);
// });

// Route::get('/', function () {
//     $tasks = Task::all();

//     return View::make('welcome')->with('tasks',$tasks);
// });