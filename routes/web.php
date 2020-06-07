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

        Route::get('/','HomeController@welcome')->name('/');

        Auth::routes();

        Route::get('/home', 'HomeController@index')->name('home');

        /*
         *      Admin Route
         * */
        Route::resource('bu','BuController') ;
        Route::group(['middleware'=>'admin'],function(){
            Route::resource('users','UserController') ;

            Route::get('/adminPanel/users/data',[
                'uses'=>'UserController@anyData',
                'as'=>'adminPanel.users.data'
            ]);
            Route::get('/adminPanel/bu/data',[
                'uses'=>'BuController@anyData',
                'as'=>'adminPanel.bu.data'
            ]);

            Route::get('adminPanel',[
                'uses'=>'AdminController@index',
                'as'=>'adminPanel'
            ]);

            Route::resource('AdminProfile','adminProfileController') ;

            Route::post('avalable','BuController@avalable')->name('avalable');




            Route::get('users/makeAdmin/{id}','UserController@makeAdmin')->name('users.makeAdmin');
            Route::get('contact/Massage/{id}','Contact_us@show2')->name('contact.show2');

        // siteSettings

            Route::resource('adminPanel/siteSetting','SiteSettingController');


        });


        /*
         * user Route
         */
        Route::resource('/contact','Contact_us');

        Route::resource('AllBuildings','BuildingsController') ;
        Route::get('/ForRent/{bu_type?}','BuildingsController@Rent')->name('forRent');

        Route::get('/ForSel/{bu_type?}','BuildingsController@sel')->name('forSel');
        Route::get('/search','BuildingsController@search')->name('search');

        Route::get('/type/{bu_type}','BuildingsController@type')->name('type');
        Route::get('/price','BuildingsController@price')->name('price');

        Route::get('/rooms','BuildingsController@rooms')->name('room');
        Route::get('/lang','BuildingsController@lang')->name('lang');

        Route::get('AdvancedSearch','BuildingsController@Advanced')->name('AdvancedSearch') ;
        Route::get('search2','BuildingsController@search2')->name('search2');

        Route::get('singleBuilding/{bu}','BuildingsController@show')->name('singleBuilding');
        Route::get('bu/add/new','BuildingsController@add2')->name('user.add');
        Route::resource('myBu','myBuController');

        Route::get('myBu/not','myBuController@index2')->name('index2');
        Route::get('info/{id}','CheckController@index')->name('info');
        Route::post('info/{id}','CheckController@store')->name('check.store');





