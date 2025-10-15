<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }


        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
        
        /*new login style*/
        
.login-section {login-box bg-white p-4 rounded shadow
      background-color: #fffff; 
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .image-section {
       background: #FFF0E880;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .image-section img {
      max-width: 80%;
      height: auto;
    }
    .login-box {
      width: 100%;
      max-width: 458px;
    }
    .icon-login {
    margin-bottom:66px;
}
.h3-login{
    font-size:32px; font-weight:bold !important;
}
       
.lead{
   color:#667085; font-size:16px;font-weight:bold !important;
} 
.form-area span img {
    width: 25px;
}
.form-area span {
    position: absolute;
    left: 14px;
    top: 18px;
}
 .form-area .form-control{
    height: 64px;
    background-color: #F2F4F7;
    border: solid #f2f4f7 !important;
    box-shadow: none !important; border-radius: 10px; padding-left:50px !important;
 }
 .form-outline .form-control~.form-notch div {
    border: 1px solid #fff;
 
}

.form-outline .form-control:focus~.form-label {
    color:#FF6D14
}

.form-outline .form-control.active~.form-notch .form-notch-middle,.form-outline .form-control:focus~.form-notch .form-notch-middle {
    border-top: none;
    border-right: none;
    border-left: none;
    transition: all .2s linear
}

.form-outline .form-control:focus~.form-notch .form-notch-middle {
    border-color: #fff !important;  border-bottom: 0 solid;
}

.form-outline .form-control.active~.form-notch .form-notch-leading,.form-outline .form-control:focus~.form-notch .form-notch-leading {
    border-right: none;
}

.form-outline .form-control:focus {
    border-top: .125rem solid #fff !important;
    border-bottom: .125rem solid #fff !important;
    border-left: .125rem solid #fff !important;
}
.form-control:focus{
    border-color: #fff !important; box-shadow:none  !important;
}


.form-outline .form-control:focus~.form-notch .form-notch-leading {
    border-top: .125rem solid #fff;
    border-bottom: .125rem solid #fff;
    border-left: .125rem solid #fff
}



.form-outline .form-control:focus~.form-notch .form-notch-trailing {
    border-top: .125rem solid #fff;
    border-bottom: .125rem solid #fff;
    border-right: .125rem solid #fff
}

.form-outline .form-control~.form-label {
    top: 10px;color: #98A2B3;
    left: 54px !important;
}
.form-outline .form-control.form-control-lg.active~.form-label, .form-outline .form-control.form-control-lg:focus~.form-label {
    transform: translateY(-1.85rem) translateY(.1rem) scale(.8);
    z-index: 9;
    /* background: #f2f4f7; */
}
.footer-login label {
    color: #667085;
    font-size: 16px;
    font-weight: 500;
}
.forgot a {
    color: #FF6D14;
    font-size: 16px;
    font-weight: 500;
}
.login-next {
    height: 60px;
    font-size: 18px;
    font-weight: 500;
    background: #FF6D14 !important;
    width: 100%;
    color: #fff;
    padding: 18px;
    border-radius: 10px;
    box-shadow: none;
}
.login-next:hover{
    color:#fff; background: #ed6009 !important; box-shadow:none;
}
.form-check-input {
    border: .125rem solid #ff6d14;
    border-radius: 40px !important;
}
.form-check-input[type=checkbox]:checked {
    background-image: none;
    background-color: #ff6d58; box-shadow: none;
}
.form-check-input:checked {
    border-color: #ff6d58;
}
.form-check-input:focus {
    box-shadow: none;
    border-color: #ff8667;
}
.form-check-input[type=checkbox]:focus:after {

    border-radius: 10px;
 
}
.form-check-input[type=checkbox]:checked:focus {
    background-color: #ff6d58; border-color: #ff8667; box-shadow: none;
}
a.google-link {
    width: 100%;
    height: 52px;
    border: solid 1px #F0EDFF;
    float: left;
    border-radius: 10px;
    margin-top: 29px;
    text-align: center;
    padding: 12px;
    font-size: 14px;
    color: #1C1C1C;
}
a.google-link img {
    margin-right: 10px;
}
a.google-link:hover{
    border-color:#ff8667;
}
.sign-up {
    float: left;
    text-align: center;
    width: 100%;
    font-size: 16px;
    color: #475467;
    font-weight: 500;
}
.sign-up a {
    color: #475467;
}
.sign-up a:hover{
    color:#ff8667;
}

@media only screen and (min-width: 1024px) and (max-width: 1366px) {
    .login-box {
       zoom:.8;
    }
    .image-section img{
         zoom:.8;
    }
}


    </style>
</head>

<body>
    
    
      <div class="container-fluid ">
    <div class="row">
      <!-- Left: Login Form -->
      <div class="col-md-6 login-section">
        <div class="login-box">
           <x-alert-message></x-alert-message>
           <div class="colm-md-12 text-center">
               <img src="{{ asset('assets/common/images/icon-login.svg') }}"
                        class="img-fluid icon-login " alt="Sample image">
               
           </div>
                    <form action="{{ route('admin-login') }}" method="POST">
                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <h3 class="h3-login">Sign in</h3>
                            <!--<h5 class="text-primary">-->
                            <!--    Welcome to {{ siteSettings()['company_name'] ?? 'Company Name' }}-->
                            <!--</h5>-->
                            {{-- <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </button> --}}
                        </div>
                          <p class="lead fw-normal mb-0 me-3">Please fill your information below</p>
                        <!--<div class="divider d-flex align-items-center my-4">-->
                        <!--    <p class="text-center fw-bold mx-3 mb-0">-->
                        <!--         Or -->
                        <!--    </p>-->
                        <!--</div>-->
                        <div class="form-outline mb-4 mt-4 form-area">
                            <span>
                             <img src="{{ asset('assets/common/images/message.svg
') }}"  alt="message">
                            </span>
                            <input type="email" name="email" id="form3Example3"
                                class="form-control form-control-lg {{ hasError('email') }}"
                                placeholder="Enter a valid email address" value="{{ old('email') }}" />
                            <label class="form-label" for="form3Example3">Email
                            <!--{!! starSign() !!}-->
                            </label>
                        </div>
                        <div class="form-outline mb-3 form-area">
                             <span>
                             <img src="{{ asset('assets/common/images/lock.svg
') }}"  alt="message">
                            </span>
                            <input type="password" name="password" id="form3Example4"
                                class="form-control form-control-lg {{ hasError('password') }}"
                                placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Password 
                            <!--{!! starSign() !!}-->
                            </label>
                        </div>
                        <div class="d-flex justify-content-between align-items-center footer-login">
                            <div class="form-check mb-0">
                                <input name="remember" {{ old('remember') ? 'checked' : '' }}
                                    class="form-check-input me-2" type="checkbox" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            
                            <div class="forgot">
                                <a href="">Forget Password?</a>
                            </div>
                            {{-- <a href="#!" class="text-body">Forgot password?</a> --}}
                        </div>
                        
                       
                        
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn login-next"
                               >Next</button>
                            {{-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                    class="link-danger">Register</a></p> --}}
                        </div>
                         <a href="" class="google-link">
                           <img src="{{ asset('assets/common/images/google.svg') }}" alt="Sample image"> Login with <strong>google</strong>
                        </a>
                        <p class="sign-up mt-4">
                            Already have an account? <a href="">Sign UP</a>
                        </p>
                        
                    </form>
        </div>
      </div>

      <!-- Right: Image -->
      <div class="col-md-6 image-section text-center">
              
      <img src="{{ asset('assets/common/images/login.svg') }}"
                 class="img-fluid" alt="Sample image">
      </div>
    </div>
  </div>
    
    
    




    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
</body>

</html>
