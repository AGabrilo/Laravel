<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    function studentlist()
    {
        $students = DB::table('students')->get();
        return view('studentlist',compact('students'));
    }

    

    function newstudent()
    {
        return view('newstudent');
    }
    function savestudent(Request $request)
    {
        //validate request
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'age'=>'required|integer|min:18|max:100',
            'index'=>'required|unique:students',
            'subject'=>'required'
            
        ]);

        //insert data into database
        $student=new Student;
        
        $student->name=$request->name;
        $student->surname=$request->surname;
        $student->age=$request->age;
        $student->index=$request->index;
        $student->subject=$request->subject;
        $save=$student->save();

        if($save){
            return back()->with('success','New user has been successfuly added into database');
        }else{
            return back()->with('fail','Something went wrong,try again later');
        }
}

public function deleteStudent($id)
{
 Student::where('id',$id)->delete();
 return back()->with('student_deleted',"Student has been deleted successfuly!");

}

public function editStudent($id)
{
$student=Student::find($id);
return view('edit-student',compact('student'));

}

public function updateStudent(Request $request)
{
$student=Student::find($request->id);
$student->name=$request->name;
$student->surname=$request->surname;
$student->age=$request->age;
$student->index=$request->index;
$student->subject=$request->subject;
$student->save();
return back()->with('student_changed','Student has been updated successfuly');
}

public function search(Request $request)
{
    $search_text = $request->input('query');
    $s = Student::where('name', 'LIKE', '%'.$search_text.'%')->get();
    return view('search',compact('s'));

}

}