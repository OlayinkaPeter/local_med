@extends('layouts.app')

@section('title', 'Home')

@section('page_styles')
    <style type="text/css">
        #banner {
            background: url({{ asset('img/1_1.jpg') }}) no-repeat top left;
            background-size: auto auto;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            height: 450px;
        }

        .expand {
            /*margin: -5px -10px;*/
            margin: auto -10px;
        }
    </style>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css'/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet" type="text/css" media="all"/>

    <link href="{{ asset('css/flickity/flickity.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/flickity/flickity.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="row">
    {{--<div id="banner" class="jumbotron expand" style="color: #fff;">--}}
    {{--<div class="container" style="display: table; height: 100%;">--}}
    {{--<div class="text-center" style="display: table-cell; vertical-align: bottom;">--}}
    {{--<div class="clearfix"></div>--}}
    {{--<br>--}}
    {{--<h2 class="text-white text-uppercase" style="letter-spacing: 5px;">Health Is The Only Wealth We--}}
    {{--Know</h2>--}}
    {{--<p class="text-white text-uppercase" style="letter-spacing: 5px;">Dr. Awoleke J. O.</p>--}}
    {{--<a class="btn btn-primary" href="javascript:;">Health Tips</a>--}}
    {{--<div class="clearfix"></div>--}}
    {{--<br>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


    <!-- Flickity HTML init -->
        <div class="flickity-carousel gallery js-flickity codecamp-gallery" data-flickity-options='{ "wrapAround": true,
            "autoPlay": true, "pageDots": false, "setGallerySize": false }'>
            <!-- images from unsplash.com -->
            <div class="gallery-cell">
                <img src="{{ asset('img/1_1.jpg') }}" class="lazyload" alt="look-out"/>
            </div>
            <div class="gallery-cell">
                <img src="{{ asset('img/g.jpg') }}" class="lazyload" alt="submerged"/>
            </div>
            <div class="gallery-cell">
                <img src="{{ asset('img/j.jpg') }}" class="lazyload" alt="submerged"/>
            </div>
            <div class="gallery-cell">
                <img src="{{ asset('img/h.jpg') }}" class="lazyload" alt="submerged"/>
            </div>
        </div>
    </div>



    <div class="row" id="about-us">
        <div class="bg-white mb0 expand">
            <div class="clearfix"></div>
            <br>
            <div class="container">
                <h3 class="h2 text-center text-uppercase">About us</h3>
                <div class="text-center">
                    <div class="col-sm-4 col-xs-12">
                        <h1><span class="fa fa-medkit" aria-hidden="true"></span></h1>
                        <h4>Healthline</h4>
                        <p>Our Intensive Care Unit also known as the Critical Care Unit is a special department of the
                            hospital
                            where we can provide around the clock continuous monitoring of our more seriously ill
                            patients.</p>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <h1><span class="fa fa-user-md" aria-hidden="true"></span></h1>
                        <h4>Hospitality</h4>
                        <p>Our Intensive Care Unit also known as the Critical Care Unit is a special department of the
                            hospital
                            where we can provide around the clock continuous monitoring of our more seriously ill
                            patients.</p>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <h1><span class="fa fa-ambulance" aria-hidden="true"></span></h1>
                        <h4>Humaneness</h4>
                        <p>Our Intensive Care Unit also known as the Critical Care Unit is a special department of the
                            hospital
                            where we can provide around the clock continuous monitoring of our more seriously ill
                            patients.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <br>
        </div>
    </div>

    <div class="row" id="services">
        <div class="bg-info mb0 expand">
            <div class="clearfix"></div>
            <br>
            <div class="container">
                <h3 class="h3-w3l">services</h3>
                <div class="services-head text-center">
                    <h4>the skill to heal. the spirit to care</h4>
                    <p>Our Intensive Care Unit also known as the Critical Care Unit is a special department of the hospital
                        where we can provide around the clock continuous monitoring of our more seriously ill patients.</p>
                </div>
            </div>
            <div class="wthree-services-bottom">
                <div class="container">
                    <div class="col-md-3 col-sm-3 col-xs-6 wthree-sb1 ">
                        <span class="fa fa-plus-circle sicon" aria-hidden="true"></span>
                        <span class="num">01</span><h4>Internal Medicine</h4>
                        <p>We provide the most essential health values with the best of Internal Medication</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 wthree-sb1  sb1">
                        <span class="fa fa-star-o sicon" aria-hidden="true"></span>
                        <span class="num">02</span><h4>Obstetrics & Gynaecology</h4>
                        <p>We provide the most essential health values with the best of Obstetrics & Gynaecology.</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 wthree-sb1 sb2">
                        <span class="fa fa-certificate sicon" aria-hidden="true"></span>
                        <span class="num">03</span><h4>Paediatrics</h4>
                        <p>We provide the most essential health values with the best of Paediatrics.</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 wthree-sb1">
                        <span class="fa fa-heartbeat sicon" aria-hidden="true"></span>
                        <span class="num">04</span><h4>Cardiac Center</h4>
                        <p>We provide the most essential health values with the best of Cardian Health Care.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="clearfix"></div>
            <br>
        </div>
    </div>




    <div class="team w3ls-section" id="team">
        <div class="container">
            <div class="w3-agileits-team-title">
                <h3 class="h3-w3l">our amazing team of doctors</h3>
                <div id="horizontalTab">
                    <div class="resp-tabs-container">
                        <ul class="col-md-6 col-sm-6 resp-tabs-list">
                            <li>
                                <img src="{{ asset('img/m1.jpg') }}" alt=" " class="img-responsive"/>
                            </li>
                            <li>
                                <img src="{{ asset('img/m2.jpg') }}" alt=" " class="img-responsive"/>
                            </li>
                        </ul>
                        <div class="tab1">
                            <div class="col-md-6 col-sm-6 team-Info-agileits">
                                <h4>Dr. Awoleke </h4>
                                <p>I give my best to ensure optimum patient medical care and
                                    stability.</p>

                            </div>
                            <div class="col-md-6 col-sm-6 team-img-w3-agile"></div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="tab2">
                            <div class="col-md-6 col-sm-6 team-Info-agileits">
                                <h4>Dr. Ibukun</h4>
                                <p>Service to mankind in the aspect of health is the most fulfiling duty I know.</p>

                            </div>
                            <div class="col-md-6 col-sm-6 team-img-w3-agile"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_scripts')
    {{--<script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>--}}
    {{--<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>--}}

    {{--<script src="{{ asset('js/jarallax.js') }}"></script>--}}
    {{--<script src="{{ asset('js/SmoothScroll.min.js') }}"></script>--}}
    {{--<script type="text/javascript">--}}
    {{--/* init Jarallax */--}}
    {{--$('.jarallax').jarallax({--}}
    {{--speed: 0.5,--}}
    {{--imgWidth: 1366,--}}
    {{--imgHeight: 768--}}
    {{--})--}}
    {{--</script>--}}
    {{--<!-- here starts scrolling icon -->--}}
    {{--<!-- start-smoth-scrolling -->--}}
    {{--<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>--}}
    {{--<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>--}}
    {{--<script type="text/javascript">--}}
    {{--jQuery(document).ready(function ($) {--}}
    {{--$(".scroll").click(function (event) {--}}
    {{--event.preventDefault();--}}
    {{--$('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);--}}
    {{--});--}}
    {{--});--}}
    {{--</script>--}}
    {{--<!-- /ends-smoth-scrolling -->--}}
    {{--<!-- //here ends scrolling icon -->--}}
    {{--<!--start-date-piker-->--}}
    {{--<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}"/>--}}
    {{--<script src="{{ asset('js/jquery-ui.js') }}"></script>--}}
    {{--<script>--}}
    {{--$(function () {--}}
    {{--$("#datepicker,#datepicker1").datepicker();--}}
    {{--});--}}
    {{--</script>--}}
    <!-- //End-date-piker -->
    <!-- here starts scrolling icon -->
    {{--<script type="text/javascript">--}}
    {{--$(document).ready(function () {--}}
    {{--/*--}}
    {{--var defaults = {--}}
    {{--containerID: 'toTop', // fading element id--}}
    {{--containerHoverID: 'toTopHover', // fading element hover id--}}
    {{--scrollSpeed: 1200,--}}
    {{--easingType: 'linear'--}}
    {{--};--}}
    {{--*/--}}

    {{--$().UItoTop({easingType: 'easeOutQuart'});--}}

    {{--});--}}
    {{--</script>--}}
    <!--tabs-->
    <script src="{{ asset('js/easy-responsive-tabs.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true,   // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>

    <script src="{{ asset('js/flickity/flickity.pkgd.min.js') }}"></script>

@endsection