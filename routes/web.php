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

Route::pattern('id','[0-9]*');
Route::pattern('cid','[0-9]*');
Route::pattern('cslug','(.*)');
Route::pattern('slug','(.*)');

Route::namespace('DatingTonight')->group(function(){
	Route::get('/',[
		'uses' => 'IndexController@index',
		'as' => 'datingtonight.index.index'
	]);

	Route::get('/test', function () {
    	return view('datingtonight.chat.test');
	});

 	Route::get('/chat-{id}',[
 		'uses'=>'ChatController@index',
 		'as'=>'datingtonight.chat.index'
 	]);
 	Route::post('/chat-{id}',[
 		'uses'=>'ChatController@sendMessage',
 		'as'=>'datingtonight.chat.send'
 	]);

	Route::get('/account',[
		'uses' => 'UserController@index',
		'as' => 'datingtonight.user.index'
	]);

	Route::get('/edit-{id}',[
		'uses' => 'UserController@edit',
		'as' => 'datingtonight.user.edit'
	]);

	Route::prefix('/dating-places')->group(function(){
		// Controller dating places for user
		Route::get('/',[
		'uses' => 'DatingPlacesController@index',
		'as' => 'datingtonight.datingplaces.index'
		]);
		Route::get('/detail/{slug}-{id}.html',[
			'uses' => 'DatingPlacesController@detail',
			'as' => 'datingtonight.datingplaces.detail'
		]);
		Route::get('/categories/{cslug}-{cid}',[
			'uses' => 'DatingPlacesController@categories',
			'as' => 'datingtonight.datingplaces.cat'
		]);
	});


	Route::prefix('flirting-methods')->group(function(){
		// Controller flirting methods for user
		Route::get('/',[
			'uses' => 'FlirtingMethodsController@index',
			'as' => 'datingtonight.flirtingmethods.index'
		]);
		Route::get('/detail/{slug}-{id}.html',[
			'uses' => 'FlirtingMethodsController@detail',
			'as' => 'datingtonight.flirtingmethods.detail'
		]);
		Route::get('/categories/{cslug}-{cid}',[
			'uses' => 'FlirtingMethodsController@categories',
			'as' => 'datingtonight.flirtingmethods.cat'
		]);
	});

	Route::prefix('finding-person')->group(function(){
		// Controller finding person for user
		Route::get('/',[
			'uses' => 'FindingSuitablePerson@index',
			'as' => 'datingtonight.findingperson.index'
		]);
		Route::post('/result',[
			'uses' => 'FindingSuitablePerson@result',
			'as' => 'datingtonight.findingperson.result'
		]);
	});
});

Route::namespace('Admin')->prefix('admin')->group(function(){
	// Home page admin
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
			'uses' => 'AdminDatingController@getEdit',
			'as' => 'admin.datingplaces.edit'
		]);
		Route::post('/edit-{id}',[
			'uses' => 'AdminDatingController@postEdit',
			'as' => 'admin.datingplaces.edit'
		]);
		Route::get('/del-{id}',[
			'uses' => 'AdminDatingController@del',
			'as' => 'admin.datingplaces.delete'
		]);
		Route::get('/picture',[
			'uses' => 'AdminDatingController@listPicture',
			'as' => 'admin.datingplaces.listpicture'
		]);
		Route::get('/picture/add',[
			'uses' => 'AdminDatingController@getDatingPicture',
			'as' => 'admin.datingplaces.picture'
		]);
		Route::post('/picture/add',[
			'uses' => 'AdminDatingController@postDatingPicture',
			'as' => 'admin.datingplaces.picture'
		]);
		Route::get('/picture/del-{id}',[
			'uses' => 'AdminDatingController@delPicture',
			'as' => 'admin.datingplaces.delPicture'
		]);
	});

	Route::prefix('flirting-methods')->group(function(){
		// Controller flirting methods for admin
		Route::get('index',[
			'uses' => 'AdminFlirtingController@index',
			'as' => 'admin.flirtingmethods.index'
		]);
		Route::get('add',[
			'uses' => 'AdminFlirtingController@getAdd',
			'as' => 'admin.flirtingmethods.add'
		]);
		Route::post('add',[
		'uses' => 'AdminFlirtingController@postAdd',
		'as' => 'admin.flirtingmethods.add'
		]);
		Route::get('edit/{id}',[
			'uses' => 'AdminFlirtingController@getEdit',
			'as' => 'admin.flirtingmethods.edit'
		]);
		Route::post('edit/{id}',[
			'uses' => 'AdminFlirtingController@postEdit',
			'as' => 'admin.flirtingmethods.edit'
		]);
		Route::get('delete/{id}',[
			'uses' => 'AdminFlirtingController@getDelete',
			'as' => 'admin.flirtingmethods.delete'
		]);
	});

	Route::prefix('users')->group(function(){
		// Controller user
		Route::get('/',[
			'uses' => 'UserController@index',
			'as' => 'admin.user.index'
		]);
		Route::get('/add',[
			'uses' => 'UserController@getAdd',
			'as' => 'admin.user.add'
		]);
		Route::post('/add',[
			'uses' => 'UserController@postAdd',
			'as' => 'admin.user.add'
		]);
		Route::get('/edit-{id}',[
			'uses' => 'UserController@getEdit',
			'as' => 'admin.user.edit'
		]);
		Route::post('/edit-{id}',[
			'uses' => 'UserController@postEdit',
			'as' => 'admin.user.edit'
		]);
		Route::get('/del-{id}',[
			'uses' => 'UserController@del',
			'as' => 'admin.user.del'
		]);
	});


	Route::prefix('user-properties')->group(function(){
		//controller user properties
		Route::prefix('hair-color')->group(function(){
			//hair color
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexHairColor',
			'as' => 'admin.user-properties.hair-color.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddHairColor',
			'as' => 'admin.user-properties.hair-color.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddHairColor',
			'as' => 'admin.user-properties.hair-color.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditHairColor',
			'as' => 'admin.user-properties.hair-color.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditHairColor',
			'as' => 'admin.user-properties.hair-color.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteHairColor',
			'as' => 'admin.user-properties.hair-color.delete'
			]);
		});

		Route::prefix('hair-length')->group(function(){
			//Hair-length
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexHairLength',
			'as' => 'admin.user-properties.hair-length.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddHairLength',
			'as' => 'admin.user-properties.hair-length.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddHairLength',
			'as' => 'admin.user-properties.hair-length.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditHairLength',
			'as' => 'admin.user-properties.hair-length.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditHairLength',
			'as' => 'admin.user-properties.hair-length.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteHairLength',
			'as' => 'admin.user-properties.hair-length.delete'
			]);
		});

		Route::prefix('hair-style')->group(function(){
			//Hair-style
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexHairStyle',
			'as' => 'admin.user-properties.hair-style.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddHairStyle',
			'as' => 'admin.user-properties.hair-style.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddHairStyle',
			'as' => 'admin.user-properties.hair-style.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditHairStyle',
			'as' => 'admin.user-properties.hair-style.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditHairStyle',
			'as' => 'admin.user-properties.hair-style.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteHairStyle',
			'as' => 'admin.user-properties.hair-style.delete'
			]);
		});

		Route::prefix('eye-color')->group(function(){
			//Eye-color
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexEyeColor',
			'as' => 'admin.user-properties.eye-color.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddEyeColor',
			'as' => 'admin.user-properties.eye-color.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddEyeColor',
			'as' => 'admin.user-properties.eye-color.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditEyeColor',
			'as' => 'admin.user-properties.eye-color.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditEyeColor',
			'as' => 'admin.user-properties.eye-color.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteEyeColor',
			'as' => 'admin.user-properties.eye-color.delete'
			]);
		});

		Route::prefix('city')->group(function(){
			//City
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexCity',
			'as' => 'admin.user-properties.city.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddCity',
			'as' => 'admin.user-properties.city.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddCity',
			'as' => 'admin.user-properties.city.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditCity',
			'as' => 'admin.user-properties.city.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditCity',
			'as' => 'admin.user-properties.city.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteCity',
			'as' => 'admin.user-properties.city.delete'
			]);
		});

		Route::prefix('body')->group(function(){
			//Body
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexBody',
			'as' => 'admin.user-properties.body.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddBody',
			'as' => 'admin.user-properties.body.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddBody',
			'as' => 'admin.user-properties.body.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditBody',
			'as' => 'admin.user-properties.body.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditBody',
			'as' => 'admin.user-properties.body.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteBody',
			'as' => 'admin.user-properties.body.delete'
			]);
		});

		Route::prefix('drinking')->group(function(){
			//Drinking
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexDrinking',
			'as' => 'admin.user-properties.drinking.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddDrinking',
			'as' => 'admin.user-properties.drinking.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddDrinking',
			'as' => 'admin.user-properties.drinking.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditDrinking',
			'as' => 'admin.user-properties.drinking.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditDrinking',
			'as' => 'admin.user-properties.drinking.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteDrinking',
			'as' => 'admin.user-properties.drinking.delete'
			]);
		});

		Route::prefix('smoking')->group(function(){
			//Smoking
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexSmoking',
			'as' => 'admin.user-properties.smoking.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddSmoking',
			'as' => 'admin.user-properties.smoking.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddSmoking',
			'as' => 'admin.user-properties.smoking.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditSmoking',
			'as' => 'admin.user-properties.smoking.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditSmoking',
			'as' => 'admin.user-properties.smoking.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteSmoking',
			'as' => 'admin.user-properties.smoking.delete'
			]);
		});

		Route::prefix('job-status')->group(function(){
			//Job Status
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexJobStatus',
			'as' => 'admin.user-properties.job-status.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddJobStatus',
			'as' => 'admin.user-properties.job-status.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddJobStatus',
			'as' => 'admin.user-properties.job-status.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditJobStatus',
			'as' => 'admin.user-properties.job-status.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditJobStatus',
			'as' => 'admin.user-properties.job-status.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteJobStatus',
			'as' => 'admin.user-properties.job-status.delete'
			]);
		});

		Route::prefix('house-type')->group(function(){
			//House type
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexHouseType',
			'as' => 'admin.user-properties.house-type.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddHouseType',
			'as' => 'admin.user-properties.house-type.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddHouseType',
			'as' => 'admin.user-properties.house-type.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditHouseType',
			'as' => 'admin.user-properties.house-type.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditHouseType',
			'as' => 'admin.user-properties.house-type.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteHouseType',
			'as' => 'admin.user-properties.house-type.delete'
			]);
		});

		Route::prefix('live-with')->group(function(){
			//Live With
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexLiveWith',
			'as' => 'admin.user-properties.live-with.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddLiveWith',
			'as' => 'admin.user-properties.live-with.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddLiveWith',
			'as' => 'admin.user-properties.live-with.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditLiveWith',
			'as' => 'admin.user-properties.live-with.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditLiveWith',
			'as' => 'admin.user-properties.live-with.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteLiveWith',
			'as' => 'admin.user-properties.live-with.delete'
			]);
		});

		Route::prefix('have-children')->group(function(){
			//Have Children
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexHaveChildren',
			'as' => 'admin.user-properties.have-children.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddHaveChildren',
			'as' => 'admin.user-properties.have-children.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddHaveChildren',
			'as' => 'admin.user-properties.have-children.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditHaveChildren',
			'as' => 'admin.user-properties.have-children.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditHaveChildren',
			'as' => 'admin.user-properties.have-children.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteHaveChildren',
			'as' => 'admin.user-properties.have-children.delete'
			]);
		});

		Route::prefix('national')->group(function(){
			//National
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexNational',
			'as' => 'admin.user-properties.national.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddNational',
			'as' => 'admin.user-properties.national.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddNational',
			'as' => 'admin.user-properties.national.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditNational',
			'as' => 'admin.user-properties.national.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditNational',
			'as' => 'admin.user-properties.national.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteNational',
			'as' => 'admin.user-properties.national.delete'
			]);
		});

		Route::prefix('educational-level')->group(function(){
			//Educational Level
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexEducationalLevel',
			'as' => 'admin.user-properties.educational-level.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddEducationalLevel',
			'as' => 'admin.user-properties.educational-level.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddEducationalLevel',
			'as' => 'admin.user-properties.educational-level.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditEducationalLevel',
			'as' => 'admin.user-properties.educational-level.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditEducationalLevel',
			'as' => 'admin.user-properties.educational-level.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteEducationalLevel',
			'as' => 'admin.user-properties.educational-level.delete'
			]);
		});

		Route::prefix('language')->group(function(){
			//Language
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexLanguage',
			'as' => 'admin.user-properties.language.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddLanguage',
			'as' => 'admin.user-properties.language.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddLanguage',
			'as' => 'admin.user-properties.language.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditLanguage',
			'as' => 'admin.user-properties.language.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditLanguage',
			'as' => 'admin.user-properties.language.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteLanguage',
			'as' => 'admin.user-properties.language.delete'
			]);
		});

		Route::prefix('religion')->group(function(){
			//Religion
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexReligion',
			'as' => 'admin.user-properties.religion.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddReligion',
			'as' => 'admin.user-properties.religion.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddReligion',
			'as' => 'admin.user-properties.religion.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditReligion',
			'as' => 'admin.user-properties.religion.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditReligion',
			'as' => 'admin.user-properties.religion.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteReligion',
			'as' => 'admin.user-properties.religion.delete'
			]);
		});

		Route::prefix('constellation')->group(function(){
			//Constellation
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexConstellation',
			'as' => 'admin.user-properties.constellation.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddConstellation',
			'as' => 'admin.user-properties.constellation.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddConstellation',
			'as' => 'admin.user-properties.constellation.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditConstellation',
			'as' => 'admin.user-properties.constellation.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditConstellation',
			'as' => 'admin.user-properties.constellation.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteConstellation',
			'as' => 'admin.user-properties.constellation.delete'
			]);
		});


		Route::prefix('gender')->group(function(){
			//Gender
			Route::get('index',[
			'uses' => 'UserPropertiesController@indexGender',
			'as' => 'admin.user-properties.gender.index'
			]);

			Route::get('add',[
			'uses' => 'UserPropertiesController@getAddGender',
			'as' => 'admin.user-properties.gender.add'
			]);
			Route::post('add',[
			'uses' => 'UserPropertiesController@postAddGender',
			'as' => 'admin.user-properties.gender.add'
			]);

			Route::get('edit/{id}',[
			'uses' => 'UserPropertiesController@getEditGender',
			'as' => 'admin.user-properties.gender.edit'
			]);
			Route::post('edit/{id}',[
			'uses' => 'UserPropertiesController@postEditGender',
			'as' => 'admin.user-properties.gender.edit'
			]);

			Route::get('delete/{id}',[
			'uses' => 'UserPropertiesController@getDeleteGender',
			'as' => 'admin.user-properties.gender.delete'
			]);
		});
  });


	// Controller Administrator
	Route::prefix('administrator')->group(function(){
		// Controller user
		Route::get('/',[
			'uses' => 'AdminController@index',
			'as' => 'admin.admin.index'
		]);
		Route::get('/add',[
			'uses' => 'AdminController@getAdd',
			'as' => 'admin.admin.add'
		]);
		Route::post('/add',[
			'uses' => 'AdminController@postAdd',
			'as' => 'admin.admin.add'
		]);
		Route::get('/edit-{id}',[
			'uses' => 'AdminController@getEdit',
			'as' => 'admin.admin.edit'
		]);
		Route::post('/edit-{id}',[
			'uses' => 'AdminController@postEdit',
			'as' => 'admin.admin.edit'
		]);
		Route::get('/del-{id}',[
			'uses' => 'AdminController@del',
			'as' => 'admin.admin.del'
		]);
		Route::get('/managing-user',[
			'uses' => 'UserController@index',
			'as' => 'admin.user.index'
		]);

	});
});

// Auth cho admin vs user
Route::namespace('Auth')->group(function(){
	Route::prefix('/admin-login')->group(function(){
		// Controller admin
		Route::get('/',[
		'uses' => 'AuthAdminController@getLogin',
		'as' => 'auth.admin.login'
		]);
		Route::post('/',[
			'uses' => 'AuthAdminController@postLogin',
			'as' => 'auth.admin.login'
		]);
	});
	Route::get('/admin/log-out',[
		'uses' => 'AuthAdminController@logOut',
		'as' => 'auth.admin.logout'
	]);

	Route::prefix('user-login')->group(function(){
		// Controller user
		Route::get('/',[
			'uses' => 'AuthUserController@getLogin',
			'as' => 'auth.users.default'
		]);
		Route::post('/',[
			'uses' => 'AuthUserController@postLogin',
			'as' => 'auth.users.default'
		]);
	});


    Route::post('/user/signup',[
        'uses' => 'AuthUserController@postSignUp',
        'as' => 'auth.users.signup'
    ]);

	Route::get('/user/log-out',[
		'uses' => 'AuthUserController@logOut',
		'as' => 'auth.user.logout'
	]);
});


// mã hóa lại pasword
	Route::get('/pass',function(){
		return bcrypt('123456');
	});
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
