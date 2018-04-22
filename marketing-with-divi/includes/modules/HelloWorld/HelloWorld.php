<?php

class EVRDM_HelloWorld extends ET_Builder_Module {

	public $slug       = 'evrdm_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'http://philippstracker.com/',
		'author'     => 'Philipp Stracker',
		'author_uri' => 'https://philippstracker.com/',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'evrdm-marketing-with-divi' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'evrdm-marketing-with-divi' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'evrdm-marketing-with-divi' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new EVRDM_HelloWorld;
