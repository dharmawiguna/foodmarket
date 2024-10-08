{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from php.spruko.com/nowa/nowa/pages/signin.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Oct 2022 14:41:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		    	<!-- META DATA -->
        <meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
		
		<!-- TITLE -->
		<title>Admin Dashboard - Food Market</title>

		<!-- FAVICON -->
		<link rel="icon" href="../assets/img/brand/favicon.png" type="image/x-icon"/>
		
		<!--- FONT-ICONS CSS -->
		<link href="../assets/css/icons.css" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/style-dark.css" rel="stylesheet">
		<link href="../assets/css/style-transparent.css" rel="stylesheet">

		<!---SKINMODES CSS -->
		<link href="../assets/css/skin-modes.css" rel="stylesheet" />

		<!--- ANIMATIONS CSS -->
		<link href="../assets/css/animate.css" rel="stylesheet">

		<!-- INTERNAL SWITCHER CSS -->
		<link href="../assets/switcher/css/switcher.css" rel="stylesheet"/>
		<link href="../assets/switcher/demo.css" rel="stylesheet"/>

	</head>
	<body class="ltr error-page1 bg-primary">

		<!-- SWITCHER -->
		<div class="switcher-wrapper">
			<div class="demo_changer ">
				<div class="form_holder sidebar-right1">
					<div class="row">
						<div class="predefined_styles">
							<div class="swichermainleft text-center">
								<div class="p-3 d-grid gap-2">
									<a href="index.html" class="btn ripple btn-primary mt-0">View Demo</a>
									<a href="https://themeforest.net/item/nowa-php-admin-dashboard-template/37934314" class="btn ripple btn-info">Buy Now</a>
									<a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-danger">Our Portfolio</a>
								</div>
							</div>
							<div class="swichermainleft text-center">
								<h4>LTR AND RTL VERSIONS</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">LTR</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25" id="myonoffswitch54" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch54" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">RTL</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25" id="myonoffswitch55" class="onoffswitch2-checkbox">
												<label for="myonoffswitch55" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Light Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Light Theme</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch1" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Theme</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
												<label for="myonoffswitch2" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Dark Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Light Primary</span>
											<div class="">
												<input class="wd-25 ht-25 input-color-picker color-primary-light" value="#38cab3" id="colorID" oninput="changePrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"  data-id7="transparentcolor"  name="lightPrimary">
											</div>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Primary</span>
											<div class="">
												<input class="wd-25 ht-25 input-dark-color-picker color-primary-dark" value="#38cab3" id="darkPrimaryColorID" oninput="darkPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary"  data-id8="transparentcolor" name="darkPrimary">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Reset All Styles</h4>
								<div class="skin-body">
									<div class="switch_section my-4">
										<button class="btn btn-danger btn-block"
											onclick="localStorage.clear();
											document.querySelector('html').style = '';
											names() ;
											resetData()"
											type="button">Reset All
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		<!-- END SWITCHER -->

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="https://php.spruko.com/nowa/nowa/assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<div class="square-box">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
		<div class="page" >
			<div class="row">
				<div class="d-flex">
					<a class="demo-icon new nav-link" href="javascript:void(0);">
						<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs fa-spin" width="24" height="24" viewBox="0 0 24 24"><path d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z"></path><path d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z"></path></svg>
					</a>
				</div>
			</div>
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main mx-auto my-auto py-4 justify-content-center">
							<div class="card-sigin">
								 <!-- Demo content-->
								 <div class="main-card-signin d-md-flex">
									 <div class="wd-100p">
										 <div class="">
											<div class="main-signup-header">
												<h2>Welcome back!</h2>
												<h6 class="font-weight-semibold mb-4">Please sign in to continue.</h6>
												<div class="panel panel-primary">
												   <div class=" tab-menu-heading mb-2 border-bottom-0">
													   <div class="tabs-menu1">
														   <ul class="nav panel-tabs">
															   <li class="me-2"><a href="#tab5" class="active" data-bs-toggle="tab">Email</a></li>
															   <li><a href="#tab6" data-bs-toggle="tab" class="">Mobile no</a></li>
														   </ul>
													   </div>
												   </div>
												   <div class="panel-body tabs-menu-body border-0 p-3">
													   <div class="tab-content">
														   <div class="tab-pane active" id="tab5">
																<form method="POST" action="{{ route('login') }}">
																	@csrf
																   <div class="form-group">
																	   <label>Email</label> <input class="form-control" placeholder="Enter your email" type="text" name="email" value="{{old('email')}}" required autofocus>
																   </div>
																   <div class="form-group">
																	   <label>Password</label> <input class="form-control" placeholder="Enter your password" type="password" name="password" required autocomplete="current-password" >
																   </div>
																   <button class="btn btn-primary btn-block" role="button">Sign In</button>
																</form>
														   </div>
														   <div class="tab-pane" id="tab6">
															   <div id="mobile-num" class="wrap-input100 validate-input input-group mb-2">
																   <a href="javascript:void(0);" class="input-group-text bg-white text-muted">
																	   <span>+91</span>
																   </a>
																   <input class="input100 form-control" type="mobile" placeholder="Mobile">
															   </div>
															   <div id="login-otp" class="justify-content-around mb-4">
																   <input class="form-control  text-center me-2" id="txt1" maxlength="1">
																   <input class="form-control  text-center me-2" id="txt2" maxlength="1">
																   <input class="form-control  text-center me-2" id="txt3" maxlength="1">
																   <input class="form-control  text-center" id="txt4" maxlength="1">
															   </div>
															   <span>Note : Login with registered mobile number to generate OTP.</span>
															   <div class="container-login100-form-btn mt-3">
																   <a href="javascript:void(0);" class="btn login100-form-btn btn-primary" id="generate-otp">
																		Proceed
																   </a>
															   </div>
														   </div>
													   </div>
												   </div>
											   </div>
											</div>
										 </div>
									 </div>
								 </div>
							 </div>
						 </div>
					</div>
				</div>
			</div>
		</div>

		        
        <!-- JQUERY JS -->
        <script src="../assets/plugins/jquery/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- MOMENT JS -->
        <script src="../assets/plugins/moment/moment.js"></script>

        <!-- EVA-ICONS JS -->
        <script src="../assets/js/eva-icons.min.js"></script>
        
        <!-- PERFECT SCROLLBAR JS-->
        <script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

        <!-- THEME COLOR JS -->
        <script src="../assets/js/themecolor.js"></script>

        <!-- CUSTOM JS -->
        <script src="../assets/js/custom.js"></script>

        <!-- SWITCHER JS -->
        <script src="../assets/switcher/js/switcher.js"></script>
		<!-- GENERATE-OTP JS -->
		<script src="../assets/js/generate-otp.js"></script>

	</body>

<!-- Mirrored from php.spruko.com/nowa/nowa/pages/signin.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Oct 2022 14:41:49 GMT -->
</html>
