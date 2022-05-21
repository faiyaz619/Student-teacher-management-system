@extends('master.front.master')
@section('title')

@endsection
@section('body')
    <!-- courses -->
    <section class="section-sm">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap mr-3 mt-5">Our Course</h2>
                    </div>
                </div>
            </div>
            <!-- course list -->
            <div class="row justify-content-center">
                <!-- course item -->
                @foreach($subjects as $subject)
                <div class="col-lg-4 col-sm-6 mb-5" >
                    <div class="card p-0 border-primary rounded-0 hover-shadow" style="height: 550px !important;">
                        <img class="card-img-top rounded-0" src="{{asset($subject->image)}}" height="200" alt="course thumb">
                        <div class="card-body">
                            <ul class="list-inline mb-2 row">
                                <li class="list-inline-item pl-3"><i class="ti-calendar mr-2 text-color"> {{$subject->duration}} months</i></li>
                                <li class="list-inline-item ml-auto"><a class="text-color" href="#">{{$subject->time_duration}} hours</a></li>
                                <li class="list-inline-item ml-auto pr-3"><a class="text-color" href="#">{{$subject->fee}}Taka</a></li>
                            </ul>
                            <a href="">
                                <h4 class="card-title">{{$subject->title}}</h4>
                            </a>
                            <p class="card-text mb-4">{!!$subject->short_description !!}</p>
{{--                            <a href="{{ route('enroll-now',['id' => $subject->id]) }}"class="btn btn-primary {{ $check == true ? 'disabled btn-danger' : '' }}">{{ $check == true ? 'Already Enrolled' : 'Apply Now' }}</a>--}}

                            <a href="{{route('enroll-now',['id' => $subject->id]) }}" class="btn btn-primary btn-sm">Apply now</a>
                            <a href="{{route('detail-course',['id'=>$subject->id])}}" class="btn btn-primary btn-sm">Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- /course list -->
            <!-- mobile see all button -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{route('all.courses')}}" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /courses -->
@endsection
