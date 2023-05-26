<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('pageTitle') | Furniture Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .container-inline{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: .5rem 2rem;
            flex-wrap: wrap;
            width: 100vw;
            gap: 1rem;
        }

        ::-webkit-scrollbar{
            display: none;
        }

        .container-inline a h1{
            font-size: 2rem;
        }

        .buttons-inline{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            height: 100%;
        }

        .buttons-inline div a{
            text-decoration: none;
        }

        .buttons-inline div a p{
            margin: 0;
            height: 100%;
            white-space: nowrap;
        }

        .buttons-inline{
            height: 100%;
        }

        .buttons-inline div{
            padding: .3rem;
            transition: all .5s linear;
        }

        .buttons-inline div:focus, .buttons-inline div:hover{
            background-color: rgba(255,255,255,.2);
        }

        .footer-container-inline{
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
            padding: .5rem 2rem;
            flex-wrap: wrap;
        }

        .search input{
            width: 43vw;
        }

        @media only screen and (max-width: 525px){
            .footer-container-inline{
                justify-content: center;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid bg-light text-light big-container">
<!-- <div class="container"> -->
    <div class="container-inline">
        <div class="">
                <p style="display:none">{{ $user = Auth::user(); }}</p>
                <a href="/" style="text-decoration:none">
                    <h1 class="navbar-header" style="color: black">Furniture Store</h1>
                </a> 
        </div>
        <div class="">
            <div class="d-flex justify-content-center align-items-center gap-3 search">
                <form action="/search" method="get" class="searchBar">
                    <input name="search" type="search" class="form-control" placeholder="Search">
                </form>
            </div>
        </div>
        @auth()
            @if(auth()->user()->roleid == '1')
            <div class="buttons-inline">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color: black">Manage</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/insert-genre') }}">Manage Types</a></li>
                        <li><a class="dropdown-item" href="{{ url('/manage-user') }}">Manage Users</a></li>
                        <li><a class="dropdown-item" href="{{ url('/manage-book') }}">Manage Products</a></li>
                        </ul>
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color: black; text-decoration: none">Hello, {{ $user->fullname}}</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/profile-page') }}">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
                        </ul>
            </div>
            @endif
            @if(auth()->user()->roleid == '2')
            <div class="buttons-inline">
            <div class="col-md-auto">
                    <a href="/cart" style="color: black; text-decoration: none">
                    <p class="">View Cart</p>
                    </a>
                </div>
                <div class="col-md-auto">
                    <a href="/transaction-history" style="color: black; text-decoration: none">
                    <p class="">View Transaction History</p>
                    </a>
                </div>
                <div class="col-md-auto">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color: black; text-decoration: none">Hello, {{ $user->fullname}}</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/profile-page') }}">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
                        </ul>
                </div>
            </div>
                
            @endif
        
        @else
        <div class="buttons-inline">
            <div class="col">
                <a href="/aboutus" style="color: black; text-decoration: none;">
                    <p class="">About Us</p>
                </a>
            </div>
            <div class="col">
                <a href="/register" style="color: black; text-decoration: none;">
                    <p class="">Register</p>
                </a>
            </div>
            <div class="col">
                <a href="/login" style="color: black; text-decoration: none">
                <p class="">Login</p>
                </a>
            </div>
        </div>
        
        @endauth()
    </div>
</div>
<div class="container">
</div>
<div class="container mt-5">
    <div class="row ">
        <div class="col-12 p-3">
            @yield('content')
        </div>
        <div class = "p-3 col-2">
        </div>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</div>
<footer class="bg-light text-dark fixed-bottom ">
  <div class="container-fluid py-3">
    <div class="footer-container-inline">
      <div class="">
        <small>{{ date("D") }}, {{ date("M d") }}, {{ date("Y") }} {{ date("H:i a") }}</small>
      </div>
      <div class="">
        <small>All Rights Reserved &copy{{ date("Y") }} Book Store</small>
      </div>
    </div>
  </div>
</footer>

</body>
</html>
