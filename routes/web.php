<?php
use App\PostCardSendingService;
use App\PostCard;
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

Route::get('/postcards',function(PostCardSendingService $postcardService){
    // $postcardService = new PostcardSendingService('BD', '4','6');
    // $postcardService->hello('Hello from mahfuzh', 'test@test.com');
});

Route::get('/facades',function(){
    PostCard::hello('hello from facade','abc@gmail.com');
});