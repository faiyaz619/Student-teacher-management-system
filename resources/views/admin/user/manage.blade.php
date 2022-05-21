@extends('master.admin.master')

@section('body')

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-3">All User</h4>
                        <p class="text-center text-success">{{Session::get('message')}}</p>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-dark mb-0">

                                <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>

                                        <td>

                                            <div class="row">
                                                <a href="{{route('user.edit',['id' => $user->id])}}" class="btn btn-success btn-sm col-md-3 mx-auto">
                                                    <i class="fa fa-edit "></i>
                                                </a>

                                                <a href="{{route('user.delete', ['id' => $user->id])}}" class="btn btn-danger btn-sm col-md-3 mx-auto {{$user->id == 1 ? 'disabled' : ''}}">
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
