<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{



    public function index(){
        Log::info("fetching all users");
        $users = User::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Users fetched successfully',
            'users' => $users
        ]);
    }
    public function register(Request $request)
    {

        Log::info('Registering user', [
            'name' => $request->name,
            'email' => $request->email,
        ]);
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:8',
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        Log::info('User registered successfully', [
            'user_id' => $user->id,
            'email' => $user->email,
        ]);

        $token = Auth::login($user);
        return response()->json([
            'status'=>'success',
            'message'=>'User registered successfully',
            'user'=>$user,
            'authorization'=>[
                'token'=>$token,
                'type'=>'Bearer'
            ]
            
            ]);
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|string'
        ]);

        $credentials = $request->only('email','password');

        $token = Auth::attempt($credentials);
        if(!$token){
            return response()->json([
                'status'=>'error',
                'message'=>'Invalid credentials'
            ], 401);
        }

        $user = Auth::user();

        return response()->json([
            'status'=>true,
            'user'=>$user,
            'authorization'=>[
                'token'=>$token,
                'type'=>'Bearer'
            ]
            ]);
    }

    public function logout(){
        Auth::logout();

        return response()->json([
            'status'=>'success',
            'message'=>'User logged out successfully'
        ]);
    }
}
