<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\Subject;
use Session;

class SubjectController extends Controller
{
    private $subject;
    private $subjects;
    public function index()
    {
        return view('teacher.subject.add');
    }
    public function create(Request $request)
    {
        $request->all();
        Subject::newSubject($request);

        return redirect()->back()->with('message', 'Subject info crated successfully.');
    }

    public function edit($id)
    {
        $this->subjects = Subject::find($id);
        return view('teacher.subject.edit',['subject'=>$this->subjects]);
    }
    public function update(Request $request, $id)
    {
       $this->subject= Subject::updatesubject($request, $id,);
        return redirect('/manage-subject')->with('message', 'Subject info updated successfully');
    }

    public function manage()
    {
        $this->subjects = Subject::where('teacher_id', Session::get('user_id'))->get();

        return view('teacher.subject.manage', ['subjects' => $this->subjects]);
    }


}
