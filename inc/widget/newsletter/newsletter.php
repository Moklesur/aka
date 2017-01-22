<?php
/**
 * Newsletter widget.
 *
 * @package themetim
 */

class Themetim_Newsletter_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-newsletter-widget',
			__( 'ThemeTim Newsletter', 'themetim' ),
			array(
				'description' => __( '', 'themetim' ),
			),
			array(),

			array(
				'heading_alignment' => array(
					'type' => 'select',
					'label' => __( 'Text Alignment', 'themetim' ),
					'default' => 'text-left',
					'options' => array(
						'text-left' => __( 'Text Left', 'themetim' ),
						'text-center' => __( 'Text Center', 'themetim' ),
						'text-right' => __( 'Text Right', 'themetim' ),
					)
				),
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Heading', 'themetim' ),
				),
				'sub_title' => array(
					'type' => 'text',
					'label' => __( 'Sub Heading', 'themetim' ),
				),
				'texteditor' => array(
					'type' => 'tinymce',
					'label' => __( '', 'themetim' ),
					'default' => '',
					'rows' => 7,
					'default_editor' => 'html',
					'button_filters' => array(
						'mce_buttons' => array( $this, 'filter_mce_buttons' ),
						'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
						'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
						'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
						'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
					),
				),
				'newsletter_url' => array(
					'type' => 'text',
					'label' => __( 'Newsletter URL', 'themetim' ),
				),
			)

		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'themetim-newsletter-widget', __FILE__, 'Themetim_Newsletter_Widget' );
