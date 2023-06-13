<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

// Viewing Registration Page of User
Route::get('/register', function () {
    return view('register');
});

// Route to send user input data to database using register method
Route::post('/register', [UserController::class, 'register']);

// Logout route using logout method
Route::post('/logout', [UserController::class, 'logout']);

// Login View page
Route::get('/login',function(){
    return view('login');
});

// Logging in to users
Route::post('/login', [UserController::class, 'login']);

// For viewing Home Page
// Route::get('/home', function () {
//     return view('home');
// });

//Blog Post related routes
Route::post('/create-post', [PostController::class, 'createPost']);

//Viewing all posts
Route::get('/posts', function(){
    $posts = Post::all();
    return view('posts', ['posts' => $posts]);
});

//Viewing Posts for the loggedin user
Route::get('/home', function(){

    if(auth()->check()){
        $posts = auth()->user()->usersAllPosts()->latest()->get();
        return view('home', ['posts' => $posts]);
    }
    return view('login');
});

// For editing Post for the loggin User
Route::get('/edit-post/{post}', [PostController::class, 'editPost']);
// Putting the new updated entity into the database
Route::put('/edit-post/{post}', [PostController::class, 'updatingPost']);
// Deleting a post
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);




?>
