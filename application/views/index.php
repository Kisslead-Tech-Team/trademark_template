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
<div class="page-wrapper">
	
	<!-- Cursor -->
	<div class="cursor"></div>
	<div class="cursor-follower"></div>
	<!-- Cursor End -->
 	
	<!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
    <?php require('components/homenav.php'); ?>
	<!-- Main Header -->

	<!-- End Main Header -->


    <main>		<!-- Offcanvas Area Start -->


	<!-- Slider One -->
	<section class="slider-one">
		<div class="slider-one_pattern" style="background-image:url(assets/images/main-slider/pattern-1.png)"></div>
		<div class="slider-one_pattern-two" style="background-image:url(assets/images/main-slider/pattern-2.png)"></div>
		<div class="main-slider swiper-container">
			<div class="swiper-wrapper">

				<!-- Slide -->
				<div class="swiper-slide">
					<div class="auto-container">
						<div class="row clearfix">

							<!-- Content Column -->
							<div class="slider-one_content col-lg-6 col-md-12 col-sm-12">
								<div class="slider-one_content-inner">
									<h1 class="slider-one_heading"><span>Unveiling</span> Patents, Trademarks & Copyrights</h1>
									<div class="slider-one_text">Understanding the unique roles of patents, trademarks, and copyrights in protecting intellectual property.</div>
									<div class="slider-one_button">
										<a href="<?php echo base_url(); ?>contact" class="theme-btn btn-style-one">
											<span class="btn-wrap">
												<span class="text-one">Find Out More <i class="fa-solid fa-angle-right fa-fw"></i></span>
												<span class="text-two">Find Out More <i class="fa-solid fa-angle-right fa-fw"></i></span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<!-- Image Column -->
							<div class="slider-one_image-column col-lg-6 col-md-12 col-sm-12">
							
								<div class="slider-one_image-inner">
									<div class="slider-one_image">
										<img src="assets/images/main-slider/image-1.png" alt="" />
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>



			</div>
			<!-- Slider One Arrows -->
			<!-- <div class="slider-one-arrow">
				<div class="main-slider-prev fas fa-arrow-left fa-fw"></div>
				<div class="main-slider-next fas fa-arrow-right fa-fw"></div>
			</div> -->
			<!-- Slider One Info -->
		
			<!-- Scroll Down -->
			<div class="slider-one_scroll-down scroll-to-target" data-target=".services-one">
				<img src="assets/images/main-slider/scroll-down.png" alt="" />
			</div>
		</div>
	</section>
	<!-- End Main Slider Section -->


	<!-- Services One -->
	<section class="services-one">
		<div class="auto-container">
			<div class="sec-title title-anim centered">
				<div class="sec-title_title">SERVICES</div>
				<h2 class="sec-title_heading">Our Main Services</h2>
			</div>
			<div class="services-one_carousel swiper-container">
				<div class="swiper-wrapper">
	
					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Service Block One -->
						<div class="service-block_one">
							<div class="service-block_one-inner">
								<div class="service-block_one-hover"></div>
								<div class="service-block_one_pattern" style="background-image:url(assets/images/background/service-one_pattern.png)"></div>
								<div class="service-block_one-background"></div>
								<div class="service-block_one-icon icon-controlxpert_svgrepocom"></div>
								<h4 class="service-block_one-heading"><a href="<?php echo base_url(); ?>trademark-registration">Trademark Registration</a></h4>
								<div class="service-block_one-text">Trademark registration legally protects a brand's name, logo, or symbol, granting exclusive rights and preventing unauthorized use.</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Service Block One -->
						<div class="service-block_one">
							<div class="service-block_one-inner">
								<div class="service-block_one-hover"></div>
								<div class="service-block_one_pattern" style="background-image:url(assets/images/background/service-one_pattern.png)"></div>
								<div class="service-block_one-background"></div>
								<div class="service-block_one-icon icon-controlxpert_svgrepocom-1"></div>
								<h4 class="service-block_one-heading"><a href="<?php echo base_url(); ?>patent-registration">Patent Registration</a></h4>
								<div class="service-block_one-text">Patent registration grants exclusive rights to an inventor for their invention, preventing others from making, using, or selling it without permission.</div>
							</div>
						</div>
					</div>
	
					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Service Block One -->
						<div class="service-block_one">
							<div class="service-block_one-inner">
								<div class="service-block_one-hover"></div>
								<div class="service-block_one_pattern" style="background-image:url(assets/images/background/service-one_pattern.png)"></div>
								<div class="service-block_one-background"></div>
								<div class="service-block_one-icon icon-controlxpert_svgrepocom-2"></div>
								<h4 class="service-block_one-heading"><a href="<?php echo base_url(); ?>copyright-registration">Copyright Registration</a></h4>
								<div class="service-block_one-text">Copyright registration provides legal protection for original works, granting creators exclusive rights to reproduce, distribute, and display their work.</div>
							</div>
						</div>
					</div>

				</div>
				<!-- Slider One Arrows -->
				<div class="services-one-arrow">
					<!-- If we need navigation buttons -->
					<div class="services-one_carousel-prev fa-solid fa-angle-left fa-fw"></div>
					<div class="services-one_carousel-next fa-solid fa-angle-right fa-fw"></div>
				</div>
				<div class="services-one_carousel-pagination"></div>
			</div>

		</div>
	</section>
	<!-- End Services One -->

	<!-- About One -->
	<section class="about-one">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Title Column -->
				<div class="about-one_title-column col-lg-5 col-md-12 col-sm-12">
					<div class="about-one_title-outer">
						<div class="sec-title title-anim">
							<div class="sec-title_title">about us</div>
							<h2 class="sec-title_heading">Our Story in Intellectual Property</h2>
							<div class="sec-title_text">Established in 2006, True and Trade Associates started as a small consultancy and has evolved into one of the leading Intellectual Property firms in and around Coimbatore.</div>
						</div>
						<ul class="about-one_list">
							<li><i class="fa-solid fa-circle-check fa-fw"></i>Expertise in Patent Protection</li>
							<li><i class="fa-solid fa-circle-check fa-fw"></i>Commitment to Excellence</li>
							<li><i class="fa-solid fa-circle-check fa-fw"></i>Collaborative Partnership</li>
						</ul>
						<div class="about-one_button">
							<a href="<?php echo base_url(); ?>about" class="theme-btn btn-style-one">
								<span class="btn-wrap">
									<span class="text-one">Find Out More <i class="fa-solid fa-angle-right fa-fw"></i></span>
									<span class="text-two">Find Out More <i class="fa-solid fa-angle-right fa-fw"></i></span>
								</span>
							</a>
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="about-one_content-column col-lg-7 col-md-12 col-sm-12">
					<div class="about-one_content-outer">
						<div class="about-one_experiance" data-parallax='{"y" : 40}'>
							<span class="odometer" data-count="17"></span><i>+</i>
							<div class="about-one_experiance-text">Years of Experiences</div>
						</div>
						<div class="row clearfix">
							<!-- Column -->
							<div class="column col-lg-8 col-md-8 col-sm-8">
								<div class="about-one_image skewElem">
									<img src="assets/images/resource/about-1.jpg" alt="" />
								</div>
							</div>
							<!-- Column -->
							<div class="column col-lg-4 col-md-4 col-sm-4">
								<!-- About One Counter Count -->
						
								<!-- About One Counter Count -->
								<div class="about-one_counter-count">
									<span class="odometer" data-count="6500"></span><i>+</i>
									<h5 class="about-one_counter-heading">Happy Customers</h5>
									<div class="about-one_counter-text">We prioritize our clients' success, ensuring personalized support and expert guidance every step of the way.

</div>
								</div>
								<!-- About One Counter Count -->
								<div class="about-one_counter-count">
									<span class="odometer" data-count="99"></span><i>%</i>
									<h5 class="about-one_counter-heading">Case Success Rate</h5>
									<div class="about-one_counter-text">With vast experience across various industries, we provide tailored solutions to meet each client's unique needs.</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End About One -->

	<!-- Services Two -->
	<section class="services-two">
		<div class="auto-container">
			<div class="sec-title light centered">
				<div class="sec-title_title title-anim">practice area</div>
				<h2 class="sec-title_heading">Explore Creative Legal <br> <span>Protections</span></h2>
			</div>
			<div class="row clearfix">

				<!-- Service Block Two -->
				<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_two-image" style="background-image:url(assets/images/resource/small/trademark.jpg"></div>
						<div class="upper-box">
							<div class="d-flex justify-content-between flex-wrap">
								<div class="service-block_two-number">01</div>
								<div class="service-block_two-icon icon-Frame"></div>
							</div>
							<h4 class="service-block_two-heading"><a href="<?php echo base_url(); ?>trademark-registration">Trademark Registration</a></h4>
							<div class="service-block_two-text">Trademark registration legally protects a brand's name, logo, or symbol, granting exclusive rights and preventing unauthorized use.</div>
						</div>
						<div class="lower-box">
							<div class="d-flex justify-content-between align-items-center flex-wrap">
								<a class="service-block_two-arrow icon-Frame" href="<?php echo base_url(); ?>trademark-registration"></a>
								<a class="service-block_two-more" href="<?php echo base_url(); ?>trademark-registration">Know More</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_two-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_two-image" style="background-image:url(assets/images/resource/small/patent.jpg)"></div>
						<div class="upper-box">
							<div class="d-flex justify-content-between flex-wrap">
								<div class="service-block_two-number">02</div>
								<div class="service-block_two-icon icon-controlxpert_svgrepocom-3"></div>
							</div>
							<h4 class="service-block_two-heading"><a href="<?php echo base_url(); ?>patent-registration">Patent Registration</a></h4>
							<div class="service-block_two-text">Patent registration grants exclusive rights to an inventor for their invention, preventing others from making, using, or selling it without permission.</div>
						</div>
						<div class="lower-box">
							<div class="d-flex justify-content-between align-items-center flex-wrap">
								<a class="service-block_two-arrow icon-controlxpert_svgrepocom-3" href="<?php echo base_url(); ?>patent-registration"></a>
								<a class="service-block_two-more" href="<?php echo base_url(); ?>patent-registration">Know More</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_two-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_two-image" style="background-image:url(assets/images/resource/small/copyright.jpg)"></div>
						<div class="upper-box">
							<div class="d-flex justify-content-between flex-wrap">
								<div class="service-block_two-number">03</div>
								<div class="service-block_two-icon icon-controlxpert_svgrepocom-4"></div>
							</div>
							<h4 class="service-block_two-heading"><a href="<?php echo base_url(); ?>copyright-registration">Copyright Registration</a></h4>
							<div class="service-block_two-text">Copyright registration provides legal protection for original works, granting the creator exclusive rights to reproduce, distribute, and display them.</div>
						</div>
						<div class="lower-box">
							<div class="d-flex justify-content-between align-items-center flex-wrap">
								<a class="service-block_two-arrow icon-controlxpert_svgrepocom-4" href="<?php echo base_url(); ?>copyright-registration"></a>
								<a class="service-block_two-more" href="<?php echo base_url(); ?>copyright-registration">Know More</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_two-image" style="background-image:url(assets/images/resource/small/design.jpg)"></div>
						<div class="upper-box">
							<div class="d-flex justify-content-between flex-wrap">
								<div class="service-block_two-number">04</div>
								<div class="service-block_two-icon icon-Frameee"></div>
							</div>
							<h4 class="service-block_two-heading"><a href="<?php echo base_url(); ?>design-registration">Design Registration</a></h4>
							<div class="service-block_two-text">Design registration protects the unique visual design of a product, granting exclusive rights to the creator and preventing unauthorized copying or use.</div>
						</div>
						<div class="lower-box">
							<div class="d-flex justify-content-between align-items-center flex-wrap">
								<a class="service-block_two-arrow icon-Frameee" href="<?php echo base_url(); ?>design-registration"></a>
								<a class="service-block_two-more" href="<?php echo base_url(); ?>design-registration">Know More</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_two-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_two-image" style="background-image:url(assets/images/resource/small/international.jpg)"></div>
						<div class="upper-box">
							<div class="d-flex justify-content-between flex-wrap">
								<div class="service-block_two-number">05</div>
								<div class="service-block_two-icon icon-controlxpert_svgrepocom-6"></div>
							</div>
							<h4 class="service-block_two-heading"><a href="<?php echo base_url(); ?>international-trademark-registration">International TM Registration</a></h4>
							<div class="service-block_two-text">International trademark registration safeguards a trademark across multiple countries through a single application, simplifying global protection.</div>
						</div>
						<div class="lower-box">
							<div class="d-flex justify-content-between align-items-center flex-wrap">
								<a class="service-block_two-arrow icon-controlxpert_svgrepocom-6" href="<?php echo base_url(); ?>international-trademark-registration"></a>
								<a class="service-block_two-more" href="<?php echo base_url(); ?>international-trademark-registration">Know More</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_two-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_two-image" style="background-image:url(assets/images/resource/small/udyam.jpg)"></div>
						<div class="upper-box">
							<div class="d-flex justify-content-between flex-wrap">
								<div class="service-block_two-number">06</div>
								<div class="service-block_two-icon icon-controlxpert_svgrepocom-7"></div>
							</div>
							<h4 class="service-block_two-heading"><a href="<?php echo base_url(); ?>msme-registration">MSME Registration</a></h4>
							<div class="service-block_two-text">MSME registration recognizes small and medium enterprises, providing access to government schemes, benefits, and financial support.</div>
						</div>
						<div class="lower-box">
							<div class="d-flex justify-content-between align-items-center flex-wrap">
								<a class="service-block_two-arrow icon-controlxpert_svgrepocom-7" href="<?php echo base_url(); ?>msme-registration"></a>
								<a class="service-block_two-more" href="<?php echo base_url(); ?>msme-registration">Know More</a>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="service-one_button text-center">
				<a href="<?php echo base_url(); ?>services" class="theme-btn btn-style-one">
					<span class="btn-wrap">
						<span class="text-one">Find Out More <i class="fa-solid fa-angle-right fa-fw"></i></span>
						<span class="text-two">Find Out More <i class="fa-solid fa-angle-right fa-fw"></i></span>
					</span>
				</a>
			</div>

		</div>
	</section>
	<!-- End Services Two -->

	<!-- Testimonial One -->
	<section class="testimonial-one">
		<div class="auto-container">
			<div class="testimonial-one_carousel swiper-container">
				<div class="swiper-wrapper">
	
					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Testimonial Block One -->
						<div class="testimonial-block_one">
							<div class="testimonial-block_one-inner">
								<div class="row clearfix">
									
									<!-- Image Column -->
									<div class="testimonial-block_one-image-column col-lg-4 col-md-4 col-sm-12">
										<div class="testimonial-block_one-image-outer">
											<div class="testimonial-block_one-image">
												<div class="testimonial-block_one-quote fa-solid fa-quote-left fa-fw"></div>
												<img src="assets/images/resource/testimonial-1.jpg" alt="" />
											</div>
										</div>
									</div>

									<!-- Content Column -->
									<div class="testimonial-block_one-content-column col-lg-8 col-md-8 col-sm-12">
										<div class="testimonial-block_one-content-outer">
											<div class="testimonial-block_one-rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="testimonial-block_one-text">I recommend TRUEANDTRADE. Very professional s and easy for me Company Registration, GST Registration & Trademark Registration services. I thanks Mrs Mangayarkarasi C, is Well-Coordinated, On time response, Excellence services in advising customer for processing requirements. She made it easy for me. Thanks.</div>
											<div class="testimonial-block_one-author">
												Rajendra
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>



						<!-- Slide -->
						<div class="swiper-slide">
						<!-- Testimonial Block One -->
						<div class="testimonial-block_one">
							<div class="testimonial-block_one-inner">
								<div class="row clearfix">
									
									<!-- Image Column -->
									<div class="testimonial-block_one-image-column col-lg-4 col-md-4 col-sm-12">
										<div class="testimonial-block_one-image-outer">
											<div class="testimonial-block_one-image">
												<div class="testimonial-block_one-quote fa-solid fa-quote-left fa-fw"></div>
												<img src="assets/images/resource/testimonial-2.jpg" alt="" />
											</div>
										</div>
									</div>

									<!-- Content Column -->
									<div class="testimonial-block_one-content-column col-lg-8 col-md-8 col-sm-12">
										<div class="testimonial-block_one-content-outer">
											<div class="testimonial-block_one-rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="testimonial-block_one-text">I recently contacted TrueandTrade for trademark registration process and I got to work with Mrs Mangayarkarasi C. She was really professional and kind and explained me everything in detail. I had to do no work at all because he and TrueandTrade took care of everything. They provide really nice services.</div>
											<div class="testimonial-block_one-author">
											Ishita Bhattacharya
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
	<!-- Slide -->
	<div class="swiper-slide">
						<!-- Testimonial Block One -->
						<div class="testimonial-block_one">
							<div class="testimonial-block_one-inner">
								<div class="row clearfix">
									
									<!-- Image Column -->
									<div class="testimonial-block_one-image-column col-lg-4 col-md-4 col-sm-12">
										<div class="testimonial-block_one-image-outer">
											<div class="testimonial-block_one-image">
												<div class="testimonial-block_one-quote fa-solid fa-quote-left fa-fw"></div>
												<img src="assets/images/resource/testimonial-1.jpg" alt="" />
											</div>
										</div>
									</div>

									<!-- Content Column -->
									<div class="testimonial-block_one-content-column col-lg-8 col-md-8 col-sm-12">
										<div class="testimonial-block_one-content-outer">
											<div class="testimonial-block_one-rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="testimonial-block_one-text">I Highly recommend Trueandtrade. Very professional organization and they take care of customer requirements with excellence. Happy with Mangayarkarasi C who managed my account and got our trademark process completed without any problem. Thanks👍</div>
											<div class="testimonial-block_one-author">
												
Sanjay Gurnule
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
			

				</div>

				<!-- Testimonial One Arrows -->
				<div class="testimonial-one-arrow">
					<div class="testimonial-one_carousel-pagination"></div>
					<!-- If we need navigation buttons -->
					<div class="testimonial-one_carousel-prev fa-solid fa-angle-left fa-fw"></div>
					<div class="testimonial-one_carousel-next fa-solid fa-angle-right fa-fw"></div>
				</div>

			</div>
			
		</div>
	</section>
	<!-- End Testimonial One -->

	<!-- Team One -->
	<section class="team-one">
		<div class="auto-container">
			<div class="sec-title">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="left-box title-anim">
						<div class="sec-title_title">our team</div>
						<h2 class="sec-title_heading">expert team members</h2>
					</div>
					<div class="team-one_button title-anim">
						<a href="<?php echo base_url(); ?>about" class="theme-btn btn-style-one">
							<span class="btn-wrap">
								<span class="text-one">Find Out More <i class="fa-solid fa-angle-right fa-fw"></i></span>
								<span class="text-two">Find Out More <i class="fa-solid fa-angle-right fa-fw"></i></span>
							</span>
						</a>
					</div>
				</div>
			</div>
			<div class="team-one_carousel swiper-container">
				<div class="swiper-wrapper">
	
					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Team Block One -->
						<div class="team-block_one">
							<div class="team-block_one-inner">
								<div class="team-block_one-image">
									<img src="assets/images/resource/team-1.jpg" alt="" />
								</div>
								<div class="team-block_one-content">
									<h4 class="team-block_one-heading">Marget M. Hason</h4>
									<div class="team-block_one-designation">Patent Lawyer</div>

								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Team Block One -->
						<div class="team-block_one">
							<div class="team-block_one-inner">
								<div class="team-block_one-image">
									<img src="assets/images/resource/team-2.jpg" alt="" />
								</div>
								<div class="team-block_one-content">
									<h4 class="team-block_one-heading">Evan S. Sherman</h4>
									<div class="team-block_one-designation">Trademark Lawyer</div>
									
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Team Block One -->
						<div class="team-block_one">
							<div class="team-block_one-inner">
								<div class="team-block_one-image">
									<img src="assets/images/resource/team-3.jpg" alt="" />
								</div>
								<div class="team-block_one-content">
									<h4 class="team-block_one-heading">Evan S. Sherman</h4>
									<div class="team-block_one-designation">Copyright Lawyer</div>
									
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- Team One Arrows -->
				<div class="team-one-arrow">
					<!-- If we need navigation buttons -->
					<div class="team-one_carousel-prev fa-solid fa-angle-left fa-fw"></div>
					<div class="team-one_carousel-next fa-solid fa-angle-right fa-fw"></div>
				</div>
				<div class="team-one_carousel-pagination"></div>

			</div>

		</div>
	</section>
	<!-- End Team One -->

	<!-- Fluid One -->
	<section class="fluid-one">
		<div class="fluid-one_curve"></div>
		<div class="fluid-one_curve-two"></div>
		<div class="auto-container">
			<div class="clearfix">
				<!-- Left Column -->
				<div class="left-column clearfix">
					<div class="inner-column">
						<div class="fluid-one_pattern"></div>
						<!-- Sec Title -->
						<div class="sec-title light title-anim">
							<div class="sec-title_title">contact us</div>
							<h2 class="sec-title_heading">Get a Free Quote</h2>
						</div>

						<div class="default-form">
						<form method="post" method="POST" action="<?php echo base_url(); ?>welcome/send_mail" >
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
										<input type="text" name="service" value="" placeholder="Service" required>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea class="" name="message" placeholder="Write a Message"></textarea>
									</div>

									<div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                <input type="hidden" name="active" value="<?php echo $active; ?>" >
                                            </div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
								
										<input class="theme-btn btn-style-one" value="SUBMIT MESSAGE" name="submit"  title="Click here to submit your message !" type="submit">

									</div>
									
								</div>
							</form>
						</div>

					</div>
				</div>
				<!-- Right Column -->
				<div class="right-column clearfix">
					<div class="inner-column">
						<div class="sec-title title-anim">
							<div class="sec-title_title">General questions</div>
							<h2 class="sec-title_heading">Frequently Asked Question.</h2>
							<div class="sec-title_text">We are a team of dedicated patent professional united by our commitment to excellence.</div>
						</div>

						<!-- Accordion Box -->
						<ul class="accordion-box">
							
							<!-- Block -->
							<li class="accordion block active-block">
								<div class="acc-btn active"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>Q: What is a trademark?</div>
								<div class="acc-content current">
									<div class="content">
										<p>A trademark is a distinctive marker that distinguishes products or services from competitors. It can include symbols, designs, expressions, or identifiable features associated with a specific brand.</p>
									</div>
								</div>
							</li>
										
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>Q: What is a Patent?</div>
								<div class="acc-content">
									<div class="content">
										<p>A patent is a legal document granting exclusive rights to inventors to protect their innovations, preventing others from using, selling, or making the invention without permission.</p>
									</div>
								</div>
							</li>

							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>Q: What is the difference between Copyright registration and trademark registration?</div>
								<div class="acc-content">
									<div class="content">
										<p>Trademark registration protects the brand name, logo the slogan whereas copyright protection is provided to literary works, music, videos, slogans, and artistic contents.</p>
									</div>
								</div>
							</li>

						</ul>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Fluid One -->


	<!-- Clients One -->
	<section class="clients-one ">
		<div class="auto-container">
			<div class="clients-one_slider swiper-container">
				<div class="swiper-wrapper">
					
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/1.png" alt="" />
						</div>
					</div>


						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/2.png" alt="" />
						</div>
					</div>

						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/3.png" alt="" />
						</div>
					</div>


						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/4.png" alt="" />
						</div>
					</div>


						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/5.png" alt="" />
						</div>
					</div>

						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/6.png" alt="" />
						</div>
					</div>

						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/7.png" alt="" />
						</div>
					</div>

						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/8.png" alt="" />
						</div>
					</div>

						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/9.png" alt="" />
						</div>
					</div>

						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/10.png" alt="" />
						</div>
					</div>

						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/11.png" alt="" />
						</div>
					</div>

						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/12.png" alt="" />
						</div>
					</div>

						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/13.png" alt="" />
						</div>
					</div>

						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/14.png" alt="" />
						</div>
					</div>

						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/15.png" alt="" />
						</div>
					</div>

						
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<img src="assets/images/clients/16.png" alt="" />
						</div>
					</div>

						
				
				

				</div>

			</div>
		</div>
	</section>
	<!-- Clients One -->

	<!-- Process One -->
	<section class="process-one">
		<div class="auto-container">
			<div class="sec-title centered">
				<div class="sec-title_title">how its work</div>
				<h2 class="sec-title_heading">Our Process Flow</h2>
			</div>
			<div class="row clearfix">

				<!-- Process Block One -->
				<div class="process-block_one col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="process-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="process-block_one-icon icon-controlxpert_svgrepocom"></div>
						<div class="process-block_one-content">
							<div class="process-block_one-number">01</div>
							<h4 class="process-block_one-heading"><a href="<?php echo base_url(); ?>services">Consultation</a></h4>
							<div class="process-block_one-text">
							Discuss your specific intellectual property needs with our knowledgeable experts.</div>
						</div>
					</div>
				</div>

				<!-- Process Block One -->
				<div class="process-block_one col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="process-block_one-inner wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="process-block_one-icon icon-Path-184"></div>
						<div class="process-block_one-content">
							<div class="process-block_one-number">02</div>
							<h4 class="process-block_one-heading"><a href="<?php echo base_url(); ?>services">Research</a></h4>
							<div class="process-block_one-text">We conduct thorough searches to ensure your trademark or patent is unique.</div>
						</div>
					</div>
				</div>

				<!-- Process Block One -->
				<div class="process-block_one col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="process-block_one-inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="process-block_one-icon icon-controlxpert_svgrepocom-3"></div>
						<div class="process-block_one-content">
							<div class="process-block_one-number">03</div>
							<h4 class="process-block_one-heading"><a href="<?php echo base_url(); ?>services">Application Preparation</a></h4>
							<div class="process-block_one-text">Our team prepares and files your application with precision.</div>
						</div>
					</div>
				</div>

				<!-- Process Block One -->
				<div class="process-block_one col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="process-block_one-inner wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
						<div class="process-block_one-icon icon-vectorrr"></div>
						<div class="process-block_one-content">
							<div class="process-block_one-number">04</div>
							<h4 class="process-block_one-heading"><a href="<?php echo base_url(); ?>services">Registration Approval</a></h4>
							<div class="process-block_one-text">We guide you through the process until your trademark or patent is officially registered.</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Process One -->



	<!-- CTA One -->
	<?php require('components/cta.php'); ?>

	<!-- End CTA One -->


</main>
	

<?php require('components/footer.php'); ?>



	
</div>
<!-- End PageWrapper -->

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>


<?php require('components/js.php'); ?>

</body>

<!-- Mirrored from data.themeim.com/html/rulify/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 07:31:39 GMT -->
</html>