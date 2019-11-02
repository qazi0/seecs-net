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

Route::get('/privacy_policy', function () {
    return view('privacy');
});

Route::get('/discuss', function () {
    return view('discuss');
});

Route::get('/forum', [
    'uses' => 'ForumsController@index',
    'as' => 'forum'
]);

Auth::routes();
/*
Route::get('/home', function() {
    return view('home');
});
*/

Route::get('/auth/redirect/{provider}', [
    'uses' => 'SocialsController@redirect',
    'as'=> 'social.redirect'
]);

Route::get('/{provider}/redirect', [
    'uses' => 'SocialsController@callback',
    'as' => 'social.callback'
]);

Route::get('discussion/{slug}',[
    'uses' => 'DiscussionsController@show',
    'as' => 'discussion'
]);

Route::get('channel/{slug}',[
    'uses' => 'ForumsController@channel',
    'as' => 'channel'
]);

Route::group(['middleware' => ['auth']], function () {
    Route::resource('channels', 'ChannelsController');

    Route::get('discussion/create/new', [
        'uses' => 'DiscussionsController@create',
        'as' => 'discussion.create'
    ]);

    Route::post('discussion/store', [
        'uses' => 'DiscussionsController@store',
        'as' => 'discussion.store'
    ]);


    Route::post('discussion/reply/{id}', [
        'uses' => 'DiscussionsController@reply',
        'as' => 'discussion.reply'
    ]);

    Route::get('reply/like/{id}', [
        'uses' => 'RepliesController@like',
        'as' => 'reply.like'
    ]);

    Route::get('reply/unlike/{id}', [
        'uses' => 'RepliesController@unlike',
        'as' => 'reply.unlike'
    ]);

    Route::get('/discussion/best/reply/{id}', [
        'uses' => 'RepliesController@best_answer',
        'as' => 'discussion.best.answer'
    ]);


  




});

