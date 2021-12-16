<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SISTEM KLASIFIKASI MOTIF BATIK</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"> <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{ asset('Assets/font-awesome-4.6.3/css/font-awesome.min.css') }}"> <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}"> <!-- Bootstrap style -->
    <link rel="stylesheet" href="{{ asset('Assets/css/hero-slider-style.css') }}"> <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="{{ asset('Assets/css/magnific-popup.css') }}"> <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->

    <link rel="stylesheet" href="{{ asset('Assets/css/templatemo-style.css') }}"> <!-- Templatemo style -->
    <link rel="stylesheet" href="{{ asset('Assets/css/about.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body>

    <!-- Content -->
    <div class="cd-hero">

        <!-- Navigation -->
        <div class="cd-slider-nav">
            <nav class="navbar">

                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                    &#9776;
                </button>
                <div class="collapse navbar-toggleable-sm text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item active selected">
                            <a class="nav-link" href="#0" data-no="1">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-no="2">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-no="3">About us</a>
                        </li>
                        @if(Auth::user())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout.perform') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout.perform') }}" method="GET" class="d-none">
                            @csrf
                        </form>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-no="4">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-no="5">Register</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
        @if(isset ($errors) && count($errors) > 0)
        <div class="alert alert-warning" role="alert">
            <ul class="list-unstyled mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(Session::get('success', false))
        <?php $data = Session::get('success'); ?>
        @if (is_array($data))
        @foreach ($data as $msg)
        <div class="alert alert-warning" role="alert">
            <i class="fa fa-check"></i>
            {{ $msg }}
        </div>
        @endforeach
        @else
        <div class="alert alert-warning" role="alert">
            <i class="fa fa-check"></i>
            {{ $data }}
        </div>
        @endif
        @endif
        <ul class="cd-hero-slider">
            <!-- autoplay -->
            <li class="selected">
                <div class="cd-full-width">
                    <div class="container-fluid js-tm-page-content tm-page-1" data-page-no="1">

                        <div class="row">

                            <div class="col-xs-12">
                                <i class="fa fa-4x fa-camera tm-icon"></i>
                                <h2 class="tm-site-name">Sistem Klasifikasi Motif Batik</h2>
                                <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-1-col">
                                    <p class="tm-text">Merupakan sistem untuk menghimpun data-data batik nusantara sehingga semua orang dapat melihat keindahan motif-motif batik yang beraneka ragam dari berbagai wilayah Indonesia.</p>
                                    <p class="tm-text"></p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div> <!-- .cd-full-width -->
            </li>
            <!-- Gallery -->
            <li>

                <div class="cd-full-width">

                    <div class="container-fluid js-tm-page-content" data-page-no="2">
                        <div class="col-xs-12">
                            <a href="{{ URL::to('input') }}" class="pull-xs-left tm-submit-btn" style="margin-left: 200px; margin-bottom:30px;">Tambah data</a>
                        </div>
                        <div class="row tm-img-gallery">
                            @foreach($batik as $btk)
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <a href="{{ $btk->gambar }}">
                                    @if($btk->status == "yes")
                                    <img src="{{ asset($btk->gambar) }}" alt="Image" class="img-fluid tm-img">
                                    @else
                                    <img src="{{ asset('storage/'.$btk->gambar) }}" alt="Image" class="img-fluid tm-img">
                                    @endif
                                </a>
                            </div>
                            @endforeach
                        </div>

                    </div>

                </div>

            </li>

            <!-- Page 3 -->
            <li>
                <div class="cd-full-width">
                    <div class="container-fluid js-tm-page-content" data-page-no="3">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img class="aboutimg" src="{{ asset('Assets/img/profile/ronaldo.jpg') }}">
                                        </div>
                                        <h3 class="title">Ronaldo Firmanysah</h3>
                                        <span class="post">Project Manager</span>
                                        <!-- <ul class="social">
                                            <li class="lili"><a href="#" class="fa fa-facebook"></a></li>
                                            <li class="lili"><a href="#" class="fa fa-twitter"></a></li>
                                            <li class="lili"><a href="#" class="fa fa-google-plus"></a></li>
                                            <li class="lili"><a href="#" class="fa fa-linkedin"></a></li>
                                        </ul> -->
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img class="aboutimg" src="{{ asset('Assets/img/profile/dhimas.jpg') }}">
                                        </div>
                                        <h3 class="title"> Dhimas Arbi S. H. </h3>
                                        <span class="post"> Programmer </span>
                                        <!-- <ul class="social">
                                            <li class="lili"><a href="#" class="fa fa-facebook"></a></li>
                                            <li class="lili"><a href="#" class="fa fa-twitter"></a></li>
                                            <li class="lili"><a href="#" class="fa fa-google-plus"></a></li>
                                            <li class="lili"><a href="#" class="fa fa-linkedin"></a></li>
                                        </ul> -->
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img class="aboutimg" src="{{ asset('Assets/img/profile/bima.jpg')}}">
                                        </div>
                                        <h3 class="title">Bima Gilang Lesmana</h3>
                                        <span class="post">Designer</span>
                                        <!-- <ul class="social">
                                            <li class="lili"><a href="#" class="fa fa-facebook"></a></li>
                                            <li class="lili"><a href="#" class="fa fa-twitter"></a></li>
                                            <li class="lili"><a href="#" class="fa fa-google-plus"></a></li>
                                            <li class="lili"><a href="#" class="fa fa-linkedin"></a></li>
                                        </ul> -->
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img class="aboutimg" src="{{ asset('Assets/img/profile/arham.jpeg')}}">
                                        </div>
                                        <h3 class="title">Arham Izza Syany</h3><br>
                                        <span class="post">Analisis & Tester</span>
                                        <!-- <ul class="social">
                                            <li class="lili"><a href="#" class="fa fa-facebook"></a></li>
                                            <li class="lili"><a href="#" class="fa fa-twitter"></a></li>
                                            <li class="lili"><a href="#" class="fa fa-google-plus"></a></li>
                                            <li class="lili"><a href="#" class="fab fa-linkedin"></a></li>
                                        </ul> -->
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> <!-- .cd-full-width -->

            </li>

            <!-- Page 3 -->


            <li>
                <div class="cd-full-width" style="background-image:  url('../Assets/img/bg-01.jpg');">

                    <div class="container-fluid js-tm-page-content" data-page-no="4">

                        <div class="tm-contact-page">

                            <div class="row">

                                <div class="col-xs-12">

                                    <h2 class="tm-section-title">Login</h2>
                                    <p class="tm-text tm-font-w-400 m-b-3">Ayo login dan ikut berpartisipasi dalam input data batik Indonesia agar lebih beragam dan dikenal</p>

                                </div>

                            </div>

                            <!-- contact form -->
                            <div class="row">
                                <form action="{{ route('login.perform') }}" method="post" class="tm-contact-form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <input type="text" id="username" name="username" class="form-control" placeholder="Your Username" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required />
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <button type="submit" class="pull-xs-left tm-submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>

                </div>
            </li>

            <li>
                <div class="cd-full-width">

                    <div class="container-fluid js-tm-page-content" data-page-no="5">

                        <div class="tm-contact-page">

                            <div class="row">

                                <div class="col-xs-12">

                                    <h2 class="tm-section-title">Register</h2>
                                    <p class="tm-text tm-font-w-400 m-b-3">Daftarkan diri anda dan ikut berpartisipasi dalam input data batik Indonesia agar lebih beragam dan dikenal</p>

                                </div>

                            </div>

                            <!-- contact form -->
                            <div class="row">
                                <form action="{{ route('register.perform') }}" method="post" class="tm-contact-form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="username" name="username" class="form-control" placeholder="Your Username" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password" required />
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <button type="submit" class="pull-xs-left tm-submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>

                </div> <!-- .cd-full-width -->
            </li>
        </ul> <!-- .cd-hero-slider -->

        <footer class="tm-footer">

            <!-- <div class="tm-social-icons-container">
                <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                <a href="#" class="tm-social-link"><i class="fa fa-behance"></i></a>
                <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
            </div> -->

            <p class="tm-copyright-text">Copyright &copy; 2021 Sistem Klasifikasi Motif Batik</p>

        </footer>

    </div> <!-- .cd-hero -->


    <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
    <div id="loader-wrapper">

        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <!-- load JS files -->
    <script src="{{ asset('Assets/js/jquery-1.11.3.min.js') }}"></script> <!-- jQuery (https://jquery.com/download/) -->
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js') }}"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
    <script src="{{ asset('Assets/js/bootstrap.min.js') }}"></script> <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
    <script src="{{ asset('Assets/js/hero-slider-main.js') }}"></script> <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
    <script src="{{ asset('Assets/js/jquery.magnific-popup.min.js') }}"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->

    <script>
        function adjustHeightOfPage(pageNo) {

            // Get the page height
            var totalPageHeight = 15 + $('.cd-slider-nav').height() +
                $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 160 +
                $('.tm-footer').height();

            // Adjust layout based on page height and window height
            if (totalPageHeight > $(window).height()) {
                $('.cd-hero-slider').addClass('small-screen');
                $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
            } else {
                $('.cd-hero-slider').removeClass('small-screen');
                $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
            }

        }

        /*
            Everything is loaded including images.
        */
        $(window).load(function() {

            adjustHeightOfPage(1); // Adjust page height

            /* Gallery pop up
            -----------------------------------------*/
            $('.tm-img-gallery').magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            /* Collapse menu after click 
            -----------------------------------------*/
            $('#tmNavbar a').click(function() {
                $('#tmNavbar').collapse('hide');

                adjustHeightOfPage($(this).data("no")); // Adjust page height       
            });

            /* Browser resized 
            -----------------------------------------*/
            $(window).resize(function() {
                var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                adjustHeightOfPage(currentPageNo);
            });

            // Remove preloader
            // https://ihatetomatoes.net/create-custom-preloading-screen/
            $('body').addClass('loaded');

        });
    </script>

</body>

</html>