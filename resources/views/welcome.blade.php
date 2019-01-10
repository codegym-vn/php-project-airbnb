<!doctype html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light" style="color: #fcfcfc">
        <a class="td-header-logo td-sticky-disable" href="https://coinvn247.com/">
            <img class="td-retina-data"

                 src="https://coinvn247.com/wp-content/uploads/2019/01/codegym.png" height="100px"
                 width="160px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-outline-success my-2 my-sm-0">Home</a>
                    @else
                        <a href="{{ route('login') }} " class="btn btn-outline-primary my-2 my-sm-0">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-success my-2 my-sm-0">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

    </nav>
</div>
<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"
                     src="https://cdn.luxstay.com/rooms/12043/large/1518430184_Phong_kh%C3%A1ch_(Toan_canh).jpg"
                     alt="First slide" style="height: 800px; width: 300px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://cdn.luxstay.com/rooms/15176/large/1537408618_IMG_7906.jpg"
                     alt="Second slide" style="height: 800px; width: 300px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                     src="https://cdn.luxstay.com/rooms/14436/large/1534908497_image_6483441%20(11).JPG"
                     alt="Third slide" style="height: 800px; width: 300px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container">
    <div>
        <h5 class="text-uppercase font-weight-bold" style="margin-top: 30px; margin-bottom: 30px">Lựa chọn tốt
            nhất </h5>

    </div>


    <div class="row">
        @foreach($houses as $key=>$house)

            <div class="col-md-4">
                <img class="card-img-top" src="https://cdn.luxstay.com/rooms/11930/large/1515401896_DSC_0516.jpg" alt=""
                     style="width: 350px; height: 200px">
                <div class="card-body">
                    <p>{{$house->title}}</p>
                    <p>{{$house->price . ' đ'}}</p>
                </div>
            </div>
        @endforeach

        <div class="row">
            @foreach($houses as $key=>$house)

                <div class="col-md-4">
                    <img class="card-img-top" src="https://cdn.luxstay.com/rooms/11930/large/1515401896_DSC_0516.jpg"
                         alt=""
                         style="width: 350px; height: 200px">
                    <div class="card-body">
                        <p>{{$house->title}}</p>
                        <p>{{$house->price . ' đ'}}</p>
                    </div>
                </div>
            @endforeach
        </div>


        <div>
            <h5 class="text-uppercase font-weight-bold" style="margin-top: 30px; margin-bottom: 30px">Điểm đến hàng đầu  </h5>
        </div>

        <div class="row" style="margin-bottom: 50px">
            @foreach($houses as $key=>$house)

                <div class="col-md-4" style="margin-top: 5px">
                    <img class="card-img-top" src="https://cdn.luxstay.com/rooms/11930/large/1515401896_DSC_0516.jpg"
                         alt=""
                         style="width: 350px; height: 200px">
                </div>

            @endforeach


        </div>

    </div>
</div>


{{--<textarea class="form-control" id="summary-ckeditor"></textarea>--}}


<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('summary-ckeditor');
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous">

</script>

<div>
    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark">

        <div style="background-color: #6351ce;">
            <div class="container">

                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h5 class="mb-0">Theo dõi chúng tôi !</h5>
                    </div>
                    <!-- Grid row-->
                    <div class="d-flex flex-row-reverse" style="margin-top: 5px">
                        <!-- Grid column -->
                        <ul class="footerNavLinks">
                            <a href="#!"><img
                                        src="https://tiendientu.org/wp-content/themes/tdt/assets/images/icon-facebook.png"
                                        alt="Facebook"></a>
                            <a href="#!"><img
                                        src="https://tiendientu.org/wp-content/themes/tdt/assets/images/icon-youtube.png"
                                        alt="Youtube"></a>
                            <a href="#!"><img
                                        src="https://tiendientu.org/wp-content/themes/tdt/assets/images/icon-telegram.png"
                                        alt="Telegram"></a>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Grid column -->
        </div>


        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">


            <!-- Grid row -->
            <div class="row mt-3">

                <div class="section col-md-4">
                    <a class="td-header-logo td-sticky-disable" href="https://coinvn247.com/">
                        <img class="td-retina-data"

                             src="https://coinvn247.com/wp-content/uploads/2019/01/homecodegum.png" height="150px"
                             width="265px" alt="">
                    </a>
                </div>

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Hỗ trợ</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Câu hỏi thường </a>
                    </p>
                    <p>
                        <a href="#!">Chính sách hủy</a>
                    </p>
                    <p>
                        <a href="#!">Hướng dẫn đặt phòng</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Cẩm nang du lịch </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Đà Lạt </a>
                    </p>
                    <p>
                        <a href="#!">Đà Nẵng </a>
                    </p>
                    <p>
                        <a href="#!">SaPa </a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> CodeGym, My Dinh, Ha </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> codegym@gmail.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 08 234 567 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 08 234 567 89</p>

                </div>

                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="#!">Bản quyền thuộc về Team CC </a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</div>

</body>
</html>
