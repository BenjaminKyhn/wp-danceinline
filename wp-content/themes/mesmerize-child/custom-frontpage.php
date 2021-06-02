<?php /* Template Name: Danceinline forsideskabelon */ ?>

<?php
mesmerize_get_header();
$blog_posts = new WP_Query(array('post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => -1));
?>


<div id='page-content' class="page-content">
    <div class="<?php mesmerize_page_content_wrapper_class(); ?>">
        <?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', 'page');
        endwhile;
        ?>
        <div class="custom-page-content">
            <div class="blog-posts">
                <h1 class="custom-h1">Nyheder</h1>
                <?php while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" class="post">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail(get_the_ID(), 'full');
                                } ?>
                                <h4 class="post-title custom-h4"><?php the_title(); ?></h4>
                            </a>
                            <p style="font-size: 12px;"> Skrevet af <?php the_author_posts_link(); ?> den <?php the_date() ?></p>
                        <div class="post-excerpt custom-paragraph">
                            <?php wp_kses_post(the_excerpt()) ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
