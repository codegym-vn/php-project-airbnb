@extends('house.layout')

@section('content')
    <div class="container">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12">
                    <h1>Bài viết mới</h1>
                </div>
                <div class="col-12">
                    <form method="post" action="{{route('house.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" name="title" class="form-control"/>
                            @if($errors->has('title'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('title') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea name="description" class="form-control" id="description"></textarea>
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
                            <textarea name="content" class="form-control" id="content"></textarea>
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
                            <input type="number" name="price" class="form-control">
                            @if($errors->has('price'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('price') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="status" class="form-control" value="Chưa cho thuê">
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <textarea type="text" name="address" class="form-control"></textarea>
                            @if($errors->has('address'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('address') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Ảnh</label>
                            <div class="file-loading">
                            <input type="file" name="images[]"  multiple class="file"></div>
                            @if($errors->has('image'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('image') }}</p>
                            @endif
                            <input type="file" name="image1" class="file">
                            @if($errors->has('image1'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('image1') }}</p>
                            @endif
                            <input type="file" name="image2" class="file">
                            @if($errors->has('image2'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('image2') }}</p>
                            @endif
                        </div>
                        <div style="margin-bottom: 50px">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Quay lại
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
