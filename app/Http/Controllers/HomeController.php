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
        if($request->first_two=='0.5'){
            $markForOne= 0.5;
        }else{
          $markForOne= -0.05;
        }
        if($request->second_one=='0.5' && $request->second_three=='0.5'  ){
          $markForSecond = 0.5;
        }else{
            $markForSecond= -0.5;
        }
        $totalMark= $markForOne + $markForSecond;
        $user_id = Auth::user()->id;
        $exam = New Exam();
        $exam->user_id= $user_id;
        $exam->total_marks= $totalMark;
        if (Exam::where('user_id', '=', Auth::user()->id)->exists()) {
           
            return redirect()->back()->with('status','Sorry you are  already exist!');

         }else{

            $exam->save();
         }
    }
    public function max()
    {
        $winners=User::with('exam')->get();
        $maxValue = Exam::max('total_mark');
        return view('winner',compact('winners','maxValue'));
    }
}
