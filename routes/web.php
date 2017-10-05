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
    return view('public.index');
});

// Public Routes
//Route::get('acp', 'PublicController@login');
Route::get('index', 'PublicController@index');
Route::get('services', 'PublicController@services');
//Route::get('projects', 'PublicController@projects');
Route::get('references', 'PublicController@references');
Route::get('contact', 'PublicController@contact');
Route::get('disclaimer', 'PublicController@disclaimer');
Route::resource('projects', 'ProjectController');
Auth::routes();

//Route::get('/acp', 'HomeController@index');
Route::get('/acp', 'AdminController@index');
Route::get('/admin/projects', 'AdminController@projects');
Route::get('/admin/project/create', 'AdminController@createProject');
Route::get('/admin/project/dropzone', 'AdminController@dropzone');
Route::get('/admin/project/edit/{id}', 'AdminController@editProject');
Route::get('/ctrl_reference', 'AdminController@reference');

Route::post('/admin/project/create-form', 'ProjectController@create');
Route::post('/admin/project/upload', 'UploadController@upload');
Route::post('/admin/project/delete', 'ProjectController@delete');
Route::post('/admin/projects/delete-project', 'ProjectController@destroy');
Route::post('/admin/project/edit/edit-form', 'ProjectController@edit');
//Route::resource('/admin/project/edit', 'AdminController@editProject');
//Route::get('/admin/project/edit', 'AdminController@editProject');

Route::patch('/admin/project/edit/{id}',[
    'as' => 'admin.project.edit',
    'uses' => 'AdminController@editProject'
]);



/*
Route::post('/admin/project/create-form', function (){
    if (Request::ajax()){
        return Response::json(Request::all());
    }
});
*/