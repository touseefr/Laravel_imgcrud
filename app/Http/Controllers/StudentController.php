<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function addstd()
    {
        return view('addstd');
    }

    public function storestd(Request $request)
    {
        $request->validate([
            'file'=>'nullable'
          ]);

      $image=$request->file('file');
      $imageName=time().'.'.$image->extension();
      $image->move(public_path('images'),$imageName);

      $student=new Student;
      $student->name=$request->name;
      $student->profileimg=$imageName;
      $student->save();

      return back()->with('add','data has been added');    
   //   print_r($request);
    }
    
    public function allstd()
    {
        $student=Student::all();
        return view('allstd',compact('student'));
    }
    //edit
    public function editstd($id)
    {
        $student=Student::find($id);
        return view('editstd',compact('student'));
    }
    //update
    public function updatestd(Request $request)
    {

        // print_r($request);
        // exit;

     $request->validate([
       'file'=>'nullable'
     ]);


        $student=Student::find($request->id);

        $image=$request->file('file');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $student->name=$request->name;
        $student->profileimg=$imageName;
        $student->save();

         return back()->with('update','updated has been successfully...');
    }
    public function deletestd($id)
    {
        $student=Student::find($id);
        unlink(public_path('images').'/'.$student->profileimg);
        $student->delete();

        return redirect('allstd');
    }

}
