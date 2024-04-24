@extends('website.layout.webLayout')

@section('content')
    {{--  <!-- Google Web Fonts -->  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    {{--  <!-- Icon Font Stylesheet -->  --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    {{--  <!-- Libraries Stylesheet -->  --}}
    <link href="{{ asset('career/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('career/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    {{--  <!-- Customized Bootstrap Stylesheet -->  --}}
    <link href="{{ asset('career/css/bootstrap.min.css') }}" rel="stylesheet">

    {{--  <!-- Template Stylesheet -->  --}}
    <link href="{{ asset('career/css/style.css') }}" rel="stylesheet">


    {{--  <!-- Search Start -->  --}}
    <div class="" data-wow-delay="0.1s" style="padding: 35px;">

    </div>
    {{--  <!-- Search End -->  --}}

    {{--  <!-- Category Start -->  --}}
    {{--  <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                        <h6 class="mb-3">Marketing</h6>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                        <h6 class="mb-3">Customer Service</h6>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h6 class="mb-3">Human Resource</h6>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                        <h6 class="mb-3">Project Management</h6>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                        <h6 class="mb-3">Business Development</h6>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                        <h6 class="mb-3">Sales & Communication</h6>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                        <h6 class="mb-3">Teaching & Education</h6>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                        <h6 class="mb-3">Design & Creative</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>  --}}
    {{--  <!-- Category End -->  --}}

    {{--  <!-- About Start -->  --}}
    {{--  <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0 about-bg rounded overflow-hidden">
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100" src="{{ asset('career/img/about-1.jpg')}}">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid" src="{{ asset('career/img/about-2.jpg')}}" style="width: 85%; margin-top: 15%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid" src="{{ asset('career/img/about-3.jpg')}}" style="width: 85%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-100" src="{{ asset('career/img/about-4.jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>  --}}
    {{--  <!-- About End -->  --}}

    {{--  <!-- Jobs Start -->  --}}
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    {{--  <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('career/img/com-logo-1.jpg')}}" alt="" style="width: 80px; height: 80px;">  --}}
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Software Engineer</h5>
                                        <span class="text-truncate me-3"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>Remote</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                            Time</span>
                                        {{--  <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>  --}}
                                    </div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        {{--  <a class="btn btn-light btn-square me-3" href=""><i
                                                class="far fa-heart text-primary"></i></a>  --}}
                                        <a class="btn btn-primary" href="#">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                        Line: Closed</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    {{--  <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('career/img/com-logo-2.jpg')}}" alt="" style="width: 80px; height: 80px;">  --}}
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Intern - Frontend Developer</h5>
                                        <span class="text-truncate me-3"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>Remote</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                            Time</span>
                                        {{--  <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>  --}}
                                    </div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        {{--  <a class="btn btn-light btn-square me-3" href=""><i
                                                class="far fa-heart text-primary"></i></a>  --}}
                                        <a class="btn btn-primary" href="https://forms.gle/yvaqPcjwaw8WiFsy9">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                        Line: 10 May, 2024</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    {{--  <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('career/img/com-logo-3.jpg')}}" alt="" style="width: 80px; height: 80px;">  --}}
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Intern - Backend Developer</h5>
                                        <span class="text-truncate me-3"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>Remote</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                            Time</span>
                                        {{--  <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>  --}}
                                    </div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        {{--  <a class="btn btn-light btn-square me-3" href=""><i
                                                class="far fa-heart text-primary"></i></a>  --}}
                                        <a class="btn btn-primary" href="https://forms.gle/yvaqPcjwaw8WiFsy9">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                        Line: 10 May, 2024</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    {{--  <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('career/img/com-logo-4.jpg')}}" alt="" style="width: 80px; height: 80px;">  --}}
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Intern - Graphics Designer</h5>
                                        <span class="text-truncate me-3"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>Remote</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                            Time</span>
                                        {{--  <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>  --}}
                                    </div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        {{--  <a class="btn btn-light btn-square me-3" href=""><i
                                                class="far fa-heart text-primary"></i></a>  --}}
                                        <a class="btn btn-primary" href="https://forms.gle/yvaqPcjwaw8WiFsy9">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                        Line: 10 May, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  <!-- Jobs End -->  --}}
@endsection
