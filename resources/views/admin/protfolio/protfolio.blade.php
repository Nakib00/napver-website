@extends('dashboard')

@section('content')
    {{--  <!-- start page title -->  --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Protfolio</h4>
            </div>
        </div>
    </div>
    {{--  <!-- end page title -->  --}}

    {{--  Category start  --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Category</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-lg-4">
                            <div class="text-lg-right">
                                <button type="button" class="btn btn-danger waves-effect waves-light mb-2 mr-2"
                                    id="addCategoryBtn">
                                    <i class="mdi mdi-basket mr-1"></i> Add New Category
                                </button>
                            </div>
                        </div><!-- end col-->
                    </div><!-- end row -->

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th style="width: 125px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $item)
                                    <tr>
                                        <td><a href="" class="text-body font-weight-bold"></a>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            {{ $item->created_at }}
                                        </td>
                                        <td>
                                            @if ($item->status == 1)
                                                <a
                                                    href="{{ route('procategory.status.change', ['id' => $item->id, 'status' => '0']) }}">
                                                    <h5><span class="badge badge-info">Active</span></h5>
                                                </a>
                                            @else
                                                <a
                                                    href="{{ route('procategory.status.change', ['id' => $item->id, 'status' => '1']) }}">
                                                    <h5><span class="badge badge-danger">Inactive</span></h5>
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('pcategory.delete', $item->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link action-icon">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    {{--  category end  --}}

    {{--  protfolio add start  --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Team</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-lg-4">
                            <div class="text-lg-right">
                                <a href="{{ route('protfolio.create') }}"><button type="button"
                                        class="btn btn-danger waves-effect waves-light mb-2 mr-2"><i
                                            class="mdi mdi-basket mr-1"></i> Add New protfolio</button></a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th style="width: 125px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($protfolio as $item)
                                    <tr>

                                        <td><a href="" class="text-body font-weight-bold">{{ $item->title }}</a>
                                        </td>
                                        <td>
                                            {{ $item->created_at }}
                                        </td>
                                        <td>
                                            {{ $item->category->name }}
                                        </td>
                                        <td>
                                            <h5><span class="badge badge-info">Active</span></h5>
                                        </td>
                                        <td>
                                            <a href="{{ route('protfolio.show', $item->id) }}" class="action-icon"> <i
                                                    class="mdi mdi-eye"></i></a>
                                            <a href="{{ route('protfolio.edit', $item->id) }}" class="action-icon"> <i
                                                    class="mdi mdi-square-edit-outline"></i></a>
                                            <form action="{{ route('protfolio.destroy', $item->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link action-icon">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    {{--  protfolio end  --}}

    {{--  <!-- Popup Modal -->  --}}
    <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryModalLabel">Add New Team Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{--  <!-- Form for adding category -->  --}}
                    <form action="{{ route('creatcategory') }}" method="POST" id="categoryForm">
                        @csrf
                        <div class="form-group">
                            <label for="categoryName">Category Name</label>
                            <input type="text" class="form-control" id="categoryName" name="categoryName" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label><br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="activeRadio" name="status" value="active"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="activeRadio">Active</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="inactiveRadio" name="status" value="inactive"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="inactiveRadio">Inactive</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--  <!-- end modal -->  --}}

    <script>
        // Show the modal when the button is clicked
        document.getElementById('addCategoryBtn').addEventListener('click', function() {
            $('#categoryModal').modal('show');
        });
    </script>
    {{--  <!-- end page title -->  --}}
@endsection
