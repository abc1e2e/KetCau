<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PostImgController;
use App\Http\Controllers\Admin\SliderBarController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\LegalInfomationController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\QuestionController;
use App\Models\PostImg;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Homecontroller::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/private-policy', [PrivateController::class, 'index']);
Route::get('/legal-infomation', [LegalInfomationController::class, 'index']);
Route::get('/question', [QuestionController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/project', [ProjectController::class, 'index']);
Route::get('/project/{id}', [ProjectController::class, 'detail'])->name('project.detail');
Route::get('/product/equipment', [ProductController::class, 'indexEquipment'])->name('product.indexEquipment');
Route::get('/product/material', [ProductController::class, 'indexMaterial'])->name('product.indexMaterial');
Route::get('/product/material/{id}', [ProductController::class, 'detailIndexMaterial'])->name('product.detail.indexMaterial');
Route::get('/product/equipment/{id}', [ProductController::class, 'detailIndexEquipment'])->name('product.detail.indexEquipment');
Route::get('/product/steel', [ProductController::class, 'steelIndex']);
Route::get('/product/structure', [ProductController::class, 'structureIndex']);
// Route::get('/product/{id}', [ProductController::class, 'detail'])->name('product.detail');
Route::get('/news', [NewController::class, 'index']);
Route::get('/news/{id}', [NewController::class, 'detail'])->name('news.detail');
Route::post('/news/comment', [CommentController::class, 'ajaxcomment'])->name('news.comment');
Route::prefix('admin')->get('/dashboard', function () {
    return view('layouts/admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('categories', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('categories/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

    Route::get('posts', [PostController::class, 'index'])->name('admin.posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');



    Route::get('post-img', [PostImgController::class, 'index'])->name('admin.postImgs.index');
    Route::get('post-img/create', [PostImgController::class, 'create'])->name('admin.postImgs.create');
    Route::post('post-img', [PostImgController::class, 'store'])->name('admin.postImgs.store');
    Route::get('post-img/{postImg}', [PostImgController::class, 'show'])->name('admin.postImgs.show');
    Route::get('post-img/{postImg}/edit', [PostImgController::class, 'edit'])->name('admin.postImgs.edit');
    Route::put('post-img{postImg}', [PostImgController::class, 'update'])->name('admin.postImgs.update');
    Route::delete('post-img/{postImg}', [PostImgController::class, 'destroy'])->name('admin.postImgs.destroy');




    Route::get('sliderbar', [SliderBarController::class, 'index'])->name('admin.sliderbar.index');
    Route::get('sliderbar/create', [SliderBarController::class, 'create'])->name('admin.sliderbar.create');
    Route::post('sliderbar', [SliderBarController::class, 'store'])->name('admin.sliderbar.store');
    Route::get('sliderbar/{sliderbar}', [SliderBarController::class, 'show'])->name('admin.sliderbar.show');
    Route::get('sliderbar/{sliderbar}/edit', [SliderBarController::class, 'edit'])->name('admin.sliderbar.edit');
    Route::put('sliderbar/{sliderbar}', [SliderBarController::class, 'update'])->name('admin.sliderbar.update');
    Route::delete('sliderbar/{sliderbar}', [SliderBarController::class, 'destroy'])->name('admin.sliderbar.destroy');

    Route::get('comments', [CommentController::class, 'index'])->name('admin.comments.index');
    Route::get('comments/create', [CommentController::class, 'create'])->name('admin.comments.create');
    Route::post('comments', [CommentController::class, 'store'])->name('admin.comments.store');
    Route::get('comments/{comment}', [CommentController::class, 'show'])->name('admin.comments.show');
    Route::get('comments/{comment}/edit', [CommentController::class, 'edit'])->name('admin.comments.edit');
    Route::put('comments/{comment}', [CommentController::class, 'update'])->name('admin.comments.update');
    Route::delete('comments/{comment}', [CommentController::class, 'destroy'])->name('admin.comments.destroy');

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
