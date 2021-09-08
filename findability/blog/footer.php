</main>
<footer class="footer text-center pb-5 pt-5" style="clear: both;">
	<div class="container col-10 col-lg-6 text-right  mx-auto">
		<div class="row">
			<div class="col-5 col-lg-4 mr-3 p-0 ">
				<ul class="text-light p-0">
					<li class="under text-left mb-2"><span class="dashicons dashicons-admin-links"></span>&nbsp;&nbsp;Site</li>
					<li>
						<a href="<?php echo wp_make_link_relative('https://localhost/findability/blog/'); ?>">FINDABILITY BLOG</a>
					</li>
					<li>
						<a href=<?php echo "https://" . $_SERVER['HTTP_HOST'] . "/index.html" ?>>HOME</a>
					</li>
					<li>
						<a href=<?php echo "https://" . $_SERVER['HTTP_HOST'] . "/fixtures.html" ?>>FIXTURES</a>
					</li>
					<li>
						<a href=<?php echo "https://" . $_SERVER['HTTP_HOST'] . "/contact.html" ?>>CONTACT</a>
					</li>
					<li>
						<a href=<?php echo "https://" . $_SERVER['HTTP_HOST'] . "/forms.html" ?>>FORMS</a>
					</li>
					<li>
						<a href=<?php echo "https://" . $_SERVER['HTTP_HOST'] . "/guidelines.html" ?>>GUIDELINES</a>
					</li>
					<li>
						<a href=<?php echo "https://" . $_SERVER['HTTP_HOST'] . "/findability.html" ?>>FINDABILITY</a>
					</li>
					<li>
						<a href=<?php echo "https://" . $_SERVER['HTTP_HOST'] . "/site-map.html" ?>>SITE MAP</a>
					</li>
				</ul>
			</div>
			<div class="col-5 col-lg-3 mr-3 p-0">
				<ul class=" text-light p-0">
					<li class="under text-left mb-2">&copy;&nbsp;PFF BLOG</li>
					<li>D.C</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>