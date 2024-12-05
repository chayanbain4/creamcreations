<?php
/* 
Template Name: Privacy Policy 
*/

get_header(); // Include the theme's header

// Enqueue the CSS file for this page template
function enqueue_privacy_policy_styles() {
    if (is_page_template('page-privacy-policy.php')) {
        wp_enqueue_style(
            'privacy-policy-style',
            get_template_directory_uri() . '/assets/css/privacy-policy.css', // Update the path if necessary
            array(),
            '1.0.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_privacy_policy_styles');
?>

<div class="privacy-policy-container">
    <h1>Privacy Policy</h1>
    <div class="privacy-policy-content">
        <div class="privacy-description">
            <p>
                Our company is committed to safeguarding the privacy of our customers by protecting the information that you provide to us. The Privacy Policy outlines the data collected by us and why we collect these data.
            </p>
            <h2>What data do we collect?</h2>
            <ul>
                <li>When you shop with us, you get registered on our website for future references.</li>
                <li>We collect information like email address, phone number, contact information, and address.</li>
                <li>We store the data profile regarding your behavior towards our company.</li>
            </ul>
            <h2>Why do we collect this data?</h2>
            <ul>
                <li>To provide better and personalized customer service to you.</li>
                <li>To provide better quality products as per your needs.</li>
                <li>To understand your needs in a better way.</li>
                <li>To send you advertisements and promotional emails as per your interests.</li>
            </ul>
        </div>
        <div class="privacy-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/policy.jpg" 
                 alt="Privacy Policy Image" />
        </div>
    </div>
</div>

<?php
get_footer(); // Include the theme's footer
?>
