<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Result;
use App\Models\Exam;
use App\Models\Clas;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    //
    public function results(){
        // $d = Result::with('class')->get();
        // return $d;
        return view('result.index');

    }
    public function getexams(){
        $d = Exam::with('class')->get();
        // return $d;
        return view('exam.index')->with('data', $d);

    }
    public function addExam(){
        // return $d;
        return view('exam.add');

    }
    public function examApi(Request $request){
         $data = $request->all();

          $this->validate($request, array(
            'name'  => 'required | string | max:255',
            'class_id'  => 'required | int | max:255',
            'year'  => 'required | string | max:255',
        ));

        $d = Exam::create([
            'name' => $data['name'],
            'class_id' => $data['class_id'],
            'string' => $data['string'],
            ]);
        return redirect('/admin/exam');

    }
}
