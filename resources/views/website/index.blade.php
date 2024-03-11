@extends('website.layout.webLayout')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container-fluid" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Transforming Ideas into Reality</h1>
                    <h2>
                        We provide cutting-edge IT solutions to help businesses succeed in
                        the digital world.
                    </h2>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="hero image" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                        <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h3>Bringing Exceptional Web Solutions</h3>
                        <p class="fst-italic">
                            ZAN IT is your one-stop destination for cutting-edge web
                            solutions. With a specialization in web development and design,
                            we take pride in crafting visually captivating and user-friendly
                            websites. Whether you're in need of a dynamic educational
                            platform for schools, colleges, or universities, an e-commerce
                            website to drive your business forward, or a stunning web design
                            that leaves a lasting impression, we've got you covered.
                        </p>

                        <a href="#" class="read-more">Read More <i class="bi bi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->


        {{-- Include Services --}}
        @include('website.include.services')


        {{-- Include protfolio --}}
        {{--  @include('website.include.portfolio')  --}}


        {{-- Include Contact --}}
        @include('website.include.contact')

    </main>
    <!-- End #main -->
@endsection
