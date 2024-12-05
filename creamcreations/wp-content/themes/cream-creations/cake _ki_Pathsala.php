<?php
/* Template Name: Top Cake Baking Course */

get_header(); // Load the site header
?>

<head>
    <title>
        Master the Art of Baking | Cake Ki Pathshala
    </title>
    
    <meta name="description" content="From basics to advanced techniques, Cake Ki Pathshala teaches you everything about baking. Perfect your skills with Cream Creations.">
</head>

<div class="page-container">
    <!-- Page Title -->
    <header class="page-header">
        <h1>Top Cake Baking Course</h1>
    </header>

    <!-- Logo Section -->
    <section class="logo-section">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pathsala1.png" alt="Cake Ki Pathshala Logo" class="logo">
    </section>

    <!-- Description Section -->
    <section class="description-section">
        <h2>Learning cake making can be a rewarding endeavor for various reasons</h2>
        <p><strong>Creative Outlet:</strong> Cake making allows for artistic expression through designing and decorating. You can experiment with different flavors, colors, and decorations.</p>
        <p><strong>Personal Achievement:</strong> There's a significant sense of pride in baking a cake from scratch, especially when it turns out beautifully and tastes delicious.</p>
    </section>

    <!-- Image Section -->
    <section class="image-section centered">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pathsala2.png" alt="Banner Image" class="banner">
    </section>

    <!-- Additional Descriptions -->
    <section class="description-section">
        <p><strong>Healthier Choices:</strong> By making cakes yourself, you can control the ingredients, opting for healthier alternatives like reducing sugar, using whole grains, or incorporating fresh fruits.</p>
        <p><strong>Cost-Effective:</strong> Baking your own cakes can be more economical than purchasing them from a bakery, particularly for special occasions.</p>
    </section>

    <!-- Image Section -->
    <section class="image-section centered">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pathasala3.png" alt="Footer Image" class="footer-image">
    </section>

    <!-- Final Descriptions -->
    <section class="description-section">
        <p><strong>Customization:</strong> You can tailor cakes to meet specific dietary needs, preferences, and themes for events. Whether it’s a vegan cake, gluten-free, or themed for a birthday, you can customize it as desired.</p>
        <p><strong>Therapeutic Activity:</strong> Baking can be a relaxing pastime, providing a break from the daily routine. The process of measuring, mixing, and decorating can be very soothing.</p>
    </section>

    <section class="image-section centered">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pathsala4.png" alt="Footer Image" class="footer-image">
    </section>

    <section class="description-section">
        <p><strong>Social Bonding:</strong> Baking cakes can be a fun activity to share with family or friends, creating opportunities for bonding and making memories together.</p>
        <p><strong>Skill Enhancement:</strong> Learning cake making enhances your baking skills and expands your knowledge of various techniques, tools, and ingredients.</p>
        <p><strong>Professional Opportunities:</strong> If you become proficient, cake making can open doors to professional opportunities, such as starting a home bakery business or working in a commercial kitchen.</p>
        <p><strong>Joy of Sharing:</strong> Cakes are often shared during celebrations and gatherings. Being able to bake a delicious cake for loved ones brings joy and adds a personal touch to any event.</p>
    </section>

    <div class="signup-container">
        <h2>SIGN UP FOR THE CLASSES.</h2>
        
        <form action="#" method="POST" class="signup-form">
            <!-- Name Section -->
            <div class="form-group">
                <label for="name">Name <span>*</span></label>
                <div class="name-fields">
                    <input type="text" id="first-name" name="first_name" placeholder="First" required>
                    <input type="text" id="last-name" name="last_name" placeholder="Last" required>
                </div>
            </div>

            <!-- Email Section -->
            <div class="form-group">
                <label for="email">Email <span>*</span></label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <!-- Comment Section -->
            <div class="form-group">
                <label for="message">Comment or Message</label>
                <textarea id="message" name="message" placeholder="Write your message here"></textarea>
            </div>

            <!-- reCAPTCHA Placeholder -->
            <div class="form-group">
                <div class="recaptcha">
                    <p>ERROR for site owner: Invalid site key</p>
                    <div class="g-recaptcha"></div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submit-button">Submit</button>

            <!-- Disclaimer -->
            <p class="disclaimer">
                ***** We will call you up once we receive your request for the class. Class timings would be scheduled after discussion.
            </p>
        </form>
    </div>
</div>

<?php
get_footer(); // Load the site footer
?>
