<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bytesed.com/tf/beyond-hotel/beyond_hotel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 10:29:35 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Home To Exam </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
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
                            <a class="new-index-home" href="#">Home</a>
                            <!-- <ul class="sub-menu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="02_index.html"> Home Two </a></li>
                                <li><a href="03_index.html"> Home Three </a></li>
                            </ul> -->
                        </li>
                        <li><a class="new-index-home" href="{{route('about')}}"> About </a></li>
                        <!-- <li><a class="new-checkout-2" href="checkout.html"> Checkout </a></li> -->
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
                        <li><a href="{{route('contact')}}"> Contact Us</a></li>
                    </ul>
                </div>
                <div class="navbar-right-content show-nav-content">
                    <div class="single-right-content">
                        <div class="navbar-right-flex top-fless">
                            <div class="af-log">
                                <!-- <div class="af-one">
                                <div class="af-log-im">
                                    <img src="assets/img/images (1).jpg" alt="">
                                </div>
                                </div> -->
                                <!-- <div class="af-two">
                                    <div class="af-nam">
                                        <h2 class="btn btn-default kab-ba">Tapan Nayak</h2>
                                    </div>

                                    <div class="af-spn">
                                        <h2>Online</h2>
                                    </div>
                                </div> -->
                            </div>
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

    <div class="sidebar">
        <a class="active" href="#home">Home</a>
        <a href="#news">profile</a>
        <a href="#contact">orders</a>
    </div>

    <div class="banner-area banner-area-one">
        <div class="container-fluid p-0">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6">
                    <div class="banner-single banner-single-one percent-padding">
                        <div class="banner-single-content nanner-single">
                            <h2 class="banner-single-content-title fw-700"> Food, Accommodation & Transport
                            </h2>

                            <!-- popup -->

                            <!-- login-popup -->


                            <!-- otp-popup -->


                            <!-- destination-popup -->






                            <!-- calender-popup -->
                            <div class="calender-popup">
                                <div id="calendar">
                                    <div id="calendar_header">
                                        <i class="icon-chevron-left"></i>
                                        <h1></h1>
                                        <i class="icon-chevron-right"></i>
                                    </div>
                                    <div id="calendar_weekdays"></div>
                                    <div id="calendar_content"></div>
                                </div>
                            </div>

                            <!-- date-popup -->
                            <!-- <div class="date-popup">
                                <table border="0" cellpadding="10">

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
                                        <td class="number-tab">1</td>
                                        <td class="number-tab">2</td>
                                        <td class="number-tab">3</td>
                                        <td class="number-tab">4</td>
                                        <td class="number-tab">5</td>
                                        <td class="number-tab">6</td>
                                    </tr>

                                    <tr class="number-cal" align="center">
                                        <td class="number-tab">7</td>
                                        <td class="number-tab">8</td>
                                        <td class="number-tab">9</td>
                                        <td class="number-tab">10</td>
                                        <td class="number-tab">11</td>
                                        <td class="number-tab">12</td>
                                        <td class="number-tab">13</td>
                                    </tr>

                                    <tr class="number-cal" align="center">
                                        <td class="number-tab">14</td>
                                        <td class="number-tab">15</td>
                                        <td class="number-tab">16</td>
                                        <td class="number-tab">17</td>
                                        <td class="number-tab">18</td>
                                        <td class="number-tab">19</td>
                                        <td class="number-tab">20</td>
                                    </tr>

                                    <tr class="number-cal" align="center">
                                        <td class="number-tab">21</td>
                                        <td class="number-tab">22</td>
                                        <td class="number-tab">23</td>
                                        <td class="number-tab">24</td>
                                        <td class="number-tab">25</td>
                                        <td class="number-tab">26</td>
                                        <td class="number-tab">27</td>
                                    </tr>

                                    <tr class="number-cal" align="center">
                                        <td class="number-tab">28</td>
                                        <td class="number-tab">29</td>
                                        <td class="number-tab">30</td>
                                        <td class="number-tab">31</td>
                                        <td colspan="3"></td>
                                    </tr>

                                </table>
                            </div> -->

                            <!-- clock-popu -->
                            <!-- <div class="clo-width">
                                <div class="clock-popup">
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
                                        <button class="btn btn-default new-btn done-btn gute-cop">Next</button>
                                         <button class="btn btn-default new-btn">Apply</button> -->
                            <!-- </div>
                            
                            
                                </div>
                            </div> -->



                            <!-- check-popup -->

                            <!-- <div class="check-popup">
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
                                        <td class=" number-tab-three">1</td>
                                        <td class="number-tab-three ">2</td>
                                        <td class="number-tab-three">3</td>
                                        <td class="number-tab-three ">4</td>
                                        <td class="number-tab-three">5</td>
                                        <td class="number-tab-three ">6</td>
                                    </tr>

                                    <tr class="number-cal" align="center">
                                        <td class="number-tab-three ">7</td>
                                        <td class="number-tab-three">8</td>
                                        <td class="number-tab-three ">9</td>
                                        <td class="number-tab-three ">10</td>
                                        <td class="number-tab-three ">11</td>
                                        <td class="number-tab-three">12</td>
                                        <td class="number-tab-three ">13</td>
                                    </tr>

                                    <tr class="number-cal" align="center">
                                        <td class="number-tab-three ">14</td>
                                        <td class="number-tab-three">15</td>
                                        <td class="number-tab-three">16</td>
                                        <td class="number-tab-three ">17</td>
                                        <td class="number-tab-three">18</td>
                                        <td class="number-tab-three ">19</td>
                                        <td class="number-tab-three">20</td>
                                    </tr>

                                    <tr class="number-cal" align="center">
                                        <td class="number-tab ">21</td>
                                        <td class="number-tab ">22</td>
                                        <td class="number-tab ">23</td>
                                        <td class="number-tab ">24</td>
                                        <td class="number-tab ">25</td>
                                        <td class="number-tab ">26</td>
                                        <td class="number-tab ">27</td>
                                    </tr>

                                    <tr class="number-cal" align="center">
                                        <td class="number-tab ">28</td>
                                        <td class="number-tab ">29</td>
                                        <td class="number-tab ">30</td>
                                        <td class="number-tab ">31</td>
                                        <td colspan="3"></td>
                                    </tr>

                                </table>
                            </div> -->
                            <!-- <div class="calender-popup-checkout">
                                <div id="calendar">
                                    <div id="calendar_header">
                                        <i class="icon-chevron-left"></i>
                                        <h1></h1>
                                        <i class="icon-chevron-right"></i>
                                    </div>
                                    <div id="calendar_weekdays"></div>
                                    <div id="calendar_content"></div>
                                </div>
                            </div> -->

                            <!-- room and student -->


                            <div class="btn-wrapper btn-dspl-non">
                                <a href="contact.html" class="cmn-btn btn-bg-1 radius-10 contact-btn contact-bttn">
                                    Contact Us
                                    Today</a>
                            </div>
                            <div class="banner-location banner-location-one bg-white radius-5 mt-5 ut-5">
                                <div class="banner-location-flex">
                                    <div class="banner-location-single">
                                        <div class="banner-location-single-flex">
                                            <div class="banner-location-single-icon">
                                                <i class="las la-map-marker-alt"></i>
                                            </div>
                                            <div class="banner-location-single-contents">
                                                <span class="banner-location-single-contents-subtitle">Accomodation
                                                </span>
                                                <!-- <div class="banner-location-single-contents-dropdown">
                                                    <select class="js-select select-style-two" name="state">
                                                        <option value="1">shyamnagar, Raipur</option>
                                                        <option value="2">Telibandha, Raipur</option>
                                                        <option value="3">South delhi, Delhi</option>
                                                        <option value="4">Indore, Mp</option>
                                                    </select>
                                                </div> -->

                                                <button class="btn btn-default  his-button" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Select Your
                                                    Destination</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-location-single">
                                        <div class="banner-location-single-flex">
                                            <div class="banner-location-single-icon">
                                                <i class="las la-calendar"></i>
                                            </div>
                                            <div class="banner-location-single-contents">
                                                <span class="banner-location-single-contents-subtitle"> Check-In-date
                                                </span>

                                                <button class="btn btn-default no-button" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModalsix">Select
                                                    Check-in date</button>
                                                <!-- <div class="banner-location-single-contents-dropdown custom-select">
                                                    <select class="js-select select-style-two" name="state">
                                                        <option value="1">20 Jun 2022</option>
                                                        <option value="2">21 Jun 2022</option>
                                                        <option value="3">22 Jun 2022</option>
                                                        <option value="4">23 Jun 2022</option>
                                                    </select>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-location-single">
                                        <div class="banner-location-single-flex">
                                            <div class="banner-location-single-icon">
                                                <i class="las la-history"></i>
                                            </div>
                                            <div class="banner-location-single-contents">
                                                <span class="banner-location-single-contents-subtitle"> Duration
                                                </span>
                                                <button class="btn btn-default shr-button">1 Day & 1 Night</button>

                                                <!-- <div class="banner-location-single-contents-dropdown custom-select">
                                                    <select class="js-select select-style-two" name="state">
                                                        <option value="1">1 Night</option>
                                                        <option value="2">2 Night</option>
                                                        <option value="3">3 Night</option>
                                                        <option value="4">4 Night</option>
                                                    </select>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-location-single">
                                        <div class="banner-location-single-flex">
                                            <div class="banner-location-single-icon">
                                                <i class="las la-user-graduate"></i>

                                            </div>
                                            <div class="banner-location-single-contents">
                                                <span class="banner-location-single-contents-subtitle"> Room & Student
                                                </span>
                                                <!-- <div class="banner-location-single-contents-dropdown custom-select">
                                                    <select class="js-select select-style-two" name="state">
                                                        <option value="1">1 Room,1 Adult</option>
                                                        <option value="2">2 Room,2 Adult</option>
                                                        <option value="3">3 Room,3 Adult</option>
                                                        <option value="4">4 Room,4 Adult</option>
                                                    </select>
                                                </div> -->

                                                <button class="btn btn-default  her-button" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModaltwo">1 room & 1
                                                    adult</button>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="banner-location-single">
                                        <div class="banner-location-single-flex">
                                            <div class="banner-location-single-icon">
                                                <i class="las la-filter"></i>
                                            </div>
                                            <div class="banner-location-single-contents">
                                                <span class="banner-location-single-contents-subtitle"> Filter </span>
                                                <!-- <div class="banner-location-single-contents-dropdown custom-select">
                                                    <select class="js-select select-style-two" name="state">
                                                        <option value="1">Filter Your Search</option>
                                                        <option value="2">3 Children</option>
                                                        <option value="3">4 Children</option>
                                                        <option value="4">5 Children</option>
                                                        <button>Filter Your Search</button>
                                                    </select>
                                                </div> -->
                                                <button class="btn btn-default my-button" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModalthree">Filter
                                                    Your Search</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-location-single-search">
                                        <div class="search-suggestions-wrapper">
                                            <a href="hotels-type.html">
                                                <div class="search-click-icon">
                                                    <i class="las la-search"></i>
                                                </div>
                                            </a>

                                            <div class="search-show">
                                                <div class="search-show-inner">
                                                    <form action="#">
                                                        <!-- <div class="search-show-form">
                                                            <input autocomplete="off" class="form--control"
                                                                id="search_form_input" type="text"
                                                                placeholder="Search here....">
                                                            <button type="submit"> <i class="las la-search"></i>
                                                            </button>
                                                            <span class="suggestions-icon-close"> <i
                                                                    class="las la-times"></i> </span>
                                                        </div> -->
                                                        <div class="search-product" id="search_suggestions_wrap">
                                                            <div class="search-product-inner">
                                                                <h6 class="search-product-title">Product Suggestions
                                                                </h6>
                                                                <ul class="search-product-list mt-4">
                                                                    <li class="search-product-list-item">
                                                                        <a href="javascript:void(0)"
                                                                            class="search-product-list-link">
                                                                            <div class="search-product-list-image"><img
                                                                                    src="{{ asset('assets/img/search_suggestion/s1.jpg')}}"
                                                                                    alt="img"></div>
                                                                            <div class="search-product-list-info">
                                                                                <div
                                                                                    class="search-product-list-info-top">
                                                                                    <h6
                                                                                        class="earch-product-list-info-title">
                                                                                        Apple Original Air pod
                                                                                        Collection for most popular and
                                                                                        best price item in market </h6>
                                                                                </div>
                                                                                <div
                                                                                    class="search-product-list-info-price mt-2">
                                                                                    <div
                                                                                        class="search-product-list-info-price-through">
                                                                                        <span class="flash-price">
                                                                                            $330.00 </span>
                                                                                        <span class="old-price"> $300.00
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="search-product-list-item">
                                                                        <a href="javascript:void(0)"
                                                                            class="search-product-list-link">
                                                                            <div class="search-product-list-image"><img
                                                                                    src="{{ asset('assets/img/search_suggestion/s2.jpg')}}"
                                                                                    alt="img"></div>
                                                                            <div class="search-product-list-info">
                                                                                <div
                                                                                    class="search-product-list-info-top">
                                                                                    <h6
                                                                                        class="earch-product-list-info-title">
                                                                                        Apple Original Airpod Collection
                                                                                    </h6>
                                                                                </div>
                                                                                <div
                                                                                    class="search-product-list-info-price mt-2">
                                                                                    <span
                                                                                        class="main-price fw-500 color-light">$269.00</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="search-product-list-item">
                                                                        <a href="javascript:void(0)"
                                                                            class="search-product-list-link">
                                                                            <div class="search-product-list-image"><img
                                                                                    src="{{ asset('assets/img/search_suggestion/s3.jpg')}}"
                                                                                    alt="img"></div>
                                                                            <div class="search-product-list-info">
                                                                                <div
                                                                                    class="search-product-list-info-top">
                                                                                    <h6
                                                                                        class="earch-product-list-info-title">
                                                                                        Apple Original Airpod Collection
                                                                                    </h6>
                                                                                </div>
                                                                                <div
                                                                                    class="search-product-list-info-price mt-2">
                                                                                    <span
                                                                                        class="main-price fw-500 color-light">$499.00</span>
                                                                                    <span class="stock-out"> Stock Out
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="search-product-list-item">
                                                                        <a href="javascript:void(0)"
                                                                            class="search-product-list-link">
                                                                            <div class="search-product-list-image"><img
                                                                                    src="{{ asset('assets/img/search_suggestion/s4.jpg')}}"
                                                                                    alt="img"></div>
                                                                            <div class="search-product-list-info">
                                                                                <div
                                                                                    class="search-product-list-info-top">
                                                                                    <h6
                                                                                        class="earch-product-list-info-title">
                                                                                        Apple Original Airpod Collection
                                                                                    </h6>
                                                                                </div>
                                                                                <div
                                                                                    class="search-product-list-info-price mt-2">
                                                                                    <span
                                                                                        class="main-price fw-500 color-light">$499.00</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="search-product-list-item">
                                                                        <a href="javascript:void(0)"
                                                                            class="search-product-list-link">
                                                                            <div class="search-product-list-image"><img
                                                                                    src="{{ asset('assets/img/search_suggestion/s5.jpg')}}"
                                                                                    alt="img"></div>
                                                                            <div class="search-product-list-info">
                                                                                <div
                                                                                    class="search-product-list-info-top">
                                                                                    <h6
                                                                                        class="earch-product-list-info-title">
                                                                                        Apple Original Airpod Collection
                                                                                    </h6>
                                                                                </div>
                                                                                <div
                                                                                    class="search-product-list-info-price mt-2">
                                                                                    <span
                                                                                        class="main-price fw-500 color-light">$499.00</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search-suggestion-overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 bg-image banner-right-bg radius-20 main-bnr"
                    style="background-image: url(assets/img/banner/6960655.jpg);"></div>
            </div>
        </div>
    </div>


    <section class="booking-area pat-100 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> Service Plans </h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="row gy-4 mt-5">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".2s">
                    <div class="single-why center-text bg-white single-why-border radius-10">
                        <div class="single-why-icon">
                            <img src="{{ asset('assets/img/icons/motel.png')}}" alt="icon">
                        </div>
                        <div class="single-why-contents mt-3">
                            <h4 class="single-why-contents-title"> <a href="javascript:void(0)"> Accomodation
                                </a> </h4>
                            <p class="single-why-contents-para mt-3"> Book your hotel from our website without any
                                hassle. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow zoomIn" data-wow-delay=".4s">
                    <div class="single-why center-text bg-white single-why-border radius-10">
                        <div class="single-why-icon">
                            <img src="{{ asset('assets/img/icons/service.png')}}" alt="icon">
                        </div>
                        <div class="single-why-contents mt-3">
                            <h4 class="single-why-contents-title"> <a href="javascript:void(0)"> Food Service</a> </h4>
                            <p class="single-why-contents-para mt-3"> Book your hotel from our website without any
                                hassle. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                    <div class="single-why center-text bg-white single-why-border radius-10">
                        <div class="single-why-icon">
                            <img src="{{ asset('assets/img/icons/pick-up.png')}}" alt="icon">
                        </div>
                        <div class="single-why-contents mt-3">
                            <h4 class="single-why-contents-title"> <a href="javascript:void(0)"> Transport Service </a>
                            </h4>
                            <p class="single-why-contents-para mt-3"> Book your hotel from our website without any
                                hassle. </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                    <div class="single-why center-text bg-white single-why-border radius-10">
                        <div class="single-why-icon">
                            <img src="assets/img/icons/b4.svg" alt="icon">
                        </div>
                        <div class="single-why-contents mt-3">
                            <h4 class="single-why-contents-title"> <a href="javascript:void(0)"> 24/7 Support </a> </h4>
                            <p class="single-why-contents-para mt-3"> Book your hotel from our website without any
                                hassle. </p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>




    <!-- PROPERTY-TYPE -->
    <!-- <section class="attraction-area pat-50 pab-50">
        <div class="container">
            <div class="section-title text-left append-flex">
                <h2 class="title"> Property Type </h2>
                <div class="append-attraction"></div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="global-slick-init attraction-slider nav-style-one slider-inner-margin"
                        data-appendArrows=".append-attraction" data-infinite="true" data-arrows="true" data-dots="false"
                        data-slidesToShow="4" data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500"
                        data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                        data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                        data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 4}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 480, "settings": {"slidesToShow": 1} }]'>
                        <div class="attraction-item attraction-item-2">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="assets/img/attraction/hotel.png" alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html"> Hotel
                                        </a> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item attraction-item-2">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="assets/img/attraction/appartment3.png"
                                            alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html">
                                            Appartment </a> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item attraction-item-2">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="assets/img/attraction/dharam589.png"
                                            alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html">
                                            Dharamshala

                                        </a> </h4>



                                </div>
                            </div>
                        </div>

                        <div class="attraction-item attraction-item-2">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="assets/img/attraction/pg3.png" alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html">
                                            Paying Guest</a> </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- food-type -->
    <!-- <section class="attraction-area pat-50 pab-50">
        <div class="container">
            <div class="section-title text-left append-flex">
                <h2 class="title"> Meal </h2>
                <div class="append-attraction"></div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="global-slick-init attraction-slider nav-style-one slider-inner-margin"
                        data-appendArrows=".append-attraction" data-infinite="true" data-arrows="true" data-dots="false"
                        data-slidesToShow="4" data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500"
                        data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                        data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                        data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 4}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 480, "settings": {"slidesToShow": 1} }]'>
                        <div class="attraction-item attraction-item-2">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="assets/img/new-2.png" alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html">
                                            Breakfast
                                        </a> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item attraction-item-2">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="assets/img/new-1.1.png" alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html">
                                            Lunch </a> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item attraction-item-2">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="assets/img/dhokla3.png" alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html">
                                            Snacks

                                        </a> </h4>



                                </div>
                            </div>
                        </div>

                        <div class="attraction-item attraction-item-2">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="assets/img/paneer.png" alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html">
                                            Dinner</a> </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Transport-->
    <!-- <section class="attraction-area pat-50 pab-50">
        <div class="container">
            <div class="section-title text-left append-flex">
                <h2 class="title"> Transportation </h2>
                <div class="append-attraction"></div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="global-slick-init attraction-slider nav-style-one slider-inner-margin"
                        data-appendArrows=".append-attraction" data-infinite="true" data-arrows="true" data-dots="false"
                        data-slidesToShow="4" data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500"
                        data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                        data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                        data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 4}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 480, "settings": {"slidesToShow": 1} }]'>
                        <div class="attraction-item attraction-item-2">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="assets/img/attraction/bus.png" alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html"> Bus
                                        </a> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item attraction-item-2">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="assets/img/attraction/cyclewwe.png"
                                            alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html">
                                            Rental bike </a> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item attraction-item-2">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="assets/img/attraction/AUTO2.png" alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html">
                                            Auto

                                        </a> </h4>



                                </div>
                            </div>
                        </div>

                        <div class="attraction-item attraction-item-2">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="assets/img/attraction/cab3.png" alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html">
                                            Cabs</a> </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Promotion -->
    <div class="container">
        <div class="row">
            <div class="promotion-text">
                <h3>Promotion</h3>
            </div>
            <div class="col-lg-12 promotion-banner">
                <img src="{{ asset('assets/img/Image (1).png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <h4>1</h4>
            </div>
            <div class="item">
                <h4>2</h4>
            </div>
            <div class="item">
                <h4>3</h4>

            </div>

        </div>
    </div>


    <!-- POPULAR-ACCOMODATION -->
    <section class="attraction-area pat-50 pab-50">
        <div class="container">
            <div class="section-title text-left append-flex">
                <h2 class="title"> Popular accomodations </h2>
                <div class="append-attraction"></div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="global-slick-init attraction-slider nav-style-one slider-inner-margin"
                        data-appendArrows=".append-attraction" data-infinite="true" data-arrows="true" data-dots="false"
                        data-slidesToShow="4" data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500"
                        data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                        data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                        data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 4}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 480, "settings": {"slidesToShow": 1} }]'>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="{{ asset('assets/img/attraction/a1.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html"> Hotel
                                            Rohit </a></h4>
                                    <div class="stars">
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star "></span>
                                    </div>
                                    <div class="banner-location-single-icon">
                                        <i class="las la-map-marker-alt icon-red"></i>
                                        <span class="star-text">Hotel type</span>
                                    </div>

                                    <div class="price-div">
                                        <h5>2000.00 Rs <span>/ room / night</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="{{ asset('assets/img/attraction/a2.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html">
                                            Hotel Radha </a> </h4>
                                    <div class="stars">
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star "></span>
                                    </div>
                                    <div class="banner-location-single-icon">
                                        <i class="las la-map-marker-alt icon-red"></i>
                                        <span class="star-text">Hotel type</span>
                                    </div>

                                    <div class="price-div">
                                        <h5>2000.00 Rs <span>/ room / night</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="{{ asset('assets/img/attraction/a3.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html"> Raj
                                            Dharamshala
                                        </a> </h4>
                                    <div class="stars">
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star "></span>
                                    </div>
                                    <div class="banner-location-single-icon">
                                        <i class="las la-map-marker-alt icon-red"></i>
                                        <span class="star-text">Hotel type</span>
                                    </div>

                                    <div class="price-div">
                                        <h5>2000.00 Rs <span>/ room / night</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="{{ asset('assets/img/attraction/a4.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html"> Deepak
                                            Hotel
                                        </a> </h4>
                                    <div class="stars">
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star "></span>
                                    </div>
                                    <div class="banner-location-single-icon">
                                        <i class="las la-map-marker-alt icon-red"></i>
                                        <span class="star-text">Hotel type</span>
                                    </div>

                                    <div class="price-div">
                                        <h5>2000.00 Rs <span>/ room / night</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="hotel_details.html"> <img src="{{ asset('assets/img/attraction/a2.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="hotel_details.html">
                                            Dharamshala Noida </a> </h4>
                                    <div class="stars">
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star "></span>
                                    </div>
                                    <div class="banner-location-single-icon">
                                        <i class="las la-map-marker-alt icon-red"></i>
                                        <span class="star-text">Hotel type</span>
                                    </div>

                                    <div class="price-div">
                                        <h5>2000.00 Rs <span>/ room / night</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Tips and Tricks -->

    <!-- <section class="guest-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title">Tips & Tricks </h2>
                <div class="section-title-shapes"> </div>
            </div>

            <div class="row trick-row">
                <div class="col-lg-4 trick-new">
                    <div class="trick-heading">
                        <h3>Six Top Noted Taking Strategies For <br>
                            College Students</h3>
                    </div>
                    <div class="trick-image">
                        <img src="assets/img/Rectangle 18820.png" alt="">
                    </div>

                    <div class="trick-icon">
                        <div class="fa fa-heart-o trick-icon-child"></div>
                        <div class="fa fa-share-alt"></div>
                    </div>
                </div>

                <div class="col-lg-4 trick-new">
                    <div class="trick-heading">
                        <h3>Six Top Noted Taking Strategies For <br>
                            College Students</h3>
                    </div>
                    <div class="trick-image">
                        <img src="assets/img/Rectangle 18819.png" alt="">
                    </div>
                    <div class="trick-icon">
                        <div class="fa fa-heart-o trick-icon-child"></div>
                        <div class="fa fa-share-alt"></div>
                    </div>
                </div>

                <div class="col-lg-4 trick-new">
                    <div class="trick-heading">
                        <h3>Six Top Noted Taking Strategies For <br>
                            College Students</h3>
                    </div>
                    <div class="trick-image">
                        <img src="assets/img/Rectangle 18818.png" alt="">
                    </div>
                    <div class="trick-icon">
                        <div class="fa fa-heart-o trick-icon-child"></div>
                        <div class="fa fa-share-alt"></div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



    <section class="guest-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> What our guests think </h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="custom-tab guest-wrapper mt-5">
                <div class="guest-wrapper-shapes">
                    <img src="{{ asset('assets/img/guest/guest-shape.png')}}" alt="">
                </div>
                <div class="custom-tab-menu">
                    <ul class="tab-menu guest-wrapper-images list-style-none">
                        <li class="guest-wrapper-images-single active">
                            <img src="{{ asset('assets/img/guest/guest1.jpg')}}" alt="">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img src="{{ asset('assets/img/guest/guest2.jpg')}}" alt="">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img src="{{ asset('assets/img/guest/guest3.jpg')}}" alt="">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img src="{{ asset('assets/img/guest/guest4.jpg')}}" alt="">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img src="{{ asset('assets/img/guest/guest5.jpg')}}" alt="">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img src="{{ asset('assets/img/guest/guest6.jpg')}}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-lg-6 col-md-8">
                        <div class="tab-area">
                            <div class="single-guest tab-item active center-text">
                                <div class="single-guest-thumb">
                                    <img src="{{ asset('assets/img/guest/guest1.jpg')}}" alt="">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                                        Exercitation veniam consequat sunt nostrud amet. </p>
                                    <h4 class="single-guest-contents-title mt-3"> Susana Chadwick </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img src="{{ asset('assets/img/guest/guest2.jpg')}}" alt="">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                                        Exercitation veniam consequat sunt nostrud amet. </p>
                                    <h4 class="single-guest-contents-title mt-3"> Riyad Hossain </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img src="{{ asset('assets/img/guest/guest3.jpg')}}" alt="">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                                        Exercitation veniam consequat sunt nostrud amet. </p>
                                    <h4 class="single-guest-contents-title mt-3"> Arafat Hossain </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img src="{{ asset('assets/img/guest/guest4.jpg')}}" alt="">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                                        Exercitation veniam consequat sunt nostrud amet. </p>
                                    <h4 class="single-guest-contents-title mt-3"> Rajia Akter </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img src="{{ asset('assets/img/guest/guest5.jpg')}}" alt="">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                                        Exercitation veniam consequat sunt nostrud amet. </p>
                                    <h4 class="single-guest-contents-title mt-3"> Sumaiya Akter </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img src="{{ asset('assets/img/guest/guest6.jpg')}}" alt="">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                                        Exercitation veniam consequat sunt nostrud amet. </p>
                                    <h4 class="single-guest-contents-title mt-3"> Riya Akter </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="shots-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> Shots around our Hotels </h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="imgLoaded mt-5">
                <div class="row g-4 masonry-grid">
                    <div class="col-lg-2 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot1.jpg);">
                            <a href="{{ asset('assets/img/shots/shot1.jpg')}}" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Disneyland </a>
                                </h4>
                                <p class="single-shots-contents-para"> We have over 28K reviews to assure you top notch
                                    service. We have over 28K reviews to assure you top notch service.We have over 28K
                                    reviews to assure you top notch service. We have over 28K reviews to assure you top
                                    notch
                                    service. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot2.jpg);">
                            <a href="{{ asset('assets/img/shots/shot2.jpg')}}" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Disneyland </a>
                                </h4>
                                <p class="single-shots-contents-para"> We have over 28K reviews to assure you top notch
                                    service. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot3.jpg);">
                            <a href="{{ asset('assets/img/shots/shot3.jpg')}}" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Disneyland </a>
                                </h4>
                                <p class="single-shots-contents-para"> We have over 28K reviews to assure you top notch
                                    service. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot4.jpg);">
                            <a href="{{ asset('assets/img/shots/shot4.jpg')}}" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Disneyland </a>
                                </h4>
                                <p class="single-shots-contents-para"> We have over 28K reviews to assure you top notch
                                    service. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot5.jpg);">
                            <a href="{{ asset('assets/img/shots/shot5.jpg')}}" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Disneyland </a>
                                </h4>
                                <p class="single-shots-contents-para"> We have over 28K reviews to assure you top notch
                                    service. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot10.jpg);">
                            <a href="{{ asset('assets/img/shots/shot10.jpg')}}" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Disneyland </a>
                                </h4>
                                <p class="single-shots-contents-para"> We have over 28K reviews to assure you top notch
                                    service. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot11.jpg);">
                            <a href="{{ asset('assets/img/shots/shot11.jpg')}}" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Disneyland </a>
                                </h4>
                                <p class="single-shots-contents-para"> We have over 28K reviews to assure you top notch
                                    service. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot12.jpg);">
                            <a href="{{ asset('assets/img/shots/shot12.jpg')}}" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Disneyland </a>
                                </h4>
                                <p class="single-shots-contents-para"> We have over 28K reviews to assure you top notch
                                    service. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="question-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> Frequently Asked Question </h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-xl-8 col-lg-7">
                    <div class="faq-wrapper">
                        <div class="faq-contents">
                            <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                                <h3 class="faq-title">
                                    How does it works?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non
                                        ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed
                                        turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                                </div>
                            </div>
                            <div class="faq-item active open wow fadeInLeft" data-wow-delay=".2s">
                                <h3 class="faq-title">
                                    Do I get full refund if I cancel?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non
                                        ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed
                                        turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                                </div>
                            </div>
                            <div class="faq-item wow fadeInLeft" data-wow-delay=".3s">
                                <h3 class="faq-title">
                                    Do you offer pool service?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non
                                        ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed
                                        turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                                </div>
                            </div>
                            <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                                <h3 class="faq-title">
                                    What if I want to cancel?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non
                                        ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed
                                        turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                                </div>
                            </div>
                            <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                                <h3 class="faq-title">
                                    What’s the closure time?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non
                                        ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed
                                        turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="faq-question faq-question-border radius-10 sticky-top">
                        <h3 class="faq-question-title"> Still got questions? </h3>
                        <div class="faq-question-form custom-form mat-20">
                            <form action="#">
                                <div class="single-input">
                                    <label class="label-title"> Name </label>
                                    <input type="text" class="form--control radius-10" placeholder="Type Name">
                                </div>
                                <div class="single-input">
                                    <label class="label-title"> Email </label>
                                    <input type="text" class="form--control radius-10" placeholder="Type Email">
                                </div>
                                <div class="single-input">
                                    <label class="label-title"> Questions </label>
                                    <textarea name="message" class="form--control form-message radius-10"
                                        placeholder="Type Your Questons..."></textarea>
                                </div>
                                <button class="submit-btn w-100 radius-10" type="submit"> Submit </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> Tips & Tricks </h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="row gy-4 mt-4">
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="single-blog-thumbs">
                            <a href="blog_details.html"> <img src="{{ asset('assets/img/Rectangle 18820.png')}}" alt="">
                            </a>
                            <div class="single-blog-thumbs-date">
                                <a href="javascript:void(0)"> <span class="date"> 18 </span> <span class="month"> Jun
                                    </span> </a>
                            </div>
                        </div>
                        <div class="single-blog-contents mt-3">
                            <div class="single-blog-contents-tags mt-3">
                                <span class="single-blog-contents-tags-item">
                                    <a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
                                </span>
                                <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 22 Comments
                                    </a> </span>
                            </div>
                            <h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html"> Six Top Noted
                                    Taking Strategies For
                                    College Students</a> </h4>
                            <div class="see-more-anchor-main">
                                <a class="see-more-anchor" href="blog_details.html">see more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- jinna -->
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="single-blog-thumbs">
                            <a href="blog_details.html"> <img src="{{ asset('assets/img/Rectangle 18819.png')}}" alt="">
                            </a>
                            <div class="single-blog-thumbs-date">
                                <a href="javascript:void(0)"> <span class="date"> 19 </span> <span class="month"> Jun
                                    </span> </a>
                            </div>
                        </div>
                        <div class="single-blog-contents mt-3">
                            <div class="single-blog-contents-tags mt-3">
                                <span class="single-blog-contents-tags-item">
                                    <a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
                                </span>
                                <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 25 Comments
                                    </a> </span>
                            </div>
                            <h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html"> Six Top Noted
                                    Taking Strategies For
                                    College Students </a> </h4>

                            <div class="see-more-anchor-main">
                                <a class="see-more-anchor" href="blog_details.html">see more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="single-blog-thumbs">
                            <a href="blog_details.html"> <img src="{{ asset('assets/img/Rectangle 18818.png')}}" alt="">
                            </a>
                            <div class="single-blog-thumbs-date">
                                <a href="javascript:void(0)"> <span class="date"> 20 </span> <span class="month"> Jun
                                    </span> </a>
                            </div>
                        </div>
                        <div class="single-blog-contents mt-3">
                            <div class="single-blog-contents-tags mt-3">
                                <span class="single-blog-contents-tags-item">
                                    <a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
                                </span>
                                <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 12 Comments
                                    </a> </span>
                            </div>
                            <h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html"> Six Top Noted
                                    Taking Strategies For
                                    College Students</a> </h4>


                            <div class="see-more-anchor-main">
                                <a class="see-more-anchor" href="blog_details.html">see more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <div class="brand-area pat-50 pab-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="global-slick-init attraction-slider slider-inner-margin" data-slidesToShow="6"
                        data-infinite="true" data-arrows="false" data-dots="false" data-swipeToSlide="true"
                        data-autoplay="true" data-autoplaySpeed="2500"
                        data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                        data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                        data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 5}},{"breakpoint": 1200,"settings": {"slidesToShow": 4}},{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 576, "settings": {"slidesToShow": 2} }]'>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo1.png" alt="brandLogo">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo2.png" alt="brandLogo">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo3.png" alt="brandLogo">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo4.png" alt="brandLogo">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo5.png" alt="brandLogo">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo6.png" alt="brandLogo">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo3.png" alt="brandLogo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <div class="newsletter-area pat-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newsletter-wrapper newsletter-bg radius-20 newsletter-wrapper-padding wow zoomIn"
                        data-wow-delay=".3s">
                        <div class="newsletter-wrapper-shapes">
                            <img src="{{ asset('assets/img/single-page/newsletter-shape1.png')}}" alt="shapes">
                            <img src="{{ asset('assets/img/single-page/newsletter-shape2.png')}}" alt="shapes">
                        </div>
                        <div class="newsletter-contents center-text">
                            <h3 class="newsletter-contents-title"> Get discounts, newsletters in your email </h3>
                            <p class="newsletter-contents-para mt-3"> Get discounts and newsletters on our hotels in
                                your email. We promise to not spam. Unsubscribe anytime </p>
                            <div class="newsletter-contents-form custom-form mt-4">
                                <div class="single-input">
                                    <input type="text" class="form--control" placeholder="Enter Email">
                                    <button type="submit"> Submit </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer-area footer-area-one footer-border-round footer-bg-1 nxt-foot">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-wrapper pat-100 pab-100">
                        <div class="footer-contents center-text">
                            <div class="footer-contents-logo">
                                <a href="index.html" class="footer-contents-logo-img"> <img src="{{ asset('assets/img/H2E (1).png')}}"
                                        alt="logo"> </a>
                                <h3 class="footer-contents-logo-title text-white foot-back"> <a href="index.html"> HOME
                                        TO EXAM
                                    </a> </h3>
                                <p class="footer-contents-logo-para mt-3 foot-content"> Amet minim mollit non deserunt
                                    ullamco est
                                    sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit
                                    exercitation veniam. </p>
                            </div>
                            <div class="footer-widget widget">
                                <div class="footer-widget-social mt-4">
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
                            </div>
                            <!-- <div class="footer-widget widget">
                                <div class="footer-widget-nav mt-5">
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
                                            <a href="javascript:void(0)" class="footer-widget-nav-list-link"> Careers
                                            </a>
                                        </li>
                                        <li class="footer-widget-nav-list-item">
                                            <a href="javascript:void(0)" class="footer-widget-nav-list-link"> Terms of
                                                use </a>
                                        </li>
                                        <li class="footer-widget-nav-list-item">
                                            <a href="javascript:void(0)" class="footer-widget-nav-list-link"> Privacy
                                                Policy </a>
                                        </li>
                                        <li class="footer-widget-nav-list-item">
                                            <a href="javascript:void(0)" class="footer-widget-nav-list-link"> Contact
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area footer-padding copyright-bg-1">
            <div class="container">
                <div class="copyright-contents">
                    <div class="copyright-contents-flex">
                        <div class="copyright-contents-items">
                            <div class="copyright-contents-single">
                                <div class="copyright-contents-single-flex">
                                    <div class="copyright-contents-single-icon">
                                        <i class="las la-phone"></i>
                                    </div>
                                    <div class="copyright-contents-single-details">
                                        <span class="copyright-contents-single-details-title"> Have a question? </span>
                                        <a href="tel:3104372766" class="copyright-contents-single-details-link">
                                            310-437-2766 </a>
                                    </div>
                                </div>
                            </div>
                            <div class="copyright-contents-single">
                                <div class="copyright-contents-single-flex">
                                    <div class="copyright-contents-single-icon">
                                        <i class="las la-envelope"></i>
                                    </div>
                                    <div class="copyright-contents-single-details">
                                        <span class="copyright-contents-single-details-title"> Have a question? </span>
                                        <a href="https://bytesed.com/cdn-cgi/l/email-protection#3c49524e595d507c59445d514c5059125f5351"
                                            class="copyright-contents-single-details-link"> <span class="__cf_email__"
                                                data-cfemail="9feaf1edfafef3dffae7fef2eff3fab1fcf0f2">[email&#160;protected]</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="copyright-contents-main"> © 2000-2022, All Rights Reserved by <a href="index.html">
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
                                <form class="login-wrapper-contents-form custom-form" id="login_form">
                                    <div class="single-input mt-4">
                                        <!-- <label class="label-title mb-3"> Email Or User Name </label> -->
                                        <input class="form--control" type="text" placeholder="Mobile Number" name="mobile">
                                    </div>

                                    <div id="mobile_error" style="color:red"></div>
                                    <!-- <div class="single-input mt-4">
                                                                                        <label class="label-title mb-3"> Password </label>
                                                                                        <input class="form--control" type="password" placeholder="Type Password">
                                                                                        <div class="icon toggle-password">
                                                                                        <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                                                                        <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                                                                        </div>
                                                                                        </div> -->
                                    <!-- <button class="submit-btn w-100 mt-4 old-button logo-btn" type="button"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalfive">
                                        Continue </button> -->
                                         <button class="submit-btn w-100 mt-4 old-button logo-btn submit_mobile">
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
                        <form class="login-wrapper-contents-form custom-form" id="submit_otp_form">
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
                           <input type="hidden" name="mobile" id="mobile">
                            <div class="auth-input-wrapper numeral-mask-wrapper">
                                <input class="auth-input h-px-50 otp-input numeral-mask" type="text" maxlength="1" autofocus>
                                <input class="auth-input h-px-50 otp-input numeral-mask" type="text" maxlength="1">
                                <input class="auth-input h-px-50 otp-input numeral-mask" type="text" maxlength="1">
                                <input class="auth-input h-px-50 otp-input numeral-mask" type="text" maxlength="1">
                               
                            </div>
                            <input type="hidden" name="otp" value="1234"/>
                           

                            <span class="otp-timer">02:00 sec</span>

                            

                           <button class="submit-btn w-100 mt-4 classic-btn submit_otp_button"> Continue
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

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
   
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{ asset('assets/js/jquery-migrate.min.js')}}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('assets/js/wow.js')}}"></script>

    <script src="{{ asset('assets/js/slick.js')}}"></script>

    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>

    <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>

    <script src="{{ asset('assets/js/jquery.magnific-popup.js')}}"></script>

    <script src="{{ asset('assets/js/jquery.nice-select.js')}}"></script>

    <script src="{{ asset('assets/js/flatpicker.js')}}"></script>

    <script src="{{ asset('assets/js/nouislider-8.5.1.min.js')}}"></script>

    <script src="{{ asset('assets/js/intlTelInput.js')}}"></script>

    <script src="{{ asset('assets/js/main.js')}}"></script>

    <!-- <script>
        window.addEventListener("load", function () {

            if (!!$.cookie('pincode')) {


                var tmp = document.getElementById('pinvalue');
                console.log(tmp.textContent);

                tmp.textContent = pincodevalue;


                var tmp = document.getElementById('pincode');

                tmp.value = pincodevalue;


            } else {

                setTimeout(

                    function open(event) {

                        document.querySelector(".popup").style.display = "block";

                    },

                    1000

                );
                document.querySelector("#dose").addEventListener("click", function () {

                    document.querySelector(".popup").style.display = "none";

                });

            }

        });

        function popup_open() {

            setTimeout(

                function open(event) {

                    document.querySelector(".popup").style.display = "block";

                },

                1000

            )

        };
    </script> -->

    <script>
        // popup
        $(function () {
            $(".my-button").click(function () {
                $(".popup,.popupp-full-width").slideToggle();
            })
        });



        $(function () {
            $(".new-btn,.popupp-full-width").click(function () {
                $(".popup,.popupp-full-width").hide();
            })
        });





        // login-popup
        $(function () {
            $(".login-press").click(function () {
                $(".login-popup,.legsy-width").slideToggle();
            })
        });



        $(function () {
            $(".old-button,.legsy-width").click(function () {
                $(".login-popup,.legsy-width").hide();
            })
        });



        // otp-popup
        $(function () {
            $(".logo-btn").click(function () {
                $(".otp-popup").slideToggle();
            })
        });



        // sidebar 

        $(function () {
            $(".kab-ba").click(function () {
                $(".sidebar").slideToggle();
            })
        });
        // $(function () {
        //     $(".classic-btn").click(function () {
        //         $(".otp-popup").hide();
        //     })
        // });


        // sticky-popup

        // room-popup
        $(function () {
            $(".her-button").click(function () {
                $(".room-popup,.zoom-width").slideToggle();
            })
        });

        $(function () {
            $(".done-btn,.zoom-width").click(function () {
                $(".room-popup,.zoom-width").hide();
            })
        });

        // destination-popup
        $(function () {
            $(".his-button").click(function () {
                $(".destination-popup,.desti-full-width").slideToggle();
            })
        });

        $(function () {
            $(".done-one-btn,.desti-full-width").click(function () {
                $(".destination-popup,.desti-full-width").hide();
            })
        });

        // date - popup
        $(function () {
            $(".no-button").click(function () {
                $(".date-popup,.goom-width").slideToggle();
            })
        });

        $(function () {
            $(".number-tab,.goom-width").click(function () {
                $(".date-popup,.goom-width").hide();
            })
        });

        $(function () {
            $(".gute-cop").click(function () {
                $(".clock-popup").hide();
            })
        });



        $(function () {
            $(".gute-cop").click(function () {
                $(".check-popup,.robi-width").slideToggle();
            })
        });




        $(function () {
            $(".number-tab-three,.robi-width").click(function () {
                $(".check-popup,.robi-width,.clock-popup").hide();
            })
        });


        $(function () {
            $(".number-tab-three").click(function () {
                $(".check-popup,.clock-popup").hide();
            })
        });













        // $(function () {
        //     $(".number-tab").click(function () {
        //         $(".check-popup").hide();
        //     })
        // });


        // clock-popup
        $(function () {
            $(".number-tab").click(function () {
                $(".clock-popup").slideToggle();
            })
        });




        $(function () {
            function c() {
                p();
                var e = h();
                var r = 0;
                var u = false;
                l.empty();
                while (!u) {
                    if (s[r] == e[0].weekday) {
                        u = true;
                    } else {
                        l.append('<div class="blank"></div>');
                        r++;
                    }
                }
                for (var c = 0; c < 42 - r; c++) {
                    if (c >= e.length) {
                        l.append('<div class="blank"></div>');
                    } else {
                        var v = e[c].day;
                        var m = g(new Date(t, n - 1, v)) ? '<div class="today">' : "<div>";
                        l.append(m + "" + v + "</div>");
                    }
                }
                var y = o[n - 1];
                a.css("background-color", y)
                    .find("h1")
                    .text(i[n - 1] + " " + t);
                f.find("div").css("color", y);
                l.find(".today").css("background-color", y);
                d();
            }
            function h() {
                var e = [];
                for (var r = 1; r < v(t, n) + 1; r++) {
                    e.push({ day: r, weekday: s[m(t, n, r)] });
                }
                return e;
            }
            function p() {
                f.empty();
                for (var e = 0; e < 7; e++) {
                    f.append("<div>" + s[e].substring(0, 3) + "</div>");
                }
            }
            function d() {
                var t;
                var n = $("#calendar").css("width", e + "px");
                n.find((t = "#calendar_weekdays, #calendar_content"))
                    .css("width", e + "px")
                    .find("div")
                    .css({
                        width: e / 7 + "px",
                        height: e / 7 + "px",
                        "line-height": e / 7 + "px",
                    });
                n.find("#calendar_header")
                    .css({ height: e * (1 / 7) + "px" })
                    .find('i[class^="icon-chevron"]')
                    .css("line-height", e * (1 / 7) + "px");
            }
            function v(e, t) {
                return new Date(e, t, 0).getDate();
            }
            function m(e, t, n) {
                return new Date(e, t - 1, n).getDay();
            }
            function g(e) {
                return y(new Date()) == y(e);
            }
            function y(e) {
                return e.getFullYear() + "/" + (e.getMonth() + 1) + "/" + e.getDate();
            }
            function b() {
                var e = new Date();
                t = e.getFullYear();
                n = e.getMonth() + 1;
            }
            var e = 480;
            var t = 2013;
            var n = 9;
            var r = [];
            var i = [
                "JANUARY",
                "FEBRUARY",
                "MARCH",
                "APRIL",
                "MAY",
                "JUNE",
                "JULY",
                "AUGUST",
                "SEPTEMBER",
                "OCTOBER",
                "NOVEMBER",
                "DECEMBER",
            ];
            var s = [
                "Sunday",
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
            ];
            var o = [
                "#16a085",
                "#1abc9c",
                "#c0392b",
                "#27ae60",
                "#FF6860",
                "#f39c12",
                "#f1c40f",
                "#e67e22",
                "#2ecc71",
                "#e74c3c",
                "#d35400",
                "#2c3e50",
            ];
            var u = $("#calendar");
            var a = u.find("#calendar_header");
            var f = u.find("#calendar_weekdays");
            var l = u.find("#calendar_content");
            b();
            c();
            a.find('i[class^="icon-chevron"]').on("click", function () {
                var e = $(this);
                var r = function (e) {
                    n = e == "next" ? n + 1 : n - 1;
                    if (n < 1) {
                        n = 12;
                        t--;
                    } else if (n > 12) {
                        n = 1;
                        t++;
                    }
                    c();
                };
                if (e.attr("class").indexOf("left") != -1) {
                    r("previous");
                } else {
                    r("next");
                }
            });
        });


        // room

        $(document).ready(function () {
            $('.minus').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        });





        // owl carousel
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })


        // bahar



        // var popup = document.getElementById('popup');

        //     // var videos_modal = document.getElementById('video-model-div');

        //     // When the user clicks anywhere outside of the modal, close it

        //     window.onclick = function (event) {

        //         if (event.target == popup) {

        //            popup.style.display = "block";

        //         }

        //         else {

        //             popup.style.display = "none";

        //         }

        //     }


        $('body').click(function (event) {
            if (!$(event.target).closest('.banner-area-one').length && !$(event.target).is('.banner-area-one')) {
                $(".popup").hide();
            }
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>



    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src="{{ asset('app-assets/js/scripts/pages/bootstrap-toast.min.js') }}"></script>
  <script src="{{ asset('app-assets/js/scripts/extensions/sweet-alerts.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script>
     const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
    </script>


<!-- Mirrored from bytesed.com/tf/beyond-hotel/beyond_hotel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 10:30:12 GMT -->
<script>

$(document).on("click", ".submit_mobile",function(event) {

event.preventDefault();

let myForm = document.getElementById('login_form');
var formData = new FormData(myForm);
formData.append('_token', '{{ csrf_token() }}');

$.ajax({
	type: "post",
	data: formData,
	url: "{{route('user.verify_number')}}",
	cache:false,
	contentType: false,
	processData: false,
	success: function(result) {

    if (result.error == false) {

        var mobile=result.mobile;
        $('#mobile').val(result.mobile);
        console.log(mobile);
        Toast.fire({icon: 'success',title: result.message, closeButton: !0, tapToDismiss: !1,progressBar: true, timeOut: 1000});
        $('#exampleModalfour').modal('hide');
        $('#exampleModalfive').modal('show');
		}
		else if(result.error == true){
			$('#mobile_error').text(result.message);
		}
		else{}

		}
});

});


$(document).on("click", ".submit_otp_button",function(event) {

event.preventDefault();

let myForm = document.getElementById('submit_otp_form');
var formData = new FormData(myForm);
formData.append('_token', '{{ csrf_token() }}');

$.ajax({
type: "post",
data: formData,
url: "{{route('user.verify_otp')}}",
cache:false,
contentType: false,
processData: false,
success: function(result) {

	if (result.error == false) {

        if(result.flag == '1'){
            Toast.fire({icon: 'success',title: result.message, closeButton: !0, tapToDismiss: !1,progressBar: true, timeOut: 1000});
            let URL="{{route('user.home')}}";
            window.location.href=URL;
        }
        else {
            Toast.fire({icon: 'error',title: result.message, closeButton: !0, tapToDismiss: !1,progressBar: true, timeOut: 1000});
            let URL="{{route('user.register')}}";
            window.location.href=URL;
        }
       
	}
	else{

    }
    }
})
});




</script>
</html>