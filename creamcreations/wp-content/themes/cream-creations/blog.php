<?php
/* Template Name: Blog Page */
get_header(); ?>

<head>
    <title>
        Explore Our Blog | Cream Creations - Sweet Inspiration Awaits
    </title>
    
    <meta name="description" content="Baking hacks, going viral trends, all from the Cream Creations Blog. Read insights, stories and inspiration that can inspire your next dessert.">
</head>

<div class="blog-page-container">
    <!-- Blog Title and Category -->
    <header class="blog-header">
        <h1 class="category-title">Category: Blog Post</h1>
    </header>

    <!-- Blog Posts -->
    <div class="blog-posts">
        <?php
        // Get the current page number
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        // WP_Query to get the latest posts
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,  // Number of posts to display per page
            'orderby' => 'date',    // Order posts by date
            'order' => 'DESC',      // Show most recent posts first
            'paged' => $paged,      // Use current page number for pagination
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="blog-post">
                    <!-- Clickable Post Title -->
                    <h2 class="post-title">
                        <a href=" "><?php the_title(); ?></a>
                    </h2>

                    <!-- Meta Information (Author and Date) -->
                    <div class="post-meta">
                        <span class="author">By <?php the_author(); ?></span>
                        <span class="date">Posted on <?php echo get_the_date(); ?></span>
                    </div>

                    <!-- Post Excerpt -->
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>

                    <!-- "Read more" link to individual post -->
                    <!-- <a href="<?php the_permalink(); ?>" class="read-more">Read more &raquo;</a> -->
                </div>
                <?php
            endwhile;

            // Pagination
            echo '<div class="pagination">';
            echo paginate_links(array(
                'total' => $query->max_num_pages,  // Total number of pages
                'current' => $paged,  // Current page
                'prev_text' => '« Previous',
                'next_text' => 'Next »',
                'before_page_number' => '<span class="screen-reader-text">Page </span>',
            ));
            echo '</div>';

        else :
            echo '<p>No posts found.</p>';
        endif;

        wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer(); ?>
