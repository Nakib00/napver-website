@extends('dashboard')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">About</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    {{--  Start row  --}}
    <div class="row">
        <div class="col-lg-6">
            <div class="card-body">
                <a href="{{ route('about.create') }}"><button type="button" class="btn btn-outline-primary waves-effect waves-light m-2">Add</button></a>
                <a href=""><button type="button" class="btn btn-outline-primary waves-effect waves-light m-2">Edit</button></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 col-lg-6">
            <!-- project card -->
            <div class="card d-block">
                <div class="card-body">
                    <!-- about title-->
                    <h4 class="mt-0">
                        Title
                    </h4>

                    <h5 class="font-14">Short Description:</h5>

                    <p class="text-muted mb-2">
                        With supporting text below as a natural lead-in to additional contenposuere erat a ante. Voluptates,
                        illo, iste itaque voluptas
                        corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores libero voluptas
                        quod perferendis! Voluptate,
                        quod illo rerum? Lorem ipsum dolor sit amet.
                    </p>

                    <h5 class="font-14">Long Description:</h5>

                    <p class="text-muted mb-4">
                        Voluptates, illo, iste itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos
                        delectus asperiores
                        libero voluptas quod perferendis! Voluptate, quod illo rerum? Lorem ipsum dolor sit amet. With
                        supporting text below
                        as a natural lead-in to additional contenposuere erat a ante.
                    </p>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5 class="font-14">Start Date</h5>
                                <p>17 March 2019 <small class="text-muted">1:00 PM</small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5 class="font-14">Edit Date</h5>
                                <p>22 December 2019 <small class="text-muted">1:00 PM</small></p>
                            </div>
                        </div>

                    </div>

                </div> <!-- end card-body-->

            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-lg-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Image</h5>
                    <div class="mt-3 chartjs-chart" style="height: 320px;">
                        <img src="" alt="about image">
                    </div>
                </div>
            </div>
            <!-- end card-->
        </div>
    </div>
    <!-- end row -->
@endsection
