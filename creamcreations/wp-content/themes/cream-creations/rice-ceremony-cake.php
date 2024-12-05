<?php
/*
Template Name: rice Cake Page
*/
get_header(); ?>

<div class="shop-container">
    <h1 class="shop-title">RICE CEREMONY CAKE
    </h1>

    <!-- Main Content for the Anniversary Cake Product -->
    <main class="products">
        <!-- Sort Dropdown (if needed) -->
       

        <!-- Single Product Card -->
        <div class="product-card">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/shop1.jpg'; ?>" alt="Anniversary Cake">
            <h3>Delicious RICE CEREMONY CAKE</h3>
            <p>Price: ₹1,000.00</p>
            <p class="amount">Available: 10 units</p>
            
            <!-- Quantity Control -->
            <div class="quantity-control">
                <button>-</button>
                <input type="number" value="1">
                <button>+</button>
            </div>
            <button class="add-to-cart">Add To Cart</button>
        </div>
    </main>
</div>

<?php get_footer(); ?>
