<?php

namespace App\Http\Controllers;

use App\Candidate as Candidate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class CandidateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createCandidate(Request $request){
        $candidate = Candidate::create($request->all());

        return response()->json($candidate);
    }

    public function index(Request $request){
        $candidate = Candidate::all();
        return response()->json($candidate);
    }

    public function show($id){
        $candidate = Candidate::find($id);

        if(!$candidate){
            return response()->json([
                'message' => 'Candidate not found',
            ], 404);
        }

        return response()->json($candidate);
    }

    public function store(Request $request){
        $candidate = new Candidate();
        $candidate->fill($request->all());
        if(!$candidate->save()){
            return response()->json([
                'message' => 'Erro to save the candidate',
            ], 401);
        }
        return response()->json($candidate, 201);
    }

    //
}
