<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;


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

    // $images = Image::all();
    // foreach ($images as $image) {
    //     echo $image->image_path.'<br>';
    //     echo $image->description.'<br>';
    //     echo '<strong>'.$image->user->name. ' '. $image->user->surname.'</strong>';

    //     if(count($image->comments) >= 1){

    //         echo '<h4>Comentarios</h4>';
    //         foreach($image->comments as $comment ) {
    //             echo $comment->user->name. ' '. $comment->user->surname.' '. '<strong style="text-transform:uppercase;">'.$comment->user->nick.'</strong>'.': ';
                
    //             echo $comment->content.'<br>';
    //         }
    //     }

    //     echo '<h5>Likes:</h5> '.count($image->likes);
    //     echo "<hr>";
    // }
    // die();
    // return view('welcome');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/configuracion', [UserController::class, 'config'])->name('config');

Route::post('/user/update', [UserController::class,'update'])->name('user.update');
Route::get('/user/avatar/{filename?}', [UserController::class, 'getImage'])->name('user.avatar');

Route::get('/subir-image', [ImageController::class,'create'])->name('image.create');
Route::post('/image/save', [ImageController::class,'save'])->name('image.save');

Route::get('/image/file/{filename?}', [ImageController::class, 'getImage'])->name('image.file');
Route::get('/imagen/{id}', [ImageController::class, 'detail'])->name('image.detail');

Route::post('/comment/save', [CommentController::class,'save'])->name('comment.save');




