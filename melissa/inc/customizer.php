<?php
/**
 * Theme Customizer.
 *
 * @package Melissa
 */

/**
 * Retrieve a holder for Customizer options.
 *
 * @since  1.0.0
 * @return array
 */
function melissa_get_customizer_options() {
	/**
	 * Filter a holder for Customizer options (for theme/plugin developer customization).
	 *
	 * @since 1.0.0
	 */
	return apply_filters( 'melissa_get_customizer_options', array(
		'prefix'     => 'melissa',
		'capability' => 'edit_theme_options',
		'type'       => 'theme_mod',
		'options'    => array(

			/** `Site Indentity` section */
			'show_tagline'               => array(
				'title'    => esc_html__( 'Show tagline after logo', 'melissa' ),
				'section'  => 'title_tagline',
				'priority' => 60,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'totop_visibility'           => array(
				'title'    => esc_html__( 'Show ToTop button', 'melissa' ),
				'section'  => 'title_tagline',
				'priority' => 61,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'page_preloader'             => array(
				'title'    => esc_html__( 'Show page preloader', 'melissa' ),
				'section'  => 'title_tagline',
				'priority' => 62,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'general_settings'           => array(
				'title'    => esc_html__( 'General Site settings', 'melissa' ),
				'priority' => 40,
				'type'     => 'panel',
			),

			/** `Logo & Favicon` section */
			'logo_favicon'               => array(
				'title'    => esc_html__( 'Logo &amp; Favicon', 'melissa' ),
				'priority' => 25,
				'panel'    => 'general_settings',
				'type'     => 'section',
			),
			'header_logo_type'           => array(
				'title'   => esc_html__( 'Logo Type', 'melissa' ),
				'section' => 'logo_favicon',
				'default' => 'text',
				'field'   => 'radio',
				'choices' => array(
					'image' => esc_html__( 'Image', 'melissa' ),
					'text'  => esc_html__( 'Text', 'melissa' ),
				),
				'type'    => 'control',
			),
			'header_logo_url'            => array(
				'title'           => esc_html__( 'Logo Upload', 'melissa' ),
				'description'     => esc_html__( 'Upload logo image', 'melissa' ),
				'section'         => 'logo_favicon',
				'default'         => '%s/assets/images/logo.png',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'melissa_is_header_logo_image',
			),
			'retina_header_logo_url'     => array(
				'title'           => esc_html__( 'Retina Logo Upload', 'melissa' ),
				'description'     => esc_html__( 'Upload logo for retina-ready devices', 'melissa' ),
				'section'         => 'logo_favicon',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'melissa_is_header_logo_image',
			),
			'header_logo_font_family'    => array(
				'title'           => esc_html__( 'Font Family', 'melissa' ),
				'section'         => 'logo_favicon',
				'default'         => 'Yesteryear, cursive',
				'field'           => 'fonts',
				'type'            => 'control',
				'active_callback' => 'melissa_is_header_logo_text',
			),
			'header_logo_font_style'     => array(
				'title'           => esc_html__( 'Font Style', 'melissa' ),
				'section'         => 'logo_favicon',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => melissa_get_font_styles(),
				'type'            => 'control',
				'active_callback' => 'melissa_is_header_logo_text',
			),
			'header_logo_font_weight'    => array(
				'title'           => esc_html__( 'Font Weight', 'melissa' ),
				'section'         => 'logo_favicon',
				'default'         => '400',
				'field'           => 'select',
				'choices'         => melissa_get_font_weight(),
				'type'            => 'control',
				'active_callback' => 'melissa_is_header_logo_text',
			),
			'header_logo_font_size'      => array(
				'title'           => esc_html__( 'Font Size, px', 'melissa' ),
				'section'         => 'logo_favicon',
				'default'         => '77',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 40,
					'max'  => 77,
					'step' => 1,
				),
				'type'            => 'control',
				'active_callback' => 'melissa_is_header_logo_text',
			),
			'header_logo_character_set'  => array(
				'title'           => esc_html__( 'Character Set', 'melissa' ),
				'section'         => 'logo_favicon',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => melissa_get_character_sets(),
				'type'            => 'control',
				'active_callback' => 'melissa_is_header_logo_text',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs'                => array(
				'title'    => esc_html__( 'Breadcrumbs', 'melissa' ),
				'priority' => 30,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'breadcrumbs_visibillity'    => array(
				'title'   => esc_html__( 'Enable Breadcrumbs', 'melissa' ),
				'section' => 'breadcrumbs',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_front_visibillity' => array(
			    'title'   => esc_html__( 'Enable Breadcrumbs on front page', 'melissa' ),
			    'section' => 'breadcrumbs',
			    'default' => false,
			    'field'   => 'checkbox',
			    'type'    => 'control',
			),
			'breadcrumbs_page_title'     => array(
				'title'   => esc_html__( 'Enable page title in breadcrumbs area', 'melissa' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_path_type'      => array(
				'title'   => esc_html__( 'Show full/minified path', 'melissa' ),
				'section' => 'breadcrumbs',
				'default' => 'Minified',
				'field'   => 'select',
				'choices' => array(
					'full'     => esc_html__( 'Full', 'melissa' ),
					'minified' => esc_html__( 'Minified', 'melissa' ),
				),
				'type'    => 'control',
			),

			/** `Social links` section */
			'social_links'               => array(
				'title'    => esc_html__( 'Social links', 'melissa' ),
				'priority' => 50,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'footer_social_links'        => array(
				'title'   => esc_html__( 'Show social links in footer', 'melissa' ),
				'section' => 'social_links',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_share_buttons'    => array(
				'title'   => esc_html__( 'Show social sharing to blog posts', 'melissa' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_share_buttons'  => array(
				'title'   => esc_html__( 'Show social sharing to single blog post', 'melissa' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Page Layout` section */
			'page_layout'                => array(
				'title'    => esc_html__( 'Page Layout', 'melissa' ),
				'priority' => 55,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'header_container_type'      => array(
				'title'   => esc_html__( 'Header type', 'melissa' ),
				'section' => 'page_layout',
				'default' => 'boxed',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'melissa' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'melissa' ),
				),
				'type'    => 'control',
			),
			'content_container_type'     => array(
				'title'   => esc_html__( 'Content type', 'melissa' ),
				'section' => 'page_layout',
				'default' => 'boxed',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'melissa' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'melissa' ),
				),
				'type'    => 'control',
			),
			'footer_container_type'      => array(
				'title'   => esc_html__( 'Footer type', 'melissa' ),
				'section' => 'page_layout',
				'default' => 'boxed',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'melissa' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'melissa' ),
				),
				'type'    => 'control',
			),
			'container_width'            => array(
				'title'       => esc_html__( 'Container width (px)', 'melissa' ),
				'section'     => 'page_layout',
				'default'     => 1200,
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 960,
					'max'  => 1920,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'sidebar_width'              => array(
				'title'             => esc_html__( 'Sidebar width', 'melissa' ),
				'section'           => 'page_layout',
				'default'           => '1/3',
				'field'             => 'select',
				'choices'           => array(
					'1/3' => '1/3',
					'1/4' => '1/4',
				),
				'sanitize_callback' => 'sanitize_text_field',
				'type'              => 'control',
			),

			/** `Color Scheme` panel */
			'color_scheme'               => array(
				'title'       => esc_html__( 'Color Scheme', 'melissa' ),
				'description' => esc_html__( 'Configure Color Scheme', 'melissa' ),
				'priority'    => 40,
				'type'        => 'panel',
			),

			/** `Regular scheme` section */
			'regular_scheme'             => array(
				'title'    => esc_html__( 'Regular scheme', 'melissa' ),
				'priority' => 1,
				'panel'    => 'color_scheme',
				'type'     => 'section',
			),
			'regular_accent_color_1'     => array(
				'title'   => esc_html__( 'Accent color (1)', 'melissa' ),
				'section' => 'regular_scheme',
				'default' => '#2f3034',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_2'     => array(
				'title'   => esc_html__( 'Accent color (2)', 'melissa' ),
				'section' => 'regular_scheme',
				'default' => '#f72e2e',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_3'     => array(
				'title'   => esc_html__( 'Accent color (3)', 'melissa' ),
				'section' => 'regular_scheme',
				'default' => '#b0b0b0',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_4'     => array(
				'title'   => esc_html__( 'Accent color (4)', 'melissa' ),
				'section' => 'regular_scheme',
				'default' => '#000000',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_text_color'         => array(
				'title'   => esc_html__( 'Text color', 'melissa' ),
				'section' => 'regular_scheme',
				'default' => '#e7e7e7',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_link_color'         => array(
				'title'   => esc_html__( 'Link color', 'melissa' ),
				'section' => 'regular_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_link_hover_color'   => array(
				'title'   => esc_html__( 'Link hover color', 'melissa' ),
				'section' => 'regular_scheme',
				'default' => '#898989',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h1_color'           => array(
				'title'   => esc_html__( 'H1 color', 'melissa' ),
				'section' => 'regular_scheme',
				'default' => '#463f3f',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h2_color'           => array(
				'title'   => esc_html__( 'H2 color', 'melissa' ),
				'section' => 'regular_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h3_color'           => array(
				'title'   => esc_html__( 'H3 color', 'melissa' ),
				'section' => 'regular_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h4_color'           => array(
				'title'   => esc_html__( 'H4 color', 'melissa' ),
				'section' => 'regular_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h5_color'           => array(
				'title'   => esc_html__( 'H5 color', 'melissa' ),
				'section' => 'regular_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h6_color'           => array(
				'title'   => esc_html__( 'H6 color', 'melissa' ),
				'section' => 'regular_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Invert scheme` section */
			'invert_scheme'              => array(
				'title'    => esc_html__( 'Invert scheme', 'melissa' ),
				'priority' => 1,
				'panel'    => 'color_scheme',
				'type'     => 'section',
			),
			'invert_accent_color_1'      => array(
				'title'   => esc_html__( 'Accent color (1)', 'melissa' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_accent_color_2'      => array(
				'title'   => esc_html__( 'Accent color (2)', 'melissa' ),
				'section' => 'invert_scheme',
				'default' => '#000000',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_accent_color_3'      => array(
				'title'   => esc_html__( 'Accent color (3)', 'melissa' ),
				'section' => 'invert_scheme',
				'default' => '#5b5b5b',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_text_color'          => array(
				'title'   => esc_html__( 'Text color', 'melissa' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_link_color'          => array(
				'title'   => esc_html__( 'Link color', 'melissa' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_link_hover_color'    => array(
				'title'   => esc_html__( 'Link hover color', 'melissa' ),
				'section' => 'invert_scheme',
				'default' => '#000000',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h1_color'            => array(
				'title'   => esc_html__( 'H1 color', 'melissa' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h2_color'            => array(
				'title'   => esc_html__( 'H2 color', 'melissa' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h3_color'            => array(
				'title'   => esc_html__( 'H3 color', 'melissa' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h4_color'            => array(
				'title'   => esc_html__( 'H4 color', 'melissa' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h5_color'            => array(
				'title'   => esc_html__( 'H5 color', 'melissa' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h6_color'            => array(
				'title'   => esc_html__( 'H6 color', 'melissa' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Typography Settings` panel */
			'typography'                 => array(
				'title'       => esc_html__( 'Typography', 'melissa' ),
				'description' => esc_html__( 'Configure typography settings', 'melissa' ),
				'priority'    => 45,
				'type'        => 'panel',
			),

			/** `Body text` section */
			'body_typography'            => array(
				'title'    => esc_html__( 'Body text', 'melissa' ),
				'priority' => 5,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'body_font_family'           => array(
				'title'   => esc_html__( 'Font Family', 'melissa' ),
				'section' => 'body_typography',
				'default' => 'Vollkorn, serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'body_font_style'            => array(
				'title'   => esc_html__( 'Font Style', 'melissa' ),
				'section' => 'body_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => melissa_get_font_styles(),
				'type'    => 'control',
			),
			'body_font_weight'           => array(
				'title'   => esc_html__( 'Font Weight', 'melissa' ),
				'section' => 'body_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => melissa_get_font_weight(),
				'type'    => 'control',
			),
			'body_font_size'             => array(
				'title'       => esc_html__( 'Font Size, px', 'melissa' ),
				'section'     => 'body_typography',
				'default'     => '18',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'body_line_height'           => array(
				'title'       => esc_html__( 'Line Height', 'melissa' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'melissa' ),
				'section'     => 'body_typography',
				'default'     => '1.6',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'body_letter_spacing'        => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'melissa' ),
				'section'     => 'body_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'body_character_set'         => array(
				'title'   => esc_html__( 'Character Set', 'melissa' ),
				'section' => 'body_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => melissa_get_character_sets(),
				'type'    => 'control',
			),
			'body_text_align'            => array(
				'title'   => esc_html__( 'Text Align', 'melissa' ),
				'section' => 'body_typography',
				'default' => 'left',
				'field'   => 'select',
				'choices' => melissa_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H1 Heading` section */
			'h1_typography'              => array(
				'title'    => esc_html__( 'H1 Heading', 'melissa' ),
				'priority' => 10,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h1_font_family'             => array(
				'title'   => esc_html__( 'Font Family', 'melissa' ),
				'section' => 'h1_typography',
				'default' => 'Playfair Display, serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h1_font_style'              => array(
				'title'   => esc_html__( 'Font Style', 'melissa' ),
				'section' => 'h1_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => melissa_get_font_styles(),
				'type'    => 'control',
			),
			'h1_font_weight'             => array(
				'title'   => esc_html__( 'Font Weight', 'melissa' ),
				'section' => 'h1_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => melissa_get_font_weight(),
				'type'    => 'control',
			),
			'h1_font_size'               => array(
				'title'       => esc_html__( 'Font Size, px', 'melissa' ),
				'section'     => 'h1_typography',
				'default'     => '68',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h1_line_height'             => array(
				'title'       => esc_html__( 'Line Height', 'melissa' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'melissa' ),
				'section'     => 'h1_typography',
				'default'     => '1.1',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h1_letter_spacing'          => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'melissa' ),
				'section'     => 'h1_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h1_character_set'           => array(
				'title'   => esc_html__( 'Character Set', 'melissa' ),
				'section' => 'h1_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => melissa_get_character_sets(),
				'type'    => 'control',
			),
			'h1_text_align'              => array(
				'title'   => esc_html__( 'Text Align', 'melissa' ),
				'section' => 'h1_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => melissa_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H2 Heading` section */
			'h2_typography'              => array(
				'title'    => esc_html__( 'H2 Heading', 'melissa' ),
				'priority' => 15,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h2_font_family'             => array(
				'title'   => esc_html__( 'Font Family', 'melissa' ),
				'section' => 'h2_typography',
				'default' => 'Playfair Display, serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h2_font_style'              => array(
				'title'   => esc_html__( 'Font Style', 'melissa' ),
				'section' => 'h2_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => melissa_get_font_styles(),
				'type'    => 'control',
			),
			'h2_font_weight'             => array(
				'title'   => esc_html__( 'Font Weight', 'melissa' ),
				'section' => 'h2_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => melissa_get_font_weight(),
				'type'    => 'control',
			),
			'h2_font_size'               => array(
				'title'       => esc_html__( 'Font Size, px', 'melissa' ),
				'section'     => 'h2_typography',
				'default'     => '38',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h2_line_height'             => array(
				'title'       => esc_html__( 'Line Height', 'melissa' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'melissa' ),
				'section'     => 'h2_typography',
				'default'     => '1.3',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h2_letter_spacing'          => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'melissa' ),
				'section'     => 'h2_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h2_character_set'           => array(
				'title'   => esc_html__( 'Character Set', 'melissa' ),
				'section' => 'h2_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => melissa_get_character_sets(),
				'type'    => 'control',
			),
			'h2_text_align'              => array(
				'title'   => esc_html__( 'Text Align', 'melissa' ),
				'section' => 'h2_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => melissa_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H3 Heading` section */
			'h3_typography'              => array(
				'title'    => esc_html__( 'H3 Heading', 'melissa' ),
				'priority' => 20,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h3_font_family'             => array(
				'title'   => esc_html__( 'Font Family', 'melissa' ),
				'section' => 'h3_typography',
				'default' => 'Vollkorn, serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h3_font_style'              => array(
				'title'   => esc_html__( 'Font Style', 'melissa' ),
				'section' => 'h3_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => melissa_get_font_styles(),
				'type'    => 'control',
			),
			'h3_font_weight'             => array(
				'title'   => esc_html__( 'Font Weight', 'melissa' ),
				'section' => 'h3_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => melissa_get_font_weight(),
				'type'    => 'control',
			),
			'h3_font_size'               => array(
				'title'       => esc_html__( 'Font Size, px', 'melissa' ),
				'section'     => 'h3_typography',
				'default'     => '30',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h3_line_height'             => array(
				'title'       => esc_html__( 'Line Height', 'melissa' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'melissa' ),
				'section'     => 'h3_typography',
				'default'     => '1.3',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h3_letter_spacing'          => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'melissa' ),
				'section'     => 'h3_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h3_character_set'           => array(
				'title'   => esc_html__( 'Character Set', 'melissa' ),
				'section' => 'h3_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => melissa_get_character_sets(),
				'type'    => 'control',
			),
			'h3_text_align'              => array(
				'title'   => esc_html__( 'Text Align', 'melissa' ),
				'section' => 'h3_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => melissa_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H4 Heading` section */
			'h4_typography'              => array(
				'title'    => esc_html__( 'H4 Heading', 'melissa' ),
				'priority' => 25,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h4_font_family'             => array(
				'title'   => esc_html__( 'Font Family', 'melissa' ),
				'section' => 'h4_typography',
				'default' => 'Vollkorn, serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h4_font_style'              => array(
				'title'   => esc_html__( 'Font Style', 'melissa' ),
				'section' => 'h4_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => melissa_get_font_styles(),
				'type'    => 'control',
			),
			'h4_font_weight'             => array(
				'title'   => esc_html__( 'Font Weight', 'melissa' ),
				'section' => 'h4_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => melissa_get_font_weight(),
				'type'    => 'control',
			),
			'h4_font_size'               => array(
				'title'       => esc_html__( 'Font Size, px', 'melissa' ),
				'section'     => 'h4_typography',
				'default'     => '24',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h4_line_height'             => array(
				'title'       => esc_html__( 'Line Height', 'melissa' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'melissa' ),
				'section'     => 'h4_typography',
				'default'     => '1.6',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h4_letter_spacing'          => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'melissa' ),
				'section'     => 'h4_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h4_character_set'           => array(
				'title'   => esc_html__( 'Character Set', 'melissa' ),
				'section' => 'h4_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => melissa_get_character_sets(),
				'type'    => 'control',
			),
			'h4_text_align'              => array(
				'title'   => esc_html__( 'Text Align', 'melissa' ),
				'section' => 'h4_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => melissa_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H5 Heading` section */
			'h5_typography'              => array(
				'title'    => esc_html__( 'H5 Heading', 'melissa' ),
				'priority' => 30,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h5_font_family'             => array(
				'title'   => esc_html__( 'Font Family', 'melissa' ),
				'section' => 'h5_typography',
				'default' => 'Vollkorn, serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h5_font_style'              => array(
				'title'   => esc_html__( 'Font Style', 'melissa' ),
				'section' => 'h5_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => melissa_get_font_styles(),
				'type'    => 'control',
			),
			'h5_font_weight'             => array(
				'title'   => esc_html__( 'Font Weight', 'melissa' ),
				'section' => 'h5_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => melissa_get_font_weight(),
				'type'    => 'control',
			),
			'h5_font_size'               => array(
				'title'       => esc_html__( 'Font Size, px', 'melissa' ),
				'section'     => 'h5_typography',
				'default'     => '22',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h5_line_height'             => array(
				'title'       => esc_html__( 'Line Height', 'melissa' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'melissa' ),
				'section'     => 'h5_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h5_letter_spacing'          => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'melissa' ),
				'section'     => 'h5_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h5_character_set'           => array(
				'title'   => esc_html__( 'Character Set', 'melissa' ),
				'section' => 'h5_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => melissa_get_character_sets(),
				'type'    => 'control',
			),
			'h5_text_align'              => array(
				'title'   => esc_html__( 'Text Align', 'melissa' ),
				'section' => 'h5_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => melissa_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H6 Heading` section */
			'h6_typography'              => array(
				'title'    => esc_html__( 'H6 Heading', 'melissa' ),
				'priority' => 35,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h6_font_family'             => array(
				'title'   => esc_html__( 'Font Family', 'melissa' ),
				'section' => 'h6_typography',
				'default' => 'Vollkorn, serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h6_font_style'              => array(
				'title'   => esc_html__( 'Font Style', 'melissa' ),
				'section' => 'h6_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => melissa_get_font_styles(),
				'type'    => 'control',
			),
			'h6_font_weight'             => array(
				'title'   => esc_html__( 'Font Weight', 'melissa' ),
				'section' => 'h6_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => melissa_get_font_weight(),
				'type'    => 'control',
			),
			'h6_font_size'               => array(
				'title'       => esc_html__( 'Font Size, px', 'melissa' ),
				'section'     => 'h6_typography',
				'default'     => '20',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h6_line_height'             => array(
				'title'       => esc_html__( 'Line Height', 'melissa' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'melissa' ),
				'section'     => 'h6_typography',
				'default'     => '1.7',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h6_letter_spacing'          => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'melissa' ),
				'section'     => 'h6_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h6_character_set'           => array(
				'title'   => esc_html__( 'Character Set', 'melissa' ),
				'section' => 'h6_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => melissa_get_character_sets(),
				'type'    => 'control',
			),
			'h6_text_align'              => array(
				'title'   => esc_html__( 'Text Align', 'melissa' ),
				'section' => 'h6_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => melissa_get_text_aligns(),
				'type'    => 'control',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs_typography'     => array(
				'title'    => esc_html__( 'Breadcrumbs', 'melissa' ),
				'priority' => 45,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'breadcrumbs_font_family'    => array(
				'title'   => esc_html__( 'Font Family', 'melissa' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'Vollkorn, serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'breadcrumbs_font_style'     => array(
				'title'   => esc_html__( 'Font Style', 'melissa' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'italic',
				'field'   => 'select',
				'choices' => melissa_get_font_styles(),
				'type'    => 'control',
			),
			'breadcrumbs_font_weight'    => array(
				'title'   => esc_html__( 'Font Weight', 'melissa' ),
				'section' => 'breadcrumbs_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => melissa_get_font_weight(),
				'type'    => 'control',
			),
			'breadcrumbs_font_size'      => array(
				'title'       => esc_html__( 'Font Size, px', 'melissa' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '16',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'breadcrumbs_line_height'    => array(
				'title'       => esc_html__( 'Line Height', 'melissa' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'melissa' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'breadcrumbs_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'melissa' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'breadcrumbs_character_set'  => array(
				'title'   => esc_html__( 'Character Set', 'melissa' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => melissa_get_character_sets(),
				'type'    => 'control',
			),

			/** `Header` panel */
			'header_options'             => array(
				'title'    => esc_html__( 'Header', 'melissa' ),
				'priority' => 60,
				'type'     => 'panel',
			),

			/** `Header styles` section */
			'header_styles'              => array(
				'title'    => esc_html__( 'Styles', 'melissa' ),
				'priority' => 5,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'header_bg_color'            => array(
				'title'   => esc_html__( 'Background Color', 'melissa' ),
				'section' => 'header_styles',
				'field'   => 'hex_color',
				'default' => false,
				'type'    => 'control',
			),
			'header_bg_repeat'           => array(
				'title'   => esc_html__( 'Background Repeat', 'melissa' ),
				'section' => 'header_styles',
				'default' => 'repeat',
				'field'   => 'select',
				'choices' => array(
					'no-repeat' => esc_html__( 'No Repeat', 'melissa' ),
					'repeat'    => esc_html__( 'Tile', 'melissa' ),
					'repeat-x'  => esc_html__( 'Tile Horizontally', 'melissa' ),
					'repeat-y'  => esc_html__( 'Tile Vertically', 'melissa' ),
				),
				'type'    => 'control',
			),
			'header_bg_position_x'       => array(
				'title'   => esc_html__( 'Background Position', 'melissa' ),
				'section' => 'header_styles',
				'default' => 'center',
				'field'   => 'select',
				'choices' => array(
					'left'   => esc_html__( 'Left', 'melissa' ),
					'center' => esc_html__( 'Center', 'melissa' ),
					'right'  => esc_html__( 'Right', 'melissa' ),
				),
				'type'    => 'control',
			),
			'header_bg_attachment'       => array(
				'title'   => esc_html__( 'Background Attachment', 'melissa' ),
				'section' => 'header_styles',
				'default' => 'scroll',
				'field'   => 'select',
				'choices' => array(
					'scroll' => esc_html__( 'Scroll', 'melissa' ),
					'fixed'  => esc_html__( 'Fixed', 'melissa' ),
				),
				'type'    => 'control',
			),
			'header_layout_type'         => array(
				'title'   => esc_html__( 'Layout', 'melissa' ),
				'section' => 'header_styles',
				'default' => 'centered',
				'field'   => 'select',
				'choices' => array(
					'minimal'  => esc_html__( 'Style 1', 'melissa' ),
					'centered' => esc_html__( 'Style 2', 'melissa' ),
					'default'  => esc_html__( 'Style 3', 'melissa' ),
				),
				'type'    => 'control',
			),

			/** `Top Panel` section */
			'header_top_panel'           => array(
				'title'    => esc_html__( 'Top Panel', 'melissa' ),
				'priority' => 10,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'top_panel_text'             => array(
				'title'       => esc_html__( 'Disclaimer Text', 'melissa' ),
				'description' => esc_html__( 'HTML formatting support', 'melissa' ),
				'section'     => 'header_top_panel',
				'default'     => false,
				'field'       => 'textarea',
				'type'        => 'control',
			),
			'top_panel_search'           => array(
				'title'   => esc_html__( 'Enable search', 'melissa' ),
				'section' => 'header_top_panel',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'top_panel_social_links'     => array(
				'title'   => esc_html__( 'Show social links in top panel', 'melissa' ),
				'section' => 'header_top_panel',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'top_panel_bg'               => array(
				'title'   => esc_html__( 'Background color', 'melissa' ),
				'section' => 'header_top_panel',
				'default' => '#f5f1e4',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Main Menu` section */
			'header_main_menu'           => array(
				'title'    => esc_html__( 'Main Menu', 'melissa' ),
				'priority' => 15,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'header_menu_sticky'         => array(
				'title'   => esc_html__( 'Enable sticky menu', 'melissa' ),
				'section' => 'header_main_menu',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'header_menu_attributes'     => array(
				'title'   => esc_html__( 'Enable title attributes', 'melissa' ),
				'section' => 'header_main_menu',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'hidden_menu_items_title'    => array(
				'title'   => esc_html__( 'Hidden menu items title', 'melissa' ),
				'section' => 'header_main_menu',
				'default' => esc_html__( 'More', 'melissa' ),
				'field'   => 'input',
				'type'    => 'control'
			),

			/** `Sidebar` section */
			'sidebar_settings'           => array(
				'title'    => esc_html__( 'Sidebar', 'melissa' ),
				'priority' => 105,
				'type'     => 'section',
			),
			'sidebar_position'           => array(
				'title'   => esc_html__( 'Sidebar Position', 'melissa' ),
				'section' => 'sidebar_settings',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'one-left-sidebar'  => esc_html__( 'Sidebar on left side', 'melissa' ),
					'one-right-sidebar' => esc_html__( 'Sidebar on right side', 'melissa' ),
					'fullwidth'         => esc_html__( 'No sidebars', 'melissa' ),
				),
				'type'    => 'control',
			),

			/** `MailChimp` section */
			'mailchimp'                  => array(
				'title'       => esc_html__( 'MailChimp', 'melissa' ),
				'description' => esc_html__( 'Setup MailChimp settings for subscribe widget', 'melissa' ),
				'priority'    => 109,
				'type'        => 'section',
			),
			'mailchimp_api_key'          => array(
				'title'   => esc_html__( 'MailChimp API key', 'melissa' ),
				'section' => 'mailchimp',
				'field'   => 'text',
				'type'    => 'control',
			),
			'mailchimp_list_id'          => array(
				'title'   => esc_html__( 'MailChimp list ID', 'melissa' ),
				'section' => 'mailchimp',
				'field'   => 'text',
				'type'    => 'control',
			),

			/** `Ads Management` panel */
			'ads_management'             => array(
				'title'    => esc_html__( 'Ads Management', 'melissa' ),
				'priority' => 110,
				'type'     => 'section',
			),
			'ads_header'                 => array(
				'title'             => esc_html__( 'Header', 'melissa' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_home_before_loop'       => array(
				'title'             => esc_html__( 'Front Page Before Loop', 'melissa' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_post_before_content'    => array(
				'title'             => esc_html__( 'Post Before Content', 'melissa' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_post_before_comments'   => array(
				'title'             => esc_html__( 'Post Before Comments', 'melissa' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),

			/** `Footer` panel */
			'footer_options'             => array(
				'title'    => esc_html__( 'Footer', 'melissa' ),
				'priority' => 110,
				'type'     => 'section',
			),
			'footer_logo_url'            => array(
				'title'   => esc_html__( 'Logo upload', 'melissa' ),
				'section' => 'footer_options',
				'field'   => 'image',
				'default' => '%s/assets/images/footer-logo.png',
				'type'    => 'control',
			),
			'footer_copyright'           => array(
				'title'   => esc_html__( 'Copyright text', 'melissa' ),
				'section' => 'footer_options',
				'default' => melissa_get_default_footer_copyright(),
				'field'   => 'textarea',
				'type'    => 'control',
			),
			'footer_widget_columns'      => array(
				'title'   => esc_html__( 'Widget Area Columns', 'melissa' ),
				'section' => 'footer_options',
				'default' => '3',
				'field'   => 'select',
				'choices' => array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
					'4' => '4',
				),
				'type'    => 'control'
			),
			'footer_layout_type'         => array(
				'title'   => esc_html__( 'Layout', 'melissa' ),
				'section' => 'footer_options',
				'default' => 'centered',
				'field'   => 'select',
				'choices' => array(
					'default'  => esc_html__( 'Style 1', 'melissa' ),
					'centered' => esc_html__( 'Style 2', 'melissa' ),
					'minimal'  => esc_html__( 'Style 3', 'melissa' ),
				),
				'type'    => 'control'
			),
			'footer_widgets_bg'          => array(
				'title'   => esc_html__( 'Footer Widgets Area color', 'melissa' ),
				'section' => 'footer_options',
				'default' => '#2f3034',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'footer_bg'                  => array(
				'title'   => esc_html__( 'Footer Background color', 'melissa' ),
				'section' => 'footer_options',
				'default' => '#2f3034',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Blog Settings` panel */
			'blog_settings'              => array(
				'title'    => esc_html__( 'Blog Settings', 'melissa' ),
				'priority' => 115,
				'type'     => 'panel',
			),

			/** `Blog` section */
			'blog'                       => array(
				'title'           => esc_html__( 'Blog', 'melissa' ),
				'panel'           => 'blog_settings',
				'priority'        => 10,
				'type'            => 'section',
				'active_callback' => 'is_home',
			),
			'blog_layout_type'           => array(
				'title'   => esc_html__( 'Layout', 'melissa' ),
				'section' => 'blog',
				'default' => 'default',
				'field'   => 'select',
				'choices' => array(
					'default'        => esc_html__( 'Listing', 'melissa' ),
					'grid-2-cols'    => esc_html__( 'Grid (2 Columns)', 'melissa' ),
					'grid-3-cols'    => esc_html__( 'Grid (3 Columns)', 'melissa' ),
					'masonry-2-cols' => esc_html__( 'Masonry (2 Columns)', 'melissa' ),
					'masonry-3-cols' => esc_html__( 'Masonry (3 Columns)', 'melissa' ),
				),
				'type'    => 'control',
			),
			'blog_sticky_label'          => array(
				'title'       => esc_html__( 'Featured Post Label', 'melissa' ),
				'description' => esc_html__( 'Label for sticky post', 'melissa' ),
				'section'     => 'blog',
				'default'     => 'icon:material:star_border',
				'field'       => 'text',
				'type'        => 'control',
			),
			'blog_posts_content'         => array(
				'title'   => esc_html__( 'Post content', 'melissa' ),
				'section' => 'blog',
				'default' => 'excerpt',
				'field'   => 'select',
				'choices' => array(
					'excerpt' => esc_html__( 'Only excerpt', 'melissa' ),
					'full'    => esc_html__( 'Full content', 'melissa' ),
				),
				'type'    => 'control',
			),
			'blog_featured_image'        => array(
				'title'   => esc_html__( 'Featured image', 'melissa' ),
				'section' => 'blog',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'small'     => esc_html__( 'Small', 'melissa' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'melissa' ),
				),
				'type'    => 'control',
			),
			'blog_read_more_text'        => array(
				'title'   => esc_html__( 'Read More button text', 'melissa' ),
				'section' => 'blog',
				'default' => esc_html__( 'More', 'melissa' ),
				'field'   => 'text',
				'type'    => 'control',
			),
			'blog_post_author'           => array(
				'title'   => esc_html__( 'Show post author', 'melissa' ),
				'section' => 'blog',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_publish_date'     => array(
				'title'   => esc_html__( 'Show publish date', 'melissa' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_categories'       => array(
				'title'   => esc_html__( 'Show categories', 'melissa' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_tags'             => array(
				'title'   => esc_html__( 'Show tags', 'melissa' ),
				'section' => 'blog',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_comments'         => array(
				'title'   => esc_html__( 'Show comments', 'melissa' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Post` section */
			'blog_post'                  => array(
				'title'           => esc_html__( 'Post', 'melissa' ),
				'panel'           => 'blog_settings',
				'priority'        => 20,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'single_post_author'         => array(
				'title'   => esc_html__( 'Show post author', 'melissa' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_publish_date'   => array(
				'title'   => esc_html__( 'Show publish date', 'melissa' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_categories'     => array(
				'title'   => esc_html__( 'Show categories', 'melissa' ),
				'section' => 'blog_post',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_tags'           => array(
				'title'   => esc_html__( 'Show tags', 'melissa' ),
				'section' => 'blog_post',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_comments'       => array(
				'title'   => esc_html__( 'Show comments', 'melissa' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_author_block'        => array(
				'title'   => esc_html__( 'Enable the author block after each post', 'melissa' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			/** 404 panel */
			'page_404_options'           => array(
				'title'    => esc_html__( '404', 'melissa' ),
				'priority' => 118,
				'type'     => 'section',
			),
			'page_404_bg_color'          => array(
				'title'   => esc_html__( 'Background Color', 'melissa' ),
				'section' => 'page_404_options',
				'field'   => 'hex_color',
				'default' => '#000000',
				'type'    => 'control',
			),
			'page_404_bg_image'          => array(
				'title'   => esc_html__( 'Background Image', 'melissa' ),
				'section' => 'page_404_options',
				'field'   => 'image',
				'default' => '%s/assets/images/bg_404.jpg',
				'type'    => 'control',
			),
			'page_404_bg_repeat'         => array(
				'title'   => esc_html__( 'Background Repeat', 'melissa' ),
				'section' => 'page_404_options',
				'default' => 'no-repeat',
				'field'   => 'select',
				'choices' => array(
					'no-repeat' => esc_html__( 'No Repeat', 'melissa' ),
					'repeat'    => esc_html__( 'Tile', 'melissa' ),
					'repeat-x'  => esc_html__( 'Tile Horizontally', 'melissa' ),
					'repeat-y'  => esc_html__( 'Tile Vertically', 'melissa' ),
				),
				'type'    => 'control',
			),
			'page_404_bg_position_x'     => array(
				'title'   => esc_html__( 'Background Position', 'melissa' ),
				'section' => 'page_404_options',
				'default' => 'center',
				'field'   => 'select',
				'choices' => array(
					'left'   => esc_html__( 'Left', 'melissa' ),
					'center' => esc_html__( 'Center', 'melissa' ),
					'right'  => esc_html__( 'Right', 'melissa' ),
				),
				'type'    => 'control',
			),
			'page_404_bg_attachment'     => array(
				'title'   => esc_html__( 'Background Attachment', 'melissa' ),
				'section' => 'page_404_options',
				'default' => 'scroll',
				'field'   => 'select',
				'choices' => array(
					'scroll' => esc_html__( 'Scroll', 'melissa' ),
					'fixed'  => esc_html__( 'Fixed', 'melissa' ),
				),
				'type'    => 'control',
			),
		)
	) );
}

/**
 * Return true if logo in header has image type. Otherwise - return false.
 *
 * @param  object $control
 *
 * @return bool
 */
function melissa_is_header_logo_image( $control ) {

	if ( $control->manager->get_setting( 'header_logo_type' )->value() == 'image' ) {
		return true;
	}

	return false;
}

/**
 * Return true if logo in header has text type. Otherwise - return false.
 *
 * @param  object $control
 *
 * @return bool
 */
function melissa_is_header_logo_text( $control ) {

	if ( $control->manager->get_setting( 'header_logo_type' )->value() == 'text' ) {
		return true;
	}

	return false;
}

// Move native `site_icon` control (based on WordPress core) in custom section.
add_action( 'customize_register', 'melissa_customizer_change_core_controls', 20 );
function melissa_customizer_change_core_controls( $wp_customize ) {
	$wp_customize->get_control( 'site_icon' )->section      = 'melissa_logo_favicon';
	$wp_customize->get_control( 'background_color' )->label = esc_html__( 'Body Background Color', 'melissa' );
}

////////////////////////////////////
// Typography utility function    //
////////////////////////////////////
function melissa_get_font_styles() {
	return apply_filters( 'melissa_get_font_styles', array(
		'normal'  => esc_html__( 'Normal', 'melissa' ),
		'italic'  => esc_html__( 'Italic', 'melissa' ),
		'oblique' => esc_html__( 'Oblique', 'melissa' ),
		'inherit' => esc_html__( 'Inherit', 'melissa' ),
	) );
}

function melissa_get_character_sets() {
	return apply_filters( 'melissa_get_character_sets', array(
		'latin'        => esc_html__( 'Latin', 'melissa' ),
		'greek'        => esc_html__( 'Greek', 'melissa' ),
		'greek-ext'    => esc_html__( 'Greek Extended', 'melissa' ),
		'vietnamese'   => esc_html__( 'Vietnamese', 'melissa' ),
		'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'melissa' ),
		'latin-ext'    => esc_html__( 'Latin Extended', 'melissa' ),
		'cyrillic'     => esc_html__( 'Cyrillic', 'melissa' ),
	) );
}

function melissa_get_text_aligns() {
	return apply_filters( 'melissa_get_text_aligns', array(
		'inherit' => esc_html__( 'Inherit', 'melissa' ),
		'center'  => esc_html__( 'Center', 'melissa' ),
		'justify' => esc_html__( 'Justify', 'melissa' ),
		'left'    => esc_html__( 'Left', 'melissa' ),
		'right'   => esc_html__( 'Right', 'melissa' ),
	) );
}

function melissa_get_font_weight() {
	return apply_filters( 'melissa_get_font_weight', array(
		'100' => '100',
		'200' => '200',
		'300' => '300',
		'400' => '400',
		'500' => '500',
		'600' => '600',
		'700' => '700',
		'800' => '800',
		'900' => '900',
	) );
}

/**
 * Return array of arguments for dynamic CSS module
 *
 * @return array
 */
function melissa_get_dynamic_css_options() {
	return apply_filters( 'melissa_get_dynamic_css_options', array(
		'prefix'    => 'melissa',
		'type'      => 'theme_mod',
		'single'    => true,
		'css_files' => array(
			MELISSA_THEME_DIR . '/assets/css/dynamic.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/site/elements.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/site/header.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/site/forms.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/site/social.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/site/menus.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/site/post.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/site/navigation.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/site/footer.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/site/misc.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/site/buttons.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/widgets/widget-default.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/widgets/taxonomy-tiles.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/widgets/carousel.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/widgets/instagram.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/widgets/subscribe.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/builder/button.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/builder/blurb.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/builder/counters.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/builder/toggles.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/builder/audio.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/builder/blog.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/builder/taxonomy.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/builder/slider.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/builder/team.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/builder/testimonial.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/builder/call-to-action.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/builder/tabs.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/builder/countdown-timer.css',
			MELISSA_THEME_DIR . '/assets/css/dynamic/gallery/gallery.css',
		),
		'options'   => array(
			'header_logo_font_style',
			'header_logo_font_weight',
			'header_logo_font_size',
			'header_logo_font_family',

			'body_font_style',
			'body_font_weight',
			'body_font_size',
			'body_line_height',
			'body_font_family',
			'body_letter_spacing',
			'body_text_align',

			'h1_font_style',
			'h1_font_weight',
			'h1_font_size',
			'h1_line_height',
			'h1_font_family',
			'h1_letter_spacing',
			'h1_text_align',

			'h2_font_style',
			'h2_font_weight',
			'h2_font_size',
			'h2_line_height',
			'h2_font_family',
			'h2_letter_spacing',
			'h2_text_align',

			'h3_font_style',
			'h3_font_weight',
			'h3_font_size',
			'h3_line_height',
			'h3_font_family',
			'h3_letter_spacing',
			'h3_text_align',

			'h4_font_style',
			'h4_font_weight',
			'h4_font_size',
			'h4_line_height',
			'h4_font_family',
			'h4_letter_spacing',
			'h4_text_align',

			'h5_font_style',
			'h5_font_weight',
			'h5_font_size',
			'h5_line_height',
			'h5_font_family',
			'h5_letter_spacing',
			'h5_text_align',

			'h6_font_style',
			'h6_font_weight',
			'h6_font_size',
			'h6_line_height',
			'h6_font_family',
			'h6_letter_spacing',
			'h6_text_align',

			'breadcrumbs_font_style',
			'breadcrumbs_font_weight',
			'breadcrumbs_font_size',
			'breadcrumbs_line_height',
			'breadcrumbs_font_family',
			'breadcrumbs_letter_spacing',
			'breadcrumbs_text_align',

			'regular_accent_color_1',
			'regular_accent_color_2',
			'regular_accent_color_3',
			'regular_accent_color_4',
			'regular_text_color',
			'regular_link_color',
			'regular_link_hover_color',
			'regular_h1_color',
			'regular_h2_color',
			'regular_h3_color',
			'regular_h4_color',
			'regular_h5_color',
			'regular_h6_color',

			'invert_accent_color_1',
			'invert_accent_color_2',
			'invert_accent_color_3',
			'invert_text_color',
			'invert_link_color',
			'invert_link_hover_color',
			'invert_h1_color',
			'invert_h2_color',
			'invert_h3_color',
			'invert_h4_color',
			'invert_h5_color',
			'invert_h6_color',

			'header_bg_color',
			'header_bg_image',
			'header_bg_repeat',
			'header_bg_position_x',
			'header_bg_attachment',

			'top_panel_bg',

			'container_width',

			'footer_widgets_bg',
			'footer_bg',

			'page_404_bg_image',
			'page_404_bg_color',
			'page_404_bg_repeat',
			'page_404_bg_position_x',
			'page_404_bg_attachment',
		),
	) );
}

/**
 * Return array of arguments for Google Font loader module.
 *
 * @since  1.0.0
 * @return array
 */
function melissa_get_fonts_options() {
	return apply_filters( 'melissa_get_fonts_options', array(
		'prefix'  => 'melissa',
		'type'    => 'theme_mod',
		'single'  => true,
		'options' => array(
			'body'        => array(
				'family'  => 'body_font_family',
				'style'   => 'body_font_style',
				'weight'  => 'body_font_weight',
				'charset' => 'body_character_set',
			),
			'h1'          => array(
				'family'  => 'h1_font_family',
				'style'   => 'h1_font_style',
				'weight'  => 'h1_font_weight',
				'charset' => 'h1_character_set',
			),
			'h2'          => array(
				'family'  => 'h2_font_family',
				'style'   => 'h2_font_style',
				'weight'  => 'h2_font_weight',
				'charset' => 'h2_character_set',
			),
			'h3'          => array(
				'family'  => 'h3_font_family',
				'style'   => 'h3_font_style',
				'weight'  => 'h3_font_weight',
				'charset' => 'h3_character_set',
			),
			'h4'          => array(
				'family'  => 'h4_font_family',
				'style'   => 'h4_font_style',
				'weight'  => 'h4_font_weight',
				'charset' => 'h4_character_set',
			),
			'h5'          => array(
				'family'  => 'h5_font_family',
				'style'   => 'h5_font_style',
				'weight'  => 'h5_font_weight',
				'charset' => 'h5_character_set',
			),
			'h6'          => array(
				'family'  => 'h6_font_family',
				'style'   => 'h6_font_style',
				'weight'  => 'h6_font_weight',
				'charset' => 'h6_character_set',
			),
			'header_logo' => array(
				'family'  => 'header_logo_font_family',
				'style'   => 'header_logo_font_style',
				'weight'  => 'header_logo_font_weight',
				'charset' => 'header_logo_character_set',
			),
			'breadcrumbs' => array(
				'family'  => 'breadcrumbs_font_family',
				'style'   => 'breadcrumbs_font_style',
				'weight'  => 'breadcrumbs_font_weight',
				'charset' => 'breadcrumbs_character_set',
			),
		)
	) );
}

/**
 * Get default footer copyright.
 *
 * @since  1.0.0
 * @return string
 */
function melissa_get_default_footer_copyright() {
	return esc_html__( '© 2016 Melissa. All rights reserved.', 'melissa' ) . '<span><a href="%%home_url%%privacy-policy/">' . esc_html__( ' Privacy Policy', 'melissa' ) . '</a> -  <a href="%%home_url%%cookie-policy/">' . esc_html__( 'Cookies Policy', 'melissa' ) . '</a></span>';
}
