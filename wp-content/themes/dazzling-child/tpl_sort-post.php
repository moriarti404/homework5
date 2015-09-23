<?php
/*
 Template Name:Sorted posts
 */
?>

<?php get_header(); ?>
    <div id="content" class="site-content container">
    <div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout', 'no entry' ); ?>">
        <main id="main" class="site-main" role="main">
            <?php
            $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts("paged=$page&cat=1,2,3,-4,5,6,7&posts_per_page=3&orderby=date");
            ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'page' ); ?>

                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() ) :
                    comments_template();
                endif;
                ?>
            <?php endwhile; // end of the loop. ?>
            <?php if ( $wp_query->max_num_pages > 1 ) : ?>
                <nav id="nav-below">
                    <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">?</span> Previous page' ) ); ?></div>
                    <div class="nav-next"><?php previous_posts_link( __( 'Next page <span class="meta-nav">?</span>' ) ); ?></div>
                </nav><!-- #nav-below .navigation -->
            <?php endif; ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>