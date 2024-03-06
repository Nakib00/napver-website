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
                            <tr>

                                <td><a href="" class="text-body font-weight-bold">Nakib</a>
                                </td>
                                <td>
                                    August 05 2018
                                </td>
                                <td>
                                    <h5><span class="badge badge-info">Active</span></h5>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i
                                            class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i
                                            class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
{{--  category end  --}}

 {{--  Team add start  --}}
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
                            <a href=""><button type="button" class="btn btn-danger waves-effect waves-light mb-2 mr-2"><i
                                    class="mdi mdi-basket mr-1"></i> Add New protfolio</button></a>
                        </div>
                    </div><!-- end col-->
                </div>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th style="width: 125px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td><a href="" class="text-body font-weight-bold">Nakib</a>
                                </td>
                                <td>
                                    <a href="ecommerce-product-detail.html"><img
                                            src="{{ asset('assetsAdmin/images/products/product-1.png') }}"
                                            alt="product-img" height="32" /></a>
                                </td>
                                <td>
                                    August 05 2018
                                </td>
                                <td>
                                    IT
                                </td>
                                <td>
                                    <h5><span class="badge badge-info">Active</span></h5>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i
                                            class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i
                                            class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
{{--  Team end  --}}

{{--  <!-- Popup Modal -->  --}}
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModalLabel">Add New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for adding category -->
                <form id="categoryForm">
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

    // Handle form submission
    document.getElementById('categoryForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Get form data
        const categoryName = document.getElementById('categoryName').value;
        const status = document.querySelector('input[name="status"]:checked').value;

        // Do something with the form data (e.g., send it to a server via AJAX)
        console.log('Category Name:', categoryName);
        console.log('Status:', status);

        // Close the modal
        $('#categoryModal').modal('hide');
    });
</script>

@endsection
