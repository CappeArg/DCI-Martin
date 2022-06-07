<?php

namespace Templately;

class DB {
    /**
     * Get an option
     *
     * @param string $key
     * @param mixed $default
     * @return void
     */
    public static function get_option( $key, $default = false ){
        $trimmed_key = trim( $key );
        return empty( $trimmed_key ) ? false : \get_option( $trimmed_key, $default );
    }
    /**
     * Update an option
     *
     * @param string $key
     * @param mixed $value
     * @param string|boolean $autoload
     * @return void
     */
    public static function update_option( $key, $value, $autoload = null){
        $trimmed_key = trim( $key );
        return empty( $trimmed_key ) ? false : \update_option( $trimmed_key, $value, $autoload );
    }
    /**
     * Delete an option
     *
     * @param string $key
     * @return void
     */
    public static function delete_option( $key ){
        $trimmed_key = trim( $key );
        if( ! empty( $trimmed_key ) ) {
            return \delete_option( $trimmed_key );
        }
        return false;
    }
}
