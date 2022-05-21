@extends('master.front.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row" style="padding-top: 100px;">
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
                        <div class="card-header text-light">My All Recent Course</div>
                        <div class="card-body">
                            <p class="text-center text-success"> {{ Session::get('message') }}</p>
                            <table class="table table-bordered table-hover bg-info bg-opacity-25 text-white">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course Title</th>
                                    <th>Trainer Name</th>
                                    <th>Course Fee</th>
                                    <th>Enroll Status</th>
                                    <th>Payment Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($enrolls as $enroll)
                                    <tr class=" {{ $enroll->enroll_status == 'Pending' ? 'bg-danger bg-opacity-50' : 'bg-success bg-opacity-25' }}">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $enroll->subject->title }}</td>
                                        <td>{{ App\Models\Teacher::find($enroll->subject->teacher_id)->name }}</td>
                                        <td>{{ $enroll->subject->fee }}</td>
                                        <td>{{ $enroll->enroll_status }}</td>
                                        <td>{{ $enroll->payment_status }}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
