@extends('layout')
@section('pageTitle', 'Profile')
@section('content')
    <div class="container border bg-white">
        <div class="row mt-4">
            <p style="display:none">{{ $user = Auth::user(); }}</p>
            <h3>Profile</h3>
            
        </div>
        <form action="/update-profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        {{ method_field('put') }}
        {{ csrf_field() }}
        <div class="row mt-3">
            <div class="col-md-4">
                <p>Name</p>
            </div>
            <div class="col-md-6">
                <input type="text" placeholder="{{ $user->fullname}}" class="form-control @error('fullname') is-invalid @enderror" name="fullname">
                <div class="row">
                    <span style="color: red">@error('name')
                        {{ 'Name is required' }}
                    @enderror</span>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <p>Email</p>
            </div>
            <div class="col-md-6">
                <p>{{ $user->email }}</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-7"></div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
            <div class="col-md-2">
                <a href="/change-password">
                    <button type="button" class="btn btn-success">Change Password</button>
                </a>
            </div> 
        </div>
    </form>
        <div class="row">
            <div class="col-md-10 py-2">
            </div> 
        </div>
    </div>
@endsection