@extends('dashboard')

@section('content')
    {{--  <!-- start page title -->  --}}

    {{--  <!-- start page title -->  --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Protfolio</h4>
            </div>
        </div>
    </div>
    {{--  <!-- end page title -->  --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Protfolio</div>
                    <div class="card-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Title</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="title" required
                                        autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Clint Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="clintname" required
                                        autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Project URL</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="url" required
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
                                <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>
                                <div class="col-md-6">
                                    <select id="category" class="form-control" name="category" required>
                                        <option value="">Select Category</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{--  CK editor section  --}}
                            <div class="form-group mb-3">
                                <label for="product-name">Description</label>
                                <textarea class="form-control" id="editor" name="description"></textarea>
                            </div>


                            <div class="form-group row">
                                <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="active"
                                            value="1" checked>
                                        <label class="form-check-label" for="active">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inactive"
                                            value="0">
                                        <label class="form-check-label" for="inactive">Inactive</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('protfolio.index') }}" class="btn btn-secondary">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
