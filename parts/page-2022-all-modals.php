<script>
var modals = ["sobiModalPlumbing", "sobiModalSpp", "sobiModal"];
var rand = modals[Math.random() * modals.length | 0]

	jQuery(window).load(function(){
	  setTimeout(function() {
        jQuery('#' + rand).modal('show');
      }, 5000);
    });
</script>

<!-- Vertically centered promo modal -->

	<div class="modal fade" id="sobiModalPlumbing" tabindex="-1" aria-labelledby="sobiModalPlumbingLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="sobiModalPlumbingLabel">We're your plumbing EXPERTS!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<a href="homeowner-promotions">
						<img src="https://www.sobieskiinc.com/wp-content/uploads/2022/01/Plumbing-Problems-Popup.jpg" class="img-fluid" alt="We are plumbing experts!">
					</a>
					<div class="pt-3 pb-3 text-center">
						<a href="homeowner-promotions" class="btn btn-outline-sobieski rounded-0 text-uppercase mt-3 pr-4 pl-4 pt-2 pb-2 font-weight-bold">Find Out More</a>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-sobieski-promo-red" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Vertically centered promo modal -->

	<div class="modal fade" id="sobiModalSpp" tabindex="-1" aria-labelledby="sobiModalSppLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="sobiModalSppLabel">Looking for EXTRA protection?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<a href="service/service-partner-plans/">
						<img src="https://www.sobieskiinc.com/wp-content/uploads/2022/01/SSP_Pop_up.jpg" class="img-fluid" alt="Sobieski Partner Plans">
					</a>
					<div class="pt-3 pb-3 text-center">
						<a href="service/service-partner-plans/" class="btn btn-outline-sobieski rounded-0 text-uppercase mt-3 pr-4 pl-4 pt-2 pb-2 font-weight-bold">Find Out More</a>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-sobieski-promo-red" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Vertically centered promo modal -->

	<div class="modal fade" id="sobiModal" tabindex="-1" aria-labelledby="sobiModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="sobiModalLabel">Time for an Upgrade?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<a href="service/2022-off-complete-high-efficency-installations/">
						<img src="https://www.sobieskiinc.com/wp-content/uploads/2022/01/Revised-2022-Graphic-scaled.jpg" class="img-fluid" alt="Sobieski 2,022 dollars off install promotion">
					</a>
					<div class="pt-3 pb-3 text-center">
						<a href="service/2022-off-complete-high-efficency-installations/" class="btn btn-outline-sobieski rounded-0 text-uppercase mt-3 pr-4 pl-4 pt-2 pb-2 font-weight-bold">Find Out More</a>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-sobieski-promo-red" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>