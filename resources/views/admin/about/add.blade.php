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

    <div class="row">
        <div class="col-lg-6">
            <div class="card-box">
                <form action="{{ route('about.store') }}" method="POST">
                    @csrf
                    <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                    <div class="form-group mb-3">
                        <label for="product-name">Title <span class="text-danger">*</span></label>
                        <input type="text" id="product-name" class="form-control" name="title">
                    </div>

                    <div class="form-group mb-3">
                        <label for="product-summary">Short Summary <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="product-summary" rows="3" placeholder="Please enter summary"
                            name="shortDescription"></textarea>
                    </div>

                    {{--  CK editor section  --}}
                    <div class="form-group mb-3">
                        <label for="product-name">Description <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="editor" name="description"></textarea>
                    </div>

                    <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Images</h5>
                    <input type="file" name="image" multiple />


                    <div class="row">
                        <div class="col-12 pt-3">
                            <div class="text-center mb-3">
                                <button type="submit" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                                <button type="button" class="btn w-sm btn-light waves-effect">Cancel</button>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </form>
                <!-- end row -->

            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
