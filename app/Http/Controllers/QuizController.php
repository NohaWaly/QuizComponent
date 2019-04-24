<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Answer;

class QuizController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzes = Quiz::all()->toArray();
        return view('quizzes.index', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quizzes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'quiztitle' =>'required',
            'skilltype' =>'required',
            'passsocre' =>'required|integer',
            'duration' =>'required|integer',
            'question1'=> 'required',
            'choice1a' =>'required',
            'choice2a'  =>'required',
            'choice3a' =>'required',
            'modelans1' =>'required',
            'question2' =>'required',
            'choice1b' =>'required',
            'choice2b' =>'required',
            'choice3b'=>'required',
            'modelans2'=>'required',
            'question3'=>'required',
            'choice1c'=>'required',
            'choice2c'=>'required',
            'choice3c'=>'required',
            'modelans3' =>'required',
            'question4'=>'required',
            'choice1d'=>'required',
            'choice2d'=>'required',
            'choice3d'=>'required',
            'modelans4'=>'required',
            'question5'=>'required',
            'choice1e'=>'required',
            'choice2e'=>'required',
            'choice3e'=>'required',
            'modelans5'=>'required',
        ]);

        $quiz = new Quiz();
        $quiz->title=$request->get('quiztitle');
        $quiz->skilltype = $request->get('skilltype');
        $quiz->passScore = $request->get('passsocre');
        $quiz->duration = $request->get('duration');

        $quiz->question1= $request->get('question1');
        $quiz->choice11= $request->get('choice1a');
        $quiz->choice21= $request->get('choice2a');
        $quiz->choice31= $request->get('choice3a');
        $quiz->modelans1=$request->get('modelans1');

        $quiz->question2= $request->get('question2');
        $quiz->choice12= $request->get('choice1b');
        $quiz->choice22= $request->get('choice2b');
        $quiz->choice32= $request->get('choice3b');
        $quiz->modelans2=$request->get('modelans2');

        $quiz->question3= $request->get('question3');
        $quiz->choice13= $request->get('choice1c');
        $quiz->choice23= $request->get('choice2c');
        $quiz->choice33= $request->get('choice3c');
        $quiz->modelans3=$request->get('modelans3');

        $quiz->question4= $request->get('question4');
        $quiz->choice14= $request->get('choice1d');
        $quiz->choice24= $request->get('choice2d');
        $quiz->choice34= $request->get('choice3d');
        $quiz->modelans4=$request->get('modelans4');

        $quiz->question5= $request->get('question5');
        $quiz->choice15= $request->get('choice1e');
        $quiz->choice25= $request->get('choice2e');
        $quiz->choice35= $request->get('choice3e');
        $quiz->modelans5=$request->get('modelans5');

        $quiz->save();

        return redirect('quizzes')->with('success','quiz has ben added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quiz = Quiz::find($id);
        return view('quizzes.show')->with('quiz',$quiz);
    }

    public function getquiz(Request $request)
    {
        $id= $request->get('quizid');
        $quiz = Quiz::find($id);
        return response()->json($quiz);

    }

    public function createnewquiz(Request $request){
        
        $request->validate([
            'quiztitle' =>'required',
            'skilltype' =>'required',
            'passsocre' =>'required|integer',
            'duration' =>'required|integer',
            
        ]);

        $quiz = new Quiz();
        $quiz->title=$request->get('quiztitle');
        $quiz->skilltype = $request->get('skilltype');
        $quiz->passScore = $request->get('passsocre');
        $quiz->duration = $request->get('duration');
        $quiz->questioncounter = 0;
        $quiz->save();

        return response()->json($quiz);

    }

    public function addquestion(Request $request){
        $id = $request->get('id');
        $quiz = Quiz::find($id);
        $counter = $request->get('quesid');
        if($counter > 5){
            return "max num of questions is 5";
        }
        $quiz['question'.$counter]= $request->get('question');
        $quiz['choice1'.$counter]= $request->get('choice1');
        $quiz['choice2'.$counter]= $request->get('choice2');
        $quiz['choice3'.$counter]= $request->get('choice3');
        $quiz['modelans'.$counter]=$request->get('modelans');
         $quiz->save();
        return response()->json($quiz);

    }

    public function deletequiz(Request $request)
    {
        $id= $request->get('id');
        $quiz = Quiz::find($id);
        $quiz->delete();
        return "quiz has been  deleted";
    }


    public function getskilltype(Request $request){
       $quizzes= Quiz::where('skilltype', $request->get('skilltype'))->get();
       return response()->json($quizzes);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quiz = Quiz::find($id);
        return view('quizzes.edit',compact('quiz','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');
        $quiz = Quiz::find($id);
        $quiz->title=$request->get('quiztitle');
        $quiz->skilltype = $request->get('skilltype');
        $quiz->passScore = $request->get('passsocre');
        $quiz->duration = $request->get('duration');

        $quiz->question1= $request->get('question1');
        $quiz->choice11= $request->get('choice1a');
        $quiz->choice21= $request->get('choice2a');
        $quiz->choice31= $request->get('choice3a');
        $quiz->modelans1=$request->get('modelans1');

        $quiz->question2= $request->get('question2');
        $quiz->choice12= $request->get('choice1b');
        $quiz->choice22= $request->get('choice2b');
        $quiz->choice32= $request->get('choice3b');
        $quiz->modelans2=$request->get('modelans2');

        $quiz->question3= $request->get('question3');
        $quiz->choice13= $request->get('choice1c');
        $quiz->choice23= $request->get('choice2c');
        $quiz->choice33= $request->get('choice3c');
        $quiz->modelans3=$request->get('modelans3');

        $quiz->question4= $request->get('question4');
        $quiz->choice14= $request->get('choice1d');
        $quiz->choice24= $request->get('choice2d');
        $quiz->choice34= $request->get('choice3d');
        $quiz->modelans4=$request->get('modelans4');

        $quiz->question5= $request->get('question5');
        $quiz->choice15= $request->get('choice1e');
        $quiz->choice25= $request->get('choice2e');
        $quiz->choice35= $request->get('choice3e');
        $quiz->modelans5=$request->get('modelans5');

        $quiz->save();

        return redirect('quizzes')->with('success','quiz has ben updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
            $quiz = Quiz::find($id);
            $quiz->delete();
            return redirect('quizzes')->with('success','Quiz has been  deleted');
        
    }

 
}
