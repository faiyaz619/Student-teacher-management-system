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
                        <div class="card-header text-light">Course Payment</div>
                        <div class="card-body text-white">

                            <p class="text-center text-success"> {{ Session::get('message') }}</p>

                            <form action="{{route('make.course.payment',['id' => $student->id]) }}" method="POST">
                                @csrf
                                <div class="row md-3">
                                    <label class="col-md-3">Course Name</label>
                                    <div class="col-md-9">
                                        @foreach($enrolls as $enroll)
                                        <h4>{{$enroll->subject->title}}</h4>
                                        @endforeach
                                    </div>
                                </div><br/>
                                <div class="row md-3">
                                    <label class="col-md-3">Course Fee</label>
                                    <div class="col-md-9">
                                        @foreach($enrolls as $enroll)
                                        <h4>{{$enroll->subject->fee}} Taka</h4>
                                        @endforeach
                                    </div>
                                </div><br/>
                                <div class="row md-3">
                                    <label class="col-md-3">Payment Fee</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="payment_fee">
                                    </div>
                                </div><br/>
                                <div class="row my-3">
                                    <label class="col-form-label col-md-3">Payment method</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="payment_method" value="Bank" required/> Bank</label>
                                        <label><input type="radio" name="payment_method" value="Bkash" required/> Bkash</label>
                                        <label><input type="radio" name="payment_method" value="Nagad" required/> Nagad</label>
                                    </div>
                                </div>
                                <div class="row md-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-info" value="Payment complete">
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



