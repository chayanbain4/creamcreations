<?php
/* Template Name: Contact Page */
get_header(); // Include the header
?>
<head>
    <title>
        Get in Touch | Cream Creations - Your Baking Partner
    </title>
    
    <meta name="description" content="Have questions? Need a custom cake? Contact Cream Creations for more help. Welcome to Lola's and we want your celebrations to be unforgettable!">
</head>
<div class="contact-us" style="padding: 40px;">
  <h1 style="text-align: center;">We'd Love To Hear From You</h1>
  
  <div class="contact-container" style="display: flex; justify-content: space-between; flex-wrap: wrap; max-width: 1200px; margin: auto;">

    <!-- Contact Information -->
    <!-- Contact Information -->
<div class="contact-info" style="flex: 1; min-width: 281px; padding: 0px; display: flex; flex-direction: column; gap: 20px;">
  <h3 style="margin-bottom: 10px;">Contact Information</h3>
  <div style="display: flex; align-items: center; gap: 10px;">
    <img src="https://img.icons8.com/material-rounded/24/000000/email.png" alt="Email Icon">
    <a href="mailto:creamcreations.in@gmail.com" style="text-decoration: none; color: #000;">creamcreations.in@gmail.com</a>
  </div>
  <div style="display: flex; align-items: center; gap: 10px;">
    <img src="https://img.icons8.com/material-rounded/24/000000/phone.png" alt="Phone Icon">
    <a href="tel:+919051167674" style="text-decoration: none; color: #000;">+91 90511 67674</a>
  </div>

  <h3 style="margin-bottom: 10px;">Business Hours</h3>
  <p>Monday - Sunday: 10 am - 8 pm</p>

  <h3 style="margin-bottom: 10px;">Address</h3>
  <div style="display: flex; align-items: center; gap: 10px;">
    <img src="https://img.icons8.com/material-rounded/24/000000/marker.png" alt="Location Icon">
    <p style="margin: 0;">46/C/37 Biplabi Barin Ghosh Sarani, Kolkata 700056</p>
  </div>

  <div style="display: flex; gap: 10px; margin-top: 20px;">
    <a href="https://instagram.com" target="_blank">
      <img src="https://img.icons8.com/color/32/000000/instagram-new.png" alt="Instagram">
    </a>
    <a href="https://youtube.com" target="_blank">
      <img src="https://img.icons8.com/color/32/000000/youtube-play.png" alt="YouTube">
    </a>
    <a href="https://twitter.com" target="_blank">
      <img src="https://img.icons8.com/color/32/000000/twitter.png" alt="Twitter">
    </a>
    <a href="https://facebook.com" target="_blank">
      <img src="https://img.icons8.com/color/32/000000/facebook.png" alt="Facebook">
    </a>
    <a href="https://google.com" target="_blank">
      <img src="https://img.icons8.com/color/32/000000/google-logo.png" alt="Google">
    </a>
  </div>
</div>


    <!-- Contact Form -->
    <div class="contact-form" style="flex: 1; min-width: 218px; padding: 20px; border-left: 1px solid #ddd;">
      <h3>Get In Touch</h3>
      <form action="" method="post" style="display: flex; flex-direction: column;">
        <label for="first-name">Name *</label>
        <div style="display: flex; gap: 10px; margin-bottom: 15px;">
          <input type="text" id="first-name" name="first-name" placeholder="First" required style="flex: 1; padding: 10px; border: 1px solid #ccc;">
          <input type="text" id="last-name" name="last-name" placeholder="Last" required style="flex: 1; padding: 10px; border: 1px solid #ccc;">
        </div>
        <label for="email">Email *</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required style="margin-bottom: 15px; padding: 10px; border: 1px solid #ccc;">
        <label for="message">Comment or Message</label>
        <textarea id="message" name="message" placeholder="Your Message" rows="5" style="margin-bottom: 15px; padding: 10px; border: 1px solid #ccc;"></textarea>
        <button type="submit" style="padding: 10px; background-color: #007BFF; color: #fff; border: none; cursor: pointer;">
          Submit
        </button>
      </form>
    </div>

  </div>

  <!-- Embedded Map -->
  <div class="map-container" style="margin: 40px auto; max-width: 1200px; text-align: center;">
    <h3>Our Location</h3>
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.139061182701!2d88.38423951504558!3d22.60283983721067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027711ebd1e66d%3A0x69a527107186d227!2s37%2C%20Biplabi%20Barin%20Ghosh%20Sarani%2C%20Ultadanga%2C%20Kolkata%2C%20West%20Bengal%20700067!5e0!3m2!1sen!2sin!4v1698657975472!5m2!1sen!2sin" 
      width="100%" 
      height="400" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

<?php get_footer(); // Include the footer ?>
