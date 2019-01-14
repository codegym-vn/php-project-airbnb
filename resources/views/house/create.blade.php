@extends('house.layout')

@section('content')
    <div class="container">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12">
                    <h1>Đăng thông tin nhà mới</h1>
                </div>
                <div class="col-12">
                    <form method="post" action="{{route('house.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên nhà</label>
                            <input type="text" name="title" class="form-control"/>
                            @if($errors->has('title'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('title') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Số lượng phòng ngủ</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect02" name="quantityOfBedroom">
                                    <option selected>Chọn số phòng ngủ</option>
                                    <option value="1">1 phòng</option>
                                    <option value="2">2 phòng</option>
                                    <option value="3">3 phòng</option>
                                    <option value="3">4 phòng</option>
                                </select>
                            </div>
                            @if($errors->has('quantityOfBedroom'))
                                <p class="help is-danger"
                                   style="color: red;">{{ $errors->first('quantityOfBedroom') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Số lượng phòng tắm</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect02" name="quantityOfBathroom">
                                    <option selected>Chọn số phòng tắm</option>
                                    <option value="1">1 phòng</option>
                                    <option value="2">2 phòng</option>
                                    <option value="3">3 phòng</option>
                                    <option value="3">4 phòng</option>
                                </select>
                            </div>
                            @if($errors->has('quantityOfBathroom'))
                                <p class="help is-danger"
                                   style="color: red;">{{ $errors->first('quantityOfBathroom') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Giá tiền</label>
                            <div class="input-group">
                                <input type="text" name="price" class="form-control"
                                       aria-label="Dollar amount (with dot and two decimal places)">
                                <div class="input-group-append">
                                    <span class="input-group-text">VND</span>
                                    <span class="input-group-text">1 ngày/đêm</span>
                                </div>
                            </div>
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
                            <label>Ảnh</label>
                            <div class="file-loading">
                                <input type="file" name="images[]" multiple class="file"></div>
                            @if($errors->has('image'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('image') }}</p>
                            @endif
                            {{--<input type="file" name="image1" class="file">--}}
                            {{--@if($errors->has('image1'))--}}
                                {{--<p class="help is-danger" style="color: red;">{{ $errors->first('image1') }}</p>--}}
                            {{--@endif--}}
                            {{--<input type="file" name="image2" class="file">--}}
                            {{--@if($errors->has('image2'))--}}
                                {{--<p class="help is-danger" style="color: red;">{{ $errors->first('image2') }}</p>--}}
                            {{--@endif--}}
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
