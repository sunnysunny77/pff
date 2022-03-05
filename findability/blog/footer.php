</main>
<footer class="footer text-center pb-5 pt-5" style="clear: both;">
	<div class="container col-10 col-lg-6 text-right  mx-auto">
		<div class="row">
			<div class="col-5 col-lg-4 mr-3 p-0 ">
				<?php wp_nav_menu(
					array(
						'menu' => 'Secondary Navigation',
						'container'  => 'ul',
						'menu_class' => 'text-dark p-0',
						'items_wrap' => '<ul id="%1$s" class="%2$s">	
											<li class="under text-left mb-2">
												<span class="dashicons dashicons-admin-links"></span>
												&nbsp;&nbsp;Site
											</li>
											<li>
											<a href="' .  esc_url(home_url('/')) . '">' .  strtoupper(get_bloginfo('name')) .'</a>
											</li>
											%3$s</ul>',
					
				)); ?>
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