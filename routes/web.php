<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use Brick\Math\Exception\RoundingNecessaryException;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Praktikum 1
// Route::get('/hello', function () { 
//     return 'Hello World'; 
// });
 
// Route::get('/world', function () { 
//     return 'World'; 
// });

// Route::get('/', function () { 
//     return 'Selamat Datang'; 
//     });

// Route::get('/about', function () { 
//     return '2241760023 | Mochammad Dicky Hanun Prasetyo'; 
//     });

// Route::get('/user/{Dicky}', function ($name) { 
//     return 'Nama Saya '.$name;
//     });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) { 
//     return 'Pos ke- '.$postId. " Komentar ke-: ".$commentId; 
//     });

// Route::get('/articles/{id}', function ($id) { 
//     return 'Halaman Artikel dengan ID '.$id; 
//     });

// Route::get('/user/{name?}', function ($name = 'John') { 
//     return 'Nama Saya '.$name; 
//     });


// Praktikum 2
Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only(['index', 'show']);

Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

// Praktikum 3
Route::get('/greeting', function(){
    return view('blog.hello', ['name' => 'Dicky']);
});

Route::get('/greeting', [WelcomeController::class, 'greeting']);
?>