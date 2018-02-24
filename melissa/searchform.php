<?php
/**
 * The template for displaying search form.
 *
 * @package Melissa
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'melissa' ) ?></span>
		<input type="search" class="search-form__field"
			placeholder=""
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label', 'melissa' ) ?>" />
	</label>
	<button type="submit" class="search-form__submit"></button>
</form>