<?php
/**
 * group settings page - admin 
 * 
 * group chat options .. 
 * 
 * @package ctc
 * @subpackage admin
 * @since 2.0 
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'HT_CTC_Admin_Group_Page' ) ) :

class HT_CTC_Admin_Group_Page {

    public function menu() {

        add_submenu_page(
            'click-to-chat',
            'Group Chat/Invite',
            'Group',
            'manage_options',
            'click-to-chat-group-feature',
            array( $this, 'settings_page' )
        );
    }

    public function settings_page() {

        if ( ! current_user_can('manage_options') ) {
            return;
        }

        ?>

        <div class="wrap">

            <?php settings_errors(); ?>

            <div class="row">
                <div class="col s12 m12 xl8 options">
                    <form action="options.php" method="post" class="">
                        <?php settings_fields( 'ht_ctc_group_page_settings_fields' ); ?>
                        <?php do_settings_sections( 'ht_ctc_group_page_settings_sections_do' ) ?>
                        <?php submit_button() ?>
                    </form>
                </div>
                <!-- <div class="col s12 m12 xl6 ht-cc-admin-sidebar">
                </div> -->
            </div>

        </div>

        <?php

    }


    public function settings() {

        // main settings - options enable .. group, share .. 
        // chat options 
        register_setting( 'ht_ctc_group_page_settings_fields', 'ht_ctc_group' , array( $this, 'options_sanitize' ) );
        
        add_settings_section( 'ht_ctc_main_page_settings_sections_add', '', array( $this, 'main_settings_section_cb' ), 'ht_ctc_group_page_settings_sections_do' );
        
        add_settings_field( 'group_id', 'WhatsApp Group ID', array( $this, 'group_id_cb' ), 'ht_ctc_group_page_settings_sections_do', 'ht_ctc_main_page_settings_sections_add' );
        add_settings_field( 'group_cta', 'Call to Action', array( $this, 'group_cta_cb' ), 'ht_ctc_group_page_settings_sections_do', 'ht_ctc_main_page_settings_sections_add' );
        
        add_settings_field( 'group_ctc_desktop_style', 'Style for Desktop', array( $this, 'group_ctc_desktop_style_cb' ), 'ht_ctc_group_page_settings_sections_do', 'ht_ctc_main_page_settings_sections_add' );
        add_settings_field( 'group_ctc_mobile_style', 'Style for Mobile', array( $this, 'group_ctc_mobile_style_cb' ), 'ht_ctc_group_page_settings_sections_do', 'ht_ctc_main_page_settings_sections_add' );
        add_settings_field( 'group_ctc_position', 'Position to place', array( $this, 'group_ctc_position_cb' ), 'ht_ctc_group_page_settings_sections_do', 'ht_ctc_main_page_settings_sections_add' );
        add_settings_field( 'group_show_hide', 'Show/Hide', array( $this, 'group_show_hide_cb' ), 'ht_ctc_group_page_settings_sections_do', 'ht_ctc_main_page_settings_sections_add' );
        add_settings_field( 'group_shortcode_cb', '', array( $this, 'group_shortcode_cb' ), 'ht_ctc_group_page_settings_sections_do', 'ht_ctc_main_page_settings_sections_add' );
        
        
    }

    public function main_settings_section_cb() {
        ?>
        <h1>Group Chat/Invite</h1>
        <?php
    }


    // WhatsApp Group ID.
    function group_id_cb() {
        $options = get_option('ht_ctc_group');
        $value = ( isset( $options['group_id']) ) ? esc_attr( $options['group_id'] ) : '';
        ?>
        <div class="row">
            <div class="input-field col s12">
                <input name="ht_ctc_group[group_id]" value="<?php echo $value ?>" id="whatsapp_group_id" type="text" class="input-margin">
                <label for="whatsapp_group_id">WhatsApp Group ID.</label>
                <p class="description">Enter WhatsApp Group ID. E.g. 9EHLsEsOeJk6AVtE8AvXiA - <a target="_blank" href="https://www.holithemes.com/plugins/click-to-chat/find-whatsapp-group-id/">more info</a> </p>
            </div>
        </div>
        <?php
    }

    // call to action 
    function group_cta_cb() {
        $options = get_option('ht_ctc_group');
        $value = ( isset( $options['call_to_action']) ) ? esc_attr( $options['call_to_action'] ) : '';
        ?>
        <div class="row">
            <div class="input-field col s12">
                <input name="ht_ctc_group[call_to_action]" value="<?php echo $value ?>" id="call_to_action" type="text" class="input-margin">
                <label for="call_to_action">Call to Action</label>
                <p class="description"> Text that appears along with WhatsApp icon/button - <a target="_blank" href="https://www.holithemes.com/plugins/click-to-chat/call-to-action/">more info</a> </p>
            </div>
        </div>
        <?php
    }
    


    // Desktop - select style 
    function group_ctc_desktop_style_cb() {
        $options = get_option('ht_ctc_group');
        $style_value = ( isset( $options['style_desktop']) ) ? esc_attr( $options['style_desktop'] ) : '';
        ?>
        <div class="row">
            <div class="input-field col s12" style="margin-bottom: 0px;">
                <select name="ht_ctc_group[style_desktop]" class="select-2">
                    <option value="1" <?php echo $style_value == 1 ? 'SELECTED' : ''; ?> >Style-1</option>
                    <option value="2" <?php echo $style_value == 2 ? 'SELECTED' : ''; ?> >Style-2</option>
                    <option value="3" <?php echo $style_value == 3 ? 'SELECTED' : ''; ?> >Style-3</option>
                    <option value="4" <?php echo $style_value == 4 ? 'SELECTED' : ''; ?> >Style-4</option>
                    <option value="5" <?php echo $style_value == 5 ? 'SELECTED' : ''; ?> >Style-5</option>
                    <option value="6" <?php echo $style_value == 6 ? 'SELECTED' : ''; ?> >Style-6</option>
                    <option value="7" <?php echo $style_value == 7 ? 'SELECTED' : ''; ?> >Style-7</option>
                    <option value="8" <?php echo $style_value == 8 ? 'SELECTED' : ''; ?> >Style-8</option>
                    <option value="99" <?php echo $style_value == 99 ? 'SELECTED' : ''; ?> >Style-99 (Add your own image / GIF)</option>
                </select>
                <label>Select Style for Desktop</label>
            </div>
        </div>

        <p class="description"> - <a target="_blank" href="https://www.holithemes.com/plugins/click-to-chat/list-of-styles/">List of syles</a> </p>
        <p class="description">Can customize each style - <a target="_blank" href="<?php echo admin_url( 'admin.php?page=click-to-chat-customize-styles' ); ?>"><?php _e( 'Customize Styles' , 'click-to-chat-for-whatsapp' ) ?></a> </p>

        <?php
    }


    // Mobile - select style 
    function group_ctc_mobile_style_cb() {
        $options = get_option('ht_ctc_group');
        $style_value = ( isset( $options['style_mobile']) ) ? esc_attr( $options['style_mobile'] ) : '';
        ?>
        <div class="row" style="margin-bottom: 0px;">
            <div class="input-field col s12">
                <select name="ht_ctc_group[style_mobile]" class="select-2">
                    <option value="1" <?php echo $style_value == 1 ? 'SELECTED' : ''; ?> >Style-1</option>
                    <option value="2" <?php echo $style_value == 2 ? 'SELECTED' : ''; ?> >Style-2</option>
                    <option value="3" <?php echo $style_value == 3 ? 'SELECTED' : ''; ?> >Style-3</option>
                    <option value="4" <?php echo $style_value == 4 ? 'SELECTED' : ''; ?> >Style-4</option>
                    <option value="5" <?php echo $style_value == 5 ? 'SELECTED' : ''; ?> >Style-5</option>
                    <option value="6" <?php echo $style_value == 6 ? 'SELECTED' : ''; ?> >Style-6</option>
                    <option value="7" <?php echo $style_value == 7 ? 'SELECTED' : ''; ?> >Style-7</option>
                    <option value="8" <?php echo $style_value == 8 ? 'SELECTED' : ''; ?> >Style-8</option>
                    <option value="99" <?php echo $style_value == 99 ? 'SELECTED' : ''; ?> >Style-99 (Add your own image / GIF)</option>
                </select>
                <label>Select Style for Mobile</label>
            </div>
        </div>
        
        
        <?php
    }


    // position to place 
    function group_ctc_position_cb() {
        $options = get_option('ht_ctc_group');
        $dbrow = 'ht_ctc_group';
        $type = 'group';
        
        include_once HT_CTC_PLUGIN_DIR .'new/admin/admin_commons/admin-position-to-place.php';
    }




    // show/hide 
    function group_show_hide_cb() {

        $dbrow = 'ht_ctc_group';
        $options = get_option('ht_ctc_group');
        $type = 'group';

        include_once HT_CTC_PLUGIN_DIR .'new/admin/admin_commons/admin-show-hide.php';

    }




    function group_shortcode_cb() {
        ?>
        <p class="description">Shortcodes for Group Chat: [ht-ctc-group] - <a target="_blank" href="https://www.holithemes.com/plugins/click-to-chat/shortcodes-group">more info</a></p>
        <?php
    }



    /**
     * Sanitize each setting field as needed
     *
     * @since 2.0
     * @param array $input Contains all settings fields as array keys
     */
    public function options_sanitize( $input ) {

        if ( ! current_user_can( 'manage_options' ) ) {
            wp_die( 'not allowed to modify - please contact admin ' );
        }

        $new_input = array();

        foreach ($input as $key => $value) {

            if ( 'side_1_value' == $key || 'side_2_value' == $key || 'mobile_side_1_value' == $key || 'mobile_side_2_value' == $key ) {
                if ( is_numeric($input[$key]) ) {
                    $input[$key] = $input[$key] . 'px';
                }
                if ( '' == $input[$key] ) {
                    $input[$key] = '0px';
                }
                $new_input[$key] = sanitize_text_field( $input[$key] );
            } else {
                $new_input[$key] = sanitize_text_field( $input[$key] );
            }



            // if( isset( $input[$key] ) ) {
            //     $new_input[$key] = sanitize_text_field( $input[$key] );
            // }
        }


        return $new_input;
    }


}

$ht_ctc_admin_group_page = new HT_CTC_Admin_Group_Page();

add_action('admin_menu', array($ht_ctc_admin_group_page, 'menu') );
add_action('admin_init', array($ht_ctc_admin_group_page, 'settings') );

endif; // END class_exists check
