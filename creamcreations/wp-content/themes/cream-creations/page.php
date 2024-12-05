<?php
/* Template Name: About Page */
get_header(); ?>

<head>
    <title>
        Our Story | Cream Creations - Passion for Sweet Perfection
    </title>
    
    <meta name="description" content="Discover the passionate bakers behind Cream Creations. Read about our journey, values and the passion that drives us to serve the best tasting custom cakes and desserts.">
</head>

<div class="about-us-content">
    <h1>About Us</h1>

    <!-- About Us Section -->
    <section class="about-us">
        <div class="section-text">
            <p><strong>Our Journey</strong></p>
            <p>Cream Creations was founded with a simple mission: to bring joy and delight through the art of cake making. Our journey began several years ago when our passionate team of bakers and confectioners came together with one goal in mind: to create unforgettable experiences with every bite. Since then, we have been dedicated to crafting delicious and visually stunning cakes that make every celebration truly special.</p>
        </div>
        <div class="section-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.png" alt="Achievements">
        </div>
    </section>

    <!-- Goals and Purpose Section -->
    <section class="about-us">
        <div class="section-text">
            <p><strong>Goals and Purpose</strong></p>
            <p>At Cream Creations, our purpose is to make your moments sweeter and more memorable. From birthdays to anniversaries, weddings to corporate events, we believe that there’s always a perfect cake waiting to be discovered. Our goal is to provide you with a seamless online cake delivery experience, from browsing our wide range of customizable cake options to having them delivered right to your doorstep.</p>
            
            <p>Behind every delectable creation, there is a team of dedicated individuals who pour their heart and soul into their craft. Our talented and experienced team of bakers, decorators, and pastry chefs work tirelessly to bring your cake dreams to life. With their meticulous attention to detail, creative flair, and passion for perfection, they ensure that each cake leaving our kitchen is a masterpiece in its own right. At Cream Creations, we take pride in our ability to satisfy even the most discerning taste buds. Whether you’re craving a classic chocolate cake, a fruity delight, or an intricately designed fondant masterpiece, our extensive menu offers a wide variety of options to suit every occasion and personal preference. What sets us apart is our commitment to customization, allowing you to add a personal touch to your cake, making it truly one-of-a-kind.</p>
        </div>
        <div class="section-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image1.png" alt="Cake Creation">
        </div>
    </section>

    <!-- Achievements Section -->
    <section class="about-us">
        <div class="section-text">
            <p><strong>Achievements</strong></p>
            <p>Over the last 8 years, Cream Creations has achieved significant milestones within the online cake delivery industry. Our commitment to excellence has earned us recognition as one of the leading providers of customized cakes. These achievements inspire us to continue pushing the boundaries of cake design and delivering unforgettable experiences to our customers. Whether you’re craving a classic chocolate cake, a fruity delight, or an intricately designed fondant masterpiece, our extensive menu offers a wide variety of options to suit every occasion and personal preference. What sets us apart is our commitment to customization, allowing you to add a personal touch to your cake, making it truly one-of-a-kind and right on time delivery whatever the condition.</p>
        </div>
        <div class="section-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image2.jpg" alt="Cake Creation">
        </div>
    </section>

    <section class="counter-section">
        <div class="counter">
            <div class="count" id="desserts-sold">0</div>
            <p class="counter-text">Desserts Sold</p>
        </div>

        <div class="counter">
            <div class="count" id="satisfied-customers">0</div>
            <p class="counter-text">Satisfied Customers</p>
        </div>

        <div class="counter">
            <div class="count" id="orders-received">0</div>
            <p class="counter-text">Orders Received</p>
        </div>
    </section>

    <script>
        // Function to animate the count-up
        function countUp(element, target) {
            let count = 0;
            let speed = 100; // Increased speed to 100 milliseconds for smoother animation
            let increment = Math.ceil(target / 100); // Small increment value

            let interval = setInterval(() => {
                count += increment;
                if (count >= target) {
                    clearInterval(interval);
                    count = target;
                }
                element.innerText = count;
            }, speed);
        }

        // Start counting for each counter
        document.addEventListener('DOMContentLoaded', () => {
            countUp(document.getElementById('desserts-sold'), 1000);
            countUp(document.getElementById('satisfied-customers'), 3000);
            countUp(document.getElementById('orders-received'), 5000);
        });
    </script>

    <div><h2>Meet Our Amazing Bakers</h2></div>

    <section class="bakers-section">
        <div class="bakers-container">
            <div class="baker">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no1.jpg" alt="Eddie Johnson" class="baker-image">
                <h3>Eddie Johnson</h3>
                <p class="specialty">Pastry Chef</p>
            </div>

            <div class="baker">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no2.jpg" alt="Mary Wright" class="baker-image">
                <h3>Mary Wright</h3>
                <p class="specialty">Cake Specialist</p>
            </div>

            <div class="baker">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no4.jpg" alt="Patricia Naumann" class="baker-image">
                <h3>Patricia Naumann</h3>
                <p class="specialty">Pastry Chef</p>
            </div>

            <div class="baker">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no3.jpg" alt="Charles Maple" class="baker-image">
                <h3>Charles Maple</h3>
                <p class="specialty">Bread Specialist</p>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
