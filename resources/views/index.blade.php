<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Nitrix- Multipurpose Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/core-img/favicon.png')}}" type="image/x-icon" />

    <!--  Minified CSS Files -->
    <link rel="stylesheet" href="{{asset(mix('css/app.min.css'))}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset(mix('css/app.css'))}}">

</head>

<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="{{url('/')}}"><span><img src="{{asset('img/core-img/logo.png')}}" alt="logo"></span> Nitrix</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#demo">Choose Demo</a>
                    </li>
                    <li class="lh-55px"><a href="#" class="btn login-btn ml-50">Login!</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Wellcome Area Start ##### -->
    <section class="welcome_area demo-intro" id="home">
        <div class="hero-content transparent">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Welcome Content -->
                    <div class="col-12 col-lg-10 offset-lg-1">
                        <!-- Wellcome Heading Text -->
                        <div class="welcome-text headline text-center">
                            <div class="promo-section mt-30 mb-0">
                                <div class="integration-link">
                                    <div class="integration-icon">
                                        <p class="badge">OFFER</p>
                                    </div>
                                    <span class="integration-text">Free Clean and Creative <span class="bold">App Landing Page</span></span>
                                </div>
                            </div>
                            <div class="cd-intro mt-20 default-title">
                                <h2 class="cd-headline clip is-full-width">
                                    <span class="w-text">Nitrix Template </span>
                                    <span class="cd-words-wrapper">
                                <b class="special-span bold is-visible">App Showcase</b>
                                <b class="special-span bold">App Landing</b>
                                <b class="special-span bold">App Launch</b>
			                    </span>
                                </h2>
                                <p class="desc w-text">Nitrix App Landing page Template <span class="special-span bold">Creative & Unique Design </span> is our New, Creative & Unique Design Clean and Responsive React Next App landing page & Application showcase based on Bootstrap All files are clearly organised we believe it will be easy to use and edit them. This template is well organized and very easy to customize.</p>
                            </div>

                            <!-- Learn More Button-->
                            <div class="info-btn-group">
                                <a href="#" class="btn info-btn mr-3">Choose demo</a>
                                <a href="#" class="btn info-btn">Buy Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Wellcome Area End ##### -->

    <section class="demo section-padding-100-0" id="demo">
        <div class="container">
            <div class="section-heading text-center">

                <div class="sect-icon justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{asset('img/svg/section-icon-1.svg')}}" alt="">
                </div>
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">Choose a demo</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Nitrix will be a perfect platform for presenting your App launch. This Landing Page comes in great and clean designs</p>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="{{url('/index-demo-1')}}" target="_blank"><img src="{{asset('img/demos/demo-1.png')}}" alt="demo" class="img-responsive center-block"></a>
                        <div class="preview-btn-wrapper text-center">
                            <a href="{{url('/index-demo-1')}}" class="preview-demo" target="_blank">View demo one<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="{{url('/index-demo-2')}}" target="_blank"><img src="{{asset('img/demos/demo-2.png')}}" alt="demo" class="img-responsive center-block"></a>
                        <div class="preview-btn-wrapper text-center">
                            <a href="{{url('/index-demo-2')}}" class="preview-demo" target="_blank">View demo two<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="{{url('/index-demo-3')}}" target="_blank"><img src="{{asset('img/demos/demo-3.png')}}" alt="demo" class="img-responsive center-block"></a>
                        <div class="preview-btn-wrapper text-center">
                            <a href="{{url('/index-demo-3')}}" class="preview-demo" target="_blank">View demo three<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="{{url('/index-demo-4')}}" target="_blank"><img src="{{asset('img/demos/demo-4.png')}}" alt="demo" class="img-responsive center-block"></a>
                        <div class="preview-btn-wrapper text-center">
                            <a href="{{url('/index-demo-4')}}" class="preview-demo" target="_blank">View demo four<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="{{url('/about-us')}}" target="_blank"><img src="{{asset('img/demos/demo-5.png')}}" alt="demo" class="img-responsive"></a>
                        <div class="preview-btn-wrapper text-center">
                            <a href="{{url('/about-us')}}" class="preview-demo" target="_blank">about page <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="{{url('/services')}}" target="_blank"><img src="{{asset('img/demos/demo-6.png')}}" alt="demo" class="img-responsive"></a>
                        <div class="preview-btn-wrapper text-center">
                            <a href="{{url('/services')}}" class="preview-demo" target="_blank">services page<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="{{url('/pricing')}}" target="_blank"><img src="{{asset('img/demos/demo-8.png')}}" alt="demo" class="img-responsive"></a>
                        <div class="preview-btn-wrapper text-center">
                            <a href="{{url('/pricing')}}" class="preview-demo" target="_blank">pricing page <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="{{url('/contact-us')}}" target="_blank"><img src="{{asset('img/demos/demo-9.png')}}" alt="demo" class="img-responsive"></a>
                        <div class="preview-btn-wrapper text-center">
                            <a href="{{url('/contact-us')}}" class="preview-demo" target="_blank">contact page <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="clearfix"></div>



    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(img/core-img/pattern.png);">

        <div class="footer-content-area demo">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                                <div class="footer-logo">
                                    <a href="{{url('/')}}"><img src="{{asset('img/core-img/logo.png')}}" alt="logo"> Nitrix. </a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus voluptatibus neque illo id repellat quisquam? Autem expedita earum quae laborum ipsum ad.</p>
                            </div>
                            <!-- Social Icon -->
                            <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                                <h5>PRIVACY & TOS</h5>
                                <a href=""><p>Advertiser Agreement</p></a>
                                <a href=""><p>Acceptable Use Policy</p></a>
                                <a href=""><p>Privacy Policy</p></a>
                                <a href=""><p>Technology Privacy</p></a>
                                <a href=""><p>Developer Agreement</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-2 col-md-6 ">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                <h5>NAVIGATE</h5>
                                <a href=""><p>Advertisers</p></a>
                                <a href=""><p>Developers</p></a>
                                <a href=""><p>Resources</p></a>
                                <a href=""><p>Company</p></a>
                                <a href=""><p>Connect</p></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-lg-3 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5>CONTACT US</h5>
                                <p>Mailing Address:xx00 E. Union Ave</p>
                                <p>Suite 1100. Denver, CO 80237</p>
                                <p>+999 90932 627</p>
                                <p>support@yourdomain.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ########## All JS ########## -->
    <script src="{{asset(mix('js/app.min.js'))}}"></script>
    <script src="{{asset(mix('js/app.js'))}}"></script>
</body>

</html>
