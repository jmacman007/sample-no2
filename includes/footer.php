	<footer>
		<section class="footer">
			<div class="container-fluid">
				<div class="row">
				</div>
				<div class="row disclosure">
					<!-- <a href="http://www.coroflot.com/johnmccauley" target="_blank"><button class="visitSite">more work</button></a> -->

						<?php if (is_page('web')) {?>
							<a href="#web" ><p><i class="fa fa-chevron-up" aria-hidden="true"></i></p>
							<h3>top</h3></a>
						<?php } else {?>
							<a href="#topPage" ><p><i class="fa fa-chevron-up" aria-hidden="true"></i></p>
							<h3>top</h3></a>
						<?php }?>

				</div>
				<div class="row text-center">
					<p>&copy; <?php echo date('Y'); ?> All Right Reserved - <?php bloginfo('name');?>.</p>
				</div>
			</div>
		</section>
	</footer>
</div> <!-- End pageWrap -->
	<?php wp_footer();?>

	<!-- Sitewide Schema Tag -->
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"name": "jmacman.com",
			"url": "https://www.jmacman.com",
			"logo": "https://www.jmacman.com/dist/img/jmacman-logo.png",
			"contactPoint" : [{
				"@type" : "ContactPoint",
				"telephone" : "+1-561-312-4915",
				"contactType" : "customer service",
				"areaServed" : "US"
			}]
		}
	</script>
	<script type="text/javascript" charset="utf-8">
		var _uf = _uf || {};
		_uf.domain = ".jmacman.com";
	</script>
<!-- END Sitewide Schema Tag -->

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4595243.js"></script>
<!-- End of HubSpot Embed Code -->

</body>

</html>
