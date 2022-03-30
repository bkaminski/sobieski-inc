<?php get_template_part( 'parts/page', '2021-footer' ); ?>

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

 <?php if ( is_page( array(3556, 3552, 4007, 10053, 10821, 6731, 6704, 6750) ) ) {
    echo get_template_part('parts/page', '2022-all-modals'); 
 } else {
    //nothing
 } ?>

 
</body>
</html>
