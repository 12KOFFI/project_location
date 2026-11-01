remplace le contenu de routes/api.php par :  : <?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/status', function () {
    return response()->json([
        'status' => 'ok',
        'application' => config('app.name'),
        'environnement' => config('app.env'),
        'heure_serveur' => now()->toIso8601String(),
    ], 200);
});