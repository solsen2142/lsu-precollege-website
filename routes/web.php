<?php

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

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);


Route::statamic('blog/tags', 'blog.taxonomies');
Route::statamic('search', 'search');
Route::statamic('users', 'user.index');
Route::statamic('users/{username}', 'user.profile');
Route::statamic('account', 'user.account');
Route::statamic('login', 'auth.login');
Route::statamic('register', 'auth.register');
Route::statamic('forgot-password', 'auth.password-forgot');
Route::statamic('reset-password', 'auth.password-reset');
Route::statamic('blog/feed', 'feeds.blog', [
    'layout' => 'feed',
    'content_type' => 'atom',
]);
Route::statamic('things/feed', 'feeds.things', [
    'layout' => 'feed',
    'content_type' => 'atom',
]);
