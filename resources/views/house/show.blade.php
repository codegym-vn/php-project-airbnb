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
                <div class="col-12"><h1 style="text-align: center">{{$house->title}}</h1></div>
                <div>
                    <div class="col-12" style="margin-left: 1000px">
                        <a class="btn btn-success" href="{{ route('house.edit', $house->id) }}">Sửa</a>
                        <a class="btn btn-danger" href="{{ route('house.destroy', $house->id) }}"
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>

                    </div>
                    <div class="col-12">
                        @if (Session::has('success'))
                            <p class="text-success">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                {{ Session::get('success') }}
                            </p>
                        @endif
                    </div>
                    @if($house->status === 'Đã cho thuê')
                        <h4 scope="col">Trạng thái :</h4>
                        <p style="color: green">{{$house->status}}</p>
                        <h4 scope="col">Check in :</h4>
                        <p>{{$house->orders[0]->checkIn}}</p>
                        <h4 scope="col">Check out :</h4>
                        <p>{{$house->orders[0]->checkOut}}</p>
                    @else
                        <h4 scope="col">Trạng thái :</h4>
                        <p style="color: red">{{$house->status}}</p>
                    @endif
                    <h4 scope="col">Số lượng phòng ngủ :</h4>
                    <p>{{$house->quantityOfBedroom  . ' ' . 'phòng'}}</p>
                    <h4 scope="col">Số lượng phòng tắm :</h4>
                    <p>{{$house->quantityOfBathroom . ' ' . 'phòng'}}</p>
                    <h4 scope="col">Giá phòng :</h4>
                    <p>{{number_format($house->price, 0, ',', '.') . ' VND' . ' ' .'/ đêm'}}</p>
                    <h4 scope="col">Địa chỉ :</h4>
                    <p>{{$house->address}}</p>
                    <h4 scope="col">Mô tả :</h4>
                    <p>{!! $house->description !!}</p>
                    <h4 scope="col">Ảnh :</h4>
                    @if($house->image)
                        @foreach($house->image as $image)
                            <img src="{{asset('storage/' . $image)}}" style="height:200px; width:200px">
                        @endforeach
                    @else
                        {{'Chưa có ảnh'}}
                    @endif


                </div>
            </div>
            <div style="margin-bottom: 50px ">
                <a class="btn btn-dark" href="{{ route('house.index') }}">Quay lại</a>
            </div>
        </div>
    </div>
    </div>
@endsection
