<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function student(){
        return view('dashboard.student');
    }
    public function teacher(){
        return view('dashboard.teacher');
    }
    public function teacheraddcourse(Request $request){
        if (!\Gate::allows('approved')) {
            $request->session()->flash('msg','you need to be approved first');
            return redirect()->back();
        }

       if(isset($request->year)) //2nd step
        {
            //validate year semester dept
            $courses = \App\Course::where('semester',$request->semester)->
            where('department_id',$request->department)->get();
            return view('dashboard.teacheraddcourseshow')->with(['courses'=>$courses,"year"=>$request->year]);

        }
        else //1st step
        {   
            return view('dashboard.teacheraddcourse');
        }

    }
    public function studentaddcourse(Request $request){

            if(isset($request->year)) //2nd step
        {

            $subjects = \App\Subject::whereHas('course',function($q) use ($request)
            {
                $q->where('semester',$request->semester)->where('department_id',$request->department);
            })->where('year',$request->year)->get();
            return view('dashboard.studentaddcourseshow')->with(['subjects'=>$subjects->load('course'),"year"=>$request->year]);

        }
        return view('dashboard.studentaddcourse');
    }
    public function studentregister(Request $request,\App\Subject $subject){

            $mark = new \App\Mark;

            $mark->student_id = \Auth::user()->userable->id;
            $mark->subject_id = $subject->id;
            $mark->year = $request->year;
            $mark->save();
            //$subject->marks->save($mark);
            return redirect()->back();
    }
    public function studentunregister(Request $request,\App\Subject $subject){
        $mark = \App\Mark::where('year',$request->year)->
        where('student_id',\Auth::user()->userable->id)->
        where('subject_id',$subject->id)->first();

            $mark->delete();

           return redirect()->back(); 
    }
    public function result(){

        $subjects = \App\Subject::where('teacher_id',\Auth::user()->userable->id)->
        with('course')->get();

        return view('dashboard.teacherresult')->with(['subjects'=>$subjects]);
    }
    public function teacherResultSubject(\App\Subject $subject){

        $marks = $subject->marks()->with('student')->get();
        //dd($marks);
        return view('dashboard.teacherResultSubject')->with(['marks'=>$marks]);
    }
    public function teacherResultMarkEdit(\App\Mark $mark){

        
        return view('dashboard.teacherResultMarkEdit')->with(['mark'=>$mark->load('student')]);
    }
    public function teacherResultMarkStore(Request $request,\App\Mark $mark){

        $mark->tt1 = $request->tt1;
        $mark->tt2 = $request->tt2;
        $mark->tt3 = $request->tt3;
        $mark->ttt = $request->ttt;
        $mark->part_a = $request->part_a;
        $mark->part_b = $request->part_b;
        $mark->attendance = $request->attendance;
        $mark->total = $request->total;
        $mark->save();
        return redirect()->back();
    }
    public function studentresult(Request $request){

       if(isset($request->year))
       {
            $marks = \App\Mark::where('student_id',\Auth::user()->userable->id)
            ->where('year',$request->year)->whereHas('subject', function($q) use ($request){
                $q->whereHas('course', function($q) use($request)
                {
                    $q->where('semester',$request->semester);
                });
            })->get();
            return view('dashboard.studentresulttable')->with(['marks'=>$marks->load('subject.course')]);
       }
       else

        return view('dashboard.studentresultshow');
    }
     public function submit(Request $request){
     	
        //dd(\App\Course::where('semester',$request->semester)->where('department_id',$request->department)->get());
        dd(\App\Subject::where('year',$request->year)->get());
    }
}
