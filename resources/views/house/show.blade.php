@extends('layouts.app')

@section('content')
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-12"><h1 style="text-align: center">My House</h1></div>
                <div>
                        <h4 scope="col">Title :</h4>
                        <p>{{$house->title}}</p>
                        <h4 scope="col">Description :</h4>
                        <p>{!! $house->description !!}</p>
                        <h4 scope="col">Content :</h4>
                        <p>{!! $house->content !!}</p>
                        <h4 scope="col">Price :</h4>
                        <p>{{$house->price}}</p>
                        <h4 scope="col">Address :</h4>
                        <p>{{$house->address}}</p>
                        <h4 scope="col">Status :</h4>
                        <p>{{$house->status}}</p>
                        <h4 scope="col">Image :</h4>
                        <p><img src="{{asset('storage/' . $house->image)}}" style="height:200px; width:200px"></p>

                </div>
            </div>
            <div>
                <a class="btn btn-dark" href="{{ route('house.index') }}">Quay lại</a>
            </div>
        </div>
    </div>
    </div>
@endsection
