<?php
/**
 * Admin position to place
 * 
 * @package ctc
 * @subpackage Admin
 * @since 2.10
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$side_1 = ( isset( $options['side_1']) ) ? esc_attr( $options['side_1'] ) : '';
$side_1_value = ( isset( $options['side_1_value']) ) ? esc_attr( $options['side_1_value'] ) : '';
$side_2 = ( isset( $options['side_2']) ) ? esc_attr( $options['side_2'] ) : '';
$side_2_value = ( isset( $options['side_2_value']) ) ? esc_attr( $options['side_2_value'] ) : '';

$mobile_side_1 = ( isset( $options['mobile_side_1']) ) ? esc_attr( $options['mobile_side_1'] ) : '';
$mobile_side_1_value = ( isset( $options['mobile_side_1_value'])) ? esc_attr( $options['mobile_side_1_value'] ) : '';
$mobile_side_2 = ( isset( $options['mobile_side_2']) ) ? esc_attr( $options['mobile_side_2'] ) : '';
$mobile_side_2_value = ( isset( $options['mobile_side_2_value'])) ? esc_attr( $options['mobile_side_2_value'] ) : '';
?>

<ul class="collapsible">
<li class="active">
<div class="collapsible-header">Position to place</div>
<div class="collapsible-body">

<!-- Dekstop position -->
<p class="description ht-ctc-subtitle">Desktop:</p>

<!-- side - 1 -->
<div class="row">
    <div class="input-field col s6">
        <select name="<?php echo $dbrow ?>[side_1]" class="select-2">
            <option value="bottom" <?php echo $side_1 == 'bottom' ? 'SELECTED' : ''; ?> >bottom</option>
            <option value="top" <?php echo $side_1 == 'top' ? 'SELECTED' : ''; ?> >top</option>
        </select>
        <label>top / bottom </label>
    </div>
    <div class="input-field col s6">
        <input name="<?php echo $dbrow ?>[side_1_value]" value="<?php echo $side_1_value ?>" id="side_1_value" type="text" class="input-margin">
        <label for="side_1_value">E.g. 10px</label>
    </div>
</div>

<!-- side - 2 -->
<div class="row">
    <div class="input-field col s6">
        <select name="<?php echo $dbrow ?>[side_2]" class="select-2">
            <option value="right" <?php echo $side_2 == 'right' ? 'SELECTED' : ''; ?> >right</option>
            <option value="left" <?php echo $side_2 == 'left' ? 'SELECTED' : ''; ?> >left</option>
        </select>
        <label>right / left</label>
    </div>

    <div class="input-field col s6">
        <input name="<?php echo $dbrow ?>[side_2_value]" value="<?php echo $side_2_value ?>" id="side_2_value" type="text" class="input-margin">
        <label for="side_2_value">E.g. 50%</label>
    </div>
</div>


<!-- Mobile position -->
<p class="description ht-ctc-subtitle">Mobile:</p>

<!-- side - 1 -->
<div class="row">
    <div class="input-field col s6">
        <select name="<?php echo $dbrow ?>[mobile_side_1]" class="select-2">
            <option value="bottom" <?php echo $mobile_side_1 == 'bottom' ? 'SELECTED' : ''; ?> >bottom</option>
            <option value="top" <?php echo $mobile_side_1 == 'top' ? 'SELECTED' : ''; ?> >top</option>
        </select>
        <label>top / bottom </label>
    </div>
    <div class="input-field col s6">
        <input name="<?php echo $dbrow ?>[mobile_side_1_value]" value="<?php echo $mobile_side_1_value ?>" id="side_1_value" type="text" class="input-margin">
        <label for="side_1_value">E.g. 10px</label>
    </div>
</div>

<!-- side - 2 -->
<div class="row">
    <div class="input-field col s6">
        <select name="<?php echo $dbrow ?>[mobile_side_2]" class="select-2">
            <option value="right" <?php echo $mobile_side_2 == 'right' ? 'SELECTED' : ''; ?> >right</option>
            <option value="left" <?php echo $mobile_side_2 == 'left' ? 'SELECTED' : ''; ?> >left</option>
        </select>
        <label>right / left</label>
    </div>

    <div class="input-field col s6">
        <input name="<?php echo $dbrow ?>[mobile_side_2_value]" value="<?php echo $mobile_side_2_value ?>" id="side_2_value" type="text" class="input-margin">
        <label for="side_2_value">E.g. 50%</label>
    </div>
</div>

<p class="description">Add css units as suffix - e.g. 10px, 50% - <a target="_blank" href="https://www.holithemes.com/plugins/click-to-chat/position-to-place/">more info</a> </p>
      
</div>
</div>
</li>
<ul>
