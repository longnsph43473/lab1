<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;

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

// // Route::get('users/{id}', function ($id) {
// //     return view ('home');
// //     });
// // Route::view('/about','about') -> name('page.about');
// // Route::get('/product/(id)', function($id){
// //     return "Product id: $id";
// // })-> where('id','[0-9]+');
// // Route::get(
// //     '/user/{id}/comments/{comment_id}',
// //     function ($id, $comment_id =null){
// //         return "Product id - Comment id: $comment_id";
// //     }
// // );

// // //nhom cac duong dan co tien to giong nhau 
// // Route::prefix('admin')->group(function(){
// //     route::get('/product', function(){
// //         return "Product"; 
// //     });
// //     route::get('/users', function(){
// //         return "Users"; 
// //     });
// // });

// Route::get('/posts', function(){
//     // Update
//     DB::table('posts')->where('id', '=' , '9')-> update(['title' => 'Updated']); 
//     // Xoa
//     DB::table('posts')-> delete(14);
//     // Lấy all
//     $posts = DB::table('posts')->LIMIT(3)->get();
//     // Lấy dữ liệu theo select
//     $posts = DB::table('posts')->select('id','title','view')->where('view' , '>' , 800)->get();
//     // Join 2 bang
//     $posts =  DB::table('posts')->join('categories' , 'cate_id' , '=' , 'categories.id')->select('posts.id','title','name')->LIMIT(3)->get();
//     return $posts;
// });

// Route::get('/post-list', function(){
//     $posts = DB::table('post')->get();
//     return view ('post-list',compact('post'));
// });

// Route::get('/book-list', function(){
//     $book8High
// });

use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index']);
Route::get('/category/{id}', [BookController::class, 'category']);
Route::get('/book/{id}', [BookController::class, 'show']);
