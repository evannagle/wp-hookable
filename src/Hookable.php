<?php

namespace Mantle\WP\Hookable;

abstract class Hookable {
    /**
     * I'm a wrapper method around Wordpress's add_action method
     * @url https://developer.wordpress.org/reference/functions/add_action/
     *
     * @example $this->action( 'wp_init' ) will fire $this->wp_init() upon the wp_init event
     *  
     * @access protected
     */
    protected function action( $name, $action = NULL, $priority = 10, $accepted_args = 1 ) {
        add_action( $name, array( $this, $action ? $action : $name ), $priority, $accepted_args );
    }

    /**
     * I'm a wrapper method around Wordpress's add_filter method
     * @url https://developer.wordpress.org/reference/functions/add_filter/
     *
     * @example $this->filter( 'the_title' ) will fire $this->the_title(<title str>) when the the_title filters are applied
     *  
     * @access protected
     */
    protected function filter( $name, $filter = NULL, $priority = 10, $accepted_args = 1 ) {
        add_filter( $name, array( $this, $filter ? $filter : $name ), $priority, $accepted_args );
    }
}
