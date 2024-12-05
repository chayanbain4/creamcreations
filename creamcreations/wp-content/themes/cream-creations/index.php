<?php

/* 
Template Name: index page 
*/

get_header(); // Include header.php
?>

<!-- Wrapper for the entire page content (excluding header) -->
<div class="content-wrapper">

    <!-- Award Section -->
    <div class="award-section">
        <h2 class="section-title">We’ve Earned the Spotlight – Proud Winners of Excellence in Craftsmanship!</h2>
        <div class="award-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/award.jpg" alt="Award Image">
        </div>
    </div>

    <!-- Image Scrolling Section -->
    <div class="image-scrolling-section">
        <div class="scrolling-container">
            <div class="scrolling-track">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Choker Board Cake.png" alt="Image 3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Gold Coin Cake.png" alt="Image 4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kids Cake.png" alt="Image 5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Makeup Cake.png" alt="Image 6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Doctor Kit cake.png" alt="Image 7">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Cosmetic Theme Cake.png" alt="Image 8">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rice_cake.png" alt="Image 8">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Choker Board Cake.png" alt="Image 8">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Barbie cake.png" alt="Image 8">
            </div>
        </div>
    </div>




<!-- Testimonial Section -->
<section class="testimonial-section">
  <h1><em>"Cream Creations hai aapka celebrations ka secret ingredient "</em></h1>
  <p>People love our cakes and the story of our cakes...</p>

  <div class="testimonial-slider-wrapper">
    <!-- Left Navigation Button -->
    <!-- <button class="slider-btn left-btn" onclick="moveSlide(-1)">
      <i class="fas fa-chevron-left"></i>
    </button> -->


<div class="testimonial-slider">
      <?php
       $testimonials = [
        [
            'text' => 'A perfect cake 😍 on my hubby\'s birthday.. 😂 just delivered on time...',
            'user' => 'DORAEMI ALISHA JAISWAL',
            'date' => 'August 9, 2018',
            'image' => 'artist5.jpg',
            'review_type' => 'fb',  // Facebook review
            'icon' => 'fab fa-facebook', // Font Awesome Facebook icon
            'stars' => 0, // No stars for Facebook reviews
        ],
        [
            'text' => 'Best ever cake tasted. I loved the texture, the taste it was so yummy. Nd at a reasonable price... Loved it 💕. Keep baking Sweta di.',
            'user' => 'SUMIT JOSHI',
            'date' => 'July 17, 2018',
            'image' => 'artis15.jpg',
            'review_type' => 'fb',  // Facebook review
            'icon' => 'fab fa-facebook',
            'stars' => 0, // No stars for Facebook reviews
        ],
        [
            'text' => 'I absolutely loved the cake! So many people complimented both the look and taste! The flavors were perfect, and I am so happy that we went with the cake! Thank you Cake Hub for making such a beautiful and delicious cake!',
            'user' => 'PAYAL JAISWAL',
            'date' => 'September 7, 2017',
            'image' => 'artis14.jpg',
            'review_type' => 'fb',  // Facebook review
            'icon' => 'fab fa-facebook',
            'stars' => 0, // No stars for Facebook reviews
        ],
        [
            'text' => 'I have ordered multiple number of times...... The quality is awesome and service is mind blowing.',
            'user' => 'PARAMITA MAJI',
            'date' => 'February 27, 2019',
            'image' => 'artist16.jpg',
            'review_type' => 'fb',  // Facebook review
            'icon' => 'fab fa-facebook',
            'stars' => 0, // No stars for Facebook reviews
        ],
        [
            'text' => 'Wonderful and des zing cake ever had at a reasonable price looking forward to order more...',
            'user' => 'Debjani Acharyya',
            'date' => 'November 21, 2017',
            'image' => 'artist.jpg',
            'review_type' => 'fb',  // Facebook review
            'icon' => 'fab fa-facebook', // Font Awesome Facebook icon
            'stars' => 0, // No stars for Facebook reviews
        ],
        // Google Reviews
        [
            'text' => 'Wonderful and des not that costly than how it looks... really amazing cake ever had at a reasonable price looking forward to order more... 😁',
            'user' => 'Priyank Patadia',
            'date' => 'November 21, 2017',
            'image' => 'artist2.jpg',
            'review_type' => 'google',  // Google review
            'icon' => 'fab fa-google', // Font Awesome Google icon
            'stars' => 5, // 5 stars for Google review
        ],
        [
            'text' => 'Amazing cake! The flavors were delicious and exactly what we wanted. Highly recommend for any event. 😍',
            'user' => 'Survi Jaiswal',
            'date' => 'December 10, 2021',
            'image' => 'artist3.jpg',
            'review_type' => 'google',  // Google review
            'icon' => 'fab fa-google', // Font Awesome Google icon
            'stars' => 4, // 4 stars for Google review
        ],
        [
            'text' => 'Amazing cake! The flavors were delicious and exactly what we wanted. Highly recommend for any event. 😍',
            'user' => 'Jeba Praisy',
            'date' => 'December 10, 2021',
            'image' => 'artist4.jpg',
            'review_type' => 'google',  // Google review
            'icon' => 'fab fa-google', // Font Awesome Google icon
            'stars' => 4, // 4 stars for Google review
        ],
        [
            'text' => 'Amazing cake! The flavors were delicious and exactly what we wanted. Highly recommend for any event. 😍',
            'user' => 'Urvashi Singhi',
            'date' => 'December 10, 2021',
            'image' => 'artist6.jpg',
            'review_type' => 'google',  // Google review
            'icon' => 'fab fa-google', // Font Awesome Google icon
            'stars' => 4, // 4 stars for Google review
        ],
        [
            'text' => 'Amazing cake! The flavors were delicious and exactly what we wanted. Highly recommend for any event. 😍',
            'user' => 'ANJALI JAISWAL',
            'date' => 'December 10, 2021',
            'image' => 'artist5.jpg',
            'review_type' => 'google',  // Google review
            'icon' => 'fab fa-google', // Font Awesome Google icon
            'stars' => 4, // 4 stars for Google review
        ],
        // Add your two new testimonials here
        [
            'text' => 'Best ever cake tasted. I loved the texture, the taste it was so yummy. Nd at a reasonable price... Loved it 💕. Keep baking Sweta di.',
            'user' => 'SUMIT JOSHI',
            'date' => 'July 17, 2018',
            'image' => 'artis12.jpg',
            'review_type' => 'fb',  // Facebook review
            'icon' => 'fab fa-facebook',
            'stars' => 0, // No stars for Facebook reviews
        ],
        [
            'text' => 'I absolutely loved the cake! So many people complimented both the look and taste! The flavors were perfect, and I am so happy that we went with the cake! Thank you Cake Hub for making such a beautiful and delicious cake!',
            'user' => 'PAYAL JAISWAL',
            'date' => 'September 7, 2017',
            'image' => 'artist17.jpg',
            'review_type' => 'fb',  // Facebook review
            'icon' => 'fab fa-facebook',
            'stars' => 0, // No stars for Facebook reviews
        ],
    ];

      foreach ($testimonials as $testimonial) : ?>
        <div class="testimonial-card">
          <p>
            <span class="quote-icon">❝</span>
            <?php echo $testimonial['text']; ?>
            <span class="quote-icon">❞</span>
          </p>
          <div class="user-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $testimonial['image']; ?>" alt="<?php echo $testimonial['user']; ?>">
            <div>
              <h4><?php echo $testimonial['user']; ?></h4>
              <p><?php echo $testimonial['date']; ?></p>
              <div class="review-icons">
                <i class="<?php echo $testimonial['icon']; ?>"></i>
              </div>
              <?php if ($testimonial['review_type'] == 'google') : ?>
                <div class="stars">
                  <?php for ($i = 0; $i < $testimonial['stars']; $i++) { ?>
                    <span class="star">★</span>
                  <?php } ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Right Navigation Button -->
    <!-- <button class="slider-btn right-btn" onclick="moveSlide(1)">
      <i class="fas fa-chevron-right"></i>
    </button> -->
  </div>
  <script>
    let currentSlide = 0;

function moveSlide(direction) {
  const slider = document.querySelector('.testimonial-slider');
  const cards = document.querySelectorAll('.testimonial-card');
  const cardWidth = cards[0].offsetWidth + 20; // Card width + gap

  // Update current slide
  currentSlide += direction;

  // Ensure currentSlide stays within bounds
  if (currentSlide < 0) {
    currentSlide = cards.length - 1; // Go to the last slide
  } else if (currentSlide >= cards.length) {
    currentSlide = 0; // Go to the first slide
  }

  // Update the transform property
  slider.style.transform = `translateX(-${currentSlide * cardWidth}px)`;
}

  </script>
</section>










    <!-- Custom Text & Image Section -->
    <div class="custom-text-image-section">
        <div class="text-content">
            <h2>You don’t just purchase cakes, you get your emotions delivered to your doorsteps</h2>
            <p>
                When we think of celebrations, whether it’s a birthday, an anniversary, or a promotion, the first thing that often comes to mind is cake. But it’s not just any cake; it’s that special cake that encapsulates the essence of the celebration, engraved with a memory that lasts a lifetime.
            </p>
            <p>
                At Cream Creations, we understand the emotional quotient behind every cake order we receive. That’s why our cakes are not just desserts; they are a labor of love and artistry designed to cater to the unique story of every celebration. Made from the finest ingredients with meticulous attention to detail, each cake from Cream Creations is a masterpiece in itself.
            </p>
            <p>
                The beauty of personalization is in making the cake exclusively yours. It’s about seeing your emotions take a palpable form. Want to recreate the Eiffel Tower for your partner who loves Paris? Or a guitar for your dad who’s a music enthusiast? Or gift a boss that funny themed cake for your little one?
            </p>
            <a href="<?php echo site_url('/index.php/about-us'); ?>" class="learn-more-button">Learn More</a> <!-- Added button link -->
        </div>
        <div class="image-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image.png" alt="Custom Cake">
        </div>
    </div>





    <div class="video-section">
    <iframe 
    src="https://www.youtube.com/embed/jUZ2A6ForDk" 
    title="YouTube video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
    </iframe>
</div>





<div class="expertise-section">
    <h2>Our major expertise area are:-</h2>
    <div class="expertise-container">
        <div class="expertise-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rice_cake.png" alt="Rice Ceremony Cake">
            <p>RICE CEREMONY CAKES</p>
        </div>
        <div class="expertise-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/anniversary_cake.png" alt="Anniversary Cake">
            <p>ANNIVERSARY CAKES</p>
        </div>
        <div class="expertise-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/festive_cake.png" alt="Birthday Cake">
            <p>FESTIVE CAKES</p>
        </div>
        <div class="expertise-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/engagement_cakes.png" alt="Engagement Cake">
            <p>ENGAGEMENT CAKES</p>
        </div>


        <div class="expertise-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bachelorette_cake.png" alt="Engagement Cake">
            <p>BACHELORETTE CAKES</p>
        </div>
        <div class="expertise-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/birthday_cake.png" alt="Engagement Cake">
            <p>BIRTHDAY CAKES</p>
        </div>
        <div class="expertise-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/corporater_cake.png" alt="Engagement Cake">
            <p>CORPORATE CAKES</p>
        </div>


    </div>
    </div>
    </div>
</div>




<section class="delicious-cakes-section">
    <h2>Most Delicious Cakes</h2>
    <div class="cakes-slider-wrapper">
        <div class="cakes-slider">
            <div class="cake-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Barbie cake.png" alt="Delicious Cake 1">
            </div>
            <div class="cake-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Cosmetic Theme Cake.png" alt="Delicious Cake 2">
            </div>
            <div class="cake-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Doctor Kit cake.png" alt="Delicious Cake 3">
            </div>
            <div class="cake-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Gold Coin Cake.png" alt="Delicious Cake 4">
            </div>
            <div class="cake-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kids Cake.png" alt="Delicious Cake 5">
            </div>
            <div class="cake-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Makeup Cake.png" alt="Delicious Cake 5">
            </div>
            <div class="cake-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Crawn Cake.png" alt="Delicious Cake 5">
            </div>
            <div class="cake-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kids Cake.png" alt="Delicious Cake 5">
            </div>
           
        </div>
    </div>
</section>













<?php
get_footer(); // Include footer.php
?>
