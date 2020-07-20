# woocommerce carrier id
Invincible Brands interview: Wordpress test for a plugin that will add some custom fields to woocommerce shipping methods


### Create a small WordPress/WooCommerce plugin which:

+ Creates and saves a new text input field “Carrier ID” for the shipping methods
  “Flat-rate” and “Free-shipping” in the “WP-Admin > WooCommerce > Settings > Shipping” tab.
  It should expand the existing fields:
    1. Flat-rate: “Method Title”, “Tax Status”, and “Cost”
    2. Free Shipping: “Title” and “Free Shipping Requires”
+ Please save this value with the meta key “_carrier_id” in the order meta data of each order - when the order changes to the order status “Processing” (wc-processing).
