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
        {{--  <!-- ======= Breadcrumbs ======= -->  --}}
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
        </section>
        {{--  <!-- End Breadcrumbs -->  --}}

        {{--  <!-- ======= Portfolio Section ======= -->  --}}
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
                            <li data-filter=".filter-app" class="filter-btn filter-active" data-target="app">All</li>
                            {{--  <!-- Show all initially -->  --}}
                            @foreach ($teamcategory as $item)
                                <li data-filter=".filter-card" class="filter-btn" data-target="{{ $item->name }}">
                                    {{ $item->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="content">
                    <div class="container">
                        <div class="row mx-5 team-members">
                            @foreach ($teamcategory as $category)
                                @foreach ($category->teams as $team)
                                    <div class="col-sm-3 my-3 filter-card {{ $category->name }}">
                                        <div class="text-center">
                                            <img class="hero-img team-img" src="{{ asset($team->image) }}" />
                                            <div class="mt-5">
                                                <h3>{{ $team->name }}</h3>
                                                <p>{{ $team->designation }}</p>
                                                <p class="details-button mouse-pointer"
                                                    data-target="details{{ $team->id }}">Show Details</p>
                                                <div id="details{{ $team->id }}" class="details" style="display: none;">
                                                    <p>{{ $team->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  <!-- End Portfolio Section -->  --}}

    </main>
    {{--  <!-- End #main --  --}}
    <script>
        // JavaScript for filtering
        document.addEventListener("DOMContentLoaded", function() {
            const filterButtons = document.querySelectorAll(".filter-btn");

            filterButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    const target = this.getAttribute("data-target");
                    const teamMembers = document.querySelectorAll(".team-members .filter-card");

                    teamMembers.forEach(function(member) {
                        if (target === "app" || member.classList.contains(target)) {
                            member.style.display = "block";
                        } else {
                            member.style.display = "none";
                        }
                    });

                    // Update active filter button
                    filterButtons.forEach(function(btn) {
                        btn.classList.remove("filter-active");
                    });
                    this.classList.add("filter-active");
                });
            });
        });

        //see more button toggle
        document.addEventListener("DOMContentLoaded", function() {
            const detailsButtons = document.querySelectorAll(".details-button");

            detailsButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    const target = this.getAttribute("data-target");
                    const detailsElement = document.getElementById(target);

                    // Toggle visibility
                    if (detailsElement.style.display === "none") {
                        detailsElement.style.display = "block";
                    } else {
                        detailsElement.style.display = "none";
                    }
                });
            });
        });
    </script>
@endsection
