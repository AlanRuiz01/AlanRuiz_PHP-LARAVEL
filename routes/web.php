<?php


use App\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisteredUserController;

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
//personal-site.com => welcome
//personal-site.com/contacto => contact
//personal-site.com/blog => blog
//personal-site.com/about => about

// When there is logic here
// This funtion can return strings , arrays etc.
/*
Route::get('/', function () {
    return view('welcome');
});*/
//Here when you only want to show the view
/*
Retornar el array con el metodo view
$posts = [
['title' => 'First post'],
['title' => 'Second post'],
['title' => 'Third post'],
['title' => 'Fourth post'],

];
*/
Route::view('/','welcome')->name('welcome');
Route::view('/contact','contact')->name('contact');
// Route::view('/blog','blog',['posts' => $posts])->name('blog');

/* Aqui con el metodo get utilizando el retorno de la vista
Route::get('/blog', function(){
    $posts = [
        ['title' => 'First post'],
        ['title' => 'Second post'],
        ['title' => 'Third post'],
        ['title' => 'Fourth post'],
        ];
        return view('blog',['posts' => $posts]); 
    })->name('blog');
*/
/*
// Metodo get utilizando Controller
Route::get('/blog', [PostController::class,'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class,'create'])->name('posts.create');
Route::post('/blog', [PostController::class,'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class,'show'])->name('posts.show');
Route::get('/blog/{post}/edit', [PostController::class,'edit'])->name('posts.edit');
Route::patch('/blog/{post}', [PostController::class,'update'])->name('posts.update');
Route::delete('/blog/{post}', [PostController::class,'destroy'])->name('posts.destroy');
*/
// Tambien se puede hacer asi 
// Route::get('blog', 'App\Http\Controllers\PostController')->name('blog');
//Una forma abreviada para las rutas
Route::resource('blog', PostController::class, [
    'names'=> 'posts',
    'parameters' => ['blog' => 'post']
]);
 

Route::view('/about','about')->name('about');



Route::view('/register','auth.register')->name('register');
Route::view('/login','auth.login')->name('login');


Route::post('login',[AuthenticatedSessionController::class,'store'])->name('login');
Route::post('logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');
Route::post('/register',[RegisteredUserController::class,'store'])->name('register');