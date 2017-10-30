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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/users', 'UserController@index'); // Retrieve all data from table user
Route::get('/users/{id}', 'UserController@show')->where('id', '[0-9]+'); // Retrieve user which corresponds to passed ID
//Create user
Route::get('/users/create', 'UserController@create')->name('user_create');
Route::post('/users/create', 'UserController@store');
//Update user
Route::get('/users')->name('users');
Route::get("/users/edit/{id}", "UserController@edit");
Route::patch("/users/edit/{id}", "UserController@update");


Route::get('/attendances', 'AttendanceController@index');
Route::get('/attendances/{id}', 'AttendanceController@show');

Route::get('/classes', 'ClasseController@index');
Route::get('/classes/{id}', 'ClasseController@show');

Route::get('/collegiums', 'CollegiumController@index');
Route::get('/collegiums/{id}', 'CollegiumController@show');

Route::get('/collegiumstudy', 'CollegiumStudyController@index');
Route::get('/collegiumstudy/{id}', 'CollegiumStudyController@show');

Route::get('/collegiumstudy', 'CollegiumStudyController@index');
Route::get('/collegiumstudy/{id}', 'CollegiumStudyController@show');

Route::get('/conversations', 'ConversationController@index');
Route::get('/conversations/{id}', 'ConversationController@show')->where('id', '[0-9]+');
//Create conversation
Route::get('/conversations/create', 'ConversationController@create')->name('conversation_create');
Route::post('/conversations/create', 'ConversationController@store');
//Update conversation
Route::get('/conversations')->name('conversations');
Route::get("/conversations/edit/{id}", "ConversationController@edit");
Route::patch("/conversations/edit/{id}", "ConversationController@update");

Route::get('/faculties', 'FacultyController@index');
Route::get('/faculties/{id}', 'FacultyController@show');

Route::get('/files', 'FileController@index');
Route::get('/files/{id}', 'FileController@show');

Route::get('/followers', 'FollowerUserController@index');
Route::get('/followers/{id}', 'FollowerUserController@show');

Route::get('/messages', 'MessageController@index');
Route::get('/messages/{id}', 'MessageController@show')->where('id', '[0-9]+');
//Create message
Route::get('/messages/create', 'MessageController@create')->name('message_create');
Route::post('messages/create', 'MessageController@store');
//Update message
Route::get('/messages')->name('messages');
Route::get("/messages/edit/{id}", "MessageController@edit");
Route::patch("/messages/edit/{id}", "MessageController@update");

Route::get('/participants', 'ParticipantController@index');
Route::get('/participants/{id}', 'ParticipantController@show')->where('id', '[0-9]+');
//Create participant
Route::get('/participants/create', 'ParticipantController@create')->name('participant_create');
Route::post('participants/create', 'ParticipantController@store');
//Update participant
Route::get('/participants')->name('participants');
Route::get("/participants/edit/{id}", "ParticipantController@edit");
Route::patch("/participants/edit/{id}", "ParticipantController@update");

Route::get('/posts', 'PostController@index');
Route::get('/posts/{id}', 'PostController@show');

Route::get('/studies', 'StudyController@index');
Route::get('/studies/{id}', 'StudyController@show');

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{id}', 'TaskController@show');

Route::get('/team', 'TaskUserController@index');
Route::get('/team/{id}', 'TaskUserController@show');

Route::get('/chat', 'ChatController@index');








