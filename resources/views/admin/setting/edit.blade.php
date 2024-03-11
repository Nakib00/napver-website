@extends('dashboard')

@section('content')
    {{--  <!-- start page title -->  --}}

    {{--  <!-- start page title -->  --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Setting Edit</h4>
            </div>
        </div>
    </div>
    {{--  <!-- end page title -->  --}}

    <form action="{{ route('setting.update', $settingdata->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $settingdata->address }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="{{ $settingdata->phone }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $settingdata->email }}">
        </div>
        <div class="form-group">
            <label for="hero_title">Hero Title:</label>
            <input type="text" class="form-control" id="hero_title" name="hero_title"
                value="{{ $settingdata->hero_title }}">
        </div>
        <div class="form-group">
            <label for="hero_subtitle">Hero Subtitle:</label>
            <input type="text" class="form-control" id="hero_subtitle" name="hero_subtitle"
                value="{{ $settingdata->hero_subtitle }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('setting.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
