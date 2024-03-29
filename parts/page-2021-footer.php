<footer class="footer-2021">
	<a href="#" id="scroll" style="display: none;"><span></span></a>
	<?php if (is_page('10821')) { ?>
		<div class="footer-bg"></div>
	<?php } ?>
	<div class="foot-logo text-center"><img src="<?php echo get_home_url();?>/wp-content/uploads/2020/06/Sobieski-Homeowner.png" width="250" class="img-fluid" alt="Sobieski Homeowners Logo" /></div>
	<div class="foot-services foot-logo pt-5 pb-5">
		<div class="container pt-5">
			<div class="row" style="padding-left: 4rem;">
				<div class="col-md-4 text-white">
					<h5 class="font-weight-bold h4"><a class="foot-link" href="homeowner">Homeowner Services</a></h5>
					<ul class="list-unstyled">
						<li><a href="service-category/heating-air-conditioning" class="foot-link">Heating &amp; Air Conditioning</a></li>
						<li><a href="homeowner-promotions" class="foot-link">Financing &amp; Promotions</a></li>
						<li><a href="service/service-partner-plans" class="foot-link">Warranty &amp; Service Partner Plans</li>
					</ul>
				</div>
				<div class="col-md-4 text-white">
					<h5 class="font-weight-bold h4"><a class="foot-link" href="commercial">Commercial Services</a></h5>
					<ul class="list-unstyled">
						<li><a href="commercial/about-us" class="foot-link">Property Owner / Manager Info</a></li>
						<li><a href="audience/facility-managers" class="foot-link">Facility Managers</a></li>
						<li><a href="audience/general-contractors" class="foot-link">General Contractors</a></li>
					</ul>
				</div>
				<div class="col-md-4 text-white">
					<h5 class="font-weight-bold h4"><a class="foot-link" href="audience/home-builders">Homebuilder Services</a></h5>
					<ul class="list-unstyled">
						<li><a href="audience/about-regional-and-national-homebuilders" class="foot-link">Regional / National Builders</a></li>
						<li class="mb-2"><a href="audience/the-sobieski-experience" class="foot-link">Custom Home Builders</li></a>
						<li><a class="btn btn-sm btn-sobieski-promo-red" data-toggle="modal" data-target="#chimpModal">Subscribe for Exclusive Offers</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col text-center text-white font-weight-bold pt-5">
			<ul class="list-inline">
	  			<li class="list-inline-item pr-4">PA, MD, DE, NJ, VA</li>
	  			<li class="list-inline-item pr-4"><a class="foot-link" href="contact-us">Contact</a></li>
	  			<li class="list-inline-item pr-4"><a class="foot-link" href="about">About Us</a></li>
	  			<li class="list-inline-item pr-4"><a class="foot-link" href="careers">Careers</a></li>
	  			<li class="list-inline-item pr-4"><a class="foot-link" href="privacy-policy">Privacy Policy</a></li>
	  			<li class="list-inline-item"><a class="foot-link" href="coronavirus-statement">COVID Statement</a></li>
			</ul>
		</div>
		<div class="col text-center text-white pt-3">
			<p><a target="_blank" href="https://www.facebook.com/SobieskiServices/" class="foot-link"><i class="fab fa-facebook-square fa-fw fa-2x"></i></a> <a target="_blank" href="https://twitter.com/SobieskiService" class="foot-link"><i class="fab fa-twitter-square fa-fw fa-2x"></i></a> <a target="_blank" href="https://www.instagram.com/sobieskiinc/" class="foot-link"><i class="fab fa-instagram fa-fw fa-2x"></i></a> <a target="_blank" href="https://www.youtube.com/channel/UCf3WsrMYSWZe70bmgGxLeLQ" class="foot-link"><i class="fab fa-youtube-square fa-fw fa-2x"></i></a></p>
			<p>
				<small>
					Copyright &copy; <?php echo date('Y'); ?> - Sobieski Inc.
				</small>
			</p>
		</div>
	</div>
</footer>
<!-- MailChimp Modal -->
<div class="modal fade" id="chimpModal" tabindex="-1" aria-labelledby="chimpModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subscribe for Exclusive Offers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[mc4wp_form id="8383"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sobieski-promo-red" data-dismiss="modal">&times; Close</button>
      </div>
    </div>
  </div>
</div>

