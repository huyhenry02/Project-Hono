@extends('hono.layout.main')
@section('content')
    @php
        use Illuminate\Support\Facades\Session;
    @endphp
    <main id="content" role="main" class="main">
        <div class="position-fixed top-0 right-0 left-0 bg-img-hero" style="height: 32rem; background-image: url(assets/svg/components/abstract-bg-4.svg);">
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
                            <div class="container" >
                                @if(Session::has('success_resetPassword'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success_resetPassword') }}
                                    </div>
                                @endif

                                @if(Session::has(''))
                                    <div class="alert alert-warning" role="alert">
                                        {{ Session::get('') }}
                                    </div>
                                @endif
                            </div>
                            <!-- Form -->
                            <form class="change_passForm" action="{{route('password.reset',['user' => $user->id, 'token' => $user->token])}}" method="post">
                                @csrf
                                <div class="text-center">
                                    <div class="mb-5">
                                        <h1 class="display-4">Forgot password?</h1>
                                    </div>
                                </div>
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="input-label" for="signupSrPassword">Password</label>

                                    <div class="input-group input-group-merge">
                                        <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required="" data-msg="Your password is invalid. Please try again." data-hs-toggle-password-options='{
                               "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                               "defaultClass": "tio-hidden-outlined",
                               "showClass": "tio-visible-outlined",
                               "classChangeTarget": ".js-toggle-passowrd-show-icon-1"
                             }'>
                                        <div class="js-toggle-password-target-1 input-group-append">
                                            <a class="input-group-text" href="javascript:;">
                                                <i class="js-toggle-passowrd-show-icon-1 tio-visible-outlined"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="input-label" for="signupSrConfirmPassword">Confirm password</label>

                                    <div class="input-group input-group-merge">
                                        <input type="password" class="js-toggle-password form-control form-control-lg" name="confirmPassword" id="signupSrConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required="" data-msg="Password does not match the confirm password." data-hs-toggle-password-options='{
                               "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                               "defaultClass": "tio-hidden-outlined",
                               "showClass": "tio-visible-outlined",
                               "classChangeTarget": ".js-toggle-passowrd-show-icon-2"
                             }'>
                                        <div class="js-toggle-password-target-2 input-group-append">
                                            <a class="input-group-text" href="javascript:;">
                                                <i class="js-toggle-passowrd-show-icon-2 tio-visible-outlined"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <button type="submit" class="btn btn-lg btn-block btn-primary">Submit</button>

                                <div class="text-center mt-2">
                                    <a class="btn btn-link" href="{{route('login_client.index')}}">
                                        <i class="tio-chevron-left"></i> Back to Sign in
                                    </a>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Footer -->
                    <div class="text-center">
                        <small class="text-cap mb-4">Trusted by the world's best teams</small>

                        <div class="w-85 mx-auto">
                            <div class="row justify-content-between">
                                <div class="col">
                                    <img class="img-fluid" src="/manage/assets\svg\brands\gitlab-gray.svg" alt="Image Description">
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="/manage/assets\svg\brands\fitbit-gray.svg" alt="Image Description">
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="/manage/assets\svg\brands\flow-xo-gray.svg" alt="Image Description">
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="/manage/assets\svg\brands\layar-gray.svg" alt="Image Description">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer -->
                </div>
            </div>
        </div>
        <!-- End Content -->
    </main>
    <script src="public/js/ajax.js"></script>
@endsection
