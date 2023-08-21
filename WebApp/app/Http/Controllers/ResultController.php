<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Result;
use App\Models\Test;
use Illuminate\Http\Request;


class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
     
        $a = 'admin/users/history/'.$result->user_id;
        $result->delete();
        return redirect($a);
    }
    public function showHistory()
    {
        $result = Result::where('user_id',auth()->user()->id)->get();
       
        return view('history',['result'=>$result]);
    }
    public function showHistoryUser($id)
    {
        $result = Result::where('user_id',$id)->get();
       
        return view('admin.user.history',['result'=>$result]);
    }

    public function ShowAnswerQuestion($id)  {
        $question = Question::where('test_id',$id)->get();
    
        return view("AnswerQuestion",['questions'=>$question,'test'=>$id]);
       
    }
}
