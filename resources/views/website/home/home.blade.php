@extends('master.front.master')
@section('body')
    <!-- hero slider -->
    <section class="hero-section overlay bg-cover" data-background="images/banner/banner-1.jpg">
        <div class="container">
            <div class="hero-slider">
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Your bright future is our mission</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Apply now</a>
                        </div>
                    </div>
                </div>
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Your bright future is our mission</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Apply now</a>
                        </div>
                    </div>
                </div>
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Your bright future is our mission</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /hero slider -->

    <!-- courses -->
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap mr-3">Our Course</h2>
                        <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                        <div>
                            <a href="{{route('all.courses')}}" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course list -->
            <div class="row justify-content-center ">
                <!-- course item -->
                @foreach($subjects as $subject)
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card p-0 border-primary rounded-0 hover-shadow" style="height: 550px !important;">
                            <img class="card-img-top rounded-0" src="{{asset($subject->image)}}" height="200" alt="course thumb">
                            <div class="card-body">
                                <ul class="list-inline mb-2 row">
                                    <li class="list-inline-item pl-3"><a class="text-color" href="#"> <i class="ti-calendar mr-2 text-color"></i>{{$subject->duration}} months </a> </li>
                                    <li class="list-inline-item ml-auto"><a class="text-color" href="#">{{$subject->time_duration}} hours</a></li>
                                    <li class="list-inline-item ml-auto pr-3"><a class="text-color" href="#">{{$subject->fee}}Taka</a></li>
                                </ul>
                                <a href="">
                                    <h4 class="card-title">{{$subject->title}}</h4>
                                </a>
                                <p class="card-text mb-4 summernote">{!!$subject->short_description!!}</p>
                                <a href="" class="btn btn-primary btn-sm mr-4">Apply now</a>
                                <a href="{{route('detail-course',['id' =>$subject->id])}}" class="btn btn-primary btn-sm">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /course list -->
            <!-- mobile see all button -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /courses -->

    <!-- cta -->
    <section class="section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h6 class="text-white font-secondary mb-0">Click to Join the Advance Workshop</h6>
                    <h2 class="section-title text-white">Training In Advannce Networking</h2>
                    <a href="{{route('register.user')}}" class="btn btn-secondary">join now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /cta -->

    <!-- teachers -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="section-title">Our Teachers</h2>
                </div>
                <!-- teacher -->
                @foreach($teachers as $teacher)
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{asset($teacher->image)}}" alt="{{$teacher->name}}">
                        <div class="card-body">
                            <a href="">
                                <h4 class="card-title">{{$teacher->name}}</h4>
                            </a>
                            <p></p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /teachers -->
@endsection
