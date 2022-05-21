@extends('master.teacher.master')

@section('body')
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4 text-center">Add Subject Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('subject.update',['id' => $subject->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Subject Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" value={{$subject->title}} class="form-control"  id="horizontal-firstname-input"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Subject Code</label>
                            <div class="col-sm-9">
                                <input type="text" name="code" value={{$subject->code}} class="form-control" id="horizontal-email-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Subject Fee</label>
                            <div class="col-sm-9">
                                <input type="number" name="fee" value={{$subject->fee}} class="form-control" id="horizontal-email-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-address-input" class="col-sm-3 col-form-label">Short Description</label>
                            <div class="col-sm-9">

                                <textarea class="form-control summernote"  name="short_description" id="horizontal-address-input">{{$subject->short_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-address-input" class="col-sm-3 col-form-label">long Description</label>
                            <div class="col-sm-9">

                                <textarea class="form-control summernote" name="long_description" id="horizontal-address-input">{{$subject->long_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <img src="{{asset($subject->image)}}" height="300px" width="300px" alt="">
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
                                    <button type="submit" class="btn btn-primary w-md">Update Subject</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection

