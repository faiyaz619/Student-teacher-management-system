<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enroll;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Payment;
use Session;


class StudentDashboardController extends Controller
{
    private $enrolls;
    private $student;
    private $payment;
    private $subject;

    public function index()
    {
        $this->enrolls = Enroll::where('student_id', Session::get('student_id'))->get();
        $this->student = Student::find(Session::get('student_id'));
        $this->payment = Payment::where('student_id', Session::get('student_id'))->get();
        return view('student.home.home', ['enrolls' => $this->enrolls , 'student' => $this->student ,'payments' =>$this->payment]);
    }
    public function profile(){

        $this->student = Student::find(Session::get('student_id'));
        return view('student.profile.profile',['student' => $this->student]);
    }

    public function updateProfile(Request $request, $id){

        Student::updateStudentProfile($request, $id);
        return redirect()->back()->with('message', 'Info. Update Successfully');
    }

    public function changePassword(){

        $this->student = Student::find(Session::get('student_id'));
        return view('student.profile.change-password',['student' => $this->student]);
    }

    public function updatePassword(Request $request, $id)
    {

        $this->student = Student::find($id);

        if (password_verify($request->prev_password, $this->student->password)){

            Student::updateStudentPassword($request, $id);
            return redirect('/student-dashboard')->with('message', 'Password Updated');
        }
        else{

            return redirect()->back()->with('message', 'Password Does not Massed');
        }
    }
    public function coursePayment()
    {
        $this->student =Student::find(Session::get('student_id'));
//        $this->enrolls = Enroll::where('student_id', Session::get('student_id'))->get();

        $this->enrolls = Enroll::where('student_id', Session::get('student_id'))->where('payment_status','pending')->get();
//        $this->subject=Subject::where('subject_id',$this->enrolls->subject_id)->get();
//        return $this->enrolls;
//        $this->subject = Subject::find($this->enrolls->subject_id)->first();
//        return $this->subject;
        return view('student.profile.payment',['student' => $this->student],['enrolls' => $this->enrolls] );
//        $enroll->subject->fee
    }
    public function makePayment(Request $request, $id)
    {
        $this->payment=Student::makeNewPayment($request, $id);
        return redirect()->back()->with('message','Payment has been Done Successfully');
    }
}
