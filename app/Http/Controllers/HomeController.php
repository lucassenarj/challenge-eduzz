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

    private function verification(){
        $header = $_GET['access_token'];
        
        if(!$header || $header == ''){
            return response('Not valid token provider.', 401);
        }
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function home(Request $request){
        $this->verification();

        $candidates = Candidate::orderBy('id', 'desc')->get();
        return response()->make(view('home')->with('candidates', $candidates));
    }

    public function candidates($id){
        $this->verification();        
                
        $candidate = Candidate::find($id);
        
        if(!$candidate){
            return response()->json([
                'message' => 'Candidate not found',
            ], 404);
        }

        return response()->make(view('candidate')->with('candidate', $candidate));
    }

    public function edit($id){
        $this->verification();
        
        $candidate = Candidate::find($id);
        
        if(!$candidate){
            return response()->json([
                'message' => 'Candidate not found',
            ], 404);
        }

        return response()->make(view('edit')->with('candidate', $candidate));

        //return response()->json($candidate);
    }

    public function store(Request $request){
        $this->verification();

        $candidate = Candidate::create($request->all());

        if(!$candidate){
            return response()->json([
                'message' => 'Error to create the candidate',
            ], 401);
        }

        $candidates = Candidate::orderBy('id', 'desc')->get();
        return response()->make(view('home')->with('candidates', $candidates));
        //return response()->make(view('home')->with('candidate', $candidate));
    }

    public function update(Request $request,$id){
        $this->verification();

        $candidate = Candidate::find($id);
        $candidate->name = $request->input('name');
        $candidate->birth = $request->input('birth');
        $candidate->age = $request->input('age');
        $candidate->portfolio = $request->input('portfolio');
        $candidate->email = $request->input('email');
        $candidate->bio = $request->input('bio');
        $candidate->photo = $request->input('photo');
        $candidate->save();

        return response()->make(view('candidate')->with('candidate', $candidate));
        //return response()->json($Book);
    }
    
    public function destroy($id){
        $this->verification();

        $candidate = Candidate::find($id);
        $candidate->delete();
 
        $candidates = Candidate::orderBy('id', 'desc')->get();
        return response()->make(view('home')->with('candidates', $candidates));
    }
}
