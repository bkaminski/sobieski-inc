<footer class="footer">
<a href="#" id="scroll" style="display: none;"><span></span></a>
	<div class="container">
		<h2 class="foot-heading">Sign up for our newsletter</h2>

		<?php get_template_part( 'parts/page', 'footer-mailchimp' ); ?>

		<?php get_template_part( 'parts/page', 'footer-menu' ); ?>

	</div>
</footer>
<?php get_template_part( 'parts/page', 'search-modal' ); ?>

<?php if ( is_front_page() ) { 
	//DO NOTHING
} else { ?>
<!-- Schedule Engine -->
<script data-api-key="ckar16ifj00vh08nxzdvsxebh" id="se-widget-embed" src="https://embed.scheduleengine.net/schedule-engine-v2.js"></script>
<?php } ?>
<?php wp_footer(); ?>

</body>
</html>
