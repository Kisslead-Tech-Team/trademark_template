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
    <?php require('components/nav.php'); ?>
	<!-- Main Header -->

	<!-- End Main Header -->


    <main>		




	<!-- Page Title -->
    <section class="page-title" style="background-image:url(assets/images/background/1.jpg)">
		<div class="page-title_pattern" style="background-image:url(assets/images/background/page-title_pattern.png)"></div>
		<div class="page-title_gradient"></div>
        <div class="auto-container">
			<h2>About Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="<?php echo base_url(); ?>"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
				<li>About Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- About Four -->
	<section class="about-four">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Content Column -->
				<div class="about-four_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-four_image-outer">
						<div class="about-four_image">
							<img src="assets/images/resource/about-2.jpg" alt="" />
							<div class="about-four_experiance">
								<span class="odometer" data-count="17"></span><i>+</i>
								<div class="about-four_experiance-text">Years of Experiences</div>
							</div>
						</div>
						<!-- <div class="about-four_award" data-parallax='{"y" : 50}'>
							<img src="assets/images/icons/about-two_award.png" alt="" />
						</div> -->
					</div>
				</div>

				<!-- Title Column -->
				<div class="about-four_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-four_content-outer">
						<div class="sec-title title-anim">
							<div class="sec-title_title">about us</div>
							<h2 class="sec-title_heading">Let’s Explore Our Intellectual Property Journey</h2>
							<div class="sec-title_text">Established in 2006 as a very small consultant, own the year True
and Trade Associates have become one of the leading firms
in Intellectual Property Consultant in and around Coimbatore. Nearly we
have 6500 Clients around all over India. True and Trade Associates
Provide a comprehensive services in related to acquiring Trademark,
Patent, Copyright, Design and other right related consultants .



</div>


<div class="sec-title_text">


The team professionals in True and Trade Associates play an very
important roles as IP associates internally, working with international
influence rules to protect the intellectual property. 


</div>
		
						</div>
						<div class="row clearfix">

							<!-- About Four Block -->
							<div class="about-four_block col-lg-6 col-md-6 col-sm-12">
								<div class="about-four_block-inner">
									<div class="about-four_block-icon">
										<i class="icon-controlxpert_svgrepocom-2"></i>
									</div>
									<h5 class="about-four_block-title">Proven Track Record</h5>
									<div class="about-four_block-text">Our expert team offers full support throughout the patent application process.

.

</div>
								</div>
							</div>

							<!-- About Four Block -->
							<div class="about-four_block col-lg-6 col-md-6 col-sm-12">
								<div class="about-four_block-inner">
									<div class="about-four_block-icon">
										<i class="icon-controlxpert_svgrepocom"></i>
									</div>
									<h5 class="about-four_block-title">Unmatched Expertise</h5>
									<div class="about-four_block-text">We provide effective, tailored IP solutions with deep industry knowledge.

</div>
								</div>
							</div>

						</div>
						<div class="about-four_button d-flex align-items-center flex-wrap">
							<a href="<?php echo base_url(); ?>about" class="theme-btn btn-style-one">
								<span class="btn-wrap">
									<span class="text-one">Know More <i class="fa-solid fa-angle-right fa-fw"></i></span>
									<span class="text-two">Know More <i class="fa-solid fa-angle-right fa-fw"></i></span>
								</span>
							</a>
					
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End About Four -->

	<!-- Services Three -->
	<section class="services-three">
		<div class="services-three_circle"></div>
		<div class="auto-container">
			<div class="sec-title centered">
				<div class="sec-title_title style-two">our service</div>
				<h2 class="sec-title_heading">Explore Creative Legal <br> Protections</h2>
			</div>
			<div class="row clearfix">

		<!-- Service Block Three -->
		<div class="service-block_three col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_three-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_three-image">
							<a href="<?php echo base_url(); ?>trademark-registration"><img src="assets/images/resource/small/trademark.jpg" alt="" /></a>
						</div>
						<div class="service-block_three-content">
							<div class="service-block_three-icon icon-Frame"></div>
							<h3 class="service-block_three-heading"><a href="<?php echo base_url(); ?>trademark-registration">Trademark Registration</a></h3>
							<div class="service-block_three-text">Trademark registration legally protects a brand's name, logo, or symbol, granting exclusive rights and preventing unauthorized use.</div>
							<a class="service-block_three-more" href="<?php echo base_url(); ?>trademark-registration">Know More <i class="fa-solid fa-angle-right fa-fw"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block Three -->
				<div class="service-block_three col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_three-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_three-image">
							<a href="<?php echo base_url(); ?>patent-registration"><img src="assets/images/resource/small/patent.jpg" alt="" /></a>
						</div>
						<div class="service-block_three-content">
							<div class="service-block_three-icon icon-controlxpert_svgrepocom-3"></div>
							<h3 class="service-block_three-heading"><a href="<?php echo base_url(); ?>patent-registration">Patent Registration</a></h3>
							<div class="service-block_three-text">Patent registration grants exclusive rights to an inventor for their invention, preventing others from making, using, or selling it without permission.</div>
							<a class="service-block_three-more" href="<?php echo base_url(); ?>patent-registration">Know More <i class="fa-solid fa-angle-right fa-fw"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block Three -->
				<div class="service-block_three col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_three-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_three-image">
							<a href="<?php echo base_url(); ?>copyright-registration"><img src="assets/images/resource/small/copyright.jpg" alt="" /></a>
						</div>
						<div class="service-block_three-content">
							<div class="service-block_three-icon icon-controlxpert_svgrepocom-4"></div>
							<h3 class="service-block_three-heading"><a href="<?php echo base_url(); ?>copyright-registration">Copyright Registration</a></h3>
							<div class="service-block_three-text">Copyright registration provides legal protection for original works, granting the creator exclusive rights to reproduce, distribute, and display them.</div>
							<a class="service-block_three-more" href="<?php echo base_url(); ?>copyright-registration">Know More <i class="fa-solid fa-angle-right fa-fw"></i></a>
						</div>
					</div>
				</div>

			</div>

			<div class="services-three_lower-box d-flex justify-content-center align-items-center flex-wrap">
				<div class="lower-text">Need Intellectual Property service Consulting With Us</div>
				<a href="<?php echo base_url(); ?>services" class="theme-btn btn-style-one">
					<span class="btn-wrap">
						<span class="text-one">More Services <i class="fa-solid fa-angle-right fa-fw"></i></span>
						<span class="text-two">More Services <i class="fa-solid fa-angle-right fa-fw"></i></span>
					</span>
				</a>
			</div>

		</div>
	</section>
	<!-- End Services Three -->

	<!-- Video Two -->
	<section class="video-two" style="background-image:url(assets/images/background/video-one_bg.jpg)">
		<div class="auto-container">
			<div class="video-two_content">
				
				<h2 class="video-two_heading">Special Approach, Dedicated <br> Law Attorneys</h2>
			</div>
		</div>
	</section>
	<!-- End Video Two -->

	<!-- Counter One / Style Two -->
	<section class="counter-one style-two">
		<div class="auto-container">
			<div class="inner-container">
				<div class="counter-one_border-one"></div>
				<div class="counter-one_border-two"></div>
				<div class="row clearfix">

					<!-- Column -->
					<div class="counter-one_column col-lg-4 col-md-6 col-sm-12">
						<div class="counter-one_column-outer">
							<span class="counter odometer" data-count="17"></span><i>+</i>
							<h5 class="counter-one_counter-heading">Years of Experienced</h5>
						</div>
					</div>

		

					<!-- Column -->
					<div class="counter-one_column col-lg-4 col-md-6 col-sm-12">
						<div class="counter-one_column-outer">
							<span class="counter odometer" data-count="6500"></span><i>+</i>
							<h5 class="counter-one_counter-heading">Happy Customers</h5>
						</div>
					</div>

					<!-- Column -->
					<div class="counter-one_column col-lg-4 col-md-6 col-sm-12">
						<div class="counter-one_column-outer">
							<span class="counter odometer" data-count="99"></span><i>%</i>
							<h5 class="counter-one_counter-heading">Case Success Rate</h5>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Counter One / Style Two -->

	<!-- History One -->
	<section class="history-one">
		<div class="history-one_circle"></div>
		<div class="history-one_circle-two"></div>
		<div class="auto-container">
			<div class="sec-title title-anim centered">
				<div class="sec-title_title style-two">our History</div>
				<h2 class="sec-title_heading">History Through Time</h2>
			</div>
			<div class="inner-container">
	
				<div class="history-one_slider swiper-container">
					<div class="swiper-wrapper">
						<!-- Slide -->
						<div class="swiper-slide">
							<!-- History Block One -->
							<div class="history-block_one">
								<div class="history-block_one-inner">
									<div class="history-block_one-year">2006</div>
									<div class="history-block_one-circle"></div>
									<div class="history-block_one-content">
										<h4 class="history-block_one-heading">Established in 2006</h4>
										<div class="history-block_one-text"> Established in 2006 as a very small consultant, own the year True
and Trade Associates have become one of the leading firms
in Intellectual Property Consultant in and around Coimbatore</div>
									</div>
								</div>
							</div>
						</div>

							<!-- Slide -->
							<div class="swiper-slide">
							<!-- History Block One -->
							<div class="history-block_one">
								<div class="history-block_one-inner">
									<div class="history-block_one-year">2025</div>
									<div class="history-block_one-circle"></div>
									<div class="history-block_one-content">
										<h4 class="history-block_one-heading">18 Years of Experience</h4>
										<div class="history-block_one-text"> Nearly we
have 6500 Clients around all over India. True and Trade Associates
Provide a comprehensive services in related to acquiring Trademark,
Patent, Copyright, Design and other right related consultants.</div>
									</div>
								</div>
							</div>
						</div>
				
					
					</div>

					<!-- History One Arrows -->
					<div class="history-one-arrow">
						<!-- If we need navigation buttons -->
						<div class="history-one_carousel-prev fa-solid fa-angle-left fa-fw"></div>
						<div class="history-one_carousel-next fa-solid fa-angle-right fa-fw"></div>
					</div>
					<div class="history-one_carousel-pagination"></div>

				</div>

			</div>
		</div>
	</section>
	<!-- End History One -->

	<!-- Default One -->
	<section class="default-one">
		<div class="default-one_circle"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Get a Free Quote</h2>

						<div class="default-form style-two">
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

				<!-- Carousel Column -->
				<div class="carousel-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="testimonial-two_carousel swiper-container">
							<div class="swiper-wrapper">
				
								<!-- Slide -->
								<div class="swiper-slide">
									<!-- Testimonial Block Two -->
									<div class="testimonial-block_two">
										<div class="testimonial-block_two-inner">
											<div class="testimonial-block_two-rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="testimonial-block_two-text">I recommend TRUEANDTRADE. Very professional s and easy for me Company Registration, GST Registration & Trademark Registration services. I thanks Mrs Mangayarkarasi C, is Well-Coordinated, On time response, Excellence services in advising customer for processing requirements. She made it easy for me. Thanks.</div>
											<div class="testimonial-block_two-author">
												<span><img src="assets/images/resource/author-4.jpg" alt="" /></span>
												<strong>Rajendra</strong>
											</div>
											<div class="testimonial-block_two-quote fa-solid fa-quote-right fa-fw"></div>
										</div>
									</div>
								</div>
								<!-- Slide -->
								<div class="swiper-slide">
									<!-- Testimonial Block Two -->
									<div class="testimonial-block_two">
										<div class="testimonial-block_two-inner">
											<div class="testimonial-block_two-rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="testimonial-block_two-text">I recently contacted TrueandTrade for trademark registration process and I got to work with Mrs Mangayarkarasi C. She was really professional and kind and explained me everything in detail. I had to do no work at all because he and TrueandTrade took care of everything. They provide really nice services.</div>
											<div class="testimonial-block_two-author">
												<span><img src="assets/images/resource/author-5.jpg" alt="" /></span>
												<strong>Ishita Bhattacharya</strong>
											</div>
											<div class="testimonial-block_two-quote fa-solid fa-quote-right fa-fw"></div>
										</div>
									</div>
								</div>
								<!-- Slide -->
								<div class="swiper-slide">
									<!-- Testimonial Block Two -->
									<div class="testimonial-block_two">
										<div class="testimonial-block_two-inner">
											<div class="testimonial-block_two-rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="testimonial-block_two-text">I Highly recommend Trueandtrade. Very professional organization and they take care of customer requirements with excellence. Happy with Mangayarkarasi C who managed my account and got our trademark process completed without any problem. Thanks👍</div>
											<div class="testimonial-block_two-author">
												<span><img src="assets/images/resource/author-4.jpg" alt="" /></span>
												<strong>Sanjay Gurnule</strong>
											</div>
											<div class="testimonial-block_two-quote fa-solid fa-quote-right fa-fw"></div>
										</div>
									</div>
								</div>

							</div>

							<!-- Testimonial Two Arrows -->
							<div class="testimonial-two-arrow">
								<div class="testimonial-two_carousel-pagination"></div>
								<!-- If we need navigation buttons -->
								<div class="testimonial-two_carousel-prev fa-solid fa-angle-left fa-fw"></div>
								<div class="testimonial-two_carousel-next fa-solid fa-angle-right fa-fw"></div>
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Default One -->

	<!-- Clients One -->
	<section class="clients-one style-three">
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

	<!-- Team Two -->
	<section class="team-two">
		<div class="team-two_circle"></div>
		<div class="team-two_circle-two"></div>
		<div class="auto-container">
			<div class="sec-title">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="left-box title-anim">
						<div class="sec-title_title">our team</div>
						<h2 class="sec-title_heading">expert team members</h2>
					</div>
					<div class="sec-title_text">
						Our team comprises seasoned patent law in <br> professionals experience.
					</div>
				</div>
			</div>
			<div class="team-one_carousel swiper-container">
				<div class="swiper-wrapper">
	
					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Team Block Two -->
						<div class="team-block_two">
							<div class="team-block_two-inner">
								<div class="team-block_two-image">
									<img src="assets/images/resource/team-4.jpg" alt="" />
									<div class="team-block_two-content">
										<h4 class="team-block_two-heading">Marget M. Hason</h4>
										<div class="team-block_two-designation">Patent Lawyer</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Team Block Two -->
						<div class="team-block_two">
							<div class="team-block_two-inner">
								<div class="team-block_two-image">
									<img src="assets/images/resource/team-5.jpg" alt="" />
									<div class="team-block_two-content">
										<h4 class="team-block_two-heading">Marget M. Hason</h4>
										<div class="team-block_two-designation">Patent Lawyer</div>
									
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Team Block Two -->
						<div class="team-block_two">
							<div class="team-block_two-inner">
								<div class="team-block_two-image">
									<img src="assets/images/resource/team-6.jpg" alt="" />
									<div class="team-block_two-content">
										<h4 class="team-block_two-heading">Marget M. Hason</h4>
										<div class="team-block_two-designation">Patent Lawyer</div>
										
									</div>
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
	<!-- End Team Two -->
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