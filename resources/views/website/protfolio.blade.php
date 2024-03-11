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
                <div class="service-main">
                    <div class="service-main">
                            <div class="row pt-4">
                                <div class="col-lg-6 order-1 order-lg-2 aos-init aos-animate" data-aos="zoom-in"
                                    data-aos-delay="150">
                                    <img src="assets\img\services\web design.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content aos-init aos-animate"
                                    data-aos="fade-right">
                                    <a href=""><h3>Website Development</h3></a>
                                    <p class="fst-italic">
                                        We create custom websites tailored just for you, turning your ideas into stunning
                                        designs. We build efficient web apps to streamline your business, providing unique
                                        solutions to meet your needs. Additionally, we specialize in customized websites for
                                        educational institutions and online stores that drive sales, offering secure payment
                                        options and easy product management.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  <!-- End services Details Section -->  --}}


    </main>
    {{--  <!-- End #main -->  --}}
@endsection
