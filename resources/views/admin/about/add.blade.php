@extends('dashboard')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Add About</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add About Section</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('about.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Title</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="title" required
                                        autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control-file" name="image" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Short Summary</label>
                                <div class="col-md-6">
                                    <textarea id="description" class="form-control" name="shortsummary" required></textarea>
                                </div>
                            </div>

                            {{--  CK editor section  --}}
                            <div class="form-group mb-3">
                                <label for="product-name">Description</label>
                                <textarea class="form-control" id="editor" name="description"></textarea>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('about.index') }}" class="btn btn-secondary">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
