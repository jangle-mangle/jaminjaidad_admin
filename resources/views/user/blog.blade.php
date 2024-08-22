<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bytesed.com/tf/beyond-hotel/beyond_hotel/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 10:30:52 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> Hotel Booking - Html Template </title>

<link rel=icon href="H2E.png" sizes="16x16" type="icon/png">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/flatpicker.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
  

<style>
        .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: 2rem !important;
        }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 0.7rem !important;
            outline: 0;
        }



        .modal-body-four {
            position: relative;
            flex: 1 1 auto;
            padding: 0rem !important;
        }


        .thousant-tittle {
            font-size: 25px !important;
    line-height: 29px;
    margin: -6px 0 0;
    font-weight: 700;
    font-family: 'Inter', sans-serif;
        }




        .pad-man {
            padding: 23px !important;
        }

        .lamba-pic img {
            width: 68% !important;
            margin-top: 14% !important;
        }

        .modal-large-extra {
    width: 132% !important;
    top: 144px;
    left: -67px;
}
    </style>


</head>
<body>
<header class="header-style-01">



    <nav class="navbar navbar-area navbar-border navbar-padding navbar-expand-lg">
        <div class="container custom-container-one nav-container">
            <div class="logo-wrapper">
                <a href="index.html" class="logo logo-twenty">
                    <img src="{{ asset('assets/img/H2E.png') }}" alt="">
                </a>
            </div>
            <div class="responsive-mobile-menu d-lg-none">
                <a href="javascript:void(0)" class="click-nav-right-icon">
                    <i class="las la-ellipsis-v"></i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#hotel_booking_menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="hotel_booking_menu">
                <ul class="navbar-nav">
                    <li class="menu-item-has-children current-menu-item new-home">
                        <a class="new-index-home" href="{{route('index')}}">Home</a>
                        <!-- <ul class="sub-menu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="02_index.html"> Home Two </a></li>
                                <li><a href="03_index.html"> Home Three </a></li>
                            </ul> -->
                    </li>
                    <!-- <li><a class="new-index-home" href="about.html"> About </a></li> -->
                    <li><a class="new-checkout-2" href="{{route('checkout')}}"> Checkout </a></li>
                    <li class="menu-item-has-children current-menu-item">
                        <!-- <a class="new-index-home-3" href="javascript:void(0)">Pages</a> -->
                        <ul class="sub-menu">
                            <li><a href="listing.html">Listing</a></li>
                            <li><a href="hotel_details.html"> Hotel Details </a></li>
                            <li><a href="confirmation.html"> Confirmation </a></li>
                            <li><a href="dashboard.html"> Dashboard </a></li>
                            <li><a href="dashboard_cancellation.html"> Cancellations </a></li>
                            <li><a href="dashboard_report_issue.html"> Report Issue </a></li>
                            <li><a href="dashboard_support.html"> Support </a></li>
                            <li><a href="dashboard_tickets.html"> Tickets </a></li>
                            <li><a href="dashboard_add_tickets.html"> Add Ticket </a></li>
                            <li><a href="dashboard_profile.html"> Dashboard Profile </a></li>
                            <li><a href="dashboard_edit_profile.html"> Edit Profile </a></li>
                            <li><a href="dashboard_pass_change.html"> Password Change </a></li>
                            <li><a href="error.html"> Error Page </a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children current-menu-item">
                        <a class="new-sub-blog new-index-home-4" href="{{route('blog')}}">Tips & Tricks</a>
                        <!-- <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog_details.html"> Blog Details </a></li>
                            </ul> -->
                    </li>
                    <li><a href="{{route('contact')}}"> Contact Us </a></li>
                </ul>
            </div>
            <div class="navbar-right-content show-nav-content">
                <div class="single-right-content">
                    <div class="navbar-right-flex">
                        <div class="navbar-right-btn btn-wrapper">
                        <a href="javascript:void(0)" class="login-press cmn-btn btn-bg-1 radius-10"
                                    type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfour"> Log In </a>
                        </div>
                        <!-- <div class="btn-wrapper">
                                <a href="signup.html" class="cmn-btn btn-bg-1 radius-10"> Sign Up </a>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>

<!-- <div class="breadcrumb-area breadcrumb-padding">
<div class="container custom-container-one">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-contents">
<h4 class="breadcrumb-contents-title"> Blog Page </h4>
<ul class="breadcrumb-contents-list list-style-none">
<li class="breadcrumb-contents-list-item"> <a href="index.html" class="breadcrumb-contents-list-item-link"> Home </a> </li>
<li class="breadcrumb-contents-list-item"> Blog </li>
</ul>
</div>
</div>
</div>
</div>
</div> -->


<section class="blog-area section-bg-1 pat-100 pab-100">
<div class="container">
<div class="row gy-5">
<div class="col-xxl-4 col-lg-4 col-md-6">
<div class="single-blog">
<div class="single-blog-thumbs">
<a href="blog_details.html"> <img class="lazyloads" src="{{ asset('assets/img/Rectangle 18820.png') }}" alt=""> </a>
<div class="single-blog-thumbs-date">
<a href="javascript:void(0)"> <span class="date"> 18 </span> <span class="month"> Jun </span> </a>
</div>
</div>
<div class="single-blog-contents mt-3">
<div class="single-blog-contents-tags mt-3">
<span class="single-blog-contents-tags-item">
<a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
</span>
<span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 22 Comments </a> </span>
</div>
<h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html">Six Top Noted
Taking Strategies For
College Students</a> </h4>
</div>
</div>
</div>
<div class="col-xxl-4 col-lg-4 col-md-6">
<div class="single-blog">
<div class="single-blog-thumbs">
 <a href="blog_details.html"> <img class="lazyloads" src="{{ asset('assets/img/Rectangle 18820.png') }}" alt=""> </a>
<div class="single-blog-thumbs-date">
<a href="javascript:void(0)"> <span class="date"> 19 </span> <span class="month"> Jun </span> </a>
</div>
</div>
<div class="single-blog-contents mt-3">
<div class="single-blog-contents-tags mt-3">
<span class="single-blog-contents-tags-item">
<a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
</span>
<span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 25 Comments </a> </span>
</div>
<h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html">Six Top Noted
Taking Strategies For
College Students </a> </h4>
</div>
</div>
</div>
<div class="col-xxl-4 col-lg-4 col-md-6">
<div class="single-blog">
<div class="single-blog-thumbs">
<a href="blog_details.html"> <img class="lazyloads" src="{{ asset('assets/img/Rectangle 18820.png') }}" alt=""> </a>
<div class="single-blog-thumbs-date">
<a href="javascript:void(0)"> <span class="date"> 20 </span> <span class="month"> Jun </span> </a>
</div>
</div>
<div class="single-blog-contents mt-3">
<div class="single-blog-contents-tags mt-3">
<span class="single-blog-contents-tags-item">
<a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
</span>
<span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 12 Comments </a> </span>
</div>
<h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html"> Six Top Noted
Taking Strategies For
College Students</a> </h4>
</div>
</div>
</div>
<div class="col-xxl-4 col-lg-4 col-md-6">
<div class="single-blog">
<div class="single-blog-thumbs">
<a href="blog_details.html"> <img class="lazyloads" src="{{ asset('assets/img/Rectangle 18820.png') }}" alt=""> </a>
<div class="single-blog-thumbs-date">
<a href="javascript:void(0)"> <span class="date"> 21 </span> <span class="month"> Jun </span> </a>
</div>
</div>
<div class="single-blog-contents mt-3">
<div class="single-blog-contents-tags mt-3">
<span class="single-blog-contents-tags-item">
<a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
</span>
<span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 22 Comments </a> </span>
</div>
<h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html"> Six Top Noted
Taking Strategies For
College Students </a> </h4>
</div>
</div>
</div>
<div class="col-xxl-4 col-lg-4 col-md-6">
<div class="single-blog">
<div class="single-blog-thumbs">
 <a href="blog_details.html"> <img class="lazyloads" src="{{ asset('assets/img/Rectangle 18820.png') }}" alt=""> </a>
<div class="single-blog-thumbs-date">
<a href="javascript:void(0)"> <span class="date"> 22 </span> <span class="month"> Jun </span> </a>
</div>
</div>
<div class="single-blog-contents mt-3">
<div class="single-blog-contents-tags mt-3">
<span class="single-blog-contents-tags-item">
<a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
</span>
<span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 25 Comments </a> </span>
</div>
<h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html"> Six Top Noted
Taking Strategies For
College Students </a> </h4>
</div>
</div>
</div>
<div class="col-xxl-4 col-lg-4 col-md-6">
<div class="single-blog">
<div class="single-blog-thumbs">
<a href="blog_details.html"> <img class="lazyloads" src="{{ asset('assets/img/Rectangle 18820.png') }}" alt=""> </a>
<div class="single-blog-thumbs-date">
<a href="javascript:void(0)"> <span class="date"> 23 </span> <span class="month"> Jun </span> </a>
</div>
</div>
<div class="single-blog-contents mt-3">
<div class="single-blog-contents-tags mt-3">
<span class="single-blog-contents-tags-item">
<a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
</span>
<span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 12 Comments </a> </span>
</div>
<h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html"> Six Top Noted
Taking Strategies For
College Students</a> </h4>
</div>
</div>
</div>
<!-- <div class="col-xxl-4 col-lg-4 col-md-6">
<div class="single-blog">
<div class="single-blog-thumbs">
<a href="blog_details.html"> <img class="lazyloads" src="assets/img/blog/blog7.jpg" alt=""> </a>
<div class="single-blog-thumbs-date">
<a href="javascript:void(0)"> <span class="date"> 24 </span> <span class="month"> Jun </span> </a>
</div>
</div>
<div class="single-blog-contents mt-3">
<div class="single-blog-contents-tags mt-3">
<span class="single-blog-contents-tags-item">
<a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
</span>
<span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 22 Comments </a> </span>
</div>
<h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html"> Six Top Noted
Taking Strategies For
College Students </a> </h4>
</div>
</div>
</div> -->
<!-- <div class="col-xxl-4 col-lg-4 col-md-6">
<div class="single-blog">
 <div class="single-blog-thumbs">
<a href="blog_details.html"> <img class="lazyloads" src="assets/img/blog/blog2.jpg" alt=""> </a>
<div class="single-blog-thumbs-date">
<a href="javascript:void(0)"> <span class="date"> 25 </span> <span class="month"> Jun </span> </a>
</div>
</div>
<div class="single-blog-contents mt-3">
<div class="single-blog-contents-tags mt-3">
<span class="single-blog-contents-tags-item">
<a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
</span>
<span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 25 Comments </a> </span>
</div>
<h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html"> The quickest way to know a woman is to go shopping with her </a> </h4>
</div>
</div>
</div> -->
<!-- <div class="col-xxl-4 col-lg-4 col-md-6">
<div class="single-blog">
<div class="single-blog-thumbs">
<a href="blog_details.html"> <img class="lazyloads" src="assets/img/blog/blog3.jpg" alt=""> </a>
<div class="single-blog-thumbs-date">
<a href="javascript:void(0)"> <span class="date"> 26 </span> <span class="month"> Jun </span> </a>
</div>
</div>
<div class="single-blog-contents mt-3">
<div class="single-blog-contents-tags mt-3">
<span class="single-blog-contents-tags-item">
<a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
</span>
<span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 12 Comments </a> </span>
</div>
<h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html"> A bottle of water as compensation, well better than nothing. </a> </h4>
</div>
</div>
</div> -->
</div>
<div class="row mt-5">
<div class="col">
<div class="pagination-wrapper">
<ul class="pagination-list list-style-none">
<li class="pagination-list-item-prev">
<a href="javascript:void(0)" class="pagination-list-item-button"> Prev </a>
</li>
<li class="pagination-list-item">
<a href="javascript:void(0)" class="pagination-list-item-link"> 1 </a>
</li>
<li class="pagination-list-item active">
<a href="javascript:void(0)" class="pagination-list-item-link"> 2 </a>
</li>
<li class="pagination-list-item">
<a href="javascript:void(0)" class="pagination-list-item-link"> 3 </a>
</li>
<li class="pagination-list-item">
<a href="javascript:void(0)" class="pagination-list-item-link"> 4 </a>
</li>
<li class="pagination-list-item">
<a href="javascript:void(0)" class="pagination-list-item-link"> 5 </a>
 </li>
<li class="pagination-list-item-next">
<a href="javascript:void(0)" class="pagination-list-item-button"> Next </a>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<footer class="footer-area footer-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-wrapper">
                    <div class="footer-wrapper-flex">
                        <div class="footer-wrapper-single">
                            <div class="footer-widget widget">
                                <div class="footer-widget-contents">
                                    <div class="footer-widget-logo">
                                        <a href="index.html"> <img src="{{ asset('assets/img/H2E.png')}}" alt="logo"> </a>
                                    </div>
                                    <div class="footer-widget-inner mt-4">
                                        <p class="footer-widget-contents-para"> Amet minim mollit non deserunt ullamco
                                            est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit.
                                        </p>
                                        <div class="copyright-contents-items mt-5">
                                            <div class="copyright-contents-single">
                                                <div class="copyright-contents-single-flex">
                                                    <div class="copyright-contents-single-icon">
                                                        <i class="las la-phone"></i>
                                                    </div>
                                                    <div class="copyright-contents-single-details">
                                                        <span class="copyright-contents-single-details-title"> Have a
                                                            question? </span>
                                                        <a href="tel:3104372766"
                                                            class="copyright-contents-single-details-link"> 310-437-2766
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="copyright-contents-single">
                                                <div class="copyright-contents-single-flex">
                                                    <div class="copyright-contents-single-icon">
                                                        <i class="las la-envelope"></i>
                                                    </div>
                                                    <div class="copyright-contents-single-details">
                                                        <span class="copyright-contents-single-details-title"> Have a
                                                            question? </span>
                                                        <a href="https://bytesed.com/cdn-cgi/l/email-protection#35405b4750545975504d54584559501b565a58"
                                                            class="copyright-contents-single-details-link"> <span
                                                                class="__cf_email__"
                                                                data-cfemail="24514a5641454864415c45495448410a474b49">[email&#160;protected]</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-wrapper-single">
                            <div class="footer-widget widget">
                                <h3 class="footer-widget-title text-white"> Discounts, Newsletters </h3>
                                <div class="footer-widget-inner mt-4">
                                    <p class="footer-widget-para"> Get discounts and newsletters on our hotels in your
                                        email. We promise to not spam. Unsubscribe anytime </p>
                                    <div class="footer-widget-form mt-5">
                                        <form action="#">
                                            <div class="footer-widget-form-single">
                                                <input class="footer-widget-form-control" type="text"
                                                    placeholder="Enter Your Email">
                                                <button type="submit"> Submit </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-navbar">
        <div class="container">
            <div class="footer-widget widget">
                <div class="footer-widget-nav">
                    <ul class="footer-widget-nav-list list-style-none">
                        <li class="footer-widget-nav-list-item">
                            <a href="javascript:void(0)" class="footer-widget-nav-list-link"> About </a>
                        </li>
                        <li class="footer-widget-nav-list-item">
                            <a href="javascript:void(0)" class="footer-widget-nav-list-link"> Jobs </a>
                        </li>
                        <li class="footer-widget-nav-list-item">
                            <a href="javascript:void(0)" class="footer-widget-nav-list-link"> Blog </a>
                        </li>
                        <li class="footer-widget-nav-list-item">
                            <a href="javascript:void(0)" class="footer-widget-nav-list-link"> Press </a>
                        </li>
                        <li class="footer-widget-nav-list-item">
                            <a href="javascript:void(0)" class="footer-widget-nav-list-link"> Careers </a>
                        </li>
                        <li class="footer-widget-nav-list-item">
                            <a href="javascript:void(0)" class="footer-widget-nav-list-link"> Terms of use </a>
                        </li>
                        <li class="footer-widget-nav-list-item">
                            <a href="javascript:void(0)" class="footer-widget-nav-list-link"> Privacy Policy </a>
                        </li>
                        <li class="footer-widget-nav-list-item">
                            <a href="javascript:void(0)" class="footer-widget-nav-list-link"> Contact </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area footer-padding copyright-bg-1">
        <div class="container">
            <div class="copyright-contents">
                <div class="copyright-contents-flex">
                    <div class="footer-widget-social">
                        <ul class="footer-widget-social-list list-style-none justify-content-center">
                            <li class="footer-widget-social-list-item">
                                <a class="footer-widget-social-list-link" href="javascript:void(0)"> <i
                                        class="lab la-facebook-f"></i> </a>
                            </li>
                            <li class="footer-widget-social-list-item">
                                <a class="footer-widget-social-list-link" href="javascript:void(0)"> <i
                                        class="lab la-twitter"></i> </a>
                            </li>
                            <li class="footer-widget-social-list-item">
                                <a class="footer-widget-social-list-link" href="javascript:void(0)"> <i
                                        class="lab la-instagram"></i> </a>
                            </li>
                            <li class="footer-widget-social-list-item">
                                <a class="footer-widget-social-list-link" href="javascript:void(0)"> <i
                                        class="lab la-youtube"></i> </a>
                            </li>
                        </ul>
                    </div>
                    <span class="copyright-contents-main"> © 2000-2022, All Rights Reserved by <a href="02_index.html">
                            Home To Exam </a> </span>
                </div>
            </div>
        </div>
    </div>
</footer>


    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
                <div class="modal-body">
                    <div class="popup-seen">
                        <div class="popup-text-left-heading heading-be">
                            <h5 class="destination-h5">Select destination or hotel</h5>
                        </div>

                        <form>
                            <input class="desti-form" type="text" placeholder="search">
                        </form>

                        <span class="hotel-span">Hotels near you</span>


                        <!-- <div class="popup-text">
                                                        <div class="popup-text-left">
                                                            <form action="#">
                                                                <label for="" class="from-label">from</label>
                                                                <br>
                                                                <input class="from-input" type="text" placeholder="Minimum Price"> <br>
                                                            </form>
                                                        </div>
                
                                                        <div class="popup-text-right">
                                                            <form action="#">
                                                                <label for="" class="from-label">To</label>
                                                                <br>
                                                                <input class="from-input" type="text" placeholder="Maximum Price"> <br>
                                                            </form>
                                                        </div>
                
                                                    </div> -->

                        <div class="star-rating">
                            <div class="popup-text-left-heading heading-be desti-text-right">
                                <h5>Recent Search</h5>
                                <span class="clear-span">clear</span>
                            </div>

                            <div class="recent-search-child">
                                <span class="recent-text">Best room in delhi</span>
                                <div class="fa fa-times"></div>
                            </div>

                            <div class="recent-search-child">
                                <span class="recent-text">Best room in UP</span>
                                <div class="fa fa-times"></div>
                            </div>

                            <div class="recent-search-child">
                                <span class="recent-text">Best room in panjab</span>
                                <div class="fa fa-times"></div>
                            </div>
                            <!-- <div class="start-rating-btn">
                                                            <button class="btn btn-default rating-button">1 star</button>
                                                            <button class="btn btn-default rating-button">2 star</button>
                                                            <button class="btn btn-default rating-button">3 star</button>
                                                            <button class="btn btn-default rating-button">4 star</button>
                                                            <button class="btn btn-default rating-button">5 star</button>
                                                        </div> -->
                        </div>

                        <div class="star-rating">
                            <div class="popup-text-left-heading heading-be desti-text-right">
                                <h5>Popular Destination</h5>
                                <!-- <span class="clear-span">clear</span> -->
                            </div>

                            <div class="recent-search-child">
                                <span class="recent-text">Nagaland</span>
                                <!-- <div class="fa fa-times"></div> -->
                            </div>

                            <div class="recent-search-child">
                                <span class="recent-text">mizoram</span>
                                <!-- <div class="fa fa-times"></div> -->
                            </div>

                            <div class="recent-search-child">
                                <span class="recent-text"> panjab</span>
                                <!-- <div class="fa fa-times"></div> -->
                            </div>
                            <!-- <div class="start-rating-btn">
                                                                                                <button class="btn btn-default rating-button">1 star</button>
                                                                                                <button class="btn btn-default rating-button">2 star</button>
                                                                                                <button class="btn btn-default rating-button">3 star</button>
                                                                                                <button class="btn btn-default rating-button">4 star</button>
                                                                                                <button class="btn btn-default rating-button">5 star</button>
                                                                                            </div> -->
                        </div>

                        <!-- <div class="pay-upon">
                
                                                        <div class="popup-text-left-heading heading-be">
                                                            <h5>Pay Upon Check-in available</h5>
                                                        </div>
                                                        <input type="checkbox" id="pay-upon" name="pay-upon" value="upon">
                                                        <label class="new-book" for="requirenent"> Book now and pay later upon
                                                            check-in</label><br>
                                                    </div> -->

                        <!-- <div class="below-button">
                                                        <button class="btn btn-default new-btn">Reset</button>
                                                        <button class="btn btn-default new-btn">Apply</button>
                                                    </div> -->

                        <div class="below-button">
                            <button class="btn btn-default new-btn done-btn done-one-btn"
                                data-bs-dismiss="modal">Done</button>
                            <!-- <button class="btn btn-default new-btn">Apply</button> -->
                        </div>


                        <!-- <div class="pincode-input">
                                                                            <input type="text" id="pincode" name="pincode" placeholder="Zip Code">
                                                                        </div>
                                        
                                                                        <a id="dose" class="pincode_submit" href="#" onclick='add_pin();'>Update
                                                                            Location</a> -->
                    </div>
                </div>
                <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
    </div>


    <!-- student -->
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModaltwo">
    Launch demo modal
</button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModaltwo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
                <div class="modal-body">
                    <div class="popup-seen">
                        <div class="popup-text-left-heading heading-be new-heading-be">
                            <h5>Select room & student</h5>
                        </div>

                        <span class="maxy">Maximum 8 rooms,32 adults, 6 child</span>
                        <div class="room-child">
                            <div class="text-anthr">
                                <h5>Room</h5>
                            </div>
                            <div class="numberone">
                                <span class="minus">-</span>
                                <input class="number-inputtwo" type="text" value="1" />
                                <span class="plus">+</span>
                            </div>
                        </div>

                        <div class="room-child">
                            <div class="room-child-text">
                                <h5>Adult</h5>
                                <span>Minimum 18 years old</span>
                            </div>
                            <div class="numberone numbertwo">
                                <span class="minus">-</span>
                                <input class="number-inputtwo" type="text" value="1" />
                                <span class="plus">+</span>
                            </div>
                        </div>

                        <div class="room-child">
                            <div class="room-child-text">
                                <h5>Child</h5>
                                <span>Minimum 17 years old</span>
                            </div>
                            <div class="numberone numbertwo">
                                <span class="minus">-</span>
                                <input class="number-inputtwo" type="text" value="1" />
                                <span class="plus">+</span>
                            </div>
                        </div>




                        <div class="below-button">
                            <button class="btn btn-default new-btn done-btn" data-bs-dismiss="modal">Done</button>
                            <!-- <button class="btn btn-default new-btn">Apply</button> -->
                        </div>
                        <!-- <div class="pincode-input">
                                                                                <input type="text" id="pincode" name="pincode" placeholder="Zip Code">
                                                                            </div>
                                            
                                                                            <a id="dose" class="pincode_submit" href="#" onclick='add_pin();'>Update
                                                                                Location</a> -->
                    </div>
                </div>
                <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
    </div>



    <!-- filter -->
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalthree">
    Launch demo modal
</button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalthree" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
                <div class="modal-body">
                    <div class="popup-seen">
                        <div class="popup-text-left-heading heading-be">
                            <h5>Price range per room, per night</h5>
                        </div>
                        <div class="popup-text">
                            <div class="popup-text-left">
                                <form action="#">
                                    <label for="" class="from-label">from</label>
                                    <br>
                                    <input class="from-input" type="text" placeholder="Minimum Price"> <br>
                                </form>
                            </div>

                            <div class="popup-text-right">
                                <form action="#">
                                    <label for="" class="from-label">To</label>
                                    <br>
                                    <input class="from-input" type="text" placeholder="Maximum Price"> <br>
                                </form>
                            </div>

                        </div>

                        <div class="star-rating">
                            <div class="popup-text-left-heading heading-be">
                                <h5>Star rating</h5>
                            </div>
                            <div class="start-rating-btn">
                                <button class="btn btn-default rating-button ">1 star</button>
                                <button class="btn btn-default rating-button ">2 star</button>
                                <button class="btn btn-default rating-button ">3 star</button>
                                <button class="btn btn-default rating-button ">4 star</button>
                                <button class="btn btn-default rating-button ">5 star</button>
                            </div>
                        </div>

                        <div class="type-pop">
                            <div class="popup-text-left-heading heading-be">
                                <h5>Accomodation Types</h5>
                            </div>

                            <div class="start-rating-btn">
                                <button class="btn btn-default rating-button rating-button-2">Hotel</button>
                                <button class="btn btn-default rating-button rating-button-2">Dharamsala</button>
                                <button class="btn btn-default rating-button rating-button-2">Pg</button>
                            </div>

                        </div>

                        <div class="pay-upon">

                            <div class="popup-text-left-heading heading-be">
                                <h5>Pay Upon Check-in available</h5>
                            </div>
                            <input type="checkbox" id="pay-upon" name="pay-upon" value="upon">
                            <label class="new-book" for="requirenent"> Book now and pay later upon
                                check-in</label><br>
                        </div>

                        <div class="below-button">
                            <button class="btn btn-default new-btn" data-bs-dismiss="modal">Reset</button>
                            <button class="btn btn-default new-btn" data-bs-dismiss="modal">Apply</button>
                        </div>
                        <!-- <div class="pincode-input">
                                                <input type="text" id="pincode" name="pincode" placeholder="Zip Code">
                                            </div>
            
                                            <a id="dose" class="pincode_submit" href="#" onclick='add_pin();'>Update
                                                Location</a> -->
                    </div>

                </div>
                <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
    </div>

    <!-- log-in -->
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalfour">
    Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalfour" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-large-extra">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
                <div class="modal-body modal-body-four">
                    <!-- <div class="log-see"> -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="login-wrapper-thumb  lamba-pic">
                                <img src="{{ asset('assets/img/H2E.png')}}" alt="img">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="login-wrapper-contents login-padding pad-man">
                                <h2 class="single-title thousant-tittle"> Get Started With your mobile number </h2>
                                <!-- <p class="sigle-para mt-2"> Login to Continue </p> -->
                                <fo rm class="login-wrapper-contents-form custom-form" action="#">
                                    <div class="single-input mt-4">
                                        <!-- <label class="label-title mb-3"> Email Or User Name </label> -->
                                        <input class="form--control" type="text" placeholder="Mobile Number">
                                    </div>
                                    <!-- <div class="single-input mt-4">
                                                                                        <label class="label-title mb-3"> Password </label>
                                                                                        <input class="form--control" type="password" placeholder="Type Password">
                                                                                        <div class="icon toggle-password">
                                                                                        <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                                                                        <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                                                                        </div>
                                                                                        </div> -->
                                    <button class="submit-btn w-100 mt-4 old-button logo-btn" type="button"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalfive">
                                        Continue </button>
                                    </form>
                                    <!-- <span class="account color-light mt-3"> Don't have an account? <a class="color-one" href="signup.html"> SignUp Now </a> </span>
                                                                                        </form>
                                                                                        <div class="single-checkbox mt-3">
                                                                                        <div class="checkbox-inline">
                                                                                        <input class="check-input" type="checkbox" id="check15">
                                                                                        <label class="checkbox-label" for="check15"> Remember Me </label>
                                                                                        </div>
                                                                                        <div class="forgot-password">
                                                                                        <a href="forgot_password.html" class="forgot-btn color-one"> Forgot Password </a>
                                                                                        </div>
                                                                                        </div>
                                                                                        <div class="login-bottom-contents">
                                                                                        <div class="or-contents mb-3">
                                                                                        <span class="or-contents-para"> Or </span>
                                                                                        </div>
                                                                                        <div class="login-others">
                                                                                        <div class="login-others-single">
                                                                                        <a href="javascript:void(0)" class="login-others-single-btn w-100">
                                                                                        <img src="assets/img/single-page/google.png" alt="">
                                                                                        <span class="login-para"> Sign In With Google </span>
                                                                                        </a>
                                                                                        </div>
                                                                                        <div class="login-others-single">
                                                                                        <a href="javascript:void(0)" class="login-others-single-btn w-100">
                                                                                        <img src="assets/img/single-page/facebook.png" alt="">
                                                                                        <span class="login-para"> Sign In With facebook </span> -->
                                    <!-- </a> -->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
    </div>




    <!-- otp -->
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalfive">
    Launch demo modal
</button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalfive" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
                <div class="modal-body">
                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title double-title tripple-title"> Verification code </h2>
                        <label class="new-book old-book" for="requirenent"> We have sent the code
                            Verification to Your Mobile Number
                        </label>
                        <h2 class="number-tittle"> +91 1234 568 986 </h2>
                        <!-- <p class="sigle-para mt-2"> Login to Continue </p> -->
                        <form class="login-wrapper-contents-form custom-form" action="#">
                            <!-- <div class="single-input mt-4"> -->
                            <!-- <label class="label-title mb-3"> Email Or User Name </label> -->
                            <!-- <input class="form--control" type="text" placeholder="Mobile Number">
                                                        </div> -->
                            <!-- <div class="single-input mt-4">
                                                                                <label class="label-title mb-3"> Password </label>
                                                                                <input class="form--control" type="password" placeholder="Type Password">
                                                                                <div class="icon toggle-password">
                                                                                <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                                                                <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                                                                </div>
                                                                                </div> -->
                            <div class="userinput">
                                <input class="otp-input" type="text" maxlength="1">
                                <input class="otp-input" type="text" maxlength="1">
                                <input class="otp-input" type="text" maxlength="1">
                                <input class="otp-input" type="text" maxlength="1">
                            </div>

                            <span class="otp-timer">02:00 sec</span>

                            <button class="submit-btn w-100 mt-4 classic-btn" type="submit"> <a
                            href="{{route('user_register')}}">Continue</a>
                            </button>

                            <!-- <div class="after-otp-btn">
                                                        <a href="registration.html">Continue</a>
                                                        </div> -->
                        </form>
                        <!-- <span class="account color-light mt-3"> Don't have an account? <a class="color-one" href="signup.html"> SignUp Now </a> </span>
                                                                                </form>
                                                                                <div class="single-checkbox mt-3">
                                                                                <div class="checkbox-inline">
                                                                                <input class="check-input" type="checkbox" id="check15">
                                                                                <label class="checkbox-label" for="check15"> Remember Me </label>
                                                                                </div>
                                                                                <div class="forgot-password">
                                                                                <a href="forgot_password.html" class="forgot-btn color-one"> Forgot Password </a>
                                                                                </div>
                                                                                </div>
                                                                                <div class="login-bottom-contents">
                                                                                <div class="or-contents mb-3">
                                                                                <span class="or-contents-para"> Or </span>
                                                                                </div>
                                                                                <div class="login-others">
                                                                                <div class="login-others-single">
                                                                                <a href="javascript:void(0)" class="login-others-single-btn w-100">
                                                                                <img src="assets/img/single-page/google.png" alt="">
                                                                                <span class="login-para"> Sign In With Google </span>
                                                                                </a>
                                                                                </div>
                                                                                <div class="login-others-single">
                                                                                <a href="javascript:void(0)" class="login-others-single-btn w-100">
                                                                                <img src="assets/img/single-page/facebook.png" alt="">
                                                                                <span class="login-para"> Sign In With facebook </span> -->
                        <!-- </a> -->
                    </div>
                </div>
                <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
    </div>



    <!-- date -->
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalsix">
    Launch demo modalshchkcsh
</button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalsix" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
                <div class="modal-body throug-body">
                    <table class="table-mar" border="0" cellpadding="10">

                        <tr>
                            <th class="december-heading" colspan="7">
                                Select check-in date
                            </th>
                        </tr>
                        <tr>
                            <th class="december" bgcolor="#E34400" colspan="7">NOVEMBER 2022</th>
                        </tr>

                        <tr class="days">
                            <th>MON</th>
                            <th>TUE</th>
                            <th>WED</th>
                            <th>THU</th>
                            <th>FRI</th>
                            <th>SAT</th>
                            <th>SUN</th>
                        </tr>

                        <tr class="number-cal" align="center">
                            <td></td>
                            <td class="number-tab type=" button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalseven"">1</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">2</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">3</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">4</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">5</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">6</td>
                    </tr>
                
                    <tr class=" number-cal" align="center">
                            <td class="number-tab type=" button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalseven"">7</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">8</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">9</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">10</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">11</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">12</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">13</td>
                    </tr>
                
                    <tr class=" number-cal" align="center">
                            <td class="number-tab type=" button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalseven"">14</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">15</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">16</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">17</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">18</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">19</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">20</td>
                    </tr>
                
                    <tr class=" number-cal" align="center">
                            <td class="number-tab type=" button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalseven"">21</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">22</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">23</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">24</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">25</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">26</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">27</td>
                    </tr>
                
                    <tr class=" number-cal" align="center">
                            <td class="number-tab type=" button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalseven"">28</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">29</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">30</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalseven"">31</td>
                        <td colspan=" 3"></td>
                        </tr>

                    </table>
                </div>
                <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
    </div>



    <!-- time -->
    <!-- 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalseven">
    Launch demo modalshchkcshtime
</button> -->

    <div class="modal fade" id="exampleModalseven" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
                <div class="modal-body time-dy">
                    <div class="popup-seen">
                        <div class="zero">
                            <span>
                                Check-in time
                            </span>
                        </div>
                        <select name="" id="" class="clock-select">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="1">5</option>
                            <option value="1">6</option>
                            <option value="1">7</option>
                            <option value="1">8</option>
                            <option value="1">9</option>
                            <option value="1">10</option>
                            <option value="1">11</option>
                            <option value="1">12</option>
                        </select>


                        <select name="" id="" class="clock-select">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="1">5</option>
                            <option value="1">6</option>
                            <option value="1">7</option>
                            <option value="1">8</option>
                            <option value="1">9</option>
                            <option value="1">10</option>
                            <option value="1">11</option>
                            <option value="1">12</option>
                        </select>


                        <select name="" id="" class="clock-select">
                            <option value="1">AM</option>
                            <option value="1">PM</option>
                        </select>

                        <div class="below-button">
                            <button class="btn btn-default new-btn done-btn gute-cop" type="button"
                                data-bs-toggle="modal" data-bs-target="#exampleModaleight">Next</button>
                            <!-- <button class="btn btn-default new-btn">Apply</button> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
    </div>


    <!-- checkout -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModaleight">
    Launch demo modalshchkcsout
</button> -->

    <div class="modal fade" id="exampleModaleight" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
                <div class="modal-body throug-body">
                    <table border="0" cellpadding="10" width="100%">

                        <tr>
                            <th class="december-heading" colspan="7">
                                Select check-out date
                            </th>
                        </tr>
                        <tr>
                            <th class="december" bgcolor="#E34400" colspan="7">NOVEMBER 2022</th>
                        </tr>

                        <tr class="days">
                            <th>MON</th>
                            <th>TUE</th>
                            <th>WED</th>
                            <th>THU</th>
                            <th>FRI</th>
                            <th>SAT</th>
                            <th>SUN</th>
                        </tr>

                        <tr class="number-cal" align="center">
                            <td></td>
                            <td class=" number-tab-three type=" button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">1</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">2</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">3</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">4</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">5</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">6</td>
                    </tr>
                
                    <tr class=" number-cal" align="center">
                            <td class="number-tab-three type=" button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">7</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">8</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">9</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">10</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">11</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">12</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">13</td>
                    </tr>
                
                    <tr class=" number-cal" align="center">
                            <td class="number-tab-three type=" button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">14</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">15</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">16</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">17</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">18</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">19</td>
                        <td class=" number-tab-three type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">20</td>
                    </tr>
                
                    <tr class=" number-cal" align="center">
                            <td class="number-tab type=" button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">21</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnine"">22</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnine"">23</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnine"">24</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnine"">25</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnine"">26</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnine"">27</td>
                    </tr>
                
                    <tr class=" number-cal" align="center">
                            <td class="number-tab type=" button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalnine"">28</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnine"">29</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnine"">30</td>
                        <td class=" number-tab type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnine"">31</td>
                        <td colspan=" 3"></td>
                        </tr>

                    </table>
                </div>
                <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
    </div>





    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalnine">
    Launch demo modalshchkcshnine
</button> -->

    <div class="modal fade" id="exampleModalnine" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
                <div class="modal-body time-dy">
                    <div class="popup-seen">
                        <div class="zero">
                            <span>
                                Check-out time
                            </span>
                        </div>
                        <select name="" id="" class="clock-select">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="1">5</option>
                            <option value="1">6</option>
                            <option value="1">7</option>
                            <option value="1">8</option>
                            <option value="1">9</option>
                            <option value="1">10</option>
                            <option value="1">11</option>
                            <option value="1">12</option>
                        </select>


                        <select name="" id="" class="clock-select">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="1">5</option>
                            <option value="1">6</option>
                            <option value="1">7</option>
                            <option value="1">8</option>
                            <option value="1">9</option>
                            <option value="1">10</option>
                            <option value="1">11</option>
                            <option value="1">12</option>
                        </select>


                        <select name="" id="" class="clock-select">
                            <option value="1">AM</option>
                            <option value="1">PM</option>
                        </select>

                        <div class="below-button">
                            <button class="btn btn-default new-btn done-btn gute-cop" type="button"
                                data-bs-toggle="modal" data-bs-target="#">Next</button>
                            <!-- <button class="btn btn-default new-btn">Apply</button> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
    </div>

<div class="back-to-top">
<span class="back-top"> <i class="las la-angle-up"></i> </span>
</div>


<div class="mouse-move mouse-outer"></div>
<div class="mouse-move mouse-inner"></div>


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/wow.js') }}"></script>

<script src="{{ asset('assets/js/slick.js') }}"></script>

<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>

<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

<script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>

<script src="{{ asset('assets/js/flatpicker.js') }}"></script>

<script src="{{ asset('assets/js/nouislider-8.5.1.min.js') }}"></script>

<script src="{{ asset('assets/js/intlTelInput.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

<!-- Mirrored from bytesed.com/tf/beyond-hotel/beyond_hotel/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 10:30:54 GMT -->
</html>