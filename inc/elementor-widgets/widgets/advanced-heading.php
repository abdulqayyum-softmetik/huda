<?php

use Elementor\Widget_Base;

if ( !defined( 'ABSPATH' ) ){
    exit; // exit if accesed directly
} 


class Elementor_Advanced_Heading extends Widget_Base {


	 /**
     * Get widget name.
     *
     */
	public function get_name() {
		return 'hea-advanced-heading-widget';
	}

	/**
	 * Get widget title.
	 *
	*/
	public function get_title(): string {
		return esc_html__( 'Advanced Heading', 'huda' );
	}


	/**
     * Get widget icon.
     *
    */
	public function get_icon() {
		return 'eicon-t-letter';
	}

	/**
     * Get widget categories.
     *
    */
	public function get_categories() {
		return [ 'basic' ];
	}

	/**
     * Get widget keywordss.
     *
    */
	public function get_keywords() {
		return [ 'advanced', 'heading' ];
	}

	/**
     * Register widgets control.
     *
    */
	protected function register_controls() {

		// Start Content Tab 
		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Advanced Heading', 'huda' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'heading_before',
			[
				'label' => esc_html__( 'Title Before', 'huda' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 5,
				'default' => esc_html__( 'Your', 'huda' ),
				'placeholder' => esc_html__( 'Your', 'huda' ),
			]
		);

		$this->add_control(
			'heading_center',
			[
				'label' => esc_html__( 'Title Center', 'huda' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 5,
				'default' => esc_html__( 'Main', 'huda' ),
				'placeholder' => esc_html__( 'Main', 'huda' ),
			]
		);

		$this->add_control(
			'heading_after',
			[
				'label' => esc_html__( 'Title After', 'huda' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 5,
				'default' => esc_html__( 'Heading', 'huda' ),
				'placeholder' => esc_html__( 'Heading', 'huda' ),
			]
		);

		$this->add_control(
			'title_html_tag',
			[
				'label' => __( 'HTML Tag', 'huda' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'h2',
				'options' => [
					'h1' => [
						'title' => __( 'H1', 'huda' ),
						'icon'  => 'eicon-editor-h1',
					],
					'h2' => [
						'title' => __( 'H2', 'huda' ),
						'icon'  => 'eicon-editor-h2',
					],
					'h3' => [
						'title' => __( 'H3', 'huda' ),
						'icon'  => 'eicon-editor-h3',
					],
					'h4' => [
						'title' => __( 'H4', 'huda' ),
						'icon'  => 'eicon-editor-h4',
					],
					'h5' => [
						'title' => __( 'H5', 'huda' ),
						'icon'  => 'eicon-editor-h5',
					],
					'h6' => [
						'title' => __( 'H6', 'huda' ),
						'icon'  => 'eicon-editor-h6',
					],
				],
				'toggle' => true,
			]
		);
		

		$this->add_control(
            'subtitle',
            [
                'label' => __( 'Subtitle', 'huda' ),
                'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Subtitle Here', 'huda' ),
                'placeholder' => __( 'Enter your subtitle', 'huda' ),
            ]
        );

		$this->add_control(
            'description',
            [
                'label' => __( 'Description', 'huda' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'It is widely recognized that a reader tends to focus on the readable content of a page, becoming distracted by its layout and the usual arrangement of text.', 'huda' ),
                'placeholder' => __( 'Enter your description', 'huda' ),
            ]
        );

		$this->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'huda' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );

		$this->end_controls_section();
		// Content Tab End

		// Style Tab Start
		$this->start_controls_section(
			'general_style_section',
			[
				'label' => esc_html__( 'General', 'huda' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'max_width',
			[
				'label' => __( 'Max Width', 'huda' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'vw' ],
				'range' => [
					'%' => [
						'min' => 10,
						'max' => 100,
					],
					'px' => [
						'min' => 100,
						'max' => 1920,
					],
					'vw' => [
						'min' => 10,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 600, // Default width
				],
				'selectors' => [
					'{{WRAPPER}} .hea-advanced-heading-wrapper' => 'max-width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		// Alignment Control
		$this->add_responsive_control(
			'alignment',
			[
				'label' => __( 'Alignment', 'huda' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'huda' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'huda' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'huda' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .hea-advanced-heading-wrapper' => 'margin: 0 auto; text-align: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

		// Title style start
		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__( 'Title', 'huda' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .hea-advanced-heading',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'text_shadow',
				'selector' => '{{WRAPPER}} .hea-advanced-heading',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Text Color', 'huda' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#05011C', // Set your default title color
				'selectors' => [
					'{{WRAPPER}} .hea-advanced-heading' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'title_margin',
			[
				'label' => esc_html__( 'Margin', 'huda' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'default' => [
					'top' => 0,
					'right' => 0,
					'bottom' => 0,
					'left' => 0,
					'unit' => 'px',
					'isLinked' => false,
				],
				'selectors' => [
					'{{WRAPPER}} .hea-advanced-heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
		// Title style end 

		// Title Center style start
		$this->start_controls_section(
			'section_center_title_style',
			[
				'label' => esc_html__( 'Title Center', 'huda' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_center_typography',
				'selector' => '{{WRAPPER}} .hea-advanced-heading span',
			]
		);

		$this->add_control(
			'title_center_color',
			[
				'label' => esc_html__( 'Ttitle Center Color', 'huda' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#5081FF', // Set your default title center color
				'selectors' => [
					'{{WRAPPER}} .hea-advanced-heading span' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
		// Title Center style end 

		// Subtitle style start
		$this->start_controls_section(
			'subtitle_section_style',
			[
				'label' => esc_html__( 'Sub Title', 'huda' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'show_hide_subtitle',
			[
				'label' => esc_html__( 'Show/Hide Subtitle', 'huda' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'huda' ),
				'label_off' => esc_html__( 'Hide', 'huda' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_typography',
				'selector' => '{{WRAPPER}} .hea-advanced-heading-subtitle',
			]
		);

		$this->add_control(
			'sub_title_color',
			[
				'label' => esc_html__( 'Text Color', 'huda' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#4E5666', // Set your default subtitle color
				'selectors' => [
					'{{WRAPPER}} .hea-advanced-heading-subtitle' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'margin_subtitle',
			[
				'label' => esc_html__( 'Margin', 'huda' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'default' => [
					'top' => 0,
					'right' => 0,
					'bottom' => 0,
					'left' => 0,
					'unit' => 'px',
					'isLinked' => false,
				],
				'selectors' => [
					'{{WRAPPER}} .hea-advanced-heading-subtitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
		// Subtitle style end


		// Description style start
		$this->start_controls_section(
			'description_section_style',
			[
				'label' => esc_html__( 'Description', 'huda' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'selector' => '{{WRAPPER}} .hea-advanced-heading-description',
			]
		);

		$this->add_control(
			'description_color',
			[
				'label' => esc_html__( 'Description Color', 'huda' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#4E5666', // Set your default description color
				'selectors' => [
					'{{WRAPPER}} .hea-advanced-heading-description' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'margin_description',
			[
				'label' => esc_html__( 'Margin', 'huda' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'default' => [
					'top' => 0,
					'right' => 0,
					'bottom' => 0,
					'left' => 0,
					'unit' => 'px',
					'isLinked' => false,
				],
				'selectors' => [
					'{{WRAPPER}} .hea-advanced-heading-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
		// Description style end 

		// Icons style start 
		$this->start_controls_section(
			'icon_section_style',
			[
				'label' => esc_html__( 'icon', 'huda' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'icon_size',
			[
				'label' => __( 'Icon Size', 'huda' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 10,
						'max' => 100,
					],
					'em' => [
						'min' => 0.5,
						'max' => 5,
						'step' => 0.1,
					],
					'rem' => [
						'min' => 0.5,
						'max' => 5,
						'step' => 0.1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 24,
				],
				'selectors' => [
					'{{WRAPPER}} .hea-advanced-heading-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'icon_width_height',
			[
				'label' => __( 'Background Size', 'huda' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 20,
						'max' => 300,
					],
					'%' => [
						'min' => 10,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 56,
				],
				'selectors' => [
					'{{WRAPPER}} .hea-advanced-heading-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'huda' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#ffffff', 
				'selectors' => [
					'{{WRAPPER}} .hea-advanced-heading-icon i' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'icon_background_color',
				'types' => [ 'classic', 'gradient' ],
				'default' => [
					'color' => '#5081FF',
					'type' => 'classic',
				],
				'selector' => '{{WRAPPER}} .hea-advanced-heading-icon',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'selector' => '{{WRAPPER}} .hea-advanced-heading-icon',
			]
		);

		$this->add_responsive_control(
			'icon_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'huda' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'default' => [
					'top' => 50,
					'right' => 50,
					'bottom' => 50,
					'left' => 50,
					'unit' => 'px',
					'isLinked' => true,
				],
				'selectors' => [
					'{{WRAPPER}} .hea-advanced-heading-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'margin_icon',
			[
				'label' => esc_html__( 'Margin', 'huda' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'default' => [
					'top' => 0,
					'right' => 0,
					'bottom' => 12,
					'left' => 0,
					'unit' => 'px',
					'isLinked' => false,
				],
				'selectors' => [
					'{{WRAPPER}} .hea-advanced-heading-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
		// Icon Style Tab End

	}

	protected function render() {
		// render title 
		$settings = $this->get_settings_for_display();

		$container_tag = $settings['title_html_tag'];

		echo '<div class="hea-advanced-heading-wrapper">';

			// Icon Render
			if ( ! empty( $settings['icon']['value'] ) ) {
				$icon_class = $settings['icon']['value'];
				echo '<span class="hea-advanced-heading-icon">';
				echo '<i class="' . esc_attr( $icon_class ) . '" aria-hidden="true"></i>';
				echo '</span>';
			}

			// Subtitle Render
			if ( ! empty( $settings['subtitle'] ) ) {
				if ( 'yes' === $settings['show_hide_subtitle'] ) {
					echo '<div class="hea-advanced-heading-subtitle">' . wp_kses_post( $settings['subtitle'] ) . '</div>';
				}
			}

			// Heading Render
			echo '<' . esc_html( $container_tag ) . ' class="hea-advanced-heading">';

			if ( ! empty( $settings['heading_before'] ) ) {
				echo wp_kses_post( $settings['heading_before'] );
			}

			if ( ! empty( $settings['heading_center'] ) ) {
				echo '<span>' . esc_html( $settings['heading_center'] ) . '</span>';
			}

			if ( ! empty( $settings['heading_after'] ) ) {
				echo wp_kses_post( $settings['heading_after'] );
			}

			echo '</' . esc_html( $container_tag ) . '>';

			// Description Render
			if ( ! empty( $settings['description'] ) ) {
				echo '<div class="hea-advanced-heading-description">' . wp_kses_post( $settings['description'] ) . '</div>';
			}

			echo '</div>';

        	
	}

	protected function content_template() {}
}