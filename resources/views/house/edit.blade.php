@extends('house.layout')

@section('content')
    <div class="container">
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
                            <label>Tên nhà</label>
                            <input type="text" name="title" value="{{$house->title}}"
                                   class="form-control"/>
                            @if($errors->has('title'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('title') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Số lượng phòng ngủ</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="bedroom" name="quantityOfBedroom">
                                    <option value="1">1 phòng</option>
                                    <option value="2">2 phòng</option>
                                    <option value="3">3 phòng</option>
                                    <option value="3">4 phòng</option>
                                </select>
                                <script>
                                    var x = document.getElementById("bedroom").children[{{$house->quantityOfBedroom-1}}];
                                    x.setAttribute("selected", "selected");
                                </script>
                            </div>
                            @if($errors->has('quantityOfBedroom'))
                                <p class="help is-danger"
                                   style="color: red;">{{ $errors->first('quantityOfBedroom') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Số lượng phòng tắm</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="bathroom" name="quantityOfBathroom">
                                    <option selected>Chọn số phòng tắm</option>
                                    <option value="1">1 phòng</option>
                                    <option value="2">2 phòng</option>
                                    <option value="3">3 phòng</option>
                                    <option value="3">4 phòng</option>
                                </select>
                                <script>
                                    var y = document.getElementById("bathroom").children[{{$house->quantityOfBathroom}}];
                                    y.setAttribute("selected", "selected");
                                </script>
                            </div>
                            @if($errors->has('quantityOfBathroom'))
                                <p class="help is-danger"
                                   style="color: red;">{{ $errors->first('quantityOfBathroom') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Giá tiền</label>
                            <div class="input-group">
                                <input type="text" name="price" value="{{$house->price}}" class="form-control"
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
                                       value="Đã cho thuê">
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
                            <script>
                                $(document).ready(function() {
                                    $('input:radio[name="status"]').filter('[value="{{$house->status}}"]').prop('checked', true);
                                });
                            </script>
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
                            <label>Ảnh</label><br>

                            @if($house->image)
                                @foreach($house->image as $image)
                                    <img src="{{asset('storage/' . $image)}}" style="height:50px; width:50px">
                                @endforeach
                            @endif
                            <div class="file-loading image-input">
                                <input type="file" name="image[]" class="file image-file" accept="image/*" multiple/>
                            </div>
                            <script>
                                document.querySelector('image-input')
                                    .addEventListener('drop', (ev) => {
                                        ev.preventDefault();
                                        document.querySelector('.image-file').files = ev.dataTransfer.files;
                                    });
                            </script>
                            @if($errors->has('image'))
                                <p class="help is-danger" style="color: red;">{{ $errors->first('image') }}</p>
                            @endif
                        </div>
                        <div style="margin-bottom: 30px">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
