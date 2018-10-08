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

//Route::pattern('id','[0-9]*');
//Route::pattern('cid','[0-9]*');
//Route::pattern('slug','(.*)');
Route::namespace('DatingTonight')->group(function(){
	Route::get('/',[
		'uses' => 'IndexController@index',
		'as' => 'datingtonight.index.index'
	]);
	Route::get('/register',[
		'uses' => 'AuthController@getRegister',
		'as' => 'datingtonight.auth.register'
	]);
	Route::get('/dating-places',[
		'uses' => 'DatingPlacesController@index',
		'as' => 'datingtonight.datingplaces.index'
	]);
	Route::get('/flirting-methods',[
		'uses' => 'FlirtingMethodsController@index',
		'as' => 'datingtonight.flirtingmethods.index'
	]);
	Route::get('/tin-tuc/{slug}-{id}',[
		'uses' => 'NewsController@detail',
		'as' => 'aboutme.news.detail'
	]);
	Route::get('/du-an',[
		'uses' => 'ProjectController@index',
		'as' => 'aboutme.project.index'
	]);
	Route::get('/about',[
		'uses' => 'AboutController@index',
		'as' => 'chotel.about.about'
	]);
	Route::get('/lien-he',[
		'uses' => 'ContactController@getContact',
		'as' => 'chotel.contact.contact'
	]);
	Route::post('/lien-he',[
		'uses' => 'ContactController@postContact',
		'as' => 'chotel.contact.contact'
	]);
});

Route::namespace('Admin')->prefix('admin')->group(function(){
	// Trang chu
	Route::get('/',[
		'uses' => 'IndexController@index',
		'as' => 'admin.index.index'
	]);

	Route::prefix('dating-places')->group(function(){
		// Controller dating places
		Route::get('/',[
			'uses' => 'AdminDatingController@index',
			'as' => 'admin.datingplaces.index'
		]);
		Route::get('/add',[
			'uses' => 'AdminDatingController@getAdd',
			'as' => 'admin.datingplaces.add'
		]);
		Route::post('/add',[
		'uses' => 'AdminDatingController@postAdd',
		'as' => 'admin.datingplaces.add'
		]);
		Route::get('/edit-{id}',[
			'uses' => 'RoomController@getEdit',
			'as' => 'admin.room.edit'
		]);
		Route::post('/edit-{id}',[
			'uses' => 'RoomController@postEdit',
			'as' => 'admin.room.edit'
		]);
		Route::get('/del-{id}',[
			'uses' => 'RoomController@del',
			'as' => 'admin.room.del'
		]);
	});

	Route::prefix('flirting-methods')->group(function(){
		// Controller roomtype
		Route::get('/',[
			'uses' => 'RoomtypeController@index',
			'as' => 'admin.roomtype.cat'
		]);
		Route::get('/add',[
			'uses' => 'RoomtypeController@getAdd',
			'as' => 'admin.roomtype.add'
		]);
		Route::post('/add',[
		'uses' => 'RoomtypeController@postAdd',
		'as' => 'admin.roomtype.add'
		]);
		Route::get('/edit-{id}',[
			'uses' => 'RoomtypeController@getEdit',
			'as' => 'admin.roomtype.edit'
		]);
		Route::post('/edit-{id}',[
			'uses' => 'RoomtypeController@postEdit',
			'as' => 'admin.roomtype.edit'
		]);
		Route::get('/del-{id}',[
			'uses' => 'RoomtypeController@del',
			'as' => 'admin.roomtype.del'
		]);
	});

	Route::prefix('users')->group(function(){
		// Controller user
		Route::get('/users',[
			'uses' => 'UserController@index',
			'as' => 'admin.user.index'
		]);
		Route::get('/users/add',[
			'uses' => 'UserController@getAdd',
			'as' => 'admin.user.add'
		]);
		Route::post('/users/add',[
			'uses' => 'UserController@postAdd',
			'as' => 'admin.user.add'
		]);
		Route::get('/users/edit-{id}',[
			'uses' => 'UserController@getEdit',
			'as' => 'admin.user.edit'
		]);
		Route::post('/users/edit-{id}',[
			'uses' => 'UserController@postEdit',
			'as' => 'admin.user.edit'
		]);
		Route::get('/user/del-{id}',[
			'uses' => 'UserController@del',
			'as' => 'admin.user.del'
		]);
	});
});

Route::namespace('Auth')->group(function(){
	Route::get('/login',[
		'uses' => 'AuthController@getLogin',
		'as' => 'auth.auth.login'
	]);
	Route::post('/login',[
		'uses' => 'AuthController@postLogin',
		'as' => 'auth.auth.login'
	]);
});

// mã hóa lại pasword
Route::get('/pass',function(){
	return bcrypt('123456');
});