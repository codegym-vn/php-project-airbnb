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
                <div class="col-6">
                    <form class="navbar-form navbar-right" action="{{ route('house.search') }}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="keyword" placeholder="Search"
                                           value="{{ (isset($_GET['keyword'])) ? $_GET['keyword'] : '' }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-info">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Giá phòng</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Ảnh</th>
                    </tr>
                    </thead>
                    @if(count($houses) == 0)
                        <tr>
                            <td colspan="4">Không có dữ liệu</td>
                        </tr>
                    @else
                        @foreach($houses as $key => $house)
                            <tr>
                                <th scope="row"{{++$key}}></th>
                                <td>{{$house->title}}</td>
                                <td>{{$house->price}}</td>
                                <td>{{$house->status}}</td>
                                <td><img src="{{asset('storage/' . $house->image)}}" style="height:200px; width:200px">
                                </td>

                                <td><a class="btn btn-outline-success" href="{{ route('house.edit', $house->id) }}">Sửa</a></td>
                                <td><a class="btn btn-outline-danger" href="{{ route('house.destroy', $house->id) }}"
                                       onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>
                                <td><a class="btn btn-outline-primary" href="{{ route('house.show', $house->id) }}">Xem</a></td>

                            </tr>
                        @endforeach
                    @endif
                    <div class="col-6">
                        <a class="btn btn-primary float-right" href="{{ route('house.create') }}">Thêm mới</a>
                    </div>
                </table>
            </div>
        </div>
    </div>
@endsection