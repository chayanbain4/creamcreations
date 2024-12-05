<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>
        <?php
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
            wp_title('|', true, 'right'); // Fallback for other pages
        }
        ?>
    </title>
    
    <!-- Add a meta description -->
    <meta name="description" content="<?php
        if (is_front_page()) {
            echo 'Find the most excellent custom cakes, desserts and much more at Cream Creations. Made out of love, these treats are made for every occasion. Order now!';
        } elseif (is_page('about-us')) {
            echo 'Discover the passionate bakers behind Cream Creations. Read about our journey, values and the passion that drives us to serve the best tasting custom cakes and desserts.';
        } elseif (is_page('contact-us')) {
            echo 'Have questions? Need a custom cake? Contact Cream Creations for more help. Welcome to Lola\'s and we want your celebrations to be unforgettable!';
        } elseif (is_page('shop')) {
            echo 'Shop online for premium custom cakes, desserts, and more at Cream Creations. Delivered fresh to your doorstep. Order now!';
        } elseif (is_page('blog')) {
            echo 'Baking hacks, going viral trends, all from the Cream Creations Blog. Read insights, stories and inspiration that can inspire your next dessert.';
        } elseif (is_page('cake-ki-pathshala')) {
            echo 'From basics to advanced techniques, Cake Ki Pathshala teaches you everything about baking. Perfect your skills with Cream Creations.';
        } else {
            echo 'Cream Creations offers a delightful variety of cakes and pastries crafted with love in Kolkata. Discover our unique flavors and designs for all occasions.'; // Default description
        }
    ?>">

    <!-- Add robots meta tag -->
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="navbar">
  <div class="navbar-container">
    <!-- Logo Section -->
    <div class="logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logoo.png" alt="Logo">
      </a>
    </div>

    <!-- Navigation Menu -->
    <nav class="nav-links">
      <ul class="menu">
        <?php
        // Display primary menu if defined, otherwise show fallback links
        wp_nav_menu(array(
          'theme_location' => 'primary-menu',
          'container'      => '',
          'menu_class'     => '',
          'items_wrap'     => '%3$s', // Exclude default <ul> wrapper
          'fallback_cb'    => function() {
            echo '
              <li><a href="' . home_url() . '">Home</a></li>
              <li><a href="' . home_url('/about-us') . '">About Us</a></li>
              <li><a href="' . home_url('/contact-us') . '">Contact Us</a></li>
              <li><a href="' . home_url('/blog') . '">Blog</a></li>
              <li><a href="' . home_url('/cake') . '">Cake ki Pathshala</a></li>
              <li><a href="' . home_url('/shop') . '">Shop</a></li>
            ';
          }
        ));
        ?>
      </ul>
    </nav>
    
    <!-- Cart Button -->
    <div class="cart-button-wrapper1">
      <a href="<?php echo home_url('/index.php/cart'); ?>" class="cart-link1">
        <i class="fas fa-shopping-cart"></i>
      </a>
    </div>

    <!-- Hamburger Menu Button -->
    <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
  </div>
</header>

<script>
  function toggleMenu() {
    const menu = document.querySelector('.nav-links .menu');
    menu.classList.toggle('open');
  }
</script>

<?php wp_footer(); ?>

</body>
</html>
