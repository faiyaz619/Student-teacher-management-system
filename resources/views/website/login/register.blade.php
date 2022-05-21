@extends('master.front.master')
@section('body')
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row" style="padding-top: 80px;">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header fw-bolder text-center">Register Form</div>
                        <div class="card-body">
                            <form action="{{route('register.new')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <label class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row  mt-3">
                                    <label class="col-form-label col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile"/>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" value="Register">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
