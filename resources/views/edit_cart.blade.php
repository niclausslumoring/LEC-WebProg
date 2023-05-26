<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layout')
@section('pageTitle', 'Book Detail')
@section('content')

@if(Auth::check())
    @if(auth()->user()->roleid == '1')
<div class= "p-3 border">
    <form action="/update-book/{{ $book->id }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        {{ method_field('put') }}
        <p class="fs-4">{{ $book->title }}'s Book Detail</p>
        <div class="row mb-3">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input class="form-control @error('title') is-invalid @enderror" type="text" aria-label="default input example" value="{{ $book->title }}" name="title">
                <div class="row">
                    <span style="color: red">@error('title')
                        {{ 'Title is required' }}
                    @enderror</span>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Synopsis</label>
            <div class="col-sm-10">
                <textarea class="form-control @error('synopsis') is-invalid @enderror" id="exampleFormControlTextarea1" rows="10" name="synopsis">{{ $book->synopsis}}</textarea>
                <div class="row">
                    <span style="color: red">@error('author')
                        {{ 'Author is required' }}
                    @enderror</span>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Genre</label>
            <div class="col-sm-9">
                <div class="row">
                    @foreach($genres as $g)
                        <div class="col-md-4">
                            @if ($g->id ==  $book->genreid)
                                <input class="form-check-input @error('genre') is-invalid @enderror" type="radio" value="{{ $g->id}}" id="checkbox{{ $g->id}}" name="genre" checked>
                            @else
                                <input class="form-check-input @error('synopsis') is-invalid @enderror" type="radio" value="{{ $g->id}}" id="checkbox{{ $g->id}}" name="genre">
                            @endif
                            <label class="form-check-label me-2 " for="checkbox{{ $g->id }}">{{ $g->name}}</label>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <span style="color: red">@error('genre')
                        {{ 'Genre is required' }}
                    @enderror</span>
                </div>  
            </div>
        </div>
        <div class="row mb-3">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input class="form-control @error('price') is-invalid @enderror" type="text" aria-label="default input example" value="{{ $book->price}}" name="price">
                <div class="row">
                    <span style="color: red">@error('price')
                        {{ 'Price is required'}}
                    @enderror</span>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Cover</label>
            <div class="col-sm-10">
                <img src="{{\Illuminate\Support\Facades\Storage::url($book->cover)}}" alt=""style="width: 13rem; height: 18rem;">
                <input class="form-control @error('cover') is-invalid @enderror" name="cover" type="file" id="formFile">
                <div class="row">
                    <span style="color: red">@error('cover')
                        {{ 'Cover is required'}}
                    @enderror</span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
    @elseif(auth()->user()->roleid == '2')
<div class= "p-3 border">
    <p class="fs-4">{{ $book->title }}'s Book Detail</p>
    <div class="row">
        <div class="col-sm-2 ms-4">
            <img src="{{\Illuminate\Support\Facades\Storage::url($book->cover)}}" alt=""style="width: 13rem; height: 18rem;">
        </div>
        <div class="col-sm-9 ms-5">
            <div class="row">
                <p class="col-sm-3">Name</p>
                <p class="col-sm-6 ms-4">{{ $book->title }}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Author</p>
                <p class="col-sm-6 ms-4">{{ $book->author}}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Synopsis</p>
                <p class="col-sm-6 ms-4">{{ $book->synopsis}}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Genre(s)</p>
                <p class="col-sm-6 ms-4">{{ $genres[ $book->genreid - 1]->name}}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Price</p>
                <p class="col-sm-6 ms-4">IDR {{ $book->price}}</p>
            </div>
            <div class="row">
                <form action="/edit-cart/{{ $book->id }}">
                    <div class="col-sm-3 input-group">
                        <span class="input-group-text" id="inputGroup-sizing-default">Quantity</span>
                        @if (request()->route('qty'))
                            <input type="text" class="form-control" name="quantity" value="{{ request()->route('qty') }}">
                        @else
                            <input type="text" class="form-control" name="quantity" value="1">
                        @endif
                        <button type="submit" class="btn btn-success col-sm-2">Add to Cart</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
@else
<div class= "p-3 border">
    <p class="fs-4">{{ $book->title }}'s Book Detail</p>
    <div class="row">
        <div class="col-sm-2 ms-4">
            <img src="{{\Illuminate\Support\Facades\Storage::url($book->cover)}}" alt=""style="width: 13rem; height: 18rem;">
        </div>
        <div class="col-sm-9 ms-5">
            <div class="row">
                <p class="col-sm-3">Name</p>
                <p class="col-sm-6 ms-4">{{ $book->title }}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Author</p>
                <p class="col-sm-6 ms-4">{{ $book->author}}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Synopsis</p>
                <p class="col-sm-6 ms-4">{{ $book->synopsis}}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Genre(s)</p>
                <p class="col-sm-6 ms-4">{{ $genres[ $book->genreid - 1]->name}}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Price</p>
                <p class="col-sm-6 ms-4">IDR {{ $book->price}}</p>
            </div>
        </div>
    </div>
</div>
@endif
@include('sweetalert::alert')
@endsection
</body>
</html>