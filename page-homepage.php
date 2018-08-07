<?php
/*
Template Name: Homepage Template
 */
get_template_part('includes/header', 'home');
?>

<div class="container-fluid designStuff">
  <div class="contents">
		<div id="topPage"></div>

		<div class="row flexRow">
			<div class="col-xs-12 introText">
      <div class="row">
        <div class="col-xs-4"><img class="circ paintbrush" src="<?php echo get_template_directory_uri(); ?>/dist/img/paint-brush.svg" width="150" height="150" alt="creativity" title="creativity"></div>
        <div class="col-xs-4" style="justify-content:center;display:flex;"><h3>+</h3></div>
        <div class="col-xs-4"><img class="circ code" src="<?php echo get_template_directory_uri(); ?>/dist/img/code.svg" width="150" height="150" alt="code" title="code"></div>
      </div>
				<h2>I’m an experienced graphic and web designer who helps individuals and small business with websites.</h2>
				<p>Whether you need a new website, maintenance on your current site, a new business card, would like to send an email blast to your customer list, want to brand your social media accounts, need help creating ads, postcards, t-shirts, bus benches, want to update your logo, or anything else you would like related to marketing your business I would love the opportunity to work with you! Please contact me today to discuss your needs and how I could help.</p>
			</div>
		</div>

  	<div class="row badges">
  		<div class="col-xs-12 col-sm-4 col-md-4">
  			<a href="/design" target="_SELF"><img class="graphicsBadge" src="<?php echo get_template_directory_uri(); ?>/dist/img/graphics-badge.png" alt="Graphics" title="Graphics" ></a>
  		</div>
  		<div class="col-xs-12 col-sm-4 col-md-4">
        <a href="#"><img class="myLogo animated bounceInUp" src="<?php echo get_template_directory_uri(); ?>/dist/img/jmacman_w_stroke.png" alt="jmacman_w_stroke" title="www.jmacman.com" ></a>
  		</div>
  		<div class="col-xs-12 col-sm-4 col-md-4">
  			<a href="/web-work" target="_SELF"><img class="webBadge" src="<?php echo get_template_directory_uri(); ?>/dist/img/websites-badge.png" alt="Websites" title="websites" ></a>
  		</div>
  	</div><!-- END row -->

  </div> <!-- END contents -->
</div> <!-- END container-fluid designStuff -->

<div class="container-fluid contactFormArea">
  <div class="contents">
		<div class="row">
			<section id="contact" class="col-xs-12">
				<h2 class="text-center">Contact</h2>
				<?php get_template_part('includes/form-contact');?>
			</section>
		</div> <!-- END row -->
  </div> <!-- END contents -->
</div> <!-- END container-fluid contactFormArea -->


<?php get_template_part('includes/footer');?>
