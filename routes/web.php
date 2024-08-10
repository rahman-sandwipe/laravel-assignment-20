<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
// GET /contacts: List all contacts
Route::get('/contects', [ContactController::class, 'list']);

// GET /contacts/create: Show the form to create a new contact
Route::get('/contacts/create', [ContactController::class, 'create']);

// POST /contacts: Store a new contact
Route::post('/contacts/store', [ContactController::class, 'store']);

Route::get('/contacts/show/{id}', [ContactController::class, 'show']);
// GET /contacts/{id}: Show a specific contact

// GET /contacts/{id}/edit: Show the form to edit a contact
Route::get('/contacts/edit/{id}', [ContactController::class, 'edit']);

// PUT /contacts/{id}: Update a contact
Route::post('/contacts/edit/{id}', [ContactController::class, 'update']);

// DELETE /contacts/{id}: Delete a contact
Route::get('/contacts/delete/{id}', [ContactController::class, 'delete']);