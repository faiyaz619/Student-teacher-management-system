@extends('master.admin.master')

@section('body')

    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mb-3">Manage Teacher</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-dark mb-0">

                            <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Code</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$teacher->name}}</td>
                                    <td>{{$teacher->code}}</td>
                                    <td>{{$teacher->email}}</td>
                                    <td>{{$teacher->mobile}}</td>
                                    <td>{{$teacher->address}}</td>
                                    <td><img src="{{asset($teacher->image)}}" alt="" height="50" width="50"></td>
                                    <td>{{$teacher->status == 1 ? 'Active' : 'Inactive'}}</td>


                                    <td>

                                        <div class="row">
                                            <a href="{{route('teacher.edit', ['id' => $teacher->id])}}" class="btn btn-success btn-sm col-md-3 mx-auto">
                                                <i class="fa fa-edit "></i>
                                            </a>

                                            <a href="{{route('teacher.delete', ['id' => $teacher->id])}}" class="btn btn-danger btn-sm col-md-3 mx-auto">
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
