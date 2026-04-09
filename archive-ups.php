<?php
get_header();
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>Unit Pelayanan Sosial</h1>
    </div>
</section>

<!-- Content Section -->
<section class="content-section">
    <div class="container" style="max-width: 1200px;">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="ups-detail">

                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>

                <div class="ups-detail-content">
                    <h2><?php the_title(); ?></h2>
                    <br>

                    <p>
                        <?php echo wp_trim_words(get_the_content(), 35); ?>
                    </p>

                    <br>

                    <a href="<?php the_permalink(); ?>" class="ups-link">
                        Lihat Detailnya →
                    </a>
                </div>

            </div>

        <?php endwhile; else : ?>

            <p>Belum ada Unit Pelayanan Sosial.</p>

        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
