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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Message Details</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <p>{{ $message->name }}</p>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <p>{{ $message->email }}</p>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <p>{{ $message->phone }}</p>
                        </div>

                        <div class="form-group">
                            <label for="date">Date:</label>
                            <p>{{ $message->created_at }}</p>
                        </div>

                        <div class="form-group">
                            <label for="message">Message:</label>
                            <p>{{ $message->message }}</p>
                        </div>

                        <a href="{{ route('contact.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
