<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/duolingo', 'HomeController@duolingo');
Route::get('/chapter', 'HomeController@chapter');
Route::get('/duoles1', 'HomeController@duoles1');
Route::get('/duoles2', 'HomeController@duoles2');
Route::get('/duoles3', 'HomeController@duoles3');
Route::get('/duoprofile', 'HomeController@duoprofile');
Route::get('/settings/account', 'SettingsController@duosettingsaccount');
Route::get('/settings/notifications', 'SettingsController@duosettingsnotifications');
Route::get('/settings/coach', 'SettingsController@duosettingscoach');
Route::post('/settings/save', 'SettingsController@save');
Route::post('/settings/uavatar', 'SettingsController@uploadProfilePicture');

Route::get('/users', 'UsersController@index');
Route::post('/users/levelupdate', 'UsersController@updateLevels');

Route::get('/profile', 'ProfileController@index');
Route::get('/profile/update', 'ProfileController@update');
Route::post('/profile/edit', 'ProfileController@edit');
Route::get('/profile/edituseride', 'ProfileController@editUsersIdes');
Route::get('/profile/deleteuseride', 'ProfileController@deleteUsersIdes');
Route::get('/profile/edituserpl', 'ProfileController@editUsersProgrammingLanguages');
Route::get('/profile/deleteuserpl', 'ProfileController@deleteUsersProgrammingLanguages');
Route::get('/profile/edituserskill', 'ProfileController@editUsersSkills');
Route::get('/profile/deleteuserskill', 'ProfileController@deleteUsersSkills');
Route::get('/profile/ides', 'ProfileController@ides');
Route::post('/profile/uploadavatar', 'ProfileController@uploadAvatar');
Route::post('/profile/editaccount', 'ProfileController@editaccountinfo');
Route::get('/profile/{id}', 'ProfileController@showUserProfile');

Route::get('/followers/{id}', 'FriendController@listFollowers');
Route::get('/following/{id}', 'FriendController@listFollowing');
Route::get('/follow/{id}', 'FriendController@follow');
Route::get('/block/{id}', 'FriendController@block');
Route::get('/unfollow/{id}', 'FriendController@unfollow');

Route::get('/leaderboard', 'LeaderboardController@index');
Route::get('/leaderboard/{id}', 'LeaderboardController@show');

Route::get('/points', 'PointsController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::controllers([
	'password' => 'Auth\PasswordController',
]);

// API routes
//http://email:password@codearena.dev/api/v1/login
Route::get('/api/v1/login', 'Api\ApiLoginController@login');
Route::get('/api/v1/followers', 'Api\ApiProfileController@followers');
Route::get('/api/v1/leaderboard/global', 'Api\ApiLeaderboardController@UniversalLeaderboard');
Route::get('/api/v1/leaderboard/local', 'Api\ApiLeaderboardController@UserLeaderboard');
Route::post('/api/v1/refactor', 'Api\ApiRefactorHistoryController@parseHistory');

// save refactorings
// return points, level, badges
// do progress bar


Route::get('/charts', function()
{
	return View::make('mcharts');
});

Route::get('/tables', function()
{
	return View::make('table');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});


Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});