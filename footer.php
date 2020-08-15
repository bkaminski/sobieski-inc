<footer class="footer">
	<button class="se-widget-button" type="button" onclick="ScheduleEngine.show()">
  Book Now!
</button>

<a href="#" id="scroll" style="display: none;"><span></span></a>
	<div class="container">
		<h2 class="foot-heading">Sign up for our newsletter</h2>

		<?php get_template_part( 'parts/page', 'footer-mailchimp' ); ?>

		<?php get_template_part( 'parts/page', 'footer-menu' ); ?>

	</div>
</footer>
<?php get_template_part( 'parts/page', 'search-modal' ); ?>

<?php wp_footer(); ?>

<!-- Schedule Engine -->
<script data-api-key="ckar16ifj00vh08nxzdvsxebh" id="se-widget-embed" src="https://embed.scheduleengine.net/schedule-engine-v2.js"></script>
</body>
</html>
