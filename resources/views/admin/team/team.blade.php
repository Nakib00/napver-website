@extends('dashboard')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Team</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <form class="search-bar form-inline">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="mdi mdi-magnify"></span>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right">
                                    <button type="button" class="btn btn-danger waves-effect waves-light mb-2 mr-2"><i
                                            class="mdi mdi-basket mr-1"></i> Add Teams</button>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>wings</th>
                                        <th>Short Summary</th>
                                        <th>Join Date</th>
                                        <th style="width: 82px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-user">
                                            <img src="{{ asset('assetsAdmin/images/users/user-2.jpg') }}" alt="table-user"
                                                class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Paul J.
                                                Friend</a>
                                        </td>
                                        <td>
                                            CEO
                                        </td>
                                        <td>
                                            Executive body
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                        </td>
                                        <td>
                                            07/07/2018
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
        <!-- end row -->
    </div>
    <!-- end page title -->
@endsection
