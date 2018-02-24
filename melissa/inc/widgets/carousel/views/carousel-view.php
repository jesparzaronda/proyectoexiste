<?php
/**
 * Template part to display Carousel widget.
 *
 * @package Melissa
 * @subpackage widgets
 */
?>

<div class="inner">
	<div class="content-wrapper">
		<header class="entry-header">
			<?php echo $image;  ?>
		</header>
		<div class="entry-content">
			<?php echo $title; ?>
			<?php echo $content; ?>
			<?php echo $more_button;
			?>
		</div>
	</div>
	<footer class="entry-footer">
		<div class="entry-meta">
			<?php echo $date; ?>
			<?php echo $comments; ?>
		</div>
	</footer>
</div>