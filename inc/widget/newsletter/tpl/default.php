<div class="themetim-newsletter <?php echo $instance['heading_alignment']; ?>">
	<div class="<?php echo $instance['heading_alignment']; ?>-heading margin-bottom-30">
		<?php if ( ! empty( $instance['title'] ) ) : ?>
			<h1 class="page-header"><?php echo esc_html( $instance['title'] ); ?></h1>
		<?php endif; ?>
		<?php if ( ! empty( $instance['sub_title'] ) ) : ?>
			<p class="widget-sub-heading margin-bottom-30 margin-top-30"><?php echo esc_html( $instance['sub_title'] ); ?></p>
		<?php endif; ?>
	</div>
	<?php if ( ! empty( $instance['texteditor'] ) ) : ?>
		<div class="newsletter-details"><?php echo  $instance['texteditor']; ?></div>
	<?php endif; ?>
	<?php if ( ! empty( $instance['newsletter_url'] ) ) : ?>
	<form class="margin-null" action="<?php echo $instance['newsletter_url']; ?>" method="post" target="_blank">
		<input type="email" class="form-control" name="newsletter-email" id="newsletter-email" placeholder="info@yoursite.com" required="">
		<button type="submit" class="btn btn-primary margin-top-20"><i class="fa fa-envelope margin-right-10"></i> Subscribe</button>
	</form>
	<?php endif; ?>


</div>