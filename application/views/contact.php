<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<!-- Mirrored from data.themeim.com/html/rulify/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 07:30:47 GMT -->

<head>
    <meta charset="utf-8">
    <title>True and Trade</title>
    <!-- Stylesheets -->

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">
    <?php require('components/css.php'); ?>

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <div class="page-wrapper">


        <script type="text/javascript">
        <?php if($this->session->flashdata('emailsuccess')){ ?>
        Swal.fire({
            title: 'Success',
            text: 'Mail sent sucessfully!',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
        <?php }else if($this->session->flashdata('emailerror')){  ?>
        Swal.fire({
            title: 'Error!',
            text: 'Something went wrong!',
            icon: 'error',
            confirmButtonText: 'Cool'
        })
        <?php } ?>
        </script>

        <!-- Cursor -->
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
        <!-- Cursor End -->

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- End Preloader -->
        <?php require('components/nav.php'); ?>
        <!-- Main Header -->

        <!-- End Main Header -->


        <main>

 





            <!-- Page Title -->
            <section class="page-title" style="background-image:url(assets/images/background/1.jpg)">
                <div class="page-title_pattern"
                    style="background-image:url(assets/images/background/page-title_pattern.png)"></div>
                <div class="page-title_gradient"></div>
                <div class="auto-container">
                    <h2>Contact Us Now!</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?php echo base_url(); ?>"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </section>
            <!-- End Page Title -->

            <!-- Contact One -->
            <section class="contact-one">
                <div class="auto-container">
                    <div class="row clearfix">
                        <!-- Column -->
                        <div class="contact-one_title-column col-lg-6 col-md-12 col-sm-12">
                            <div class="sec-title">
                                <div class="sec-title_title">CONTACT DETAILS</div>
                           
                            </div>
                            <ul class="contact-one_list">
                                <li>
                                    <i class="fa-solid fa-location-dot fa-fw"></i>
                                    Address
                                    <strong >247-3, Palaniammal Complex, 1st Floor, Opp to Aanandham Hotel, Pollachi Main Road, Sundarapuram, Coimbatore - <span style="white-space: nowrap;">641 024</span>, Tamil Nadu, India.</strong>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone fa-fw"></i>
                                    Phone
                                    <strong>98426 26444,  99650 90333</strong>
                                </li>
                                <li>
                                <i class="fa-solid fa-fax fa-fw"></i>

                                    Landline
                                    <strong>0422 2677111</strong>
                                </li>
                                <li>
                                    <i class="fa-solid fa-envelope fa-fw"></i>
                                    Email
                                    <strong><a href="mailto:trueandtrademd@gmail.com"><span >trueandtrademd@gmail.com</span></a></strong>


                                </li>
                            </ul>
                        </div>
                        <!-- Column -->
                        <div class="contact-one_form-column col-lg-6 col-md-12 col-sm-12">
                            <div class="contact-one_form-outer">
                                <h2>Get a Free Quote</h2>

                                <div class="default-form style-two contact-form">
                                    <form method="post" method="POST"
                                        action="<?php echo base_url(); ?>welcome/send_mail">
                                        <div class="row clearfix">
                                            <!--Form Group-->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                <input type="text" name="name" value="" placeholder="Name" required>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                <input type="email" name="email" value="" placeholder="Email" required>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                <input type="text" name="number" value="" placeholder="Phone" required>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                <input type="text" name="service" value="" placeholder="Service"
                                                    required>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea class="" name="message"
                                                    placeholder="Write a Message"></textarea>
                                            </div>

                                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                <input type="hidden" name="active" value="<?php echo $active; ?>" >
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        

                                                <input class="theme-btn btn-style-one" value="SUBMIT MESSAGE"
                                                    name="submit" title="Click here to submit your message !"
                                                    type="submit">

                                            </div>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact One -->

            <!-- Map One -->
            <section class="map-one style-two">
                <div class="map-one_map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.12296697159!2d76.97149187573734!3d10.954082855890283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85a30c605229b%3A0x183982f139cdbde5!2sTrue%20%26%20Trade%20Associates!5e0!3m2!1sen!2sin!4v1736245010842!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            <!-- End Map One -->
            <!-- CTA One -->
            <?php require('components/cta.php'); ?>

            <!-- End CTA One -->
        </main>


        <?php require('components/footer.php'); ?>



    </div>
    <!-- End PageWrapper -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>


    <?php require('components/js.php'); ?>

</body>

<!-- Mirrored from data.themeim.com/html/rulify/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 07:31:39 GMT -->

</html>