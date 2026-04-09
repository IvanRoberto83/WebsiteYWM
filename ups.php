<?php
/*
Template Name: UPS
*/
get_header();
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<!-- Content Section -->
<section class="content-section">
    <div class="container" style="max-width: 1200px;">

        <?php
        $args = array(
            'post_type'      => 'ups',
            'posts_per_page' => -1
        );

        $ups_query = new WP_Query($args);

        if ($ups_query->have_posts()) :
            while ($ups_query->have_posts()) : $ups_query->the_post();
        ?>
    
            <div class="ups-detail">
                
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>

                <div class="ups-detail-content">
                    <h2><?php the_title(); ?></h2>
                    <br>

                    <p>
                        <?php echo wp_trim_words(get_the_content(), 18); ?>
                    </p>

                    <br>

                    <a href="<?php the_permalink(); ?>" class="ups-link">
                        Lihat Detailnya →
                    </a>
                </div>

            </div>

        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Belum ada Unit Pelayanan Sosial.</p>';
        endif;
        ?>

    </div>
</section>

<?php get_footer(); ?>
