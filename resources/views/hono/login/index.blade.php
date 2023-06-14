@extends('hono.layout.main')
@section('content')
    <main id="content" role="main" class="main">
        <div class="position-fixed top-0 right-0 left-0 bg-img-hero" style="height: 32rem; background-image: url(manage/assets/svg/components/abstract-bg-4.svg);">
            <!-- SVG Bottom Shape -->
            <figure class="position-absolute right-0 bottom-0 left-0">
                <svg preserveaspectratio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewbox="0 0 1921 273">
                    <polygon fill="#fff" points="0,273 1921,273 1921,0 "></polygon>
                </svg>
            </figure>
            <!-- End SVG Bottom Shape -->
        </div>

        <!-- Content -->
        <div class="container py-5 py-sm-7">


            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <!-- Card -->
                    <div class="card card-lg mb-5">
                        <div class="card-body">
                            <!-- Form -->
                            <form class="js-validate" method="post" action="{{route('login_client.postLogin')}}">
                                @csrf
                                <div class="text-center">
                                    <div class="mb-5">
                                        <h1 class="display-4">Sign in</h1>
                                        <p>Don't have an account yet? <a href="{{route('register_client.index')}}">Sign up here</a></p>
                                    </div>

                                    <a class="btn btn-lg btn-block btn-white mb-4" href="#">
                        <span class="d-flex justify-content-center align-items-center">
                          <img class="avatar avatar-xss mr-2" src="\manage\assets\svg\brands\google.svg" alt="Image Description">
                          Sign in with Google
                        </span>
                                    </a>

                                    <span class="divider text-muted mb-4">OR</span>
                                </div>

                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="input-label" for="signinSrEmail">Your email</label>

                                    <input type="email" class="form-control form-control-lg" name="email" id="signinSrEmail" tabindex="1" placeholder="email@address.com" aria-label="email@address.com" required="" data-msg="Please enter a valid email address.">
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="input-label" for="signupSrPassword" tabindex="0">
                        <span class="d-flex justify-content-between align-items-center">
                          Password
                          <a class="input-label-secondary" href="{{route('change_pass_client.index')}}">Forgot Password?</a>
                        </span>
                                    </label>

                                    <div class="input-group input-group-merge">
                                        <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required="" data-msg="Your password is invalid. Please try again." data-hs-toggle-password-options='{
                                 "target": "#changePassTarget",
                                 "defaultClass": "tio-hidden-outlined",
                                 "showClass": "tio-visible-outlined",
                                 "classChangeTarget": "#changePassIcon"
                               }'>
                                        <div id="changePassTarget" class="input-group-append">
                                            <a class="input-group-text" href="javascript:;">
                                                <i id="changePassIcon" class="tio-visible-outlined"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Checkbox -->
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
                                        <label class="custom-control-label text-muted" for="termsCheckbox"> Remember me</label>
                                    </div>
                                </div>
                                <!-- End Checkbox -->

                                <button type="submit" class="btn btn-lg btn-block btn-primary">Sign in</button>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Footer -->
                    <div class="text-center">

                    </div>
                    <!-- End Footer -->
                </div>
            </div>
        </div>
        <!-- End Content -->
    </main>
@endsection
