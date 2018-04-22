<?php

class EVRDM_Calender extends ET_Builder_Module {

	public $slug       = 'evrdm_calendar';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'http://philippstracker.com/',
		'author'     => 'Philipp Stracker',
		'author_uri' => 'https://philippstracker.com/',
	);

	public function init() {
		$this->name = esc_html__( 'My Calendar', 'evrdm-marketing-with-divi' );
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
			'the_date' => array(
				'label'           => esc_html__( 'The Date', 'evrdm-marketing-with-divi' ),
				'type'            => 'date_picker',
				'option_category' => 'basic_option',
			),
			'is_small' => array(
				'label'           => esc_html__( 'Small Calendar', 'evrdm-marketing-with-divi' ),
				'type'            => 'yes_no_button',
				'options' => array(
					'on' => 'Yes',
					'off' => 'No',
				),
				'option_category' => 'basic_option',
			),
			'position' => array(
				'label'           => esc_html__( 'Calendar Position', 'evrdm-marketing-with-divi' ),
				'type'            => 'select',
				'options' => array(
					'left' => 'Left',
					'right' => 'Right',
				),
				'option_category' => 'basic_option',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		$the_date = strtotime( $this->props['the_date'] );
		$content = $this->props['content'];
		$item_classes = array( 'evrdm_calendar_item' );

		$month_short = date( 'M', $the_date );
		$day_num = date( 'j', $the_date );
		$dayname = date( 'l', $the_date );
		$month_full = date( 'F', $the_date );

		if ( 'on' == $this->props['is_small'] ) {
			$item_classes[] = 'size-small';
		} else {
			$item_classes[] = 'size-big';
		}
		$item_classes[] = 'pos-' . $this->props['position'];

		return sprintf(
			'<div class="%6$s">
			<div class="icon"><span class="month">%1$s</span><span class="day">%2$s</span></div>
			<div class="dayname">%3$s</div>
			<div class="date">%4$s</div>
			<div class="content">%5$s</div>
			</div>',
			$month_short,  // 1
			$day_num,      // 2
			$dayname,      // 3
			$day_num . '. ' . $month_full, // 4
			$content,      // 5
			implode( ' ', $item_classes ) // 6
		);
	}
}

new EVRDM_Calender;
