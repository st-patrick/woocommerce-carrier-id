<?php

/**
 * Plugin Name: WooCommerce carrier ID
 * Description: This plugin adds a carrier ID to the shipping methods "free shipping" and "flat rate" and stores them as meta keys.
 * Version: 0.1
 * Author: Patrick Reinbold
 **/


/**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

    // hook the additional fields into the woocommerce hook for custom shipping options
    add_filter( 'woocommerce_shipping_instance_form_fields_flat_rate' , 'custom_shipping_field' );
    add_filter( 'woocommerce_shipping_instance_form_fields_free_shipping' , 'custom_shipping_field' );
    add_action( 'woocommerce_order_status_processing', 'add_carrier_id');

    // This function will extend the existing fields by the _carrier_id field
    function custom_shipping_field( $fields ) {
        $fields['_carrier_id'] = array(
            'label'     => "Carrier ID",
            'placeholder' => "set carrier ID here",
            'required'  => false
            'title' => 'Carrier ID',
        );

        return $fields;
    }

    //now, let's make sure that every time an order changes status to "processing", we add the carrier ID
    function add_carrier_id($order_id) {
        $order = wc_get_order( $order_id );

        if( $order->has_shipping_method('flat_rate') ) {
            $order->update_meta_data('_carrier_id', 'flaaaat');
        }
        if( $order->has_shipping_method('free_shipping') ) {
            $order->update_meta_data('_carrier_id', 'freee');
        }

        $order->save();
    }

}