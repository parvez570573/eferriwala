<?php

namespace MartfuryAddons\Elementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Banner Small widget
 */
class Brand_Images extends Widget_Base {
	/**
	 * Retrieve the widget name.
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'mf-brand-images';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Martury - Brand Images', 'martfury' );
	}


	/**
	 * Retrieve the widget icon.
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-banner';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'martfury' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @access protected
	 */
	protected function _register_controls() {

		$this->start_controls_section(
			'section_brand_images',
			[ 'label' => esc_html__( 'Brand Images', 'martfury' ) ]
		);

		$this->add_control(
			'title',
			[
				'label'       => esc_html__( 'Title', 'martfury' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'     => __( 'Product Brand Images', 'martfury' ),
				'placeholder' => esc_html__( 'Enter your title', 'martfury' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'number',
			[
				'label'       => esc_html__( 'Numbers', 'martfury' ),
				'type'        => Controls_Manager::NUMBER,
				'default'     => 5,
				'placeholder' => esc_html__( 'Enter your number', 'martfury' ),
			]
		);

		$this->add_control(
			'orderby',
			[
				'label'   => esc_html__( 'Order By', 'martfury' ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'name'  => esc_html__( 'Title', 'martfury' ),
					'count' => esc_html__( 'Count', 'martfury' ),
					'menu_order' => esc_html__( 'Brand Order', 'martfury' ),
				],
				'default' => 'name',
				'toggle'  => false,
			]
		);

		$this->add_control(
			'order',
			[
				'label'   => esc_html__( 'Order', 'martfury' ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'asc'  => esc_html__( 'Ascending', 'martfury' ),
					'desc' => esc_html__( 'Descending', 'martfury' ),
				],
				'default' => 'asc',
				'toggle'  => false,
			]
		);

		$this->add_control(
			'columns',
			[
				'label'       => esc_html__( 'Columns', 'martfury' ),
				'type'        => Controls_Manager::NUMBER,
				'max'         => 10,
				'default'     => 5,
				'placeholder' => esc_html__( 'Enter your number', 'martfury' ),
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_brand_title',
			[
				'label' => esc_html__( 'Title', 'martfury' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'heading_spacing',
			[
				'label'     => esc_html__( 'Spacing', 'martfury' ),
				'type'      => Controls_Manager::SLIDER,
				'default'   => [
					'unit' => 'px',
				],
				'range'     => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .mf-elementor-brand-images .brand-title' => 'margin-bottom: {{SIZE}}{{UNIT}}',
				],
			]
		);

		$this->add_control(
			'heading_color',
			[
				'label'     => esc_html__( 'Text Color', 'martfury' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mf-elementor-brand-images .brand-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'heading_typography',
				'selector' => '{{WRAPPER}} .mf-elementor-brand-images .brand-title',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_brand_item',
			[
				'label' => esc_html__( 'Item', 'martfury' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'brand_item_padding',
			[
				'label'      => esc_html__( 'Padding', 'martfury' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'default'    => [],
				'selectors'  => [
					'{{WRAPPER}} .mf-elementor-brand-images .image-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'brand_item_border_style',
			[
				'label'      => esc_html__( 'Border Style', 'martfury' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'' => __( 'None', 'elementor' ),
					'solid' => esc_html__( 'Solid', 'Border Control', 'elementor' ),
					'double' => esc_html__( 'Double', 'Border Control', 'elementor' ),
					'dotted' => esc_html__( 'Dotted', 'Border Control', 'elementor' ),
					'dashed' => esc_html__( 'Dashed', 'Border Control', 'elementor' ),
					'groove' => esc_html__( 'Groove', 'Border Control', 'elementor' ),
				],
				'selectors' => [
					'{{SELECTOR}} .martfury-images-grid.mf-elementor-brand-images .image-item' => 'border-style: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'brand_item_border_color',
			[
				'label'      => esc_html__( 'Border Color', 'martfury' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{SELECTOR}} .mf-elementor-brand-images .image-item' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

	}

	/**
	 * Render icon box widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'wrapper', 'class', [
			'mf-elementor-brand-images',
			'mf-brand-images',
			'martfury-images-grid'
		] );


		?>
        <div <?php echo $this->get_render_attribute_string( 'wrapper' ); ?>>
			<?php if ( $settings['title'] ) : ?>
                <h2 class="brand-title"><?php echo $settings['title']; ?></h2>
			<?php endif; ?>
            <div class="images-list columns-<?php echo $settings['columns']; ?>">
				<?php
				$terms = get_terms( array(
					'taxonomy' => 'product_brand',
					'number'   => $settings['number'],
					'orderby'  => $settings['orderby'],
					'order'    => $settings['order'],
				) );

				$i      = 1;

				foreach ( $terms as $term ) {
					$thumb_id         = get_term_meta( $term->term_id, 'brand_thumbnail_id', true );
					$shop_catalog_img = wp_get_attachment_image_src( $thumb_id, 'full' );
					$term_link        = get_term_link( $term, 'product_cat' );

					if ( $thumb_id ) {
						if ( $i % $settings['columns'] == 1 ) {
							echo '<div class="image-row">';
						}

						echo sprintf( '<div class="image-item">
                                            <a href="%s"><img src="%s" alt="%s"/></a>
                                         </div>',
							esc_url( $term_link ),
							$shop_catalog_img[0],
							esc_html( $term->name )
						);

						if ( $i % $settings['columns'] == 0 || $i == $settings['number'] ) {
							echo '</div>';
						}
						$i ++;
					}
				}
				?>
            </div>
        </div>
		<?php
	}
}