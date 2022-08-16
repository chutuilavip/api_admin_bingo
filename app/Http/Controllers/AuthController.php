<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'checkLogin', 'register', 'unauthorized']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'adminID' => 'required',
            'adminPW' => 'required|string|min:4',
        ]);
        $user = $request->adminID;
        $password = $request->adminPW;

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!$token = auth()->attempt(['adminID' => $user, 'password' => $password])) {
            return response()->json(['status' => 401,'error' => 'Unauthorized']);
        }
        return $this->createNewToken($token);
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'adminID' => 'required|string|unique:admin_user',
            'adminPW' => 'required|string|min:6',
            'password_confirmation' => 'required|min:8|same:adminPW',
        ]);

        if ($validator->fails()) {
            
            $response = array(
                'code'      => 400,
                'status'    => 'failed',
                'errors'    => $validator->errors()->all()
                // 'message'   => $validator->errors()->all()
            );
            return response()->json($response, $response['code']);
        }

        $user = User::create(array_merge(
            $validator->validated(),
            ['adminPW' => bcrypt($request->adminPW)]
        ));

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);
    }


    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'User successfully signed out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->createNewToken(auth()->refresh());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile()
    {
        return response()->json(auth()->user());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }

    public function changePassWord(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|string|min:6',
            'new_password' => 'required|string|confirmed|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $userId = auth()->user()->adminID;

        $user = User::where('adminID', $userId)->update(
            ['adminPW' => bcrypt($request->new_password)]
        );

        return response()->json([
            'message' => 'User successfully changed password',
            'user' => $user,
        ], 201);
    }
    
    public function checkLogin()
    {
        return response()->json(auth()->user());
    }
    
    public function unauthorized()
    {
        return response()->json(['status' => 401,'error' => 'Unauthorized']);
    }
}
