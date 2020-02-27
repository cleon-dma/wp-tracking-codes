<?php
/**
 * Admin help message.
 *
 * @package WooCommerce_PagSeguro/Admin/Settings
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<style type="text/css">
    .form-table{
        clear:none !important;
    }
</style>
<div class="wrap">
    <form method="POST" action="options.php">
        <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
        <div id="poststuff" class="metabox-holder has-right-sidebar">
            <div class="has-sidebar sm-padded">
                <div id="post-body-content" class="has-sidebar-content">
                    <div class="meta-box-sortabless">
                        <!-- Rebuild Area -->
                        <div id="sm_rebuild" class="postbox">
                            <h3 class="hndle"><span>My Tracking Codes</span></h3>
                            <div class="inside">
                                <?php //echo $options = get_option( 'tracking_analytics' ); ?>
                                <?php settings_fields( 'wp-tracking-codes' );	//pass slug name of page, also referred
                                //to in Settings API as option group name
                                do_settings_sections( 'wp-tracking-codes' ); 	//pass slug name of page
                                submit_button();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<script>
    let searchParams = new URLSearchParams(window.location.search);
    let desativate_datalayer = searchParams.get('desativate_datalayer')
    if(desativate_datalayer=='true'){
        jQuery("#data_layer_google_tag_manager").trigger('click');
        jQuery("#submit").trigger('click');
        var href = new URL(window.location.href);
        href.searchParams.set('desativate_datalayer', '');
        location.replace(href.toString());
    }
</script>
