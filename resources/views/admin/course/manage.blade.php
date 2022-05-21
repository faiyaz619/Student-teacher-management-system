@extends('master.admin.master')

@section('body')

    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mb-3">Manage Teacher Course</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-dark mb-0">

                            <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Course Title</th>
                                <th>Course Fee</th>
                                <th>Course Duration</th>
                                <th>Course Time Duration</th>
                                <th>Trainer Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subjects as $subject)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$subject->title}}</td>
                                    <td>{{$subject->fee}}</td>
                                    <td>{{$subject->duration}} months</td>
                                    <td>{{$subject->time_duration}} hrs</td>
                                    <td>{{$subject->teacher->name}}</td>
                                    <td>{{$subject->status == 1 ? 'Active' : 'Inactive'}}</td>

                                    <td>

                                        <div class="row">
                                            <a href="{{route('view-detail', ['id' => $subject->id])}}" class="btn btn-success btn-sm col-md-3 mx-auto">
                                                <i class="fa fa-book-open "></i>
                                            </a>

                                            <a href="{{route('update-status', ['id' => $subject->id])}}" class="btn {{$subject->status == 1 ? 'btn-info' : 'btn-warning'}} btn-sm col-md-3 mx-auto">
                                                <i class="{{$subject->status == 1 ? 'fa fa-arrow-up' : 'fa fa-arrow-down'}}"></i>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
