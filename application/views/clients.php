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
</head>

<body>


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
			<h2>Our Clients</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="<?php echo base_url(); ?>"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
				<li>Our Clients</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Case Three -->
	<section class="case-three">
		<div class="auto-container">
			<div class="row clearfix">


			<?php if (!empty($clients)): ?>
                        <?php foreach ($clients as $client): ?>
                     
              

				<div class="case-block_one style-two col-lg-4 col-md-6 col-sm-6">
					<div class="case-block_one-inner">
						<div class="case-block_one-image">
							<img src="<?php echo $client['image'] ?>" alt="" />
						</div>
						<div class="case-block_one-content">
							<h4 class="case-block_one-heading"><?php echo $client['client_name'] ?></h4>
							<div class="case-block_one-designation"><i class="icon-tag_svgrepocom"></i> <?php echo $client['work'] ?></div>

						</div>
					</div>
				</div>

                  <?php endforeach; ?>
                  <?php else: ?>
                     <p>No Clients found.</p>
                  <?php endif; ?>




			
			</div>


		</div>
	</section>
	<!-- End Case Three -->
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