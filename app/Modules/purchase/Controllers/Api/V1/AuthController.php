<?php
namespace App\Modules\Auth\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request) {
       return response()->json("hellow word");
    }

    public function login(Request $request) {
        // Call service or logic
    }

    public function user(Request $request) {
        return response()->json($request->user());
    }

    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out']);
    }
}
