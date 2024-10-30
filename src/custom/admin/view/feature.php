<div class="guarantee-block">
    <div class="go-pro-widget">
        <h2 class="go-pro-headline">
            <em><?php _e('Pro Features', COUPON_PLUGIN_TEXT_DOMAIN); ?></em>
        </h2>
        <div class="pro-feature-box">
            <span class="pro-feature-list">
                <span class="number"><?php _e('1', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
                <span class="feature-text"><?php _e('All Free Features', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
            </span>
            <span class="pro-feature-list">
                <span class="number"><?php _e('2', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
                <span class="feature-text"><?php _e('Affiliate Link Cloaking', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
            </span>
            <span class="pro-feature-list">
                <span class="number"><?php _e('3', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
                <span class="feature-text"><?php _e('Insert Shortcode From Editor', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
            </span>
            <span class="pro-feature-list">
                <span class="number"><?php _e('4', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
                <span class="feature-text"><?php _e('Coupon Share', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
            </span>
            <span class="pro-feature-list">
                <span class="number"><?php _e('5', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
                <span class="feature-text"><?php _e('Coupon Vote', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
            </span>
            <span class="pro-feature-list">
                <span class="number"><?php _e('6', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
                <span class="feature-text"><?php _e('Coupon Popup', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
            </span>
            <span class="pro-feature-list">
                <span class="number"><?php _e('7', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
                <span class="feature-text"><?php _e('Click To Copy', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
            </span>
            <span class="pro-feature-list">
                <span class="number"><?php _e('8', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
                <span class="feature-text"><?php _e('Coupon Shortcode For Grid Look', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
            </span>
            <span class="pro-feature-list">
                <span class="number"><?php _e('9', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
                <span class="feature-text"><?php _e('Category Wise Coupon Shortcode', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
            </span>
            <span class="pro-feature-list">
                <span class="number"><?php _e('10', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
                <span class="feature-text"><?php _e('Store Wise Coupon Shortcode', COUPON_PLUGIN_TEXT_DOMAIN); ?></span>
            </span>
        </div>
    </div>
    <div class="go-pro-widget">
        <h2 class="go-pro-headline">
            <em><?php _e('Plan starts at $29.99 only', COUPON_PLUGIN_TEXT_DOMAIN); ?></em></h2>
        <form method="POST" action="https://couponplugin.activehosted.com/proc.php" id="go-pro-form" class="go-pro-subscriber-form" target="_blank" novalidate>
            <input type="hidden" name="u" value="1" />
            <input type="hidden" name="f" value="1" />
            <input type="hidden" name="s" />
            <input type="hidden" name="c" value="0" />
            <input type="hidden" name="m" value="0" />
            <input type="hidden" name="act" value="sub" />
            <input type="hidden" name="v" value="2" />
            <fieldset>

                <legend><?php _e('Get Flat 10% Off Coupon On Pro Plan', COUPON_PLUGIN_TEXT_DOMAIN); ?></legend>

                <input class="input" type="text" id="name" name="fullname" value="<?php esc_attr_e($current_user->display_name); ?>">

                <input class="input" type="email" id="mail" name="email" value="<?php esc_attr_e($current_user->user_email); ?>">


            </fieldset>
            <button type="submit"><?php _e('Get Coupon', COUPON_PLUGIN_TEXT_DOMAIN); ?></button>
        </form>
    </div>
</div>
<div class="guarantee-block">
    <img class="guarantee" src="<?php echo COUPON_PLUGIN_URL . 'assets/images/coupon-plugin-guarantee.png'; ?>" alt="">
    <a class="go-pro-widget-title" href="https://couponplugin.io" target="_blank"><?php _e('What Are You Waiting For ? Go Pro', COUPON_PLUGIN_TEXT_DOMAIN); ?>
        <span class="dashicons dashicons-arrow-right"></span></a>
</div>