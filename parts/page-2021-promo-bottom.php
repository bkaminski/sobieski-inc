<?php if ( has_category ('Thermostat') ) { ?>
<div class="row pb-3">
   <div class="col-md-6 text-center" style="padding-top:0.2rem;">
      <?php echo do_shortcode('[metaslider id=11480]'); ?>
  </div>
  <div class="col-md-6 text-center">
     <a href="temperature-control">
        <img src="https://www.sobieskiinc.com/wp-content/uploads/2016/10/New-666Thermo-CTA.jpg" alt="" width="1200" height="672" class="aligncenter size-full wp-image-11489 img-fluid" />
     </a>
  </div>
</div>
<?php } else { ?>
<div class="row pb-3">
   <div class="col-md-12 text-center" style="padding-top:0.2rem;">
      <?php echo do_shortcode('[metaslider id=11480]'); ?>
  </div>
</div>
<?php } ?>