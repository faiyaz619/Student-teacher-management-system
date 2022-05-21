@extends('master.front.master')
@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row" style="padding-top: 100px">
                <div class="col-md-3">
                    <div class="card">
                        <div class="list-group list-group-flush">
                            <a href="" class="list-group-item bg-dark text-light"><img src="{{ asset($student->image) }}" height="100px" width="100px" alt="{{$student->name}}"></a>
                            <a href="{{ route('student-dashboard') }}" class="list-group-item bg-dark text-light">My All Course</a>
                            <a href="{{ route('student-profile') }}" class="list-group-item bg-dark text-light">My Profile</a>
                            <a href="{{ route('change-password') }}" class="list-group-item bg-dark text-light">Change Password</a>
                            <a href="{{route('course.payment')}}" class="list-group-item bg-dark text-light">My Payment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card bg-dark">
                        <div class="card-header text-light">My Profile Information</div>
                        <div class="card-body text-white">
                            <p class="text-center text-success"> {{ Session::get('message') }}</p>
                            <form action="{{ route('update-student-profile', ['id' => $student->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row md-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <img src="{{ asset($student->image) }}" alt="{{ $student->name }}" height="100px" width="100px"><br/>
                                        <input type="file" class="form-control-file" name="image" accept="image/*">
                                    </div>
                                </div><br/>
                                <div class="row md-3">
                                    <label class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{ $student->name }}" name="name">
                                    </div>
                                </div><br/>
                                <div class="row md-3">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="{{ $student->email }}">
                                    </div>
                                </div><br/>
                                <div class="row md-3">
                                    <label class="col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile" value="{{ $student->mobile }}">
                                    </div>
                                </div><br/>
                                <div class="row md-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-info" value="Update Info.">
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

