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
                                @foreach ($message as $item)
                                    <tr>
                                        <td><a href="" class="text-body font-weight-bold">{{ $item->name }}</a>
                                        </td>
                                        <td>
                                            {{ $item->email }}
                                        </td>
                                        <td>
                                            {{ $item->created_at }}
                                        </td>

                                        <td>
                                            <h5>{{ $item->phone }}</h5>
                                        </td>
                                        <td>
                                            <a href="{{ route('contact.show', $item->id) }}"
                                                class="action-icon show-details">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                            <form action="{{ route('contact.destroy', $item->id) }}" method="POST"
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
