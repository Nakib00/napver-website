@extends('website.layout.webLayout')

@section('content')
    <main id="main">

        {{--  <!-- ======= Breadcrumbs ======= -->  --}}
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Protfolio list</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Protfolio list</li>
                    </ol>
                </div>

            </div>
        </section>
        {{--  <!-- End Breadcrumbs -->  --}}

        {{--  <!-- ======= services Details Section ======= -->  --}}
        <section id="service-details" class="portfolio-details">

            <div class="container">
                @foreach ($protfolio as $item)
                    <div class="service-main">
                        <div class="service-main">
                            <div class="row pt-4">
                                <div class="col-lg-6 order-1 order-lg-2 aos-init aos-animate" data-aos="zoom-in"
                                    data-aos-delay="150">
                                    <a href="{{ route('protshow.page', $item->id) }}">
                                        @foreach (json_decode($item->image) as $imageUrl)
                                            <div class="m-2">
                                                <img src="{{ $imageUrl }}" alt="Service Image" width="500"
                                                    height="300">
                                            </div>
                                        @endforeach
                                    </a>
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content aos-init aos-animate"
                                    data-aos="fade-right">
                                    <a href="{{ route('protshow.page', $item->id) }}">
                                        <h3>{{ $item->title }}</h3>
                                    </a>
                                    <p class="fst-italic">
                                        {!! $item->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            </div>
        </section>
        {{--  <!-- End services Details Section -->  --}}


    </main>
    {{--  <!-- End #main -->  --}}
@endsection
