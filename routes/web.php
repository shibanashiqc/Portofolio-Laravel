<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    $data = DB::table('users')->where('id', 1)->first();
    $skills = DB::table('skils')->get();
    $projects = DB::table('project')->get();
    //dd($skills);
    return view('welcome', [
        'data' => $data,
        'skills' => $skills,
        'projects' => $projects
    ]);
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('home', [App\Http\Controllers\HomeController::class, 'index_edit'])->name('home.edit');
//Skills
Route::get('/skils', [App\Http\Controllers\HomeController::class, 'skils'])->name('skils');
Route::get('/skils/add', [App\Http\Controllers\HomeController::class, 'add'])->name('skil.view');
Route::post('/skils/add', [App\Http\Controllers\HomeController::class, 'create_skill'])->name('skil.add');
Route::get('/skils/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete_skill'])->name('skil.delete');
Route::get('/skils/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit_skill'])->name('skil.edit');
Route::post('/skils/edit/{id}', [App\Http\Controllers\HomeController::class, 'update_skill'])->name('skil.update');

//Projects

Route::get('/projects', [App\Http\Controllers\HomeController::class, 'projects'])->name('projects');
Route::get('/projects/add', [App\Http\Controllers\HomeController::class, 'projects_add'])->name('projects.view');
Route::post('/projects/add', [App\Http\Controllers\HomeController::class, 'projects_create'])->name('projects.add');

Route::get('/projects/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete_projects'])->name('projects.delete');
Route::get('/projects/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit_projects'])->name('projects.edit');
Route::post('/projects/edit/{id}', [App\Http\Controllers\HomeController::class, 'update_projects'])->name('projects.update');
