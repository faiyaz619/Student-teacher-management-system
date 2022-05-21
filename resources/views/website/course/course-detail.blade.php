@extends('master.front.master')
@section('body')

    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary"
                                                        href="{{route('all.courses')}}">Our Courses</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">{{$subject->title}}</li>
                    </ul>
                    <p class="text-lighten">{!!$subject->short_description !!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- section -->
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <!-- course thumb -->
                    <img src="{{asset($subject->image)}}" class="img-fluid w-100" alt="">
                </div>
            </div>
            <!-- course info -->
            <div class="row align-items-center mb-5">
                <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
                    <h2>{{$subject->name}}</h2>
                </div>
                <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
                    <ul class="list-inline text-xl-center">
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-book text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">COURSES</h6>
                                    <p class="mb-0">{{$subject->duration}} Month</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-alarm-clock text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">DURATION</h6>
                                    <p class="mb-0">{{$subject->time_duration}} Hours</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-wallet text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">FEE</h6>
                                    <p class="mb-0">{{$subject->fee}}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0">
                    <a href="{{ route('enroll-now',['id' => $subject->id]) }}"class="btn btn-primary {{ $check == true ? 'disabled btn-danger' : '' }}">{{ $check == true ? 'Already Enrolled' : 'Apply Now' }}</a>
                </div>
                <!-- border -->
                <div class="col-12 mt-4 order-4">
                    <div class="border-bottom border-primary"></div>
                </div>
            </div>
            <!-- course details -->
            <div class="row">
                <div class="col-12 mb-4">
                    <h3>About Course</h3>
                    <p>{!! $subject->short_description !!}</p>
                </div>
                <div class="col-12 mb-4">
                    <h3 class="mb-3">Requirements</h3>
                    <div class="col-12 px-0">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-styled">
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-styled">
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <h3 class="mb-3">How to Apply</h3>
                    <ul class="list-styled">
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla?
                            Lorem, ipsum
                            dolor. Lorem, ipsum.
                        </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla?
                            Lorem, ipsum
                            dolor. Lorem, ipsum.
                        </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla?
                            Lorem, ipsum
                            dolor. Lorem, ipsum.
                        </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla?
                            Lorem, ipsum
                            dolor. Lorem, ipsum.
                        </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla?
                            Lorem, ipsum
                            dolor. Lorem, ipsum.
                        </li>
                    </ul>
                </div>
                <div class="col-12 mb-5">
                    <h3>Fees and Funding</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit
                        anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                        fugit, sed quia
                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                        qui dolorem
                        ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                        incidunt ut
                        labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <!-- teacher -->
                <div class="col-12">
                    <h5 class="mb-3">Teacher</h5>
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="media mb-2 mb-sm-0">
                            <img class="mr-4 img-fluid" src="{{asset(App\Models\Teacher::find($subject->teacher_id)->name )}}" alt="{{App\Models\Teacher::find($subject->teacher_id)->name }}">
                            <div class="media-body">
                                <h4 class="mt-0">{{App\Models\Teacher::find($subject->teacher_id)->name }}</h4>
                                Photographer
                            </div>
                        </div>
                        <div class="social-link">
                            <h6 class="d-none d-sm-block">Social Link</h6>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i
                                            class="ti-linkedin"></i></a></li>
                                <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i
                                            class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-bottom border-primary mt-4"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /section -->


@endsection
