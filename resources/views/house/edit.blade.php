@extends('house.layout')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Cập nhật</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('house.update', $house->id)}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$house->id}}"/>
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" name="title" value="{{$house->title}}"
                               class="form-control"/>
                        @if($errors->has('title'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('title') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea name="description" class="form-control"
                                  id="description">{{$house->description}}</textarea>
                        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                        <script>
                            CKEDITOR.replace('description');
                        </script>
                        @if($errors->has('description'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('description') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea name="content" class="form-control" id="content">{{$house->content}}</textarea>
                        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                        <script>
                            CKEDITOR.replace('content');
                        </script>
                        @if($errors->has('content'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('content') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Giá phòng</label>
                        <input type="text" name="price" value="{{$house->price}}" class="form-control"/>
                        @if($errors->has('price'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('price') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" name="address" value="{{$house->address}}" class="form-control"/>
                        @if($errors->has('address'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1"
                                   value="Đã cho thuê" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Đã cho thuê
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios2"
                                   value="Chưa cho thuê">
                            <label class="form-check-label" for="exampleRadios2">
                                Chưa cho thuê
                            </label>
                        </div>
                        @if($errors->has('status'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('status') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Ảnh</label><br>

                        <img src="{{asset('storage/' . $house->image)}}" style="height:50px; width:50px">
                        <img src="{{asset('storage/' . $house->image1)}}" style="height:50px; width:50px">
                        <img src="{{asset('storage/' . $house->image2)}}" style="height:50px; width:50px">
                        <div class="file-loading">
                            <input type="file" name="image" value="{{$house->image}}"
                                   class="file" multiple/>
                        </div>
                        @if($errors->has('image'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('image') }}</p>
                        @endif
                        <input type="file" name="image1" value="{{$house->image1}}"
                               class="file"/>
                        @if($errors->has('image1'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('image1') }}</p>
                        @endif
                        <input type="file" name="image2" value="{{$house->image2}}"
                               class="file"/>
                        @if($errors->has('image2'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('image2') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
