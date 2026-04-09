<?php
/*
Template Name: Galeri
*/
get_header();
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<!-- Gallery Section -->
<section class="content-section">
    <div class="container">
        <?php
        // Daftar kategori galeri
        $categories = array(
            'panti-wredha-mulya' => 'Panti Wredha Mulya',
            'paguyuban' => 'Paguyuban Lansia Wredha Mulya',
            'posyandu' => 'Pembinaan Pos Yandu Lansia',
            'homecare' => 'Homecare Lansia',
            'sekolah-lansia' => 'Sekolah Lansia Wredha Mulya'
        );

        // Loop untuk setiap kategori
        foreach ($categories as $cat_slug => $cat_name) :
            $galeri = new WP_Query(array(
                'post_type' => 'galeri',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'kategori_galeri',
                        'field' => 'slug',
                        'terms' => $cat_slug
                    )
                )
            ));

            if ($galeri->have_posts()) :
        ?>
            <div class="gallery-category">
                <h2 class="category-title" style="margin-bottom: 10px;"><?php echo $cat_name; ?></h2>
                <div class="gallery-grid" style="margin-bottom: 50px;">
                    <?php
                    while ($galeri->have_posts()) : $galeri->the_post();
                        if (has_post_thumbnail()) :
                            $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    ?>
                        <div class="gallery-item">
                            <img src="<?= $img ?>" alt="<?php the_title(); ?>" loading="lazy">
                        </div>
                    <?php
                        endif;
                    endwhile;
                    ?>
                </div>
            </div>
        <?php
            endif;
            wp_reset_postdata();
        endforeach;
        ?>
    </div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
    <img id="lightboxImg" src="" alt="Preview">
    <button class="lightbox-close" id="lightboxClose">&times;</button>
</div>

<?php get_footer(); ?>