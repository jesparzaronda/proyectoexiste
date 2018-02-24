<?php
/**
 * Template part to display subscribe form.
 *
 * @package Melissa
 * @subpackage widgets
 */
?>
<div class="subscribe-block ">

	<?php echo $this->get_block_title( 'subscribe' ); ?>
	<?php echo $this->get_block_message( 'subscribe' ); ?>

	<form method="POST" action="#" class="subscribe-block__form"><?php
		wp_nonce_field( 'melissa_subscribe', 'melissa_subscribe' );
	?><div class="subscribe-block__input-group"><?php
		echo $this->get_subscribe_input();
		$btn = 'btn btn-primary';
		echo $this->get_subscribe_submit( $btn );
	?></div><?php
		echo $this->get_subscribe_messages();
	?></form>
</div>