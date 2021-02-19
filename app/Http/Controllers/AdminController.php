<?php

namespace App\Http\Controllers;
use App\Models\Group;
use App\Models\Section;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

        // $this->validate($request, array(
        //     'name'  => 'required | string | max:255',
        //     'email' => 'required | string | email | max:191 | unique:users',
        //     'password'  => 'required | string | max:255',
        //     'phone'  => 'required | string | max:11',
        //     'address'  => 'required | string | max:500'
        // ));

    public function addGroupApi(Request $request){
        $data = $request->all();

        $this->validate($request, array(
            'name'  => 'required | string | max:255',
        ));
        Group::create(['name'=>$data['name']]);
        return redirect('/admin/group');

    }
    public function editGroupapi(Request $request){
        $data = $request->all();
        if(isset($data['name']) && trim($data['name'])!=''){
            Group::where('id', $data['id'])->update(['name'=>$data['name']]);
            return redirect('/admin/group')->with('msg','ok');
        }

    }
    public function deleteGroup($id){
            Group::where('id', $id)->delete();
            return redirect('/admin/group')->with('msg','ok');
    }
    public function getGroups(){
        $d = Group::withCount('students')->withCount('sections')->get();
        return view('group.index')->with('data', $d);
    }


    public function editGroupsPage($key){
        $d = Group::where('id',$key)->first();
        return view('group.edit')->with('data', $d);
    }
    // public function editGroups($key){
    //     $d = Section::where('group_id',$key)->get();
    //     return view('sections')->with('data', $d);
    // }




    // sections
    public function getSection($key){
        $d = Section::where('group_id',$key)->withCount('students')->get();
        return view('section.index')->with('data', $d);
    }
    public function addSectionApi(Request $request){
        $data = $request->all();

          $this->validate($request, array(
            'name'  => 'required | string | max:255',
            'class_id'  => 'required | int | max:255',
            'group_id'  => 'required | int | max:11',
        ));

        $d = Section::create([
            'name' => $data['name'],
            'class_id' => $data['class_id'],
            'group_id' => $data['group_id']
            ]);
        return redirect('/admin/sections/'. $data['group_id']);
    }
    public function deleteSection($id){
        $data = Section::where('id', $id)->first();
        $d = Section::where('id', $id)->delete();
        return redirect('/admin/sections/' . $data['group_id']);
    }
    public function addSectionView(){
        $d = Group::all();
        return view('section.add')->with('data', $d);
    }
    public function editSection($id){
        $dd = Group::all();
        $d = Section::where('id', $id)->first();
        return view('section.edit')->with('data', $d)->with('groups',$dd);
    }
    public function editSectionApi(Request $request){

        $data = $request->all();

        $this->validate($request, array(
            'name'  => 'required | string | max:255',
            'class_id'  => 'required | int | max:255',
            'group_id'  => 'required | int | max:11',
        ));
        $d = Section::where('id', $data['id'])->update(
            [
                'name' => $data['name'],
                'class_id' => $data['class_id'],
                'group_id' => $data['group_id']
            ]
        );

        return redirect('/admin/sections/' . $data['group_id']);
    }
    // subject
     public function addSubject(){
        $d = Group::all();
        return view('subject.add')->with('data', $d);
     }
     public function addSubjectApi(Request $request){
         $data = $request->all();
        $this->validate($request, array(
            'name'  => 'required | string | max:255',
            'group_id'  => 'required | int | max:255',
        ));
        Subject::create([
            'name' => $data['name'],
            'group_id' => $data['group_id'],
        ]);
        return redirect('/admin/subject');

     }
     
     public function subjectByGroupId($id){
         $d = Subject::where('group_id', $id)->with('group')->get();
         return view('subject.index')->with('data',$d);
     }
     public function subject(){
         $d = Subject::with('group')->get();
         return view('subject.index')->with('data',$d);
     }
     public function deleteSubject($id){
         $d = Subject::where('id', $id)->delete();
        return redirect('/admin/subject');
     }

}
