<footer class="comment-meta">
	<div class="comment-author vcard">
		<?php echo melissa_comment_author_avatar(); ?>
	</div>
	<div class="comment-metadata">
		<?php printf( '<span class="posted-by">' . esc_html__( 'Posted by', 'melissa' ) . '</span>' . esc_html__( ' %s', 'melissa' ), melissa_get_comment_author_link() ); ?>
		<?php echo melissa_get_comment_date( array( 'format' => 'M d, Y' ) ); ?>
	</div>
</footer>
<div class="comment-content">
	<?php echo melissa_get_comment_text(); ?>
</div>
<div class="reply">
	<?php echo melissa_get_comment_reply_link( array( 'reply_text' => '<i class="material-icons">reply</i>' ) ); ?>
</div>