<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User as User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{
    private $user; // atual user da API
    private $token; // token do JWT
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth:api', ['except' => ['login']]);
     }
 
     /**
      * Get a JWT token via given credentials.
      *
      * @param  \Illuminate\Http\Request  $request
      *
      * @return \Illuminate\Http\JsonResponse
      */
     public function login(Request $request)
     {
         $credentials = $request->only('email', 'password');
 
         if ($token = $this->guard()->attempt($credentials)) {
             return $this->respondWithToken($token);
         }
 
         return response()->json(['error' => 'Unauthorize1d'], 401);
     }
 
     /**
      * Get the authenticated User
      *
      * @return \Illuminate\Http\JsonResponse
      */
     public function me()
     {
         return response()->json($this->guard()->user());
     }
 
     /**
      * Log the user out (Invalidate the token)
      *
      * @return \Illuminate\Http\JsonResponse
      */
     public function logout()
     {
         $this->guard()->logout();
 
         return response()->json(['message' => 'Successfully logged out']);
     }
 
     /**
      * Refresh a token.
      *
      * @return \Illuminate\Http\JsonResponse
      */
     public function refresh()
     {
         return $this->respondWithToken($this->guard()->refresh());
     }
 
     /**
      * Get the token array structure.
      *
      * @param  string $token
      *
      * @return \Illuminate\Http\JsonResponse
      */
     protected function respondWithToken($token)
     {
         return redirect()->route('home', ['access_token' => $token]);
         //return redirect('home')->header('access_token', $token);
        
         //return response()->make(view('home'), 200, ['access_token' => $token]);
         
         //response()->header('access_token', $token);
         //return redirect()->route('welcome');
         /*
         return response()->json([
             'access_token' => $token,
             'token_type' => 'bearer',
             'expires_in' => $this->guard()->factory()->getTTL() * 60
         ]);
         //*/
     }
 
     /**
      * Get the guard to be used during authentication.
      *
      * @return \Illuminate\Contracts\Auth\Guard
      */
     public function guard()
     {
         return Auth::guard();
     }

    
    /**
    *  Função para listar todos os usuários cadastrados no banco de dados
    *  
    *  @return json com os resultados
    */
    
    public function index(){
        $users = User::all();
        return response()->json($users);
    }



    public function show($id){
        $user = User::find($id);

        if(!$user){
            return response()->json([
                'message' => 'User not found',
            ], 404);
        }

        return response()->json($user);
    }

    public function authenticate(\Illuminate\Http\Request $request) { 
        $credentials = $request->only('email', 'password'); // grab credentials from the request
        try {
            if (!$token = JWTAuth::attempt($credentials)) { // attempt to verify the credentials and create a token for the user
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500); // something went wrong whilst attempting to encode the token
        }

        return response()->json(['token' => "Bearer $token"]);
    }
}
