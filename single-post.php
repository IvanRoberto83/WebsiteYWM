<?php
get_header();
?>

<section class="page-header">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<section class="content-section">
    <div class="container" style="max-width: 1200px;">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <!-- GAMBAR DI LUAR CARD -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="ups-hero-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <!-- CARD -->
            <div class="ups-detail">
                <div class="ups-detail-content">
                    <?php the_content(); ?>
                </div>
            </div>

            <br>

            <a href="<?php echo home_url('/berita-dan-kegiatan/'); ?>" class="ups-link">
                ← Kembali ke Berita dan Kegiatan
            </a>

        <?php endwhile; endif; ?>

    </div>
</section>

<?php get_footer(); ?>
