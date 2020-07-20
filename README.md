# woocommerce carrier id
Invincible Brands interview: Wordpress test for a plugin that will add some custom fields to woocommerce shipping methods


### Create a small WordPress/WooCommerce plugin which:

+ Creates and saves a new text input field “Carrier ID” for the shipping methods
  “Flat-rate” and “Free-shipping” in the “WP-Admin > WooCommerce > Settings > Shipping” tab.
  It should expand the existing fields:
    1. Flat-rate: “Method Title”, “Tax Status”, and “Cost”
    2. Free Shipping: “Title” and “Free Shipping Requires”
+ Please save this value with the meta key “_carrier_id” in the order meta data of each order - when the order changes to the order status “Processing” (wc-processing).



### comments

1. followed best practices from woocommerce plugin guideline (debug mode, check whether woocommerce is installed, ..)
2. find hook for woocommerce shipping options and add custom field
3. find hook for when an order changes to processing
4. add sample data to _carrier_id meta field and check via API link https://invinciblebrands.patrickreinbold.com/wp-json/wc/v3/orders?consumer_key=ck_60298f00db3049c824c728224392c2c5f3c0a648&consumer_secret=cs_890a2b64afb79b1ed486869ea1c6cdefe775d118
5. make sure that every time an order changes status to processing, the carrier id is updated to the given shipping method
