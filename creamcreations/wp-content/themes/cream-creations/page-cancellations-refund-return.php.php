<?php
/* 
Template Name: Cancellations and Refund/Return Policies 
*/

get_header(); // Include the theme's header

// Enqueue the CSS file for this page template
function enqueue_cancellation_refund_styles() {
    if (is_page_template('page-cancellations-refund-return.php')) {
        wp_enqueue_style(
            'cancellation-refund-style',
            get_template_directory_uri() . '/assets/css/cancellation-refund.css', // Update the path if necessary
            array(),
            '1.0.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_cancellation_refund_styles');
?>

<div class="cancellation-refund-container">
    <div class="policy-content">
        <div class="policy-description">
            <h1>Cancellations and Refund/Return Policies</h1>
            <ul>
                <li>The orders can be canceled by the customers up to 24 hours before the scheduled time of delivery.</li>
                <li>Cancellations made within 24 hours of the scheduled delivery time are refundable.</li>
                <li>Refunds will be processed as soon as we receive the cancellation requests.</li>
                <li>The refunds will be received by the customers within one or two business days after the cancellation.</li>
                <li>Returns are not applicable once delivered.</li>
            </ul>
        </div>
        <div class="policy-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/refund.png" alt="Cancellation and Refund Policies Image" />
        </div>
    </div>
</div>

<?php
get_footer(); // Include the theme's footer
?>
