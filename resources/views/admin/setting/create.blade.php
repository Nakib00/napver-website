@extends('dashboard')

@section('content')
    {{--  <!-- start page title -->  --}}

    {{--  <!-- start page title -->  --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Setting update</h4>
            </div>
        </div>
    </div>
    {{--  <!-- end page title -->  --}}

    <form action="{{ route('setting.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="hero_title">Hero Title:</label>
            <input type="text" class="form-control" id="hero_title" name="hero_title">
        </div>
        <div class="form-group">
            <label for="hero_subtitle">Hero Subtitle:</label>
            <input type="text" class="form-control" id="hero_subtitle" name="hero_subtitle">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('setting.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
