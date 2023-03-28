@extends('layout')
@section('pageTitle', 'User Detail')
@section('content')
    <div class="container border bg-white">
        <div class="row mt-4">
            <h3>{{ $user->fullname }}'s User Detail</h3>
        </div>
        <form action="/updateUserDetail/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        {{ method_field('put') }}
        {{ csrf_field() }}
        <div class="row mt-3">
            <div class="col-md-4">
                <p>Name</p>
            </div>
            <div class="col-md-6">
                <input type="text" value="{{ $user->fullname}}" class="form-control @error('fullname') is-invalid @enderror" name="fullname">
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
                <input type="text" value="{{ $user->email}}" class="form-control @error('email') is-invalid @enderror" name="email">
                <div class="row">
                    <span style="color: red">@error('email')
                        {{ 'Email is required' }}
                    @enderror</span>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <p>Role</p>
            </div>
            <div class="col-md-6">
                <select class="form-control @error('rolename') is-invalid @enderror" name="rolename">
                    <option value="Admin">Admin</option>
                    <option value="Member">Member</option>
                </select>
                <!-- <input type="text" value="{{ $role[$user->roleid -1]->rolename}}" class="form-control @error('rolename') is-invalid @enderror" name="rolename"> -->
                <div class="row">
                    <span style="color: red">@error('rolename')
                        {{ 'Role is required' }}
                    @enderror</span>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="container col-md-1">
                <button type="submit" class="btn btn-primary">Update</button>
            </div> 
        </div>
        </form>
        
    </div>
@endsection