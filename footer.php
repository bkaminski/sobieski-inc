<?php if (is_page(array (10821, 9018)) ){
	get_template_part( 'parts/page', '2021-footer' );
} else { ?>
<footer class="footer">
<a href="#" id="scroll" style="display: none;"><span></span></a>
	<div class="container">
		<h2 class="foot-heading">Sign up for our newsletter to receive EXCLUSIVE offers!</h2>

		<?php get_template_part( 'parts/page', 'footer-mailchimp' ); ?>

		<?php get_template_part( 'parts/page', 'footer-menu' ); ?>

	</div>
</footer>
<?php } ?>
<?php get_template_part( 'parts/page', 'search-modal' ); ?>

<?php if ( is_front_page() ) { 
	//DO NOTHING
} else { ?>
<!-- Schedule Engine -->
<script data-api-key="ckar16ifj00vh08nxzdvsxebh" id="se-widget-embed" src="https://embed.scheduleengine.net/schedule-engine-v2.js"></script>
<?php } ?>
<?php wp_footer(); ?>

<?php if ( is_page(10238) ) {
 	echo get_template_part('parts/page', 'promo-modals'); 
 } else {
 	//nothing
 } ?>

 <?php if ( is_page( array(3556, 3552, 4007, 10053, 10821, 10238, 6731, 6704, 6750) ) ) {
    echo get_template_part('parts/page', '2022-all-modals'); 
 } else {
    //nothing
 } ?>

</body>
</html>
