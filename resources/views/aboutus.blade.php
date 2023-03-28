<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            margin-top: 50px;
        }

        h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .about-p {
            font-size: 1.2rem;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        @media (min-width: 768px) {
        .container {
            max-width: 810px;
        }
        }

    </style>
</head>
<body>
@extends('layout')
@section('pageTitle', 'Login')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>About Us</h1>
      <p class="about-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce bibendum facilisis nulla vel imperdiet. Morbi consequat ac est vel consequat. Duis vel enim ut dolor consequat pharetra. Nam euismod suscipit leo, at faucibus ipsum feugiat sit amet. Aenean non fringilla orci, vel bibendum elit. Mauris cursus lorem mauris, vel ultrices mauris consequat eget. Nullam luctus, odio vitae lobortis dapibus, massa sapien efficitur ante, vel bibendum libero odio at nulla.</p>
      <p class="about-p">Sed nec tempor nibh. Praesent vel augue ut mi ultricies rutrum. In ut tortor quis est sagittis maximus. Donec vel dui ut massa luctus vehicula. Praesent varius vel nisi ut posuere. Aenean varius gravida nibh, a mollis eros fringilla in. Donec pharetra urna vitae dolor elementum facilisis.</p>
    </div>
  </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

@endsection
</body>
</html>