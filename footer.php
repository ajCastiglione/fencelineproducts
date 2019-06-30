			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<div class="footer-nav">
						<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php wp_nav_menu(array(
										'container' => false,                           
										'container_class' => 'menu footer-menu cf',                
										'menu' => __( 'Footer Navigation', 'bonestheme' ),  
										'menu_class' => 'nav footer-menu cf',               
										'theme_location' => 'main-nav',                
										'depth' => 0,                                  
								)); ?>
						</nav>
					</div>
					<div class="copyright">
						<p>Fence Line Products &copy; <?php echo date('Y'); ?></p>
					</div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
        
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	</body>

</html> <!-- end of site. what a ride! -->
