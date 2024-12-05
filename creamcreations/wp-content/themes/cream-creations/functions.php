<?php
// Start session
add_action('init', function () {
    if (!session_id()) {
        session_start();
    }
});
// Enqueue styles and scripts
// function enqueue_theme_styles() {
//     wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
// }
// add_action('wp_enqueue_scripts', 'enqueue_theme_styles');


// // Register navigation menu
// function cream_creations_register_menus() {
//     register_nav_menus(array(
//         'primary-menu' => __('Primary Menu', 'cream-creations'),
//     ));
// }
// add_action('after_setup_theme', 'cream_creations_register_menus');




// function cream_creations_enqueue_scripts() {
//     wp_enqueue_script('testimonial-script', get_template_directory_uri() . '/assets/js/script.js', array(), false, true);
// }
// add_action('wp_enqueue_scripts', 'cream_creations_enqueue_scripts');




// function cream_creations_enqueue_fonts() {
//     wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap', false);
// }
// add_action('wp_enqueue_scripts', 'cream_creations_enqueue_fonts');





// Enqueue styles and scripts
// Enqueue styles and scripts
function cream_creations_enqueue_assets() {
    // Enqueue Styles
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_template_directory() . '/assets/css/style.css'), 'all');

    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap', false);

    // Enqueue Scripts
    wp_enqueue_script('testimonial-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/script.js'), true);

}
add_action('wp_enqueue_scripts', 'cream_creations_enqueue_assets');


// Register navigation menu
function cream_creations_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'cream-creations'),
    ));
}
add_action('after_setup_theme', 'cream_creations_register_menus');

function add_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'add_font_awesome');



function enqueue_footer_styles() {
    wp_enqueue_style('footer-css', get_template_directory_uri() . '/css/footer.css');
}
add_action('wp_enqueue_scripts', 'enqueue_footer_styles');





function enqueue_contact_scripts() {
    wp_enqueue_script('contact-js', get_template_directory_uri() . '/assets/js/contact.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_contact_scripts');






// function create_vanilla_blog_post() {
//     // Check if the post already exists
//     if ( ! get_page_by_path( 'how-to-use-vanilla-in-cakes' ) ) {
//         // Create post for Vanilla
//         $post = array(
//             'post_title'   => 'How can you use vanilla in cakes?',
//             'post_content' => '<h2>The Role of Vanilla in Cake Baking</h2>
//                                <p>Vanilla is an essential ingredient in cake baking, valued primarily for its ability to enhance flavors. Here are some key reasons why vanilla is a staple in cake recipes:</p>
//                                <ul>
//                                    <li><strong>Flavor Enhancement:</strong> Vanilla adds a rich, creamy taste that complements other ingredients like sugar, butter, and eggs, enhancing the overall flavor of the cake.</li>
//                                    <li><strong>Aromatic Quality:</strong> The aroma of vanilla makes baked goods more appealing, often evoking feelings of warmth and comfort.</li>
//                                    <li><strong>Balancing Flavors:</strong> Vanilla helps to balance and mellow out other strong flavors, ensuring a harmonious taste. It can also reduce the eggy flavor in cakes and enhance sweetness.</li>
//                                    <li><strong>Versatility:</strong> Vanilla pairs well with a wide range of other flavors such as chocolate, fruits, nuts, and spices, making it a versatile addition to various cake recipes.</li>
//                                    <li><strong>Improving Texture:</strong> In some recipes, vanilla can contribute to the overall texture of the cake, making it more tender and moist.</li>
//                                </ul>
//                                <h3>Forms of Vanilla:</h3>
//                                <p>Vanilla can be incorporated in several forms, including:</p>
//                                <ul>
//                                    <li><strong>Vanilla Extract:</strong> The most common form, made by soaking vanilla beans in alcohol.</li>
//                                    <li><strong>Vanilla Paste:</strong> A thicker form that includes vanilla bean specks, offering a more intense flavor.</li>
//                                    <li><strong>Vanilla Beans:</strong> The seeds scraped from the pod provide the purest and most natural vanilla flavor.</li>
//                                    <li><strong>Vanilla Powder:</strong> Made from dried and ground vanilla beans, suitable for dry mixes.</li>
//                                </ul>
//                                <p>Using high-quality vanilla in any form—extract, paste, beans, or powder—can significantly enhance the flavor profile of your cakes.</p>',
//             'post_status'  => 'publish',
//             'post_author'  => 1, // Assuming admin is user ID 1
//             'post_category' => array( 1 ), // Change to your category ID
//             'post_type'    => 'post',
//         );
//         wp_insert_post( $post );
//     }
// }

function handle_add_to_cart() {
    // Get the data from the form
    $product_name = sanitize_text_field($_POST['product_name']);
    $product_price = floatval($_POST['product_price']);
    $product_image = esc_url($_POST['product_image']);
    $product_quantity = intval($_POST['product_quantity']);

    // Initialize the cart if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add the product to the cart
    $cart_item = [
        'name' => $product_name,
        'price' => $product_price,
        'image' => $product_image,
        'quantity' => $product_quantity,
    ];

    $_SESSION['cart'][] = $cart_item;

    // Redirect back to the shop page after adding to cart
    wp_redirect(home_url('/index.php/shop/')); // Redirect to index.php/shop/
    exit;
}
add_action('admin_post_add_to_cart', 'handle_add_to_cart'); // For logged-in users
add_action('admin_post_nopriv_add_to_cart', 'handle_add_to_cart'); // For non-logged-in users



function enqueue_faq_styles() {
    wp_enqueue_style('faq-style', get_template_directory_uri() . '/faq-style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_faq_styles');












// Function to create a new blog post programmatically
function create_child_birthday_cake_post() {
    // Check if the post already exists to avoid duplication
    $post_title = 'How to Spice Up Your Child’s Birthday with Multiple Themed Cakes?';
    $existing_post = get_page_by_title($post_title, OBJECT, 'post');
    if ($existing_post) {
        return; // Post already exists, no need to create again
    }

    // Define post content
    $post_content = "
    <p>Enhancing your child’s birthday party with a themed cake can make the celebration truly special and memorable. Here are some creative ideas to consider:</p>

    <h3>1. Favorite Characters</h3>
    <ul>
        <li><strong>Superheroes:</strong> Cakes featuring icons like Spider-Man, Batman, or Wonder Woman.</li>
        <li><strong>Disney Princesses:</strong> Cakes with characters such as Elsa, Cinderella, or Ariel.</li>
        <li><strong>Cartoon Characters:</strong> Cakes showcasing figures like Peppa Pig, SpongeBob, or Paw Patrol.</li>
    </ul>

    <h3>2. Adventure Themes</h3>
    <ul>
        <li><strong>Pirates:</strong> A treasure chest or pirate ship cake.</li>
        <li><strong>Space:</strong> A rocket ship or astronaut cake.</li>
        <li><strong>Dinosaurs:</strong> A cake adorned with dinosaurs or a volcano.</li>
    </ul>

    <h3>3. Fantasy Themes</h3>
    <ul>
        <li><strong>Unicorns:</strong> A vibrant unicorn cake with rainbows.</li>
        <li><strong>Fairies:</strong> A whimsical cake featuring fairies and magical elements.</li>
        <li><strong>Dragons:</strong> A cake with a dragon or fantasy castle.</li>
    </ul>

    <h3>4. Sports Themes</h3>
    <ul>
        <li><strong>Soccer:</strong> A soccer ball or field cake.</li>
        <li><strong>Basketball:</strong> A cake shaped like a basketball hoop.</li>
        <li><strong>Baseball:</strong> A baseball field or a cap and bat cake.</li>
    </ul>

    <h3>5. Nature Themes</h3>
    <ul>
        <li><strong>Jungle:</strong> A cake with animals like lions, monkeys, and elephants.</li>
        <li><strong>Underwater:</strong> A cake featuring fish, mermaids, and sea creatures.</li>
        <li><strong>Farm:</strong> A cake with farm animals and a barn.</li>
    </ul>

    <h3>6. Occupation Dreams</h3>
    <ul>
        <li><strong>Firefighters:</strong> A fire truck cake.</li>
        <li><strong>Police Officers:</strong> A police car cake.</li>
        <li><strong>Astronauts:</strong> A space shuttle or moon cake.</li>
    </ul>

    <h3>7. Seasonal Themes</h3>
    <ul>
        <li><strong>Winter Wonderland:</strong> A snowman or snowflake cake.</li>
        <li><strong>Summer Beach:</strong> A cake with sand, seashells, and surfboards.</li>
        <li><strong>Autumn Harvest:</strong> A pumpkin or apple-themed cake.</li>
    </ul>

    <h3>8. Hobbies and Interests</h3>
    <ul>
        <li><strong>Art:</strong> A cake with paint splatters and brushes.</li>
        <li><strong>Music:</strong> A cake with musical notes or instruments.</li>
        <li><strong>Books:</strong> A cake featuring a beloved book or series.</li>
    </ul>

    <h4>Tips for Themed Cakes:</h4>
    <ul>
        <li><strong>Custom Cake Toppers:</strong> Enhance the theme with edible images or fondant toppers.</li>
        <li><strong>Colors and Patterns:</strong> Coordinate the cake’s colors with the theme for a cohesive look.</li>
        <li><strong>Interactive Elements:</strong> Consider features like pull-apart cupcakes or cakes with surprise fillings.</li>
        <li><strong>Personalization:</strong> Prominently display the child’s name and age on the cake.</li>
    </ul>

    <p><strong>Collaborate with a Professional Baker:</strong> If cake-decorating isn’t your forte, a professional baker can bring your vision to life with intricate designs and delicious flavors. Share your ideas and let them create a masterpiece!</p>
    ";

    // Define post details
    $post_data = array(
        'post_title'    => $post_title,
        'post_content'  => $post_content,
        'post_status'   => 'publish', // Post status: publish, draft, etc.
        'post_author'   => 1,         // Author ID
        'post_date'     => '2024-07-15 10:00:00', // Scheduled publish date
        'post_category' => array(1),  // Category ID(s)
    );

    // Insert the post into the database
    wp_insert_post($post_data);
}

// Hook the function to run after WordPress is initialized
add_action('init', 'create_child_birthday_cake_post');



add_action('init', function() {
    flush_rewrite_rules();
});


?>



