</main>
<footer class="footer text-center pb-5 pt-5" style="clear: both;">
	<div class="container col-10 col-lg-6 text-right  mx-auto">
		<div class="row">
			<div class="col-5 col-lg-4 mr-3 p-0 ">
				<ul class="text-dark p-0">
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
						<a href=<?php echo "https://" . $_SERVER['HTTP_HOST'] . "/membership.html" ?>>MEMBERSHIP</a>
					</li>
					<li>
						<a href=<?php echo "https://" . $_SERVER['HTTP_HOST'] . "/documents.html" ?>>DOCUMENTS</a>
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
				<ul class=" text-dark p-0">
					<li class="under text-left mb-2"><span class="dashicons dashicons-info-outline"></span>&nbsp;&nbsp;Info</li>
					<li><a target="_blank" rel="license noopener" href="http://creativecommons.org/licenses/by/4.0/">CREATIVE COMMONS<img alt="Creative Commons Licence" src="https://i.creativecommons.org/l/by/4.0/80x15.png" /></a></li>
					<li><span class="valid" role="img" aria-label="Valid HTML"></span></li>
					<li><span class="valid" role="img" aria-label="Valid CSS"></span></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>