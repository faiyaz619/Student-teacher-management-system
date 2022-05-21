@extends('master.teacher.master')

@section('body')

    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mb-3">Manage Subject</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-dark mb-0">

                            <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>subject Title</th>
                                <th>Code</th>
                                <th>Fee</th>
                                <th>Teacher Name</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subjects as $subject)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$subject->title}}</td>
                                    <td>{{$subject->code}}</td>
                                    <td>{{number_format($subject->fee)}}</td>
                                    <td>{{$subject->teacher->name}}</td>
                                    <td>{{$subject->status == 1 ? 'Active' : 'Inactive'}}</td>

                                    <td>

                                        <div class="row">
                                            <a href="{{route('subject.edit', ['id' => $subject->id])}}" class="btn btn-success btn-sm col-md-3 mx-auto">
                                                <i class="fa fa-edit "></i>
                                            </a>

                                            <a href="{{route('subject.delete', ['id' => $subject->id])}}" class="btn btn-danger btn-sm col-md-3 mx-auto">
                                                <i class="fa fa-trash "></i>
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

