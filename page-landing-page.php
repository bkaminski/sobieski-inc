<?php
/*
 * Template Name: Landing Page
 * 
 */
  
get_header();  ?>
<script src="https://webchat.scheduleengine.net/webchat-v1.js"></script>
<script>
  WebChat.loadChat({
    "apiKey": "sci48bm7s65xpqh1oxrovn553mqyfwiz",
    "initialMessage":"How can we make you smile today?",
    "initialResponses":[],
    "logoUrl":"https://www.sobieskiinc.com/wp-content/uploads/2020/06/revised_logo.png",
    "title":"Welcome",
    "primaryAccentColor":"#cc433a",
    "primaryAccentTextColor":"#FFFFFF",
    "backgroundColor":"#FFFFFF",
    "agentBubbleBackgroundColor":"#cc433a",
    "agentBubbleTextColor":"#FFFFFF",
    "bubbleBackgroundColor":"#F1F1F1",
    "bubbleTextColor":"#000000",
    "sendButtonBackgroundColor":"#cc433a",
    "sendButtonTextColor":"#FFFFFF",
    "suggestedResponseColor":"#cc433a",
    "autoOpen":true,
    "autoOpenMobile":false,
    "position":"right",
    "buttonBackgroundColor":"#cc433a",
    "buttonText":"Chat with Us",
    "buttonTextColor":"#FFFFFF",
    "autoOpenDelay":30
  });
</script>
	<div class="container pt-5 pb-5">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<picture>
			<?php the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); ?>
				
		</picture>
		<div>
		<?php the_content(); ?>
		
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
	</div>
  
<?php get_footer(); ?>
