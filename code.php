// Add a custom button after the "Add to Cart" button on WooCommerce product pages
add_action('woocommerce_after_add_to_cart_button', 'add_sample_enquiry_button');

function add_sample_enquiry_button() {
    echo '<button type="button" id="sample-enquiry-button" class="button alt">Sample Enquiry</button>';
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('li#tab-title-seller_enquiry_form > a, div#tab-seller_enquiry_form > h3').text('Sample Enquiry');
            var tabIdToOpen = '#tab-title-seller_enquiry_form'; // Change this to your desired tab ID
            
            $('#sample-enquiry-button').on('click', function() {
                // Remove the 'active' class from all tabs
                $('.wc-tabs > li').removeClass('active');
                $('.woocommerce-Tabs-panel').hide();
                
                // Add 'active' class to the desired tab title
                $(tabIdToOpen).addClass('active');
                
                // Show the desired tab panel
                $('div#tab-seller_enquiry_form').show();
                
                // Scroll to the tab's position
                var tabOffset = $(tabIdToOpen).offset();
                if (tabOffset) {
                    $('html, body').animate({ scrollTop: tabOffset.top }, 500);
                }
            });
        });
    </script>
    <?php
}
