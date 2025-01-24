<?php
   $active = basename($_SERVER['PHP_SELF']); //get active page from url
?>


<header class="main-header header-style-three">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box d-flex align-items-center flex-wrap">
                        <!-- Info List -->
                        <ul class="header-top_list">
                            <li><span class="icon"><img src="assets/images/icons/map.svg" alt="" /></span><a
                                    href="<?php echo base_url(); ?>contact">Find Us Now!</a></li>
                            <li><span class="icon"><img src="assets/images/icons/envelope.svg" alt="" /></span><a href="mailto:trueandtrade@gmail.com"><span >trueandtrade@gmail.com</span></a>
                            </li>
                            <li><span class="icon"><img src="assets/images/icons/clock.svg" alt="" /></span>Mon - Sat:
                                9.30am to 6.30pm</li>
                        </ul>
                    </div>
                    <div class="header-social_box">
                        <a class="fa-brands fa-facebook-f fa-fw" href="https://www.facebook.com/"></a>
                        <a class="fa-brands fa-instagram fa-fw" href="https://www.instagram.com/"></a>
                        <a class="fa-brands fa-linkedin-in fa-fw" href="https://www.linkedin.com/"></a>
                        <a class="fa-brands fa-youtube fa-fw" href="https://www.youtube.com/"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <div class="nav-outer d-flex flex-wrap custom-width-for-nav">
                        <div class="logo-box">
                            <div class="logo"><a href="<?php echo base_url(); ?>"><img src="assets/images/logo.png" alt=""
                                        title=""></a></div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="index"><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li class="about"><a href="<?php echo base_url(); ?>about">About</a></li>
                                    <li class="clients"><a href="<?php echo base_url(); ?>clients">Clients</a>

                                    </li>
                                    <li class="dropdown"><a href="<?php echo base_url(); ?>services">services</a>
                                        <ul>
                                        <li><a href="<?php echo base_url(); ?>trademark-registration">Trademark Registration</a></li>
                                        <li><a href="<?php echo base_url(); ?>patent-registration">Patent Registration</a></li>
                                        <li><a href="<?php echo base_url(); ?>copyright-registration">Copyright Registration</a></li>
                                        <li><a href="<?php echo base_url(); ?>design-registration">Design Registration</a></li>
                                        <li class="dropdown"><a href="<?php echo base_url(); ?>services">Other Services</a>

													<ul>
														<li><a href="<?php echo base_url(); ?>international-trademark-registration">International TM Registration</a></li>
														<li><a href="<?php echo base_url(); ?>msme-registration">MSME Registration</a></li>
                                                        <li><a href="<?php echo base_url(); ?>barcode-registration">Barcode Registration</a></li>
														<li><a href="<?php echo base_url(); ?>fssai-registration">FSSAI Certificate</a></li>
														<li><a href="<?php echo base_url(); ?>iso-registration">ISO Registration</a></li>
														<li><a href="<?php echo base_url(); ?>gst-registration">GST Registration</a></li>
														<li><a href="<?php echo base_url(); ?>partnership-deed-registration">Partnership Deed </a></li>
														<li><a href="<?php echo base_url(); ?>halal-registration">Halal Certificate</a></li>
														<li><a href="<?php echo base_url(); ?>private-limited-registration">Private Limited</a></li>
														<li><a href="<?php echo base_url(); ?>import-and-export-registration">Import and Export Licence</a></li>
														<li><a href="<?php echo base_url(); ?>pf-registration">PF Registration</a></li>
														<li><a href="<?php echo base_url(); ?>esi-registration">ESI Registration</a></li>
                                                        
													</ul>
                                                    </li>
                                        </ul>
                                    </li>

                                    <li class="contact"><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>

                          <!-- Main Menu End-->
                          <div class="outer-box d-flex align-items-center flex-wrap custom-display-none">
                            <!-- Search Btn -->
                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        </div>
                    </div>

            

                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-close-1"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="<?php echo base_url(); ?>"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->


       <!-- Mobile Menu  -->
       <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-close-1"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="<?php echo base_url(); ?>"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>