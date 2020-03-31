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

// use Illuminate\Routing\Route;
// use Illuminate\Support\Facades\Auth;
// use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


// ------------------------- this route for website -------------------------



Route::group(['prefix' => LaravelLocalization::setlocale()], function(){
    Route::get('/', 'WelcomeController@index');
    Route::get('/category/{id}','WelcomeController@category')->name('front.category');
    Route::get('/skill/{id}','WelcomeController@skill')->name('front.skill');
    Route::get('/video/{id}','WelcomeController@video')->name('front.video');
    Route::get('/tag/{id}','WelcomeController@tag')->name('front.tag');
    Route::post('/comments/{id}','WelcomeController@commentUpdate')->name('front.commentUpdate');

    Route::post('contact-us','WelcomeController@msgStore')->name('contact.store');

});


// ------------------------- this route for dashboard -------------------------
// Route::get('dashboard','Backend\HomeController@index');
Route::namespace('Backend')->prefix('dashboard')->middleware('admin')->group(function(){

    Route::get('home','HomeController@index');

 
    Route::resource('users','UsersController')->except(['show','delete']);
    Route::delete('users/delete/{id}','UsersController@delete')->name('dashboard/users.delete');

    Route::resource('categories','CategoriesController')->except(['show','delete']);
    Route::delete('categories/delete/{id}','CategoriesController@delete')->name('dashboard/categories.delete');

    Route::resource('skills','SkillsController')->except(['show','delete']);
    Route::delete('skills/delete/{id}','SkillsController@delete')->name('dashboard/skills.delete');

    Route::resource('tags','TagsController')->except(['show','delete']);
    Route::delete('tags/delete/{id}','TagsController@delete')->name('dashboard/tags.delete');

    Route::resource('pages','PagesController')->except(['show','delete']);
    Route::delete('pages/delete/{id}','PagesController@delete')->name('dashboard/pages.delete');

    Route::resource('videos','VideosController')->except(['show','delete']);
    Route::delete('videos/delete/{id}','VideosController@delete')->name('dashboard/videos.delete');
    
    Route::post('comments','VideosController@commentStore')->name('comment.store');
    Route::get('comments/{id}','VideosController@commentDelete')->name('comments.delete');
    Route::post('comments/{id}','VideosController@commentUpdate')->name('comments.update');

    
});



// Route::get('admin\home', 'Backend\HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
