	</div>	<!-- container -->

	<div class="hr-footer"></div>
	<footer class="footer">
		<div class="foot-main-flex-block">
			<div class="foot-mail-block">
				<h2 class="foot-logo-title">js</h2>
				<a href="" class="foot-mail">astro.inc@company.com</a>
				<span class="foot-numbers">720.661.2231</span>
			</div>
			<div class="foot-service-block">
				<h4 class="foot-services-title">Services</h4>
				<?php services_menu($services_menu); ?>
			</div>
			<div class="foot-about-block">
				<h4 class="foot-about-title">About us</h4>
				<?php about_menu($about_menu); ?>
			</div>
			<div class="foot-our-adres">
				<h4 class="foot-our-adres-title">Our Address</h4>

				<?php our_adres_menu($our_adres_menu); ?>

				<?php social_menu($social_menu); ?>
			</div>
		</div>
		<div class="foot-copyright">
			<p>&#169; 2018 copyright all right reserved</p>
		</div>
	</footer>
	
</body>
</html>