<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\MessageBag;
use App\Candidate as Candidate;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function home(Request $request){
        $header = $_GET['access_token'];

        if(!$header || $header == ''){
            return response('Not valid token provider.', 401);
        }

        $candidates = Candidate::all();
        return response()->make(view('home')->with('candidates', $candidates));
    }

    public function candidates($id){
        $candidate = Candidate::find($id);
        
        if(!$candidate){
            return response()->json([
                'message' => 'Candidate not found',
            ], 404);
        }

        return response()->make(view('candidate')->with('candidate', $candidate));

        //return response()->json($candidate);
    }
}
