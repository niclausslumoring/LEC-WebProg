<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>

    <title>Document</title>
</head>
<body>
    @extends('layout')
@section('pageTitle', 'Genre Detail')
@section('content')
    <div class="container border bg-white">
        <div class="row mt-4">
            <h3>{{ $genre->name }}'s Types Detail</h3>
        </div>
        <form action="/update-genre/{{ $genre->id }}" enctype="multipart/form-data" method="POST">
        {{ method_field('put') }}
        {{ csrf_field() }}
        <div class="row mt-3">
            <div class="col-md-4">
                <p>Name</p>
            </div>
            <div class="col-md-6">
                <input type="text" placeholder="{{ $genre->name }}" class="form-control  @error('name') is-invalid @enderror" name="name">
                <div class="row">
                    <span style="color: red">@error('name')
                        {{ 'Genre is required' }}
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
        <div class="row">
            <h3>Book List</h3>
        </div>
    
        <div class="row mt-4">
            <div class="col-md-8">
                <p>Name</p>
            </div>
            <div class="col-md-3">
                Action
            </div>
        </div>
        @foreach ($book as $b)
            @if ($b->genreid == $genre->id)
            <div class="row">
                <hr>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <p>{{ $b->title }}</p>
                </div>
                <div class="col md-3">
                    <a href="/book-detail/{{ $b->id }}">
                        <button class="btn btn-sm btn-secondary">View Book Details</button>
                    </a>   
                </div>
            </div>
            @endif
        @endforeach
    </div>
    @include('sweetalert::alert')

@endsection
</body>
</html>
