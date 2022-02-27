<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SearchController;

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


// Dashboard
Route::get('/', [SubjectController::class, 'show_dashboard'])->name('dashboard')->middleware(['auth']);
Route::get('/dashboard', [SubjectController::class, 'show_dashboard'])->name('dashboard')->middleware(['auth']);


//Discussions
Route::get('/subjects/{subject}/discussion', [DiscussionController::class, 'show'])->name('discussion')->middleware(['auth']);
Route::get('/subjects/{subject}/discussion/create', [DiscussionController::class, 'create'])->name('discussion')->middleware(['auth']);
Route::post('/subjects/{subject}/discussion/store', [DiscussionController::class, 'store'])->name('discussion')->middleware(['auth']);
Route::get('/subjects/{subject}/discussion/{id}/delete', [DiscussionController::class, 'destroy'])->name('discussion')->middleware(['auth']);
Route::get('/subjects/{subject}/discussion/{id}/edit', [DiscussionController::class, 'edit'])->name('discussion')->middleware(['auth']);
Route::get('/subjects/{subject}/discussion/{id}/update', [DiscussionController::class, 'update'])->name('discussion')->middleware(['auth']);

//Replies
Route::get('/subjects/{subject}/discussion/{id}', [ReplyController::class, 'show'])->name('reply')->middleware(['auth']);
Route::post('/subjects/{subject}/discussion/{discussion_id}/reply/store', [ReplyController::class, 'store'])->name('reply')->middleware(['auth']);
Route::get('/subjects/{subject}/discussion/{discussion_id}/reply/{id}/delete', [ReplyController::class, 'destroy'])->name('reply')->middleware(['auth']);
Route::get('/subjects/{subject}/discussion/{discussion_id}/reply/{id}/edit', [ReplyController::class, 'edit'])->name('reply')->middleware(['auth']);
Route::post('/subjects/{subject}/discussion/{discussion_id}/reply/{id}/update', [ReplyController::class, 'update'])->name('reply')->middleware(['auth']);

//Notes
Route::get('/subjects/{subject}/note', [NoteController::class, 'show'])->name('note')->middleware(['auth']);
Route::get('/subjects/{subject}/note/upload', [NoteController::class, 'upload'])->name('note')->middleware(['auth']);
Route::post('/subjects/{subject}/note/store', [NoteController::class, 'store'])->name('note')->middleware(['auth']);
Route::get('/subjects/{subject}/note/{note_id}/download', [NoteController::class, 'download'])->name('note')->middleware(['auth']);
Route::get('/subjects/{subject}/note/{note_id}/delete', [NoteController::class, 'delete'])->name('note')->middleware(['auth']);

//Resources
Route::get('/subjects/{subject_name}/resource', [ResourceController::class, 'show'])->name('resource')->middleware(['auth']);
Route::get('/subjects/{subject_name}/resource/create', [ResourceController::class, 'create'])->name('resource')->middleware(['auth']);
Route::post('/subjects/{subject_name}/resource/store', [ResourceController::class, 'store'])->name('resource')->middleware(['auth']);
Route::get('/subjects/{subject_name}/resource/{id}/edit', [ResourceController::class, 'edit'])->name('resource')->middleware(['auth']);
Route::get('/subjects/{subject_name}/resource/{id}/delete', [ResourceController::class, 'destroy'])->name('resource')->middleware(['auth']);
Route::post('/subjects/{subject_name}/resource/{id}/update', [ResourceController::class, 'update'])->name('resource')->middleware(['auth']);

//Search
Route::post('/search', [SearchController::class, 'search'])->name('search')->middleware(['auth']);

require __DIR__.'/auth.php';