<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Group;
use Auth;

class StudentController extends Controller
{
    //
    public function getTeachers(){
        $d = User::where('userType', 'Teacher')
        ->with('section', 'group', 'class')->get();
        return view('teacher.index')->with('data',$d);
    }
    
    public function teacherAdd()
    {
        $d = Group::all();
        return view('teacher.add')->with('group', $d);
    }

    public function addTeacherApi(Request $request)
    {
        $data = $request->all();
        $this->validate($request, array(
            'name'  => 'required | string | max:255',
            'email' => 'required | string | email | max:191 | unique:users',
            'password'  => 'required | string | max:255',
            'group_id'  => 'required | integer | max:255',
            'section_id'  => 'required | integer | max:255',
            'class_id'  => 'required | integer | max:255',
            'gender'  => 'required | string | max:255',
        ));
        $data['userType'] = 'Teacher';
        $d = Group::all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'class_id' => $data['class_id'],
            'group_id' => $data['group_id'],
            'userType' => $data['userType'],
            'createdBy' => Auth::user()->id,
            'section_id' => $data['section_id']
        ]);
        return redirect("/admin/teacher");
    }
    
    public function deleteTeacher($key)
    {
        $l =  User::where('id', $key)->first();
        $d = User::where('id', $key)->where('createdBy', Auth::user()->id)->delete();
        if ($d)
        return redirect("/admin/teacher");
    }
    
    public function getStudents($id){
        $d = User::where('class_id', $id)->where('userType', 'General')
        ->with('section', 'group', 'class')->get();
        return view('student.index')->with('data',$d);
    }
    public function studentAdd(){
            $d =Group::all();
            return view('student.add')->with('group', $d);
    }
    public function deleteStudent($key){
        $l =  User::where('id', $key)->first();
        $d = User::where('id', $key)->where('createdBy', Auth::user()->id)->delete();
        if($d)
        return redirect("/admin/student/" . $l['class_id']);
        else return "Invalid request";


    }
    public function addStudentApi(Request $request){
             $data = $request->all();
             $this->validate($request, array(
                'name'  => 'required | string | max:255',
                'email' => 'required | string | email | max:191 | unique:users',
                'password'  => 'required | string | max:255',
                'group_id'  => 'required | integer | max:255',
                'section_id'  => 'required | integer | max:255',
                'class_id'  => 'required | integer | max:255',
                'gender'  => 'required | string | max:255',
            ));
            $data['userType'] = 'General';
            $d =Group::all();
         $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'class_id' => $data['class_id'],
            'group_id' => $data['group_id'],
            'userType' => $data['userType'],
            'createdBy' => Auth::user()->id,
            'section_id' => $data['section_id']
        ]);
        return redirect("/admin/student/". $data['class_id']);
    }
}
