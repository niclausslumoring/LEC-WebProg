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
@section('pageTitle', 'Login')
@section('content')
<div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10 col-xl-5" >
        <form action="/login" method="post">
            {{ csrf_field() }}
            <div class="card shadow-2-strong shadow p-4 bg-white rounded" style="border-radius: 1rem;">
                <div class="card-body p-4 text-center ">
                    <h3 class=" d-flex justify-content-start mb-4">Login</h3>

                    <div class="form-outline mb-4 d-flex justify-content-start ">
                        <div style="background-color: whitesmoke" class="form-outline col-2 p-2" >
                            <ion-icon name="mail-outline" size="large"></ion-icon>
                        </div>
                        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{ \Illuminate\Support\Facades\Cookie::get('email') }}"> 
                        <div class="row">
                            <span style="color: red">@error('email')
                                {{ 'Email is required' }}
                            @enderror</span>
                        </div>
                    </div>
                    
                    <div class="form-outline mb-4 d-flex justify-content-start align-items-center">
                        <div style="background-color: whitesmoke" class="form-outline col-2 p-2" >
                            <ion-icon name="lock-closed-outline"size="large"></ion-icon>
                        </div>
                        <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{ \Illuminate\Support\Facades\Cookie::get('password') }}"/>
                        <div class="row">
                            <span style="color: red">@error('password')
                                {{ 'Password is required' }}
                            @enderror</span>
                        </div>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input class="form-check-input" type="checkbox" name="remember_me"/>
                        <label for="remember_me">Remember Me</label>
                    </div>
                </div>
                <button class="btn btn-success btn-lg btn-block align-items-center" type="submit">
                    <ion-icon name="log-in-outline"></ion-icon>
                    Login</button>
            </div>
        </form>
        </div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

@endsection
</body>
</html>