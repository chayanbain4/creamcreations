<?php
/* 
Template Name: Shopping Policy 
*/

get_header(); // Include the theme's header

// Enqueue the CSS file for this page template
function enqueue_shopping_policy_styles() {
    if (is_page_template('page-shopping-policy.php')) {
        wp_enqueue_style(
            'shopping-policy-style',
            get_template_directory_uri() . '/assets/css/shopping-policy.css', // Update the path if necessary
            array(),
            '1.0.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_shopping_policy_styles');
?>

<div class="shopping-policy-container">
    <div class="policy-content">
        <div class="policy-description">
            <h1>Shipping Policies</h1>
            <ul>
                <li>We offer cake delivering services within Kolkata and Howrah.</li>
                <li>There will be additional shipping charges of a minimal amount for products purchased from our website.</li>
                <li>The cakes will be delivered on the desired dates and time by the customers. By placing an order from Cream Creations, you acknowledge that all the policies are read, understood and agreed by you.</li>
                <li>Minimum delivery time is 4 hours, while the maximum is 1 day, ensuring timely service for our customers.</li>
            </ul>

            <h1>Ordering and Payment Methods</h1>
            <ul>
                <li>Orders can be placed by the customers through our website or by contacting us directly.</li>
                <li>Customers should make the payment in full at the time of placing the order.</li>
                <li>We accept different payment methods like credit/debit cards, UPI, and electronic money transfers.</li>
                <li>Cash on delivery is not applicable.</li>
            </ul>
        </div>
        <div class="policy-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping1.png" alt="Shopping Policy Image" />
        </div>
    </div>
</div>

<?php
get_footer(); // Include the theme's footer
?>
