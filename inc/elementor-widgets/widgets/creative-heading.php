<?php

use Elementor\Widget_Base;

if ( !defined( 'ABSPATH' ) ){
    exit; // exit if accesed directly
} 


class Elementor_Creative_Heading extends Widget_Base {

	 /**
     * Get widget name.
     *
     */
	public function get_name() {
		return 'hea-creative-heading-widget';
	}

	/**
	 * Get widget title.
	 *
	*/
    public function get_title(): string {
		return esc_html__( 'Creative Heading', 'huda' );
	}



	/**
     * Get widget icon.
     *
    */
	public function get_icon() {
		return 'eicon-heading';
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
		return [ 'creative', 'heading' ];
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
				'label' => esc_html__( 'Creative Heading', 'huda' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'huda' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 5,
				'default' => esc_html__( 'Enhance the look and feel of your dull websites', 'huda' ),
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
            'heading_link',
            [
                'label' => __( 'Heading Link', 'huda' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://example.com', 'huda' ),
                'options' => [ 'url', 'is_external', 'nofollow' ],
                'default' => [
                    'url' => '',
                ],
            ]
        );

        $this->end_controls_section();
		// Content Tab End

        // Description Content Tab Start
        $this->start_controls_section(
			'description_content_section',
			[
				'label' => esc_html__( 'Description', 'huda' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'show_hide_description',
			[
				'label' => esc_html__( 'Show/Hide Description', 'huda' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'huda' ),
				'label_off' => esc_html__( 'Hide', 'huda' ),
				'return_value' => 'yes',
				'default' => 'yes',
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
            
        $this->end_controls_section();
        // Description Content Tab End

        // Icon Content Tab Start
        $this->start_controls_section(
			'icon_content_section',
			[
				'label' => esc_html__( 'Icon', 'huda' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'show_hide_icon',
			[
				'label' => esc_html__( 'Show/Hide Icons', 'huda' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'huda' ),
				'label_off' => esc_html__( 'Hide', 'huda' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'huda' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#5081FF', 
				'selectors' => [
					'{{WRAPPER}} .hea-icon' => 'color: {{VALUE}};',
				],
			]
		);

        $this->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'huda' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star', 
                    'library' => 'fa-solid', 
                ],
            ]
        );

        $this->add_control(
            'icon_position',
            [
                'label' => __( 'Icon Position', 'huda' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'left',
                'options' => [
                    'left' => __( 'Left', 'huda' ),
                    'right' => __( 'Right', 'huda' ),
                ],
            ]
        );

        $this->end_controls_section();
		// Icon Content Tab End

        // Genral Style Tab Start
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
					'{{WRAPPER}} .hea-creative-heading' => 'max-width: {{SIZE}}{{UNIT}};',
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
					'{{WRAPPER}} .hea-creative-heading' => 'margin: 0 auto; text-align: {{VALUE}};',
				],
			]
		);
		
		$this->end_controls_section();

        // Heading Tab Style Start
        $this->start_controls_section(
			'title_style_section',
			[
				'label' => esc_html__( 'Heading', 'huda' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .hea-heading',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'text_shadow',
				'selector' => '{{WRAPPER}} .hea-heading',
			]
		);

		$this->add_control(
			'heading_color',
			[
				'label' => esc_html__( 'Text Color', 'huda' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#05011C', // Set your default title color
				'selectors' => [
					'{{WRAPPER}} .hea-heading' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'heading_margin',
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
					'{{WRAPPER}} .hea-heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();
        // Heading Tab Style End

        // Description Style Tab Start
		$this->start_controls_section(
			'description_style_section',
			[
				'label' => esc_html__( 'Description', 'huda' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_center_typography',
				'selector' => '{{WRAPPER}} .hea-creative-heading-description',
			]
		);

		$this->add_control(
			'description_color',
			[
				'label' => esc_html__( 'Color', 'huda' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#4E5666', // Set your default title center color
				'selectors' => [
					'{{WRAPPER}} .hea-creative-heading-description' => 'color: {{VALUE}};',
				],
			]
		);

        $this->add_responsive_control(
			'description_margin',
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
					'{{WRAPPER}} .hea-creative-heading-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();
        // Description Style Tab End

        // Icon Style Tab Start
		$this->start_controls_section(
			'icon_style_section',
			[
				'label' => esc_html__( 'Icon', 'huda' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        // Offset X Control
        $this->add_control(
            'offset_x',
            [
                'label' => __( 'Offset X', 'huda' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'default' => [
                    'size' => 0,
                ],
                'range' => [
                    'px' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
            ]
        );

        // Offset Y Control
        $this->add_control(
            'offset_y',
            [
                'label' => __( 'Offset Y', 'huda' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'default' => [
                    'size' => 0,
                ],
                'range' => [
                    'px' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
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
					'{{WRAPPER}} .hea-icon' => 'font-size: {{SIZE}}{{UNIT}};',
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
					'size' => 34,
				],
				'selectors' => [
					'{{WRAPPER}} .hea-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();
        // Icon Style Tab End

	}

	protected function render() {

        // Get Settings
        $settings = $this->get_settings_for_display();
        $heading = $settings['title'] ?? ''; 
        $icon = $settings['icon'];
        $icon_position = $settings['icon_position'];
        $container_tag = $settings['title_html_tag'] ?? 'h2'; 

        // Prepare Icon HTML
        $icon_html = '';
        $offset_x = $settings['offset_x']['size'];
        $offset_y = $settings['offset_y']['size'];
        $styles = "transform: translate({$offset_x}px, {$offset_y}px);";
        

        if ( ! empty( $icon['value'] ) ) { 
            if ( 'yes' === $settings['show_hide_icon'] ) { 
                if ( is_array( $icon ) && ! empty( $icon['library'] ) ) {
                    if ( $icon['library'] === 'svg' && ! empty( $icon['value']['url'] ) ) {
                        $icon_html = '<img src="' . esc_url( $icon['value']['url'] ) . '" alt="" class="hea-icon" aria-hidden="true" style="' . esc_attr( $styles ) . '">';
                    } else {
                        $icon_html = '<i class="' . esc_attr( $icon['value'] ) . ' hea-icon" aria-hidden="true" style="' . esc_attr( $styles ) . '"></i>';
                    }
                }
            }
        }
        

        // Prepare Link Attributes
        $link = isset( $settings['heading_link'] ) ? $settings['heading_link'] : [];

        $link_attributes = '';

        if ( ! empty( $link['url'] ) ) {

            $this->add_render_attribute( 'heading_link', 'href', $link['url'] );

            if ( ! empty( $link['is_external'] ) ) {
                $this->add_render_attribute( 'heading_link', 'target', '_blank' );
            }

            if ( ! empty( $link['nofollow'] ) ) {
                $this->add_render_attribute( 'heading_link', 'rel', 'nofollow' );
            }
            
            $link_attributes = $this->get_render_attribute_string( 'heading_link' );
        }

        // Start container tag
        echo '<div class="hea-creative-heading">';

        // If link exists, wrap the whole content with the <a> tag
        if ( ! empty( $link['url'] ) ) {
            echo '<a ' . $link_attributes . '>';
        }

        // Render Heading with Icon based on Position
        if ( $icon_position === 'left' ) {
            echo '<' . esc_attr( $container_tag ) . ' class="hea-heading">';

                echo '<span class="hea-creative-heading-icon-left">' . $icon_html . '</span>';

                echo esc_html( $heading );

                echo '</' . esc_attr( $container_tag ) . '>';

        } elseif ( $icon_position === 'right' ) {

            echo '<' . esc_attr( $container_tag ) . ' class="hea-heading">';

                echo esc_html( $heading );

                echo '<span class="hea-creative-heading-icon-right">' . $icon_html . '</span>';

            echo '</' . esc_attr( $container_tag ) . '>';

        } else {
        
            echo '<div class="hea-heading">' . esc_html( $heading ) . '</div>';
        }

        // Close the <a> tag if link exists
        if ( ! empty( $link['url'] ) ) {
            echo '</a>';
        }

        if ( ! empty( $settings['description'] ) ) {

            if ( 'yes' === $settings['show_hide_description'] ) {
                echo '<div class="hea-creative-heading-description">' . $settings['description'] . '</div>';
            }
        }

        echo '</div>';
                
	}

	protected function content_template() {}
}