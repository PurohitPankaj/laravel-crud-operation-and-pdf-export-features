<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index',['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'amount' => 'required',
         ],
            [
                'name.required' => 'Enter name',
                'amount.required' => ' Please Enter Valid Amount ',
            ]);
            $student = new Student();
            $student->name = $request->name;
            $student->amount = $request->amount;
            $student->save();

            // $student = Student::create('student');
            Session::flash('message', 'Data Created successfully');
            return redirect()->route("students.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit',compact('student',$student));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
         $this->validate($request, [
            'name' => 'required',
            'amount' => 'required',
         ],
            [
                'name.required' => 'Enter name',
                'amount.required' => ' Please Enter Valid Amount ',
            ]);

            $student->name = $request->name;
            $student->amount = $request->amount;
            $student->save();
            Session::flash('message', 'Data updated successfully');
            return redirect()->route("students.edit",$student->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
		//
    }
	
    public function delete(Request $req) {
        Student::find ( $req->id )->delete ();
        Session::flash('message', 'Student Data Successfully deleted!');
         return redirect()->route('students.index');
    }
	
    public function pdfexport($id){
        $student = Student::find($id);
        $pdf = PDF::loadView("Student.pdf",['student' => $student])->setPaper('a4','portrait');

        $fileName = $student->name;
        return $pdf->stream($fileName.'.pdf');
    }
}
