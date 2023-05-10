@extends('layout')
@section('pageTitle', 'Manage Genre')
@section('content')
    <div class="container border bg-white">
        <div class="row mt-4">
            <h3>Insert Types Form</h3>
        </div>
        <form action="/insert-genre" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row mt-3">
            <div class="col-md-4">
                <p>Name</p>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                <span style="color: red">@error('name')
                    {{ 'Name is required' }}
                @enderror</span>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="container col-md-1">
                <button class="btn btn-primary" type="submit">Insert</button>
            </div> 
        </div>
    </div>
    </form>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-5">
                <p>Name</p>
            </div>
            <div class="col-md-7">
                Action
            </div>
        </div>
        @foreach ( $genre as $gen )
        <div class="row">
            <hr>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p>{{ $gen->name }}</p>
            </div>
            <div class="col-sm-auto">
                <a href="/genre-detail/{{ $gen->id }}">
                    <button class="btn btn-sm btn-secondary">View Details</button>
                </a>
            </div>
            <div class="col sm-1">
                <form action="/delete-genre/{{ $gen->id }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                    </form>
            </div>
        </div> 
        @endforeach
    </div>
@endsection