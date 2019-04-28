<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Answer;
class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $quiz = Quiz::find($id);
        return view('answer.index')->with('quiz',$quiz);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                
                 $answer=new Answer();
                $answer->userid=0;
                $answer->quizid=$request->title;
                $answer->score=0;
                if ($request->choice1==$request->ans1) {
                    $answer->score++;
                }
                if ($request->choice2==$request->ans2) {
                    $answer->score++;
                }
                if ($request->choice3==$request->ans3) {
                    $answer->score++;
                }
                if ($request->choice4==$request->ans4) {
                    $answer->score++;
                }
                if ($request->choice5==$request->ans5) {
                    $answer->score++;
                }
                $answer->save();
                
                return view('answer.result')->with('answer',$answer);

                //dd($answer);

         
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return view('answer.timeout');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getusersocre(Request $request){
        $exist= Answer::where('userid', $request->get('userid'))->exists();
        $msg = "User doesn't exist";
        if(!$exist){
            return [$msg,200];
        }
        else{
            $ans= Answer::where('userid', $request->get('userid'))->get();
            return [response()->json($ans),200];
        }
        

    }
   
}
