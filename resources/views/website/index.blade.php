@extends('website.layout.webLayout')

@section('content')
    {{--  <!-- ======= Hero Section ======= -->  --}}
    <section id="hero" class="d-flex align-items-center">
        <div class="container-fluid" data-aos="fade-up">
            <div class="row justify-content-center">
                @foreach ($address as $item)
                    <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1>{{ $item->hero_title }}</h1>
                        <h2>
                            {{ $item->hero_subtitle }}
                        </h2>
                    </div>
                @endforeach
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="hero image" />
                </div>
            </div>
        </div>
    </section>
    {{--  <!-- End Hero -->  --}}

    <main id="main">
        {{--  <!-- ======= About Section ======= -->  --}}
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    @foreach ($about as $item)
                        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                            <img src="{{ asset($item->image) }}" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                            <h3>{{ $item->title }}</h3>
                            <p class="fst-italic">
                                {{ $item->shortDescription }}
                            </p>

                            <a href="#" class="read-more">Read More <i class="bi bi-long-arrow-right"></i></a>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        {{--  <!-- End About Section -->  --}}


        {{-- Include Services --}}
        @include('website.include.services')


        {{-- Include protfolio --}}
        {{--  @include('website.include.portfolio')  --}}


        {{-- Include Contact --}}
        @include('website.include.contact')

    </main>
    {{--  <!-- End #main -->  --}}
@endsection
