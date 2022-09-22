<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function exam(Request $request)
    {
        $data= $request->all();
        // For first MCQ 
        if($request->first==' 0.25'){
            $markForOne=  0.25;
        }else{
          $markForOne= -0.05;
        }

        
        // For Second MCQ
        if($request->second_one==' 0.25' && $request->second_three==' 0.25'  ){
          $markForSecond =  0.25;
        }else{
            $markForSecond= -0.05;
        }

        // For Third MCQ
        if($request->first_op== 0.25){
            $markForThird= 0.25;
        }else{
            $markForThird= -0.05;
        }
        if($request->second== 0.25){
            $markForFour= 0.25;
        }else{
            $markForFour= -0.05;
        }
        if($request->third== 0.25){
            $markForfive= 0.25;
        }else{
            $markForfive= -0.05;
        }
        $forThirdMcq= $markForThird +$markForFour +$markForfive;

        
        $totalMark= $markForOne + $markForSecond +$forThirdMcq;
        $user_id = Auth::user()->id;
        $exam = New Exam();
        $exam->user_id= $user_id;
        $exam->total_marks= $totalMark;
        if (Exam::where('user_id', '=', Auth::user()->id)->exists()) {
           
            return redirect()->back()->with('status','Sorry you are  already exist!');

         }else{

            $exam->save();
            return redirect()->back()->with('status','Thank you for perticipation!');
         }
    }
    public function winner()
    {    $winners =User::with('exam')->get();
        
          $maxNumber=Exam::max('total_marks');
         
        return view('winner',compact('winners','maxNumber'));
    }
}
