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

//Subject pages for different features
Route::get('/subjects/discussion', [SubjectController::class, 'show_discussion_subjects']);
Route::get('/subjects/note', [SubjectController::class, 'show_note_subjects']);
Route::get('/subjects/resource', [SubjectController::class, 'show_resource_subjects']);

// Dashboard
Route::get('/', [SubjectController::class, 'show_dashboard'])->name('dashboard')->middleware(['auth']);
Route::get('/dashboard', [SubjectController::class, 'show_dashboard'])->name('dashboard')->middleware(['auth']);


//Discussions
Route::get('/subjects/{subject}/discussion', [DiscussionController::class, 'show']);
Route::get('/subjects/{subject}/discussion/create', [DiscussionController::class, 'create']);
Route::post('/subjects/{subject}/discussion/store', [DiscussionController::class, 'store']);
Route::get('/subjects/{subject}/discussion/{id}/delete', [DiscussionController::class, 'destroy']);
Route::get('/subjects/{subject}/discussion/{id}/edit', [DiscussionController::class, 'edit']);
Route::get('/subjects/{subject}/discussion/{id}/update', [DiscussionController::class, 'update']);

//Replies
Route::get('/subjects/{subject}/discussion/{id}', [ReplyController::class, 'show']);
Route::post('/subjects/{subject}/discussion/{discussion_id}/reply/store', [ReplyController::class, 'store']);
Route::get('/subjects/{subject}/discussion/{discussion_id}/reply/{id}/delete', [ReplyController::class, 'destroy']);
Route::get('/subjects/{subject}/discussion/{discussion_id}/reply/{id}/edit', [ReplyController::class, 'edit']);
Route::post('/subjects/{subject}/discussion/{discussion_id}/reply/{id}/update', [ReplyController::class, 'update']);

//Notes
Route::get('/subjects/{subject}/note', [NoteController::class, 'show']);
Route::get('/subjects/{subject}/note/upload', [NoteController::class, 'upload']);
Route::post('/subjects/{subject}/note/store', [NoteController::class, 'store']);
Route::get('/subjects/{subject}/note/{note_id}/download', [NoteController::class, 'download']);
Route::get('/subjects/{subject}/note/{note_id}/delete', [NoteController::class, 'delete']);

//Resources
Route::get('/subjects/{subject_name}/resource', [ResourceController::class, 'show']);
Route::get('/subjects/{subject_name}/resource/create', [ResourceController::class, 'create']);
Route::post('/subjects/{subject_name}/resource/store', [ResourceController::class, 'store']);
Route::get('/subjects/{subject_name}/resource/{id}/edit', [ResourceController::class, 'edit']);
Route::get('/subjects/{subject_name}/resource/{id}/delete', [ResourceController::class, 'destroy']);
Route::post('/subjects/{subject_name}/resource/{id}/update', [ResourceController::class, 'update']);

//Search
Route::post('/search', [SearchController::class, 'search']);

require __DIR__.'/auth.php';