<?php

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/home', function (Request $request) {
  return $request->user();

});

Route::get('/greet', function () {
    return response()->json([
        'message' => 'مرحباً! هذا رد من الخادم',
        'data' => [
            'name' => 'مستخدم جديد',
            'time' => now()->format('H:i:s')
        ]
    ]);
});


Route::post('/register', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'age' => 'nullable|integer|min:18'
    ]);

    return response()->json([
        'status' => 'success',
        'message' => 'تم استلام البيانات بنجاح',
        'data' => $data,
        'server_time' => now()->toDateTimeString()
    ], 201); // كود الحالة 201 (Created)
});
