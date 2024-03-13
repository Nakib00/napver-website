@extends('website.layout.webLayout')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio Details</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Portfolio Details</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        {{--  <!-- ======= Portfolio Details Section ======= -->  --}}
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                @foreach (json_decode($protfolio->image) as $imageUrl)
                                <div class="m-2">
                                    <img src="{{ $imageUrl }}" alt="Service Image" style="height: 250px;">
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>{{ $protfolio->title }}</h3>
                            <ul>
                                <li><strong>Category</strong>: {{ $protfolio->category->name }}</li>
                                <li><strong>Client</strong>: {{ $protfolio->clientnamee }}</li>
                                <li><strong>Project date</strong>: {{ $protfolio->created_at }}</li>
                                <li><strong>Project URL</strong>: <a href="{{ $protfolio->url }}">{{ $protfolio->url }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <p>
                                {!! $protfolio->description !!}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Portfolio Details Section -->

    </main>
    {{--  <!-- End #main -->  --}}
@endsection
