        {{--  <!-- ======= Services Section ======= -->  --}}
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Services</h2>
                    <p>
                        Empowering Businesses with Innovative Web Solutions for a Digital
                        Tomorrow.
                    </p>
                </div>

                <div class="row gy-4 srevice-block">
                    @foreach ($service as $item)
                        @if ($item->status == 1)
                            <div class="col-lg-3 col-md-5 d-flex align-items-stretch">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset($item->image) }}" alt="web development" width="110"
                                            height="110" />
                                        <i class=""></i>
                                    </div>
                                    <h4><a href="">{{ $item->title }}</a></h4>
                                    <p>
                                        {{ $item->description }}
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </section>
        {{--  <!-- End Services Section -->  --}}
