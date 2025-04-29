<?php

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Auth\Events\Validated;
use App\Models\Rio;
//use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

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


//Route::post('products', ProductController::class);

/*
Route::post('/Rio', function(Request $request)) {
    $validator =Validated::make ($request->all(),[
        'name'=> 'require|string|max:255', 
        'description'=> 'require|string|max:255', 

        'price'=> 'require|string|max:255', 
        'quantity'=> 'require|string|max:255', 

    ]);

if($validator->fails()){
    return respons()->json(['error'=> $validator->errors()->first() ])
}
$Rio = Rio::create($request-> all());
return $Rio;
}*/




Route::post('/Rio', function(Request $request) {
    $validator = Validator::make($request->all(), [
        'name'        => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'price'       => 'required|string|max:255',
        'quantity'    => 'required|string|max:255',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'error' => $validator->errors()->first()
        ], 422);
    }

    $Rio = Rio::create($request->all());
    return response()->json($Rio, 201);
});
