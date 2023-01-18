<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from php.spruko.com/nowa/nowa/pages/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Oct 2022 14:38:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
	@include('dashboard.layouts.header')

	<body class="ltr main-body app sidebar-mini">

		<!-- SWITCHER -->
		    
        <div class="switcher-wrapper">
            <div class="demo_changer">
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
                                <h4>Navigation Style</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Vertical Menu</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Horizantal Click Menu</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch35" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Horizantal Hover Menu</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch111" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch111" class="onoffswitch2-label"></label>
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
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Light Primary</span>
                                            <div class="">
                                                <input class="wd-25 ht-25 input-color-picker color-primary-light" value="#38cab3" id="colorID" oninput="changePrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"  data-id7="transparentcolor"  name="lightPrimary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Dark Theme Style</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Dark Theme</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                            </p>
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
                                <h4>Transparent Style</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex mt-2 mb-3">
                                            <span class="me-auto">Transparent Theme</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitchTransparent" class="onoffswitch2-checkbox" >
                                                <label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Transparent Primary</span>
                                            <div class="">
                                                <input class="wd-30 ht-30 input-transparent-color-picker color-primary-transparent" value="#38cab3" id="transparentPrimaryColorID" oninput="transparentPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
                                            </div>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Transparent Background</span>
                                            <div class="">
                                                <input class="wd-30 ht-30 input-transparent-color-picker color-bg-transparent" value="#38cab3" id="transparentBgColorID" oninput="transparentBgColor()" type="color" data-id5="body" data-id6="theme"  data-id9="transparentcolor" name="transparentBackground">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Transparent Bg-Image Style</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">BG-Image Primary</span>
                                            <div class="">
                                                <input class="wd-30 ht-30 input-transparent-color-picker color-primary-transparent" value="#38cab3" id="transparentBgImgPrimaryColorID" oninput="transparentBgImgPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
                                            </div>
                                        </div>
                                        <div class="switch-toggle">
                                            <a class="bg-img1" onclick="bgImage(this)" href="javascript:void(0);"><img src="../assets/img/media/bg-img1.jpg" id="bgimage1" alt="switch-img"></a>
                                            <a class="bg-img2" onclick="bgImage(this)" href="javascript:void(0);"><img src="../assets/img/media/bg-img2.jpg"  id="bgimage2" alt="switch-img"></a>
                                            <a class="bg-img3" onclick="bgImage(this)" href="javascript:void(0);"><img src="../assets/img/media/bg-img3.jpg"  id="bgimage3" alt="switch-img"></a>
                                            <a class="bg-img4" onclick="bgImage(this)" href="javascript:void(0);"><img src="../assets/img/media/bg-img4.jpg"  id="bgimage4" alt="switch-img"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft leftmenu-styles">
                                <h4>Leftmenu Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Light Menu</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox"  checked>
                                                <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Color Menu</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Dark Menu</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Gradient Menu</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch25" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch25" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft header-styles">
                                <h4>Header Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Light Header</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox"  checked>
                                                <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Color Header</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Dark Header</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Gradient Header</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch26" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch26" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Layout Width Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Full Width</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Boxed</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Layout Positions</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Fixed</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Scrollable</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft vertical-switcher">
                                <h4>Sidemenu layout Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Default Menu</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                                <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Closed Menu</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch30" class="onoffswitch2-checkbox default-menu">
                                                <label for="myonoffswitch30" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Icon with Text</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Icon Overlay</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Hover Submenu</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch32" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch32" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Hover Submenu style 1</span>
                                            <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch33" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch33" class="onoffswitch2-label"></label>
                                            </p>
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

		<!-- Page -->
		<div class="page">
			<div>
				<!-- APP-HEADER -->
				<div class="main-header side-header sticky nav nav-item">
						<div class=" main-container container-fluid">
							<div class="main-header-left ">
								<div class="responsive-logo">
									<a href="index.html" class="header-logo">
										<img src="../assets/img/brand/logo.png" class="mobile-logo logo-1" alt="logo">
										<img src="../assets/img/brand/logo-white.png" class="mobile-logo dark-logo-1" alt="logo">
									</a>
								</div>
								<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
									<a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left" ></i></a>
									<a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
								</div>
								<div class="logo-horizontal">
									<a href="index.html" class="header-logo">
										<img src="../assets/img/brand/logo.png" class="mobile-logo logo-1" alt="logo">
										<img src="../assets/img/brand/logo-white.png" class="mobile-logo dark-logo-1" alt="logo">
									</a>
								</div>
								<div class="main-header-center ms-4 d-sm-none d-md-none d-lg-block form-group">
									<input class="form-control" placeholder="Search..." type="search">
									<button class="btn"><i class="fas fa-search"></i></button>
								</div>
							</div>
							<div class="main-header-right">
								<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical "></span>
								</button>
								<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
									<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
										<ul class="nav nav-item header-icons navbar-nav-right ms-auto">
											<li class="dropdown nav-item">
												<a class="new nav-link" data-bs-target="#country-selector" data-bs-toggle="modal" href="#"><svg class="header-icon-svgs" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm7.931 9h-2.764a14.67 14.67 0 0 0-1.792-6.243A8.013 8.013 0 0 1 19.931 11zM12.53 4.027c1.035 1.364 2.427 3.78 2.627 6.973H9.03c.139-2.596.994-5.028 2.451-6.974.172-.01.344-.026.519-.026.179 0 .354.016.53.027zm-3.842.7C7.704 6.618 7.136 8.762 7.03 11H4.069a8.013 8.013 0 0 1 4.619-6.273zM4.069 13h2.974c.136 2.379.665 4.478 1.556 6.23A8.01 8.01 0 0 1 4.069 13zm7.381 6.973C10.049 18.275 9.222 15.896 9.041 13h6.113c-.208 2.773-1.117 5.196-2.603 6.972-.182.012-.364.028-.551.028-.186 0-.367-.016-.55-.027zm4.011-.772c.955-1.794 1.538-3.901 1.691-6.201h2.778a8.005 8.005 0 0 1-4.469 6.201z"/></svg></a>
											</li>
											<li class="dropdown nav-item">
												<a class="new nav-link theme-layout nav-link-bg layout-setting" >
													<span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z"/></svg></span>
													<span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"/></svg></span>
												</a>
											</li>
											<li class="dropdown nav-item main-header-notification d-flex">
												<a class="new nav-link" data-bs-toggle="dropdown" href="javascript:void(0);">
													<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"/><circle cx="10.5" cy="19.5" r="1.5"/><circle cx="17.5" cy="19.5" r="1.5"/></svg>
													<span class="badge bg-warning header-badge">7</span>
												</a>
												<div class="dropdown-menu">
													<div class="menu-header-content text-start border-bottom">
														<div class="d-flex">
															<h6 class="dropdown-title mb-1 tx-15 font-weight-semibold">Shopping Cart</h6>
															<span class="badge badge-pill bg-indigo ms-auto my-auto float-end">Items (05)</span>
														</div>
													</div>
													<div class="main-cart-list cart-scroll">
														<div class="d-flex border-bottom main-cart-item">
															<div>
																<a class="d-flex p-3"  href="product-details.html">
																	<div class="drop-img cover-image" data-image-src="../assets/img/ecommerce/05.jpg">
																	</div>
																	<div class="ms-3 text-start">
																		<h5 class="mb-1 text-muted tx-13">Lence Camera</h5>
																		<div class="text-dark tx-semibold tx-12">1 * $ 189.00</div>
																	</div>
																</a>
															</div>
															<div class="ms-auto my-auto">
																<a href="javascript:void(0);" class="p-3">
																	<i class="fe fe-trash-2 text-end text-danger"></i>
																</a>
															</div>
														</div>
														<div class="d-flex border-bottom main-cart-item">
															<div>
																<a class="d-flex p-3"  href="product-details.html">
																	<div class="drop-img cover-image" data-image-src="../assets/img/ecommerce/02.jpg">
																	</div>
																	<div class="ms-3 text-start">
																		<h5 class="mb-1 text-muted tx-13">White Ear Buds</h5>
																		<div class="text-dark tx-semibold tx-12">3 * $ 59.00</div>
																	</div>
																</a>
															</div>
															<div class="ms-auto my-auto">
																<a href="javascript:void(0);" class="p-3">
																	<i class="fe fe-trash-2 text-end text-danger"></i>
																</a>
															</div>
														</div>
														<div class="d-flex border-bottom main-cart-item">
															<div>
																<a class="d-flex p-3"  href="product-details.html">
																	<div class="drop-img cover-image" data-image-src="../assets/img/ecommerce/12.jpg">
																	</div>
																	<div class="ms-3 text-start">
																		<h5 class="mb-1 text-muted tx-13">Branded Black Headset</h5>
																		<div class="text-dark tx-semibold tx-12">2 * $ 39.99</div>
																	</div>
																</a>
															</div>
															<div class="ms-auto my-auto">
																<a href="javascript:void(0);" class="p-3">
																	<i class="fe fe-trash-2 text-end text-danger"></i>
																</a>
															</div>
														</div>
														<div class="d-flex border-bottom main-cart-item">
															<div>
																<a class="d-flex p-3"  href="product-details.html">
																	<div class="drop-img cover-image" data-image-src="../assets/img/ecommerce/06.jpg">
																	</div>
																	<div class="ms-3 text-start">
																		<h5 class="mb-1 text-muted tx-13">Glass Decor Item</h5>
																		<div class="text-dark tx-semibold tx-12">5 * $ 5.99</div>
																	</div>
																</a>
															</div>
															<div class="ms-auto my-auto">
																<a href="javascript:void(0);" class="p-3">
																	<i class="fe fe-trash-2 text-end text-danger"></i>
																</a>
															</div>
														</div>
														<div class="d-flex border-bottom main-cart-item">
															<div>
																<a class="d-flex p-3"  href="product-details.html">
																	<div class="drop-img cover-image" data-image-src="../assets/img/ecommerce/04.jpg">
																	</div>
																	<div class="ms-3 text-start">
																		<h5 class="mb-1 text-muted tx-13">Pink Teddy Bear</h5>
																		<div class="text-dark tx-semibold tx-12">1 * $ 10.00</div>
																	</div>
																</a>
															</div>
															<div class="ms-auto my-auto">
																<a href="javascript:void(0);" class="p-3">
																	<i class="fe fe-trash-2 text-end text-danger"></i>
																</a>
															</div>
														</div>
													</div>
													<div class="dropdown-footer text-start">
														<a class="btn btn-primary btn-sm btn-w-md" href="check-out.html">Checkout</a>
														<span class="float-end mt-1 tx-semibold">Sub Total : $ 485.93</span>
													</div>
												</div>
											</li>
											<li class="dropdown nav-item  main-header-message ">
												<a class="new nav-link"  data-bs-toggle="dropdown" href="javascript:void(0);">
													<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"/></svg>
													<span class="badge bg-secondary header-badge">5</span>
												</a>
												<div class="dropdown-menu">
													<div class="menu-header-content text-start border-bottom">
														<div class="d-flex">
															<h6 class="dropdown-title mb-1 tx-15 font-weight-semibold">Messages</h6>
															<span class="badge badge-pill badge-warning ms-auto my-auto float-end">Mark All Read</span>
														</div>
														<p class="dropdown-title-text subtext mb-0 op-6 pb-0 tx-12 ">You have 4 unread messages</p>
													</div>
													<div class="main-message-list chat-scroll">
														<a href="chat.html" class="dropdown-item d-flex border-bottom">
															<div class="  drop-img  cover-image  " data-image-src="../assets/img/faces/3.jpg">
																<span class="avatar-status bg-teal"></span>
															</div>
															<div class="wd-90p">
																<div class="d-flex">
																	<h5 class="mb-0 name">Teri Dactyl</h5>
																</div>
																<p class="mb-0 desc">I'm sorry but i'm not sure how to help you with that......</p>
																<p class="time mb-0 text-start float-start ms-2 mt-2">Mar 15 3:55 PM</p>
															</div>
														</a>
														<a href="chat.html" class="dropdown-item d-flex border-bottom">
															<div class="drop-img cover-image" data-image-src="../assets/img/faces/2.jpg">
																<span class="avatar-status bg-teal"></span>
															</div>
															<div class="wd-90p">
																<div class="d-flex">
																	<h5 class="mb-0 name">Allie Grater</h5>
																</div>
																<p class="mb-0 desc">All set ! Now, time to get to you now......</p>
																<p class="time mb-0 text-start float-start ms-2 mt-2">Mar 06 01:12 AM</p>
															</div>
														</a>
														<a href="chat.html" class="dropdown-item d-flex border-bottom">
															<div class="drop-img cover-image" data-image-src="../assets/img/faces/9.jpg">
																<span class="avatar-status bg-teal"></span>
															</div>
															<div class="wd-90p">
																<div class="d-flex">
																	<h5 class="mb-0 name">Aida Bugg</h5>
																</div>
																<p class="mb-0 desc">Are you ready to pickup your Delivery...</p>
																<p class="time mb-0 text-start float-start ms-2 mt-2">Feb 25 10:35 AM</p>
															</div>
														</a>
														<a href="chat.html" class="dropdown-item d-flex border-bottom">
															<div class="drop-img cover-image" data-image-src="../assets/img/faces/12.jpg">
																<span class="avatar-status bg-teal"></span>
															</div>
															<div class="wd-90p">
																<div class="d-flex">
																	<h5 class="mb-0 name">John Quil</h5>
																</div>
																<p class="mb-0 desc">Here are some products ...</p>
																<p class="time mb-0 text-start float-start ms-2 mt-2">Feb 12 05:12 PM</p>
															</div>
														</a>
														<a href="chat.html" class="dropdown-item d-flex border-bottom">
															<div class="drop-img cover-image" data-image-src="../assets/img/faces/5.jpg">
																<span class="avatar-status bg-teal"></span>
															</div>
															<div class="wd-90p">
																<div class="d-flex">
																	<h5 class="mb-0 name">Liz Erd</h5>
																</div>
																<p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
																<p class="time mb-0 text-start float-start ms-2 mt-2">Jan 29 03:16 PM</p>
															</div>
														</a>
													</div>
													<div class="text-center dropdown-footer">
														<a class="btn btn-primary btn-sm btn-block text-center"  href="chat.html">VIEW ALL</a>
													</div>
												</div>
											</li>
											<li class="dropdown nav-item main-header-notification d-flex">
												<a class="new nav-link"  data-bs-toggle="dropdown" href="javascript:void(0);">
													<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"/></svg><span class=" pulse"></span>
												</a>
												<div class="dropdown-menu">
													<div class="menu-header-content text-start border-bottom">
														<div class="d-flex">
															<h6 class="dropdown-title mb-1 tx-15 font-weight-semibold">Notifications</h6>
															<span class="badge badge-pill badge-warning ms-auto my-auto float-end">Mark All Read</span>
														</div>
														<p class="dropdown-title-text subtext mb-0 op-6 pb-0 tx-12 ">You have 4 unread Notifications</p>
													</div>
													<div class="main-notification-list Notification-scroll">
														<a class="d-flex p-3 border-bottom" href="mail.html">
															<div class="notifyimg bg-pink">
																<i class="far fa-folder-open text-white"></i>
															</div>
															<div class="ms-3">
																<h5 class="notification-label mb-1">New files available</h5>
																<div class="notification-subtext">10 hour ago</div>
															</div>
															<div class="ms-auto" >
																<i class="las la-angle-right text-end text-muted"></i>
															</div>
														</a>
														<a class="d-flex p-3  border-bottom" href="mail.html">
															<div class="notifyimg bg-purple">
																<i class="fab fa-delicious text-white"></i>
															</div>
															<div class="ms-3">
																<h5 class="notification-label mb-1">Updates Available</h5>
																<div class="notification-subtext">2 days ago</div>
															</div>
															<div class="ms-auto" >
																<i class="las la-angle-right text-end text-muted"></i>
															</div>
														</a>
														<a class="d-flex p-3 border-bottom" href="mail.html">
															<div class="notifyimg bg-success">
																<i class="fa fa-cart-plus text-white"></i>
															</div>
															<div class="ms-3">
																<h5 class="notification-label mb-1">New Order Received</h5>
																<div class="notification-subtext">1 hour ago</div>
															</div>
															<div class="ms-auto" >
																<i class="las la-angle-right text-end text-muted"></i>
															</div>
														</a>
														<a class="d-flex p-3 border-bottom" href="mail.html">
															<div class="notifyimg bg-warning">
																<i class="far fa-envelope-open text-white"></i>
															</div>
															<div class="ms-3">
																<h5 class="notification-label mb-1">New review received</h5>
																<div class="notification-subtext">1 day ago</div>
															</div>
															<div class="ms-auto" >
																<i class="las la-angle-right text-end text-muted"></i>
															</div>
														</a>
														<a class="d-flex p-3 border-bottom" href="mail.html">
															<div class="notifyimg bg-danger">
																<i class="fab fa-wpforms text-white"></i>
															</div>
															<div class="ms-3">
																<h5 class="notification-label mb-1">22 verified registrations</h5>
																<div class="notification-subtext">2 hour ago</div>
															</div>
															<div class="ms-auto" >
																<i class="las la-angle-right text-end text-muted"></i>
															</div>
														</a>
														<a class="d-flex p-3 border-bottom" href="mail.html">
															<div class="">
																<i class="far fa-check-square text-white notifyimg bg-success"></i>
															</div>
															<div class="ms-3">
																<h5 class="notification-label mb-1">Project has been approved</h5>
																<span class="notification-subtext">4 hour ago</span>
															</div>
															<div class="ms-auto" >
																<i class="las la-angle-right text-end text-muted"></i>
															</div>
														</a>
													</div>
													<div class="dropdown-footer">
														<a class="btn btn-primary btn-sm btn-block" href="mail.html">VIEW ALL</a>
													</div>
												</div>
											</li>
											<li class="nav-item full-screen fullscreen-button">
												<a class="new nav-link full-screen-link" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z"/></svg></a>
											</li>
											<li class="dropdown main-header-message right-toggle">
												<a class="new nav-link nav-link pe-0" data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right">
													<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M4 6h16v2H4zm4 5h12v2H8zm5 5h7v2h-7z"/></svg>
												</a>
											</li>
											<li class="nav-link search-icon d-lg-none d-block">
												<form class="navbar-form" role="search">
													<div class="input-group">
														<input type="text" class="form-control" placeholder="Search">
														<span class="input-group-btn">
															<button type="reset" class="btn btn-default">
																<i class="fas fa-times"></i>
															</button>
															<button type="submit" class="btn btn-default nav-link resp-btn">
																<svg xmlns="http://www.w3.org/2000/svg" height="24px" class="header-icon-svgs" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
															</button>
														</span>
													</div>
												</form>
											</li>
											<li class="dropdown main-profile-menu nav nav-item nav-link ps-lg-2">
												<a class="new nav-link profile-user d-flex" href="#" data-bs-toggle="dropdown"><img alt="" src="../assets/img/faces/2.jpg" class=""></a>
												<div class="dropdown-menu">
													<div class="menu-header-content p-3 border-bottom">
														<div class="d-flex wd-100p">
															<div class="main-img-user"><img alt="" src="../assets/img/faces/2.jpg" class=""></div>
															<div class="ms-3 my-auto">
																<h6 class="tx-15 font-weight-semibold mb-0">Teri Dactyl</h6><span class="dropdown-title-text subtext op-6  tx-12">Premium Member</span>
															</div>
														</div>
													</div>
													<a class="dropdown-item" href="profile.html"><i class="far fa-user-circle"></i>Profile</a>
													<a class="dropdown-item" href="chat.html"><i class="far fa-smile"></i> chat</a>
													<a class="dropdown-item" href="mail-read.html"><i class="far fa-envelope "></i>Inbox</a>
													<a class="dropdown-item" href="mail.html"><i class="far fa-comment-dots"></i>Messages</a>
													<a class="dropdown-item" href="mail-settings.html"><i class="far fa-sun"></i>  Settings</a>
													<a class="dropdown-item" href="signup.html"><i class="far fa-arrow-alt-circle-left"></i> Sign Out</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="d-flex">
									<a class="demo-icon new nav-link" href="javascript:void(0);">
										<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs fa-spin" width="24" height="24" viewBox="0 0 24 24"><path d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z"/><path d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z"/></svg>
									</a>
								</div>
							</div>
						</div>
					</div>				<!-- /APP-HEADER -->
				
				@include('dashboard.layouts.sidebar')
				@yield('content')
				@include('dashboard.layouts.footer')

			</div>

			<!--APP-SIDEBAR-RIGHT-->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="panel panel-primary card mb-0 box-shadow">
					<div class="tab-menu-heading card-img-top-1 border-0 p-3">
						<div class="card-title mb-0">Notifications</div>
						<div class="card-options ms-auto">
							<a href="javascript:void(0);" class="sidebar-remove"><i class="fe fe-x"></i></a>
						</div>
					</div>
					<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
						<div class="tabs-menu ">
							<!-- Tabs -->
							<ul class="nav panel-tabs">
								<li class=""><a href="#side1" class="active" data-bs-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/></svg> Chat</a></li>
								<li><a href="#side2" data-bs-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"/></svg> Notifications</a></li>
								<li><a href="#side3" data-bs-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  class="side-menu__icon"  height="24" version="1.1" width="24"  viewBox="0 0 24 24"><path d="M12,2C6.48,2 2,6.48 2,12C2,17.52 6.48,22 12,22C17.52,22 22,17.52 22,12C22,6.48 17.52,2 12,2M7.07,18.28C7.5,17.38 10.12,16.5 12,16.5C13.88,16.5 16.5,17.38 16.93,18.28C15.57,19.36 13.86,20 12,20C10.14,20 8.43,19.36 7.07,18.28M18.36,16.83C16.93,15.09 13.46,14.5 12,14.5C10.54,14.5 7.07,15.09 5.64,16.83C4.62,15.5 4,13.82 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,13.82 19.38,15.5 18.36,16.83M12,6C10.06,6 8.5,7.56 8.5,9.5C8.5,11.44 10.06,13 12,13C13.94,13 15.5,11.44 15.5,9.5C15.5,7.56 13.94,6 12,6M12,11C11.17,11 10.5,10.33 10.5,9.5C10.5,8.67 11.17,8 12,8C12.83,8 13.5,8.67 13.5,9.5C13.5,10.33 12.83,11 12,11Z" /></svg> Friends</a></li>
						</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active " id="side1">
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-primary brround avatar-md">CH</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>New Websites is Created</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">30 mins ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-danger brround avatar-md">N</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare For the Next Project</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">2 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-info brround avatar-md">S</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Decide the live Discussion</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">3 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-warning brround avatar-md">K</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Meeting at 3:00 pm</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">4 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-success brround avatar-md">R</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">1 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-pink brround avatar-md">MS</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">1 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-purple brround avatar-md">L</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">45 mintues ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center p-3">
									<div class="">
										<span class="avatar bg-secondary brround avatar-md">U</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">2 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="tab-pane  " id="side2">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/1.jpg"></span>
										</div>
										<div>
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 mintues ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/8.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/11.jpg"></span>
										</div>
										<div>
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/6.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 mintues ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> Hey! there I' am available....
											<div class="small text-muted">
												12 mintues ago
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane  " id="side3">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/11.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/13.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" ><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/4.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/7.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" ><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/2.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" ><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/11.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/9.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/4.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			<!--/APP-SIDEBAR-RIGHT-->

			

		</div>
		<!-- End Page -->

		
		
		
	</body>

<!-- Mirrored from php.spruko.com/nowa/nowa/pages/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Oct 2022 14:39:58 GMT -->
</html>