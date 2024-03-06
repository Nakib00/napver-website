@extends('dashboard')

@section('content')
    {{--  <!-- start page title -->  --}}

    {{--  <!-- start page title -->  --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Team</h4>
            </div>
        </div>
    </div>
    {{--  <!-- end page title -->  --}}

    {{--  Back button   --}}
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4 m-3">
            <a href="{{ route('team.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
    {{--  End back button  --}}

    <div class="row">
        <div class="col-xl-8 col-lg-6">
            <!-- project card -->
            <div class="card d-block">
                <div class="card-body">
                    {{--  <!-- about title-->  --}}
                    <h4 class="mt-0">
                        {{ $teamdata->name }}
                    </h4>

                    <h5 class="font-14">Designation</h5>

                    <p class="text-muted mb-2">
                        {{ $teamdata->designation }}
                    </p>

                    <h5 class="font-14">Short Description:</h5>

                    <p class="text-muted mb-2">
                        {{ $teamdata->description }}
                    </p>

                    <h5 class="font-14">Job Category</h5>

                    <p class="text-muted mb-4">
                        {{ $teamdata->category->name }}
                    </p>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5 class="font-14">Start Date</h5>
                                <p>{{ $teamdata->created_at }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5 class="font-14">Edit Date</h5>
                                <p>{{ $teamdata->updated_at }}</p>
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
                        <img src="{{ asset($teamdata->image) }}" alt="about image" style="height: 300px;">
                    </div>
                </div>
            </div>
            <!-- end card-->
        </div>
    </div>
@endsection
