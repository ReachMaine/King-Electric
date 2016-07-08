<?php
/**
 * Footer
 *
 * @package BuildPress
 */
/*
 * mods:  
 *     24mar16, add above footer widget area 
 */
$footer_widgets_num = (int)get_theme_mod( 'footer_widgets_num', 3 );

?>
	<footer role="contentinfo">
		<?php if ( is_active_sidebar( 'abovefooter') ) { //zig 
			echo '<div id="footertop" class="container">';
			  echo '<div class="row">';
				dynamic_sidebar( 'abovefooter' );
			  echo '</div>';
			echo '</div>';
		}  ?>
		<?php if ( $footer_widgets_num > 0 ) : ?>
			<div class="footer">
				<div class="container">
					<div class="row">
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom__left">
					<?php
						echo apply_filters( 'buildpress/footer_left_txt', get_theme_mod( 'footer_left_txt', '' ) );

						if ( has_nav_menu( 'footer-bottom-menu' ) ) {
							wp_nav_menu( array(
								'theme_location' => 'footer-bottom-menu',
								'container'      => false,
								'menu_class'     => 'navigation--footer'
							) );
						}
					?>
				</div>
				<div class="footer-bottom__right">
					<?php echo apply_filters( 'buildpress/footer_right_txt', get_theme_mod( 'footer_right_txt', '' ) ); ?>
				</div>
			</div>
		</div>
	</footer>
	</div><!-- end of .boxed-container -->


	<?php wp_footer(); ?>
	</body>
</html>