@extends('master.front.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row" style="padding-top: 100px">
                <div class="col-md-3">
                    <div class="card fixed">
                        <div class="list-group list-group-flush">
                            <a href="" class="list-group-item bg-dark text-light"><img src="{{ asset($student->image) }}" height="100px" width="100px" alt="{{$student->name}}"></a>
                            <a href="{{ route('student-dashboard') }}" class="list-group-item bg-dark text-light">My All Course</a>
                            <a href="{{ route('student-profile') }}" class="list-group-item bg-dark text-light">My Profile</a>
                            <a href="{{ route('change-password') }}" class="list-group-item bg-dark text-light">Change Password</a>
                            <a href="{{ route('course.payment') }}" class="list-group-item bg-dark text-light">My Payment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card bg-dark">
                        <div class="card-header text-light">Change Password</div>
                        <div class="card-body text-white">
                            <p class="text-center text-success"> {{ Session::get('message') }}</p>
                            <form action="{{ route('update-student-password', ['id' => $student->id]) }}" method="POST">
                                @csrf
                                <div class="row md-3">
                                    <label class="col-md-3">Preview Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="prev_password">
                                    </div>
                                </div><br/>
                                <div class="row md-3">
                                    <label class="col-md-3">New Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div><br/>
                                <div class="row md-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-info" value="Update Password">
                                    </div>
                                </div><br/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


