<?php
/*
Template Name: Shop Page
*/
get_header();


// Get the sorting options from the query parameters
$sort_order = isset($_GET['sort_order']) ? sanitize_text_field($_GET['sort_order']) : 'price-asc'; // Default to sorting by price in ascending order

// List of Products
$products = [
    [
        'image' => get_template_directory_uri() . '/assets/images/shop1.jpg', 
        'name' => 'Rice Ceremony Cake', 
        'price' => 1000, 
        'amount' => 'Available: 10 units'
    ],
    [
        'image' => get_template_directory_uri() . '/assets/images/shop2.jpg', 
        'name' => 'Birthday Cake', 
        'price' => 1200, 
        'amount' => 'Available: 5 units'
    ],
    [
        'image' => get_template_directory_uri() . '/assets/images/shop3.jpg', 
        'name' => 'Anniversary Cake', 
        'price' => 800, 
        'amount' => 'Available: 15 units'
    ],
    [
        'image' => get_template_directory_uri() . '/assets/images/shop4.jpg', 
        'name' => 'Engagement Cake', 
        'price' => 1500, 
        'amount' => 'Available: 8 units'
    ]
];

// Function to sort products based on selected option
function sort_products($products, $sort_order) {
    usort($products, function ($a, $b) use ($sort_order) {
        $order = explode('-', $sort_order);
        $field = $order[0]; // 'price' or 'name'
        $direction = $order[1]; // 'asc' or 'desc'
        
        if ($field == 'price') {
            $result = $a['price'] - $b['price'];
        } else {
            $result = strcmp($a['name'], $b['name']);
        }

        return ($direction == 'asc') ? $result : -$result;
    });

    return $products;
}

// Sort the products based on the selected sort order
$products = sort_products($products, $sort_order);
?>
<head>
    <title>
        Order Custom Cakes Online | Cream Creations - Shop Now
    </title>
    
    <meta name="description" content="Shop online for premium custom cakes, desserts, and more at Cream Creations. Delivered fresh to your doorstep. Order now!">
</head>

<div class="shop-container">
    <!-- Header Section -->
    <h1 class="shop-title">Shop</h1>

    <!-- Search Bar -->
    <!-- <div class="search-bar"> -->
      
            <!-- Sort Options -->

        <!-- <form action="" method="GET">
            <select name="sort_order" class="sort-select" onchange="this.form.submit()">
                <option value="price-asc" <?php selected($sort_order, 'price-asc'); ?>>Sort by Price: Low to High</option>
                <option value="price-desc" <?php selected($sort_order, 'price-desc'); ?>>Sort by Price: High to Low</option>
                <option value="name-asc" <?php selected($sort_order, 'name-asc'); ?>>Sort by Name: A to Z</option>
                <option value="name-desc" <?php selected($sort_order, 'name-desc'); ?>>Sort by Name: Z to A</option>
            </select>
        </form> -->
    </div>

    <!-- <div class="sort-options">
        
    </div> -->

    <!-- Shop Layout -->
    <div class="shop-layout">
        <!-- Sidebar for Categories -->
        <!-- <aside class="categories">
            <h2>Categories</h2>
            <ul>
                <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('anniversary-cake'))); ?>">ANNIVERSARY CAKE (1)</a></li>
                <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('birthday-cake'))); ?>">BIRTHDAY CAKE (1)</a></li>
                <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('engagement-cake'))); ?>">ENGAGEMENT CAKE (1)</a></li>
                <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('rice-ceremony-cake'))); ?>">RICE CEREMONY CAKE (1)</a></li>
            </ul>
        </aside> -->

        <!-- Main Content for Products -->
        <main class="products">
            <!-- Product Grid -->
            <div class="product-grid">
                <?php foreach ($products as $product) : ?>
                    <div class="product-card">
                        <img src="<?php echo esc_url($product['image']); ?>" alt="<?php echo esc_attr($product['name']); ?>">
                        <h3><?php echo esc_html($product['name']); ?></h3>
                        <p>₹<?php echo number_format($product['price'], 2); ?></p>
                        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
                            <input type="hidden" name="action" value="add_to_cart">
                            <input type="hidden" name="product_name" value="<?php echo esc_attr($product['name']); ?>">
                            <input type="hidden" name="product_price" value="<?php echo esc_attr($product['price']); ?>">
                            <input type="hidden" name="product_image" value="<?php echo esc_attr($product['image']); ?>">
                            <div class="quantity-control">
                                <button type="button" class="quantity-decrease">-</button>
                                <input type="number" name="product_quantity" value="1" min="1" class="quantity-input">
                                <button type="button" class="quantity-increase">+</button>
                            </div>
                            <button type="submit" class="add-to-cart">Add To Cart</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.quantity-decrease').forEach(button => {
            button.addEventListener('click', function () {
                const input = this.nextElementSibling;
                if (input.value > 1) {
                    input.value--;
                }
            });
        });

        document.querySelectorAll('.quantity-increase').forEach(button => {
            button.addEventListener('click', function () {
                const input = this.previousElementSibling;
                input.value++;
            });
        });
    });
</script>

<?php get_footer(); ?>
