<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('hello/{fname}','hello@index');
// Route::get('hello', function()
// {
//     return view('hello');
// })->middleware('test');
// //validation usign key value concept
// // Route::get('hello/{fname}',function($fname){
// //     echo "It's me: ".$fname."Gairhe";
// // })->where(['fname'=>"[0-9]+"]);


Route::get('/', function () {
    return view('welcome');
});
Route::get('hello','hello@index');
// //Required and optional parameter
// //This is required parameter
// Route::get('parameter/{max}/{min}',function($max,$min){
//     echo "max is:".$max."and"."min is".$min;
// });

// //This is optional parameter
// Route::get('oparameter/{max}/{min?}',function($max,$min='0'){
//     echo "max is:"." ".$max." "."and"." "."min is"." ".$min;
// });

Route::get('test','TestController@ShowView');

Route::get('insert','InsertController@index');

Route::get('product','ProductController@index');

Route::get('dif','TeacherController@index');