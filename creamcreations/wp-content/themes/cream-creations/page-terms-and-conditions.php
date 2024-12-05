<?php
/* 
Template Name: Terms and Conditions 
*/

get_header(); // Include the theme's header

// Enqueue the CSS file for this page template
function enqueue_terms_conditions_styles() {
    if (is_page_template('page-terms-and-conditions.php')) {
        wp_enqueue_style(
            'terms-conditions-style',
            get_template_directory_uri() . '/assets/css/terms-conditions.css', // Update the path if necessary
            array(),
            '1.0.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_terms_conditions_styles');
?>

<div class="terms-conditions-container">
    <div class="policy-content">
        <div class="policy-description">
            <h1>Terms and Conditions</h1>
            <p>
                The terms and conditions stated below govern the use of the cake delivering services online provided by Cream Creations. By using or accessing the services provided by Cream Creations, you agree to be bound by the below mentioned terms and conditions.
            </p>
            <h2>Terms & Conditions</h2>
            <p>This document is an electronic record in terms of the Information Technology Act, 2000...</p>
            <p>Your use of the Platform and services and tools are governed by the following terms and conditions (“Terms of Use”) as applicable to the Platform including the applicable policies which are incorporated herein by way of reference.</p>
            <!-- Continue adding the text as needed -->
            <p>All concerns or communications relating to these Terms must be communicated to us using the contact information provided on this website.</p>
        </div>
        <div class="policy-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/refund.png" alt="Terms and Conditions Image" />
        </div>
    </div>
</div>

<?php
get_footer(); // Include the theme's footer
?>
