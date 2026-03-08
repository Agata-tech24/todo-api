<?php
use App\Http\Controllers\StudentController; // Pakai A Kapital
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllers\Response;


Route::get('/user', function (Request $request): mixed {
return $request->user(); })->middleware('auth:sanctum');

Route::get('/ping', function(): mixed {
return response()->json(['message' => 'pong']);
});

// CRUD Student
Route::post('/students', [StudentController::class, 'store']);
Route::get('/students', [StudentController::class, 'index']);
Route::put('/students/{nim}', [StudentController::class, 'update']);
Route::patch('/students/{nim}', [StudentController::class, 'update']);
Route::delete('/students/{nim}', [StudentController::class, 'destroy']);

