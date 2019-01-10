@extends('house.layout')

@section('content')
    <div class="container">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12">
                    <h1>Create new houses</h1>
                </div>
                <div class="col-12">
                    <form method="post" action="{{route('house.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>title</label>
                            <input type="text" name="title" class="form-control"/>
                            @if($errors->has('title'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('title') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>description</label>
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
                            <label>content</label>
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
                            <label>price</label>
                            <textarea name="price" class="form-control"></textarea>
                            @if($errors->has('price'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('price') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>address</label>
                            <input type="text" name="address" class="form-control"/>
                            @if($errors->has('address'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('address') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>status</label>
                            <input type="text" name="status" class="form-control"/>
                            @if($errors->has('status'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('status') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>image</label>
                            <input type="file" name="image" class="form-control-file">
                            @if($errors->has('image'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('image') }}</p>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Quay lại
                        </button>
                    </form>
                </div>
            </div>
        </div>
@endsection
