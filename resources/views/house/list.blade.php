@extends('house.layout')

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>My House</h1></div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Content</th>
                    <th scope="col">Price</th>
                    <th scope="col">Address</th>
                    <th scope="col">Status</th>
                    <th scope="col">Image</th>
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
                            <td>{{$house->description}}</td>
                            <td>{{$house->content}}</td>
                            <td>{{$house->price}}</td>
                            <td>{{$house->address}}</td>
                            <td>{{$house->status}}</td>
                            <td><img src="{{asset('storage/' . $house->image)}}" style="height:200px; width:200px"></td>

                            <td><a class="btn btn-success" href="{{ route('house.edit', $house->id) }}">sửa</a></td>
                            <td><a class="btn btn-danger" href="{{ route('house.destroy', $house->id) }}"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
            </table>
            <a class="btn btn-primary" href="{{ route('house.create') }}">Thêm mới</a>
        </div>
    </div>
@endsection
