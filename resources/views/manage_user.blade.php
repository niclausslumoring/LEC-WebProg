@extends('layout')
@section('pageTitle', 'Manage Users')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-3">
                <p>Name</p>
            </div>
            <div class="col-md-3">
                <p>Email</p>
            </div>
            <div class="col-md-2">
                <p>Role</p>
            </div>
            <div class="col-md-4">
                Action
            </div>
        </div>
        @foreach ($user as $u)
        <div class="row">
            <hr>
            <div class="col-md-3">
                <p>{{ $u->fullname }}</p>
            </div>
            <div class="col-md-3">
                <p>{{ $u->email }}</p>
            </div>
            <div class="col-md-2">
                <p>{{ $role[$u->roleid -1]->rolename }}</p>
            </div>
            <div class="col-sm-auto">
                <a href="/user-detail/{{ $u->id }}">
                    <button class="btn btn-sm btn-secondary">View Detail</button>
                </a>
            </div>
            @if($u->roleid == '2')
            <div class="col sm-1">
                <form action="/delete-user/{{ $u->id }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                    </form>
            </div>
            @endif
        </div> 
        @endforeach
    </div>
@endsection