<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Models\Biodata;
use App\Models\Faculty;
use App\Models\Post;
use App\Models\Student;
use App\Models\Transaksi;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/about', [UserController::class, 'ViewAbout'])->name('about.index');
Route::get('/about/{user}', [UserController::class, 'detailAbout'])->name('about.detail');
Route::get('/contact', [UserController::class, 'ViewContact'])->name('contact');
Route::get('/description', [UserController::class, 'ViewDescription'])->name('description');
Route::get('/dashboad/admin', [UserController::class, 'ViewDescription'])->name('profile');
Route::get('/article', [PostController::class, 'index'])->name('post.index');
Route::get('/article/create', [PostController::class, 'create'])->name('post.create');
Route::post('/article/store', [PostController::class, 'store'])->name('post.store');
Route::get('/article/{post}/detail', [PostController::class, 'show'])->name('post.show');


Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
Route::get('/biodata/mahasiswa', [StudentController::class, 'index'])->name('biodata.student');
Route::post('/create/biodata/student', [StudentController::class, 'store'])->name('create.student');


Route::post('/create/biodata', [BiodataController::class, 'store'])->name('create.biodata');
Route::get('/user', function () {
    return 'user';
});
Route::get('/user/{name}', function ($name) {

    return 'my name is ' . $name . request('id');
});


Route::get('/test-model', function () {
    $data = Post::all();

    return $data;
});




Route::get('/biodata/mahasiswa', [StudentController::class, 'index'])->name('biodata.student');
Route::get('/biodata2/student', [StudentController::class, 'index'])->name('view.biodata2');
Route::get('/biodata/detail/{student}', [StudentController::class, 'show'])->name('detail.student');
Route::put('/update/biodata/detail/{student}', [StudentController::class, 'update'])->name('update.data');
// Route::get('/biodata/detail/{student}', [StudentController::class, 'show'])->name('detail.student');








Route::post('/create/biodata/student', [StudentController::class, 'store'])->name('create.student');
Route::get('/biodata/all', [StudentController::class, 'ViewAll'])->name('view.biodata');
Route::get('/biodata/{student}', [StudentController::class, 'show'])->name('student.detail');
Route::put('/biodata/update/{student}', [StudentController::class, 'update'])->name('student.update');
