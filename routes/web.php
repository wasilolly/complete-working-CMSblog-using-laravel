<?php

Route::get('/test', function(){
	
	return App\User::find(3)->profile;
	
});



Route::get('/', [
	'uses' => 'FrontEndController@index',
	'as'	=> 'index'

]);

Route::get('/post/{slug}', [
	'uses' => 'FrontEndController@singlePost',
	'as'	=> 'post.single'

]);

Route::get('/category/{id}', [
	'uses' => 'FrontEndController@category',
	'as'	=> 'category.single'

]);

Route::get('/tag/{id}', [
	'uses' => 'FrontEndController@tag',
	'as'	=> 'tag.single'

]);

Route::get('/results', function(){
	$posts = \App\Post::where('title', 'like', '%'.request('query').'%')->get();
	
	return view('results')->with('posts', $posts)
						  ->with('title', 'Search results: ' .request('query'))
						  ->with('categories', \App\Category::take(5)->get())
						  ->with('settings', \App\Setting::first())
						  ->with('query', request('query'));
});


Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	
	Route::get('/home', [
		'uses' => 'HomeController@index',
		'as'  => 'home'
	]);
	
	Route::get('/posts', [
		'uses' => 'PostController@index',
		'as'   =>'posts'

	]);
	
	Route::get('/post/create', [
		'uses' => 'PostController@create',
		'as'   =>'post.create'

	]);

	Route::post('/post/store', [
		'uses' => 'PostController@store',
		'as'   =>'post.store'

	]);
	
	Route::get('/post/delete/{id}', [
		'uses' => 'PostController@destroy',
		'as'   =>'post.delete'

	]);
	
	Route::get('/post/edit/{id}', [
		'uses' => 'PostController@edit',
		'as'   =>'post.edit'

	]);
	
	Route::post('/post/update/{id}', [
		'uses' => 'PostController@update',
		'as'   =>'post.update'

	]);
	
	Route::get('/post/trashed', [
		'uses' => 'PostController@trashed',
		'as'   =>'post.trashed'

	]);
	
	Route::get('/post/kill/{id}', [
		'uses' => 'PostController@kill',
		'as'   =>'post.kill'

	]);
	
	Route::get('/post/restore/{id}', [
		'uses' => 'PostController@restore',
		'as'   =>'post.restore'

	]);
	
	Route::get('/categories', [
		'uses' => 'CategoryController@index',
		'as'   =>'categories'

	]);
	
	Route::get('/category/create', [
		'uses' => 'CategoryController@create',
		'as'   =>'category.create'

	]);
	
	Route::post('/category/store', [
		'uses' => 'CategoryController@store',
		'as'   =>'category.store'

	]);
	
	Route::get('/category/edit/{id}', [
		'uses' => 'CategoryController@edit',
		'as'   =>'category.edit'

	]);
	
	Route::get('/category/delete/{id}', [
		'uses' => 'CategoryController@destroy',
		'as'   =>'category.delete'

	]);
	
	Route::post('/category/update/{id}', [
		'uses' => 'CategoryController@update',
		'as'   =>'category.update'

	]);
	
	Route::get('/tags', [
		'uses' => 'TagController@index',
		'as'	=> 'tags'
	
	]);
	
	Route::get('/tag/create', [
		'uses' => 'tagController@create',
		'as'   =>'tag.create'

	]);
	
	Route::post('/tag/store', [
		'uses' => 'TagController@store',
		'as'   => 'tag.store'

	]);
	
	Route::get('/tag/edit/{id}', [
		'uses' => 'TagController@edit',
		'as'  => 'tag.edit'
	]);
	
	Route::post('/tag/update/{id}', [
		'uses' => 'TagController@update',
		'as'  => 'tag.update'
	]);
	
	Route::get('/tag/destroy/{id}', [
		'uses' => 'TagController@destroy',
		'as'  => 'tag.destroy'
	]);
	
	Route::get('/users', [
		'uses' => 'UserController@index',
		'as'	=> 'users'
	
	]);
	
	Route::get('/user/create', [
		'uses' => 'UserController@create',
		'as'   =>'user.create'

	]);
	
	Route::post('/user/store', [
		'uses' => 'UserController@store',
		'as'   => 'user.store'

	]);
	
	Route::get('/user/delete/{id}', [
		'uses' => 'UserController@destroy',
		'as'   => 'user.delete'

	]);
	
	Route::get('/user/admin/{id}', [
		'uses' => 'UserController@admin',
		'as'   =>'user.admin'

	]);
	
	Route::get('/user/not-admin/{id}', [
		'uses' => 'UserController@not_admin',
		'as'   =>'user.not.admin'

	]);
	
	Route::get('user/profile', [
		'uses' => 'ProfileController@index',
		'as'   =>'user.profile'

	]);
	
	Route::post('/user/profile/update', [
		'uses' => 'ProfileController@update',
		'as'   =>'user.profile.update'

	]);
	
	Route::get('/settings', [
		'uses' => 'SettingController@index',
		'as'   =>'settings'

	]);
	
	Route::post('/setting/update', [
		'uses' => 'SettingController@update',
		'as'   =>'setting.update'

	]);
	
	
});
