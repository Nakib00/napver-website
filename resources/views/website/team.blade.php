@extends('website.layout.webLayout')

@section('content')
    <style>
        /* for team section */
        .filter-content {
            display: none;
        }

        .filter-content.active {
            display: block;
        }

        .team-img {
            width: 200px;
            height: 200px;
            border-radius: 100%;
        }

        .team-img {
            margin: 0 auto
        }

        .hero-img {

            filter: gray;
            -webkit-filter: grayscale();
            -webkit-transition: all .2s ease-in-out;
        }

        .hero-img:hover {
            filter: none;
            -webkit-filter: grayscale(0);
            -webkit-transform: scale(1.33);
        }

        /* learn more button  */
        .details {
            display: none;
        }

        .mouse-pointer {
            cursor: pointer;
            color: #00ad23;
        }

        /* learn more button  end*/

        /* for team section end */
    </style>

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Teams Details</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Team</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Our Team</h2>
                    <p>
                        Transforming Ideas into Digital Excellence. Welcome to NAPVER.
                        Your Success, Our Mission.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter=".filter-app" class="filter-btn filter-active" data-target="app">App</li>
                            <li data-filter=".filter-card" class="filter-btn" data-target="card">Card</li>
                            <li data-filter=".filter-web" class="filter-btn" data-target="web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="content">
                    <div class="filter-content filter-app active">
                        <div class="container">
                            <div class="row mx-5">
                                <div class="col-sm-3 my-3">
                                    <div class="text-center">
                                        <img class="hero-img team-img" src="assets/img/portfolio/portfolio-2.jpg" />
                                        <div class="mt-5">
                                            <h3>Nakib</h3>
                                            <p>Co-founder and CEO</p>
                                            <p class="details-button mouse-pointer " data-target="details1">Show Details 1
                                            </p>
                                            <div id="details1" class="details">
                                                <p>This is the details for option 1.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-3">
                                    <div class="text-center">
                                        <img class="hero-img team-img" src="assets/img/portfolio/portfolio-3.jpg" />
                                        <div class="mt-5">
                                            <h3>Nakib</h3>
                                            <p>Co-founder and CEO</p>
                                            <p class="details-button mouse-pointer" data-target="details2">Show Details 2
                                            </p>
                                            <div id="details2" class="details">
                                                <p>This is the details for option 2.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-3">
                                    Column2
                                </div>

                                <div class="col-sm-3 my-3">
                                    Column3
                                </div>

                                <div class="col-sm-3 my-3">
                                    Column4
                                </div>

                                <div class="col-sm-3 my-3">
                                    Column5
                                </div>

                                <div class="col-sm-3 my-3">
                                    Column5
                                </div>
                                <div class="col-sm-3 my-3">
                                    Column5
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="filter-content filter-card">

                    </div>
                    <div class="filter-content filter-web">

                    </div>
                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

    </main>
    {{--  <!-- End #main --  --}}
    <script>
        // for team section
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const filterContents = document.querySelectorAll('.filter-content');

            filterBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    const target = btn.getAttribute('data-target');

                    // Remove active class from all buttons
                    filterBtns.forEach(function(btn) {
                        btn.classList.remove('filter-active');
                    });

                    // Add active class to clicked button
                    btn.classList.add('filter-active');

                    // Hide all content
                    filterContents.forEach(function(content) {
                        content.classList.remove('active');
                    });

                    // Show content based on clicked button
                    const contentToShow = document.querySelector('.filter-content.filter-' +
                        target);
                    contentToShow.classList.add('active');
                });
            });
        });

        // learn more button
        document.addEventListener("DOMContentLoaded", function() {
            var buttons = document.querySelectorAll('.details-button');
            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var targetId = this.getAttribute('data-target');
                    var target = document.getElementById(targetId);
                    if (target) {
                        target.style.display = target.style.display === 'block' ? 'none' : 'block';
                    }
                });
            });
        });
    </script>
@endsection
