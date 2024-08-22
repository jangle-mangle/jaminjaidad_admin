<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bytesed.com/tf/beyond-hotel/beyond_hotel/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 10:30:58 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Home To Exam-registration </title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css') }}">
   
</head>

<body>

    <section class="login-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                    <div class="login-wrapper-thumb thumb-sumb">
                        <img src="{{ asset('assets/img/H2E.png')}}" alt="img">
                    </div>
                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title double-title">Registration</h2>
                        <!-- <p class="sigle-para mt-2"> Login to Continue </p> -->
                        <form class="login-wrapper-contents-form custom-form" id="registration">
                            <div class="single-input mt-4">
                                <!-- <label class="label-title mb-3"> Email Or User Name </label> -->
                                <input class="form--control" type="text" placeholder="Name" name="name" id="name">
                            </div>

                            <div class="single-input mt-4">
                                <!-- <label class="label-title mb-3"> Email Or User Name </label> -->
                                <input class="form--control" type="email" placeholder="Email" name="email" id="email">
                            </div>

                            <div class="single-input mt-4">
                                <!-- <label class="label-title mb-3"> Email Or User Name </label> -->
                                <input class="form--control" type="mobile" placeholder="Mobile Number" name="mobile" id="mobile">
                            </div>


                            <!-- <div class="single-input mt-4">
<label class="label-title mb-3"> Password </label>
<input class="form--control" type="password" placeholder="Type Password">
<div class="icon toggle-password">
<div class="show-icon"> <i class="las la-eye-slash"></i> </div>
<span class="hide-icon"> <i class="las la-eye"></i> </span>
</div>
</div> -->
                            <button class="submit-btn w-100 mt-4 submit_btn"> Continue</button>

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
        </div>
        </div>
        </div>
    </section>


    <div class="mouse-move mouse-outer"></div>
    <div class="mouse-move mouse-inner"></div>



    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

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
<!-- Mirrored from bytesed.com/tf/beyond-hotel/beyond_hotel/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 10:31:00 GMT -->
<script>

$(document).on("click", ".submit_btn",function(event) {

event.preventDefault();

let myForm = document.getElementById('registration');
var formData = new FormData(myForm);
formData.append('_token', '{{ csrf_token() }}');

$.ajax({
type: "post",
data: formData,
url: "{{route('user.registration')}}",
cache:false,
contentType: false,
processData: false,
success: function(result) {

	if (result.error == false) {
        var id=result.id;
         let URL="{{url('education')}}"+"/"+id;
            window.location.href=URL;
        }
        else {
            Toast.fire({icon: 'error',title: result.message, closeButton: !0, tapToDismiss: !1,progressBar: true, timeOut: 1000});
          
        }
       
	}

    })
});

</script>

</html>