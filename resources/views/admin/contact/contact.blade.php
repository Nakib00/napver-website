@extends('dashboard')

@section('content')

{{--  <!-- start page title -->  --}}
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Contact</h4>
        </div>
    </div>
</div>
{{--  <!-- end page title -->  --}}


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Title</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Phone</th>
                                <th style="width: 125px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td><a href="" class="text-body font-weight-bold">Nakib</a>
                                </td>
                                <td>
                                    nakibulislam54@gmail.com
                                </td>
                                <td>
                                    August 05 2018
                                </td>

                                <td>
                                    <h5>01627199815</h5>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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

@endsection
