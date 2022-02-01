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
<nav class="navbar navbar-expand-lg bg-sobieski" style="background-color: #e3f2fd;z-index: 10;">
<div class="logo-wrapper">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
			<?php $uploads = wp_upload_dir(); 
			echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/08/Sobieski-Homeowner.png' ) . '" class="logo-img logo-img-2021 d-none d-lg-block" alt="Sobieski Inc Logo">'; ?>
		</a>
	</div>
	<div class="d-block d-lg-none">
		<a href="<?php echo get_home_url(); ?>">
				<?php $uploads = wp_upload_dir(); 
				echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/08/Sobieski-Homeowner.png' ) . '" class="logo-img logo-img-2021" alt="Sobieski Inc Logo">'; ?>
		</a>
	</div>
	<div class="clearfix"></div>
	<button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#sobieskiNav" aria-controls="sobieskiNav" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fas fa-bars fa-2x"></i>
	</button>
	<div class="collapse navbar-collapse" id="sobieskiNav" style="background: transparent;">
		<ul class="navbar-nav mx-auto new-collapse">
			<li class="nav-item nav-item-2021">
				<a href="service-category/heating-air-conditioning/" class="nav-link" href="about">Heating</a>
			</li>
			<li class="nav-item nav-item-2021">
				<a href="service-category/heating-air-conditioning/" class="nav-link" href="careers">Air Conditioning</a>
			</li>
			<li class="nav-item nav-item-2021">
				<a href="service-category/plumbing-drain-services/" class="nav-link" href="careers">Plumbing</a>
			</li>
			<li class="nav-item nav-item-2021">
				<a href="homeowner-promotions" class="nav-link" href="careers">Promotions</a>
			</li>
			<li class="nav-item nav-item-2021">
				<a href="guide/enter-contact-info-below-be-contacted-about-ensuring-your-new-homes-equipment-warranty/" class="nav-link" href="careers">Neighborhoods</a>
			</li>
			<li class="nav-item nav-item-2021">
				<a class="nav-link sobieski-search-modal d-none d-lg-block" href="#"><i class="fas fa-search fa-lg"></i></a>
				<a class="nav-link sobieski-search-modal d-block d-lg-none" href="#">Search Our Site<i class="fas fa-search fa-lg pl-3"></i></a>
			</li>
			<li class="nav-item nav-item-2021 d-block d-lg-none">
				<a class="nav-link" href="tel:1+8664774404">1-866-477-4404</a>
			</li>
		</ul>
		<div class="d-none d-lg-block call-us pt-2 pb-2">(866) 477-4404</div>
	</div>
</nav>
