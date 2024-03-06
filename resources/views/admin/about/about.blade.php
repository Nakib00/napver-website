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
                <div class="row">
                    @if ($about->isEmpty())
                        <div class="text-md-right">
                            <a href="{{ route('about.create') }}">
                                <button type="button" class="btn btn-danger waves-effect waves-light mb-2 mr-2">
                                    <i class="mdi mdi-basket mr-1"></i> Add
                                </button>
                            </a>
                        </div>
                    @else
                        @foreach ($about as $item)
                            <a href="{{ route('about.edit', ['about' => $item->id]) }}">
                                <button type="button" class="btn btn-danger waves-effect waves-light mb-2 mr-2">
                                    <i class="mdi mdi-basket mr-1"></i> Edit
                                </button>
                            </a>
                        @endforeach
                    @endif
                </div>

            </div>
        </div>
        <div class="row">
            @foreach ($about as $item)
                <div class="col-xl-8 col-lg-6">
                    <!-- project card -->
                    <div class="card d-block">
                        <div class="card-body">
                            {{--  <!-- about title-->  --}}
                            <h4 class="mt-0">
                                {{ $item->title }}
                            </h4>

                            <h5 class="font-14">Short Description:</h5>

                            <p class="text-muted mb-2">
                                {{ $item->shortDescription }}
                            </p>

                            <h5 class="font-14">Long Description:</h5>

                            <p class="text-muted mb-4">
                                {!! $item->description !!}
                            </p>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <h5 class="font-14">Start Date</h5>
                                        <p>{{ $item->created_at }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <h5 class="font-14">Edit Date</h5>
                                        <p>{{ $item->updated_at }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{--  <!-- end card-body-->  --}}

                    </div> <!-- end card-->
                </div> <!-- end col -->
            @endforeach

            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Image</h5>
                        <div class="mt-3 chartjs-chart" style="height: 320px;">
                            <img src="{{ asset($item->image) }}" alt="about image" style="height: 230px;">
                        </div>
                    </div>
                </div>
                <!-- end card-->
            </div>
        </div>
        <!-- end row -->
    @endsection
