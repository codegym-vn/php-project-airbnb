@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <div class="col-12">
                        @if (Session::has('success'))
                            <p class="text-success">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                {{ Session::get('success') }}
                            </p>
                        @endif
                    </div>
                    <div class="col-12">
                        @if (Session::has('delete'))
                            <p class="text-danger">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                {{ Session::get('delete') }}
                            </p>
                        @endif
                    </div>
                    {{--<div class="col-12">--}}
                        {{--@if (isset($keyword))--}}
                            {{--<span class="text-primary">--}}
                                {{--{{"Tìm thấy " . count($houses) . " kết quả"}}--}}
                            {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                    <form class="navbar-form navbar-right" action="{{ route('house.search') }}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="keyword" placeholder="Search"
                                           value="{{ (isset($_GET['keyword'])) ? $_GET['keyword'] : '' }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <select name="titleSearch" class="custom-select">
                                    <option value="1">Tên nhà</option>
                                    <option value="2">Giá phòng</option>
                                    <option value="3">Trạng thái</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn btn-info">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="table table-striped text-center">
                    <thead>
                    <tr>
                        <th scope="col">Tên nhà</th>
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
                                <td><a href="{{ route('house.show', $house->id) }}">{{$house->title}}</a></td>
                                <td>{{number_format($house->price, 0, ',', '.') . ' VND'}}</td>
                                <td>@if($house->status === 'Đã cho thuê')
                                        <p style="color: green">{{$house->status}}</p>
                                    @else
                                        <p style="color: red">{{$house->status}}</p>
                                    @endif
                                </td>
                                <td>
                                    @if($house->image)
                                        <img src="{{asset('storage/' . $house->image[0])}}"
                                             style="height:200px; width:200px">
                                    @else
                                        {{'Chưa có ảnh'}}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    <div class="col-6">
                        <a class="btn btn-primary float-right" href="{{ route('house.create') }}">Thêm mới</a>
                    </div>
                </table>
            </div>
            <div class="pagination float-lg-right" style="margin-bottom: 30px">
                {{ $houses->appends(request()->query())}}
            </div>
        </div>
    </div>
@endsection
