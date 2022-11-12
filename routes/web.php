<?php

use App\Http\Controllers\Page;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

// Главная страница
Route::get('/', function() {return view('welcome');});

// Задача 2.1
Route::get('/test', function() {return '!';});

// Задача 2.2
Route::get('/dir/test/', function() {return '!!';});

// Задача 2.3
Route::get('/user/{id}/', function($id) {return 'User '.$id;});

// Задача 2.4
Route::get('/user1/{name}', function($name) {return 'Имя юзера: '.$name;})->where('name', '[а-я]+');

// Задача 2.5
Route::get('/sum/{num1}/{num2}', function($num1, $num2) {return $num1+$num2;})->where(['num1'=>'[0-9]+', 'num2'=>'[0-9]+']);

// Задача 2.6
Route::get('/user2/show-{id}', function($id) {return $id;})->where('id', '[0-9]+');

// Задача 2.7
Route::get('user3/{id?}', function($id=0) {return $id;})->where('id', '[0-9]+');

// Задача 3.2
Route::get('/pages/show', [App\Http\Controllers\Page::class, 'showOne']);

// Задача 3.3
Route::get('/pages/all', [App\Http\Controllers\Page::class, 'showAll']);

// Задача 3.4
Route::get('/pages1/show/{id?}', [App\Http\Controllers\Page::class, 'showOne1']);

// Задача 3.5 и 3.6
Route::get('/pages2/show/{id?}', [App\Http\Controllers\Page::class, 'showOne2'])->where('id', '[0-9]+');

// Задача 3.7
Route::get('/pages3/show/{id?}', [App\Http\Controllers\Page::class, 'showOne3'])->where('id', '[0-9]+');

// Задача 3.8
Route::get('test/sum/{num1}/{num2}', [App\Http\Controllers\Test::class, 'sum'])->where(['num1'=>'[0-9]+', 'num2'=>'[0-9]+']);

// Задача 3.9 и 3.10
Route::get('employees/{id}', [App\Http\Controllers\Employee::class, 'showOne'])->where('id', '[0-9]+');

// Задача 3.11
Route::get('employees1/{id}/{param}', [App\Http\Controllers\Employee::class, 'showField'])->where(['id'=>'[0-9]+', 'param'=>'[a-z]+']);

// Задача 4.1
Route::get('/test1', [App\Http\Controllers\TestController::class, 'show1']);

// Задача 4.2
Route::get('/test2', [App\Http\Controllers\TestController::class, 'show2']);

// Задача 5.1
Route::get('/test3', [App\Http\Controllers\TestController::class, 'show3']);

// Задача 5.5
Route::get('/test4', [App\Http\Controllers\TestController::class, 'show4']);

// Задача 5.6
Route::get('/test5', [App\Http\Controllers\TestController::class, 'show5']);

// Задача 5.7
Route::get('/test6', [App\Http\Controllers\TestController::class, 'show6']);

// Задача 5.8
Route::get('/test7', [App\Http\Controllers\TestController::class, 'show7']);

// Задача 5.9
Route::get('/town/{city?}', [App\Http\Controllers\TestController::class, 'show8']);

// Задача 5.10
Route::get('/town1/{country?}/{city?}', [App\Http\Controllers\TestController::class, 'show9']);

// Проверка на существование и задание 5.11
Route::get('/date', [App\Http\Controllers\TestController::class, 'show10']);

// Задача 5.12
Route::get('/tag', [App\Http\Controllers\TestController::class, "show11"]);

// Задача 5.14
Route::get('/php', [App\Http\Controllers\TestController::class, 'show12']);

// Задача 6.1 и 6.2
Route::get('/if/week/{num}', [App\Http\Controllers\TestController::class, 'show13']);

// Задача 6.3
Route::get('/if/week1/{num}', [App\Http\Controllers\TestController::class, 'show14'])->where('num', '[0-7]+');

// Задача 6.4
Route::get('/if/month/{num}', [App\Http\Controllers\TestController::class, 'show15'])->where('num', '[0-9]+');

// Задача 6.5
Route::get('/unless/{num}', [App\Http\Controllers\TestController::class, 'show16'])->where('num', '[0-9]+');

// Задача 6.6
Route::get('/if/arr', [App\Http\Controllers\TestController::class, 'show17']);

// Задача 7.1, 7.2 и 7.3
Route::get('/mass/arr', [App\Http\Controllers\TestController::class, 'show18']);

// Задача 7.4 и 7.5
Route::get('/mass/arr1', [App\Http\Controllers\TestController::class, 'show19']);

// Задача 7.6
Route::get('/mass/arr2', [App\Http\Controllers\TestController::class, 'show20']);

// Задача 7.7
Route::get('/mass/arr3', [App\Http\Controllers\TestController::class, 'show21']);

// Задача 7.8
Route::get('/mass/arr4', [App\Http\Controllers\TestController::class, 'show22']);

// Задача 7.9 и 7.10
Route::get('/mass/arr5', [App\Http\Controllers\TestController::class, 'show23']);

// Задача 7.11, 7.12 и 7.13
Route::get('/mass/arr6', [App\Http\Controllers\TestController::class, 'show24']);

//Задача 7.14
Route::get('/mass/arr7', [App\Http\Controllers\TestController::class, 'show25']);

// Задача 7.16
Route::get('/mass/arr8', [App\Http\Controllers\TestController::class, 'show26']);

// Задача 7.17
Route::get('/mass/arr9', [App\Http\Controllers\TestController::class, 'show27']);

// Задача 8.1
Route::get('/verstka', [App\Http\Controllers\TestController::class, 'show28']);

// Задача 9.1 и 9.2
Route::get('/url', [App\Http\Controllers\TestController::class, 'show29']);

// Задача 9.3, 9.4, 9.5 и 9.6
Route::get('/employees2', [App\Http\Controllers\TestController::class, 'show30']);

// Задача 9.7, 9.8
Route::get('/users', [App\Http\Controllers\TestController::class, 'show31']);

// Задача 9.9
Route::get('/forms', [App\Http\Controllers\TestController::class, 'show32']);

// Задача 9.10
Route::get('/forms1', [App\Http\Controllers\TestController::class, 'show33']);

// Задача 9.11
Route::get('/daymonth', [App\Http\Controllers\TestController::class, 'show34']);

// Задача 10 (1 часть)
Route::get('/posts/{id}', [App\Http\Controllers\PostController::class, 'showOne']);

Route::get('/posts', [App\Http\Controllers\PostController::class, 'showAll']);

// Задача 10 (2 часть)
Route::get('/product/{category}/{product}', [App\Http\Controllers\ProductController::class, 'showProduct']);

Route::get('/product/{category}', [App\Http\Controllers\ProductController::class, 'showCategory']);

Route::get('/categories', [App\Http\Controllers\ProductController::class, 'showCategoryList']);

// Задача 11
Route::get('/form', [App\Http\Controllers\TestController::class, 'form']);

// Задача 11.1
Route::get('/form1', [App\Http\Controllers\TestController::class, 'form1']);

// Задача 11.2
Route::get('/form2', [App\Http\Controllers\TestController::class, 'form2']);

// Два действия для формы
Route::get('/form3', [App\Http\Controllers\TestController::class, 'form3']);

Route::get('/form3/result', [App\Http\Controllers\TestController::class, 'result']);

// Задача 11.3
Route::get('/form4', [App\Http\Controllers\TestController::class, 'form4']);

Route::get('/form4/result', [App\Http\Controllers\TestController::class, 'result1']);

// Задача 12.1
Route::get('/form5', [App\Http\Controllers\TestController::class, 'form5']);

Route::post('/form5/result', [App\Http\Controllers\TestController::class, 'result2']);

// Задача 12.2
Route::get('/form6', [App\Http\Controllers\TestController::class, 'form6']);

Route::post('/form6/result', [App\Http\Controllers\TestController::class, 'result3']);

// Задача 12.3
Route::get('/form7', [App\Http\Controllers\TestController::class, 'form7']);
Route::get('/form7/result', [App\Http\Controllers\TestController::class, 'result4']);

Route::post('/form7', [App\Http\Controllers\TestController::class, 'form7']);
Route::post('/form7/result', [App\Http\Controllers\TestController::class, 'result4']);

//Задача 12.4
Route::match(['get', 'post'], 'form8', [App\Http\Controllers\TestController::class, 'form8']);

// Задание 13.1
Route::match(['get', 'post'], 'form9', [App\Http\Controllers\TestController::class, 'form9']);

// Задание 13.2
Route::match(['get', 'post'], 'form10', [App\Http\Controllers\TestController::class, 'form10']);

// Задание 13.3
Route::match(['get', 'post'], 'form11/{name}/{surname}', [App\Http\Controllers\TestController::class, 'form11']);

// Задание 13.4 - 13.8
Route::get('test/method', [App\Http\Controllers\TestController::class, 'form12']);

// Задание 14.1, 14.2
Route::get('test/session', [App\Http\Controllers\TestController::class, 'session']);

// Задание 14.3
Route::get('test/session1', [App\Http\Controllers\TestController::class, 'session1']);

// Задание 14.4
Route::get('test/session2', [App\Http\Controllers\TestController::class, 'session2']);

// Задание 14.5
Route::get('test/session3', [App\Http\Controllers\TestController::class, 'session3']);

// Задание 14.6
Route::get('test/session4', [App\Http\Controllers\TestController::class, 'session4']);

// Задание 14.7
Route::get('test/session5', [App\Http\Controllers\TestController::class, 'session5']);

// Задание 14.8
Route::get('test/session6', [App\Http\Controllers\TestController::class, 'session6']);

// Задание 14.9
Route::get('test/session7', [App\Http\Controllers\TestController::class, 'session7']);

// Задание 14.10
Route::get('test/session8', [App\Http\Controllers\TestController::class, 'session8']);

// Задание 14.11 и 14.12
Route::get('test/session9', [App\Http\Controllers\TestController::class, 'session9']);

// Задание 15.1
Route::match(['get', 'post'], 'test/redirect', [App\Http\Controllers\TestController::class, 'redirect']);
Route::get('test/redirect/result', [App\Http\Controllers\TestController::class, 'redirectResult']);

// Задание 15.3
Route::match(['get', 'post'], 'test/redirect1', [App\Http\Controllers\TestController::class, 'redirect1']);
Route::match(['get', 'post'], 'test/redirect1/result', [App\Http\Controllers\TestController::class, 'redirectResult1'])->name('march');

// Задание 15.4
Route::match(['get', 'post'], 'test/redirect2', [App\Http\Controllers\TestController::class, 'redirect2']);
Route::match(['get', 'post'], 'test/redirect2/{$num1}/{$num2}', [App\Http\Controllers\TestController::class, 'redirectResult2'])->name('march1');
