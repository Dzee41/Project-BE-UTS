<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

# Method GET
Route::get('/patients', [PatientsController::class, 'index']);

# Method POST
Route::post('/patients', [PatientsController::class, 'store']);

#Method GET by id
Route::get('/patients/{id}', [PatientsController::class, 'show']);

#Method PUT
Route::put('/patients/{id}', [PatientsController::class, 'update']);

#Method DELETE
Route::delete('/patients/{id}', [PatientsController::class, 'destroy']);

#Method GET by name
Route::get('/patients/search/{name}', [PatientsController::class, 'search']);

#Methhod GET by status positive
Route::get('/patients/status/{status}', [PatientsController::class, 'status']);
