<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enroll;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;

class AdminStudentController extends Controller
{
    private $student;
    private $students;
    private $message;
    private $enrolls;
    private $enroll;
    private $data = [];
    private $subject;

    public function manageStudent(){

        $this->students = Student::orderBy('id','desc')->get();
        return view('admin.student.manage',['students' => $this->students]);
    }

    public function updateStatus($id){

        $this->student = Student::find($id);
        if ($this->student->status == 1){

            $this->student->status = 0;
            $this->message = 'Student info inactive successfully';
        }
        else{

            $this->student->status = 1;
            $this->message = 'Student info active successfully';
        }
        $this->student->save();
        return redirect()->back()->with('message',$this->message);
    }

    public function manageStudentCourse(){

        $this->enrolls = Enroll::orderBy('id','desc')->get();
        foreach ($this->enrolls as $key => $enroll){

            $this->subject = Subject::find($enroll->subject_id);
            $this->data[$key]['enroll_id'] = $enroll->id;
            $this->data[$key]['course_title'] = $this->subject->title;
            $this->data[$key]['teacher_name'] = Teacher::find($this->subject->teacher_id)->name;
            $this->data[$key]['student_name'] = Student::find($enroll->student_id)->name;
            $this->data[$key]['student_mobile'] = Student::find($enroll->student_id)->mobile;
            $this->data[$key]['enroll_status'] = $enroll->enroll_status;
            $this->data[$key]['payment_status'] = $enroll->payment_status;
        }
        return view('admin.student.manage-course', ['enrolls' => $this->data]);
    }

    public function updateEnrollStatus($id){

        $this->enroll = Enroll::find($id);
        if ($this->enroll->payment_status == 'complete')
        {
            $this->enroll->payment_status = 'pending';
            $this->message = 'Student enroll status updated pending  successfully';
        }
        else{
            $this->enroll->payment_status = 'complete';
            $this->message = 'Student info enroll status updated completed successfully';
        }
//        $this->enroll->enroll_status = 'Complete';
//        $this->enroll->payment_status = 'Complete';
        $this->enroll->save();
        return redirect()->back()->with('message',$this->message );

    }
}
