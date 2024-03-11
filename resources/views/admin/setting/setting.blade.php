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

    <div class="row">
        <div class="col-lg-12">

            <div class="card-body">
                <div class="row">
                    @if ($setting->isEmpty())
                        <div class="text-md-right">
                            <a href="{{ route('setting.create') }}">
                                <button type="button" class="btn btn-danger waves-effect waves-light mb-2 mr-2">
                                    <i class="mdi mdi-basket mr-1"></i> Add
                                </button>
                            </a>
                        </div>
                    @else
                        @foreach ($setting as $item)
                            <a href="{{ route('setting.edit', ['setting' => $item->id]) }}">
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
            @foreach ($setting as $item)
                <div class="col-lg-12">
                    <!-- project card -->
                    <div class="card d-block">
                        <div class="card-body">
                            {{--  <!-- about title-->  --}}
                            <h4 class="mt-0">
                                <h5 class="font-14">Address:</h5>
                                {{ $item->address }}
                            </h4>

                            <h5 class="font-14">Phone:</h5>

                            <p class="text-muted mb-2">
                                {{ $item->phone }}
                            </p>

                            <h5 class="font-14">Email:</h5>

                            <p class="text-muted mb-4">
                                {{ $item->email }}
                            </p>

                            <h5 class="font-14">Hero Title:</h5>

                            <p class="text-muted mb-4">
                                {{ $item->hero_title }}
                            </p>

                            <h5 class="font-14">Hero subtitle:</h5>

                            <p class="text-muted mb-4">
                                {{ $item->hero_subtitle }}
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
        </div>



    @endsection
