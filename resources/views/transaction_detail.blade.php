@extends('layout')
@section('pageTitle', 'Transaction Detail')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <p style="display:none">{{ $user = Auth::user(); }}</p>
            <div class="col-md-2">
                <h6>Book Name</h6>
            </div>
            <div class="col-md-2">
                <h6>Book Author</h6>
            </div>
            <div class="col-md-2">
                <h6>Price</h6>
            </div>
            <div class="col-md-2">
                <h6>Quantity</h6>
            </div>
            <div class="col-md-1">
                <h6>Sub Total</h6>
            </div>
            <div class="col-md-3">
                <h6>Action</h6>
            </div>
        </div>
        <?php $total = 0 ?>
        @foreach ($transaction as $t)
            @if ($user->id == $t->userid)
                @foreach ( $transDetail as $td)
                    @if ($t->id == $td->transactionid)
                    <?php $total += $td->quantity * $book[$td->bookid -1]->price ?>
                        <div class="row">
                        <hr>
                        <div class="col-md-2">
                            <p>{{ $book[$td->bookid -1]->title }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $book[$td->bookid -1]->author }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $book[$td->bookid -1]->price }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $td->quantity }}</p>
                        </div>
                        <div class="col-md-1">
                            {{ $td->quantity * $book[$td->bookid -1]->price }}
                        </div>
                        <div class="col-sm-auto">
                            <a href="/book-detail/{{ $td->bookid }}">
                                <button class="btn btn-sm btn-secondary">View Book Detail</button>
                            </a>
                        </div>
                    @endif
                @endforeach
            @endif
        @endforeach
        <hr>
        <h6>Grand Total: IDR {{ $total }}</h6>
    </div> 
    </div>
@endsection