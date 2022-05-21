@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4 text-center">Add Teacher</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('teacher.new')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Full name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="horizontal-email-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Mobile Number</label>
                            <div class="col-sm-9">
                                <input type="number" name="mobile" class="form-control" id="horizontal-email-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-address-input" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" name="address" class="form-control" id="horizontal-address-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file" accept="image/*" id="horizontal-email-input">
                            </div>
                        </div>
{{--                        <div class="form-group row mb-4">--}}
{{--                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Status</label>--}}
{{--                            <div class="col-sm-9">--}}
{{--                                <input type="text" name="status" class="form-control" id="horizontal-email-input">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row mb-4">--}}
{{--                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>--}}
{{--                            <div class="col-sm-9">--}}
{{--                                <input type="password" name="password" class="form-control" id="horizontal-password-input">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Teacher</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    </div>
@endsection
