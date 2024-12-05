<footer class="footer">
<div class="footer-container">
        <div class="footer-logo-section">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logoo.png" alt="Cream Creations Logo" class="footer-logo">
            <div class="footer-contact">
                <p><i class="fas fa-map-marker-alt"></i> 46/C/37 Biplabi Barin Ghosh Sarani, Kolkata 700056</p>
                <p><i class="fas fa-clock"></i> 10 am - 8 pm</p>
                <p><i class="fas fa-envelope"></i> <a href="mailto:creamcreations.in@gmail.com">creamcreations.in@gmail.com</a></p>
                <p><i class="fas fa-phone"></i> +91 9051167674</p>
                <div class="footer-social-icons">
                    <a href="https://twitter.com/yourusername" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/creamcreations?mibextid=ZbWKwL" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/creamcreations.in?igsh=MXg1OGVpajRiOTVrNw==" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://plus.google.com/yourusername" target="_blank" class="social-icon"><i class="fab fa-google"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-links-section">
            <h4 class="footer-heading">Quick Links</h4>
            <ul class="footer-links">
                <li><a href="<?php echo site_url('/'); ?>" class="footer-link">Home</a></li>
                <li><a href="<?php echo site_url('/index.php/about-us'); ?>" class="footer-link">About us</a></li>
                <li><a href="<?php echo site_url('/index.php/contact-us'); ?>" class="footer-link">Contact us</a></li>
                <li><a href="<?php echo site_url('index.php/faqs/'); ?>" class="footer-link">FAQs</a></li>
            </ul>
        </div>
        <div class="footer-links-section">
            <h4 class="footer-heading">Policies</h4>
            <ul class="footer-links">
                <li><a href="<?php echo site_url('/index.php/privacy-policy'); ?>" class="footer-link">Privacy Policy</a></li>
                <li><a href="<?php echo site_url('/index.php/shipping-policies'); ?>" class="footer-link">Shipping Policies</a></li>
                <li><a href="<?php echo site_url('/index.php/cancellations-and-refunds/'); ?>" class="footer-link">Cancellations and Refund/Return Policies</a></li>
                <li><a href="<?php echo site_url('index.php/terms-and-conditions/'); ?>" class="footer-link">Terms and Conditions</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Cream Creations. All rights reserved.</p>
    </div>
    <div class="custom-chat-button blinking" onclick="openChat()">
        <i class="fa-brands fa-whatsapp"></i> Chat with Us
    </div>

   <!-- Schema Markup for Footer -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "<?php
        if (is_front_page()) {
            echo 'Custom Cakes & Sweet Creations for Every Occasion | Cream Creations';
        } elseif (is_page('about-us')) {
            echo 'Our Story | Cream Creations - Passion for Sweet Perfection';
        } elseif (is_page('contact-us')) {
            echo 'Get in Touch | Cream Creations - Your Baking Partner';
        } elseif (is_page('shop')) {
            echo 'Order Custom Cakes Online | Cream Creations - Shop Now';
        } elseif (is_page('blog')) {
            echo 'Explore Our Blog | Cream Creations - Sweet Inspiration Awaits';
        } elseif (is_page('cake-ki-pathsala')) {
            echo 'Master the Art of Baking | Cake Ki Pathshala';
        } else {
            echo 'Cream Creations';
        }
    ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "46/C/37 Biplabi Barin Ghosh Sarani",
    "addressLocality": "Kolkata",
    "addressRegion": "WB",
    "postalCode": "700056",
    "addressCountry": "IN"
  },
  "telephone": "+91 9051167674",
  "email": "creamcreations.in@gmail.com",
  "openingHours": "Mo-Sa 10:00-20:00",
  "image": "<?php echo get_template_directory_uri(); ?>/assets/images/logoo.png",
  "url": "<?php echo site_url('/'); ?>",
  "priceRange": "$$",
  "sameAs": [
    "https://www.facebook.com/creamcreations?mibextid=ZbWKwL",
    "https://www.instagram.com/creamcreations.in?igsh=MXg1OGVpajRiOTVrNw=="
  ]
}
</script>

<script>
    // Widget settings for the chat popup
    var wa_widgetSetting = {
        "title": "CreamCreations",
        "subTitle": "Typically replies in a day",
        "headerBackgroundColor": "#FBFFC8",
        "headerColorScheme": "dark",
        "greetingText": "Hi there! \nHow can I help you?",
        "ctaText": "Start Chat",
        "btnColor": "#1A1A1A",
        "cornerRadius": 40,
        "welcomeMessage": "Hello",
        "btnColorScheme": "light",
        "darkHeaderColorScheme": {
            "title": "#333333",
            "subTitle": "#4F4F4F"
        }
    };

    function openChat() {
        // Create a popup div
        var popup = document.createElement('div');
        popup.style.position = 'fixed';
        popup.style.bottom = '70px';
        popup.style.right = '20px';
        popup.style.width = '260px';
        popup.style.maxWidth = '90%';
        popup.style.backgroundColor = wa_widgetSetting.headerBackgroundColor;
        popup.style.borderRadius = wa_widgetSetting.cornerRadius + 'px';
        popup.style.boxShadow = '0px 4px 8px rgba(0, 0, 0, 0.2)';
        popup.style.zIndex = '999999';
        popup.style.padding = '15px';
        popup.style.display = 'flex';
        popup.style.flexDirection = 'column';
        popup.style.color = wa_widgetSetting.darkHeaderColorScheme.title;

        // Add title
        var title = document.createElement('h3');
        title.textContent = wa_widgetSetting.title;
        title.style.color = wa_widgetSetting.darkHeaderColorScheme.title;
        popup.appendChild(title);

        // Add subtitle
        var subTitle = document.createElement('h4');
        subTitle.textContent = wa_widgetSetting.subTitle;
        subTitle.style.color = wa_widgetSetting.darkHeaderColorScheme.subTitle;
        popup.appendChild(subTitle);

        // Add greeting text
        var greetingText = document.createElement('p');
        greetingText.textContent = wa_widgetSetting.greetingText;
        popup.appendChild(greetingText);

        // Add a button to start chat
        var chatButton = document.createElement('button');
        chatButton.textContent = wa_widgetSetting.ctaText;
        chatButton.style.backgroundColor = wa_widgetSetting.btnColor;
        chatButton.style.color = 'white';
        chatButton.style.border = 'none';
        chatButton.style.borderRadius = wa_widgetSetting.cornerRadius + 'px';
        chatButton.style.padding = '10px';
        chatButton.style.cursor = 'pointer';
        chatButton.style.marginTop = '10px';

        // Redirect to WhatsApp on button click
        chatButton.onclick = function() {
            window.open('https://wa.me/911234567890?text=Hello!%20I%20need%20assistance.', '_blank');
            document.body.removeChild(popup); // Remove popup after clicking
        };

        popup.appendChild(chatButton);
        
        // Append the popup to the body
        document.body.appendChild(popup);

        // Optionally, you could add a close button
        var closeButton = document.createElement('span');
        closeButton.textContent = 'X';
        closeButton.style.position = 'absolute';
        closeButton.style.top = '20px';
        closeButton.style.right = '20px';
        closeButton.style.cursor = 'pointer';
        closeButton.onclick = function() {
            document.body.removeChild(popup);
        };
        popup.appendChild(closeButton);
    }
</script>






</footer>
