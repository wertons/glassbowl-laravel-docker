<?php

use App\Http\Controllers\FishController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    // Schools
    Route::get('schools/{team}/index', 'App\Http\Controllers\SchoolController@teamIndex')->name('schools.teamIndex');
    Route::get('schools/downloadedSchools', 'App\Http\Controllers\SchoolController@downloadedSchools')->name('schools.downloadedSchools');
    Route::get('schools/marketplace', 'App\Http\Controllers\SchoolController@marketplace')->name('schools.marketplace');
    Route::post('schools/{team}/store', 'App\Http\Controllers\SchoolController@teamStore')->name('schools.teamStore');
    Route::post('schools/{school}/share', 'App\Http\Controllers\SchoolController@share')->name('schools.share');
    Route::post('schools/{school}/getSchool', 'App\Http\Controllers\SchoolController@getSchool')->name('schools.getSchool');
    Route::post('schools/{school}/cancelDownloadSchool', 'App\Http\Controllers\SchoolController@cancelDownloadSchool')->name('schools.cancelDownloadSchool');
    Route::post('schools/{school}/unshare', 'App\Http\Controllers\SchoolController@unshare')->name('schools.unshare');
    Route::get('schools/{team}/create', 'App\Http\Controllers\SchoolController@teamCreate')->name('schools.teamCreate');
    Route::resource('schools', SchoolController::class);

    // Fish
    Route::delete('fish/{school}/{fish}', 'App\Http\Controllers\FishController@destroy')->name('fish.destroy');
    Route::put('fish/{school}/{fish}', 'App\Http\Controllers\FishController@update')->name('fish.update');
    Route::get('fish/{school}', 'App\Http\Controllers\FishController@index')->name('fish.index');
    Route::get('fish/{school}/shared', 'App\Http\Controllers\FishController@indexShared')->name('fish.indexShared');
    Route::get('fish/{school}/create', 'App\Http\Controllers\FishController@create')->name('fish.create');
    Route::get('fish/{school}/{fish}/edit', 'App\Http\Controllers\FishController@edit')->name('fish.edit');
    Route::post('fish/{school}', 'App\Http\Controllers\FishController@store')->name('fish.store');

    // Teams
    Route::get('teams/invitations', 'App\Http\Controllers\TeamController@invitations')->name('teams.invitations');
    Route::post('teams/{team}/accept', 'App\Http\Controllers\TeamController@accept')->name('teams.accept');
    Route::post('teams/{team}/decline', 'App\Http\Controllers\TeamController@decline')->name('teams.decline');
    Route::get('teams/{team}/members', 'App\Http\Controllers\TeamController@members')->name('teams.members');
    Route::get('teams/{team}/invite', 'App\Http\Controllers\TeamController@invite')->name('teams.invite');
    Route::post('teams/{team}/invite', 'App\Http\Controllers\TeamController@sendInvite')->name('teams.sendInvite');
    Route::resource('teams', TeamController::class);
});

// OAuth routes
// Google
Route::get('login/google', 'App\Http\Controllers\LoginController@redirectToGoogle')->name('login.google');
Route::get('login/google/callback', 'App\Http\Controllers\LoginController@handleGoogleCallback');

// Github
Route::get('login/github', 'App\Http\Controllers\LoginController@redirectToGithub')->name('login.github');
Route::get('login/github/callback', 'App\Http\Controllers\LoginController@handleGithubCallback');

require __DIR__ . '/auth.php';
