@extends('dashboard')

@section('content')
    {{--  <!-- start page title -->  --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Service</h4>
            </div>
        </div>
    </div>
    {{--  <!-- end page title -->  --}}

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-lg-4">
                            <div class="text-lg-right">
                                <a href="{{ route('service.create') }}"><button type="button"
                                        class="btn btn-danger waves-effect waves-light mb-2 mr-2"><i
                                            class="mdi mdi-basket mr-1"></i> Add New Service</button></a>
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
                                    <th>Status</th>
                                    <th style="width: 125px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($service as $item)
                                    <tr>

                                        <td><a href="" class="text-body font-weight-bold">{{ $item->title }}</a>
                                        </td>
                                        <td>
                                            <a href="ecommerce-product-detail.html"><img src="{{ asset($item->image) }}"
                                                    alt="product-img" height="32" /></a>
                                        </td>
                                        <td>
                                            {{ $item->created_at }}
                                        </td>
                                        <td>
                                            @if ($item->status == 1)
                                                <a
                                                    href="{{ route('service.status.change', ['id' => $item->id, 'status' => '0']) }}">
                                                    <h5><span class="badge badge-info">Active</span></h5>
                                                </a>
                                            @else
                                                <a
                                                    href="{{ route('service.status.change', ['id' => $item->id, 'status' => '1']) }}">
                                                    <h5><span class="badge badge-danger">Inactive</span></h5>
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('service.show', $item->id) }}" class="action-icon"> <i
                                                    class="mdi mdi-eye"></i></a>
                                            <a href="{{ route('service.edit', $item->id) }}" class="action-icon"> <i
                                                    class="mdi mdi-square-edit-outline"></i></a>
                                            <form action="{{ route('service.destroy', $item->id) }}" method="POST"
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
@endsection
