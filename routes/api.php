<?php
use  App\Models\Loser;
use App\Http\Controllers\LoserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('losers', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Loser::all();
});

Route::get('losers/{id}', function($id) {
    return Loser::find($id);
});

Route::post('losers', function(Request $request) {
    return Loser::create($request->all);
});

Route::delete('losers/{id}', function($id) {
    Loser::find($id)->delete();

    return 204;
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/',[LoserController::class, 'index']);
Route::get('losers/{id}',[LoserController::class, 'show']);
Route::post('losers',[LoserController::class, 'store']);
Route::put('losers/{id}',[LoserController::class, 'update']);
Route::delete('losers/{id}',[LoserController::class, 'delete']);
