<?php
/**
 * Sortable class file for customizer
 *
 * @package wp-starter-theme
 */

namespace Theme\Customizer\Sections\FrontPage;

use Theme\Customizer\Panels\FrontPage;

class Sortable extends FrontPage {
    private $section     = 'sortable_front_page_sections';

    public function __construct() {
        //Load section & fields
        $this->register_section();
        $this->register_fields();
    }

    public function register_section() {
        \Kirki::add_section( $this->section, [
            'title'    => esc_html__( 'Ordering and Visibility Sections', 'wp-starter-theme' ),
            'panel'    => $this->panel,
            'priority' => 160,
        ] );
    }

    public function register_fields() {
        \Kirki::add_field( $this->config, [
            'type'     => 'sortable',
            'settings' => 'sortable_front_page_sections',
            'label'    => esc_html__( 'Ordering and Visibility', 'wp-starter-theme' ),
            'section'  => $this->section,
            'default'  => [
                'hero',
            ],
            'choices'  => [
                'hero' => esc_html__( 'Hero Section', 'wp-starter-theme' ),
            ],
        ] );
    }

}