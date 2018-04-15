<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oceanica-lite
 */
?>
</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="wrapper">
		<?php get_sidebar( 'content-bottom' ); ?>
		<?php if ( has_nav_menu( 'menu-4' ) ) : ?>
			<nav class="footer-navigation clear" role="navigation"
			     aria-label="<?php esc_attr_e( 'Footer Links Menu', 'oceanica-lite' ); ?>">
				<?php wp_nav_menu( array(
					'theme_location' => 'menu-4',
					'menu_id'        => 'footer-navigation',
					'menu_class'     => 'theme-social-menu',
					'depth'          => 1,
					'link_before'    => '<span class="menu-text">',
					'link_after'     => '</span>'
				) ); ?>
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
		<div class="site-info">
			<div id="footer-columns">
	<div>
		<h2 class="title">About Us</h2>
		<ul class="list-unstyled">
		<li>South East Glamping,</li>
		<li>123 Street, Co Wexford, Ireland</li>
		<li>+353 (0)87 1234567</li>
		<li>info@southeastglamping.com</li>
		<li><a href="http://localhost:8888/wordpress/about/" rel="noopener" target="_blank">Click here for more details about us</a></li>
		</ul>
	</div>
	<div>
		<h2 class="title">Disclaimer</h2>
	<p>This website and all accompanying data, facts and functionality associated with this website are for demonstrative purposes only. The sole purpose of this website is to meet the requirements for the assessment of the masters module User Experience and Design for the MSc Enterprise Software Systems course in W.I.T. For more information please see the following <a href="http://localhost:8888/wordpress/disclaimer/" rel="noopener" target="_blank">page</a></p>
	
	</div>
	<div style="clear:both">
</div>
<div id="copyright-center">
<center>© Copyright 2018. South East Glamping.</center>
</div>
		</div><!-- .site-info -->
	</div><!-- .wrapper -->
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>