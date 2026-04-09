<?php
/*
Template Name: Beranda
*/
get_header();
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <?php the_field('title'); ?>
        <?php the_field('slogan'); ?>
        <a href="<?php echo site_url('/kontak'); ?>" class="btn btn-primary">Hubungi Kami</a>
    </div>
</section>

<!-- Stats Section -->
<section class="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number blue">
                    <?php
                        $total_lansia = wp_count_posts('lansia');
                        echo $total_lansia->publish;
                    ?>
                </div>
                <div class="stat-label">Lansia Asuh</div>
            </div>
            <div class="stat-item">
                <div class="stat-number purple"><?php the_field('tanggal_berdiri'); ?></div>
                <div class="stat-label">Tanggal Berdiri</div>
            </div>
            <div class="stat-item">
                <div class="stat-number pink">
                    <?php
                        $total_ups = wp_count_posts('ups');
                        echo $total_ups->publish;
                    ?>
                </div>
                <div class="stat-label">Unit Pelayanan Sosial</div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="about-preview">
    <div class="container">
        <div class="about-grid">
            <div class="about-text">
                <h2>Profil Kami</h2>
                <?php the_field('profil_kami'); ?>
                <a href="<?php echo site_url('/profil'); ?>" class="link-arrow">Selengkapnya →</a>
            </div>
            <div class="about-image">
                <div class="image-slider">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foto_yayasan/foto_yayasan6.jpeg" alt="Profil-1" class="slider-image active" loading="lazy">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/papan_nama/papan_nama1.jpeg" alt="Profil-2" class="slider-image" loading="lazy">
                </div>
                <div class="slider-dots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pimpinan Section -->
<section class="pimpinan-section">
    <div class="container">
        <h2 class="section-title">Pimpinan Kami</h2>

        <div class="pimpinan-grid">

            <!-- Ketua Pembina -->
            <div class="pimpinan-card">
                <?php
                    $foto_pembina = get_field('foto_ketua_pembina');
                    if ($foto_pembina): ?>
                    <div class="pimpinan-photo">
                        <img src="<?php echo esc_url($foto_pembina['url']); ?>"
                             alt="<?php echo esc_attr($foto_pembina['alt']); ?>"
                             loading="lazy">
                    </div>
                <?php else: ?>
                    <div class="pimpinan-photo pimpinan-photo--placeholder">
                        <span>📷</span>
                    </div>
                <?php endif; ?>

                <div class="pimpinan-info">
                    <div class="pimpinan-jabatan">Ketua Pembina</div>
                    <h3 class="pimpinan-nama"><?php the_field('nama_ketua_pembina'); ?></h3>
                </div>
            </div>

            <!-- Ketua Umum -->
            <div class="pimpinan-card">
                <?php
                    $foto_ketum = get_field('foto_ketua_umum');
                    if ($foto_ketum): ?>
                    <div class="pimpinan-photo">
                        <img src="<?php echo esc_url($foto_ketum['url']); ?>"
                             alt="<?php echo esc_attr($foto_ketum['alt']); ?>"
                             loading="lazy">
                    </div>
                <?php else: ?>
                    <div class="pimpinan-photo pimpinan-photo--placeholder">
                        <span>📷</span>
                    </div>
                <?php endif; ?>

                <div class="pimpinan-info">
                    <div class="pimpinan-jabatan">Ketua Umum</div>
                    <h3 class="pimpinan-nama"><?php the_field('nama_ketua_umum'); ?></h3>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Unit Pelayanan Sosial -->
<section class="ups-section">
    <div class="container">
        <h2 class="section-title">Unit Pelayanan Sosial</h2>

        <div class="ups-grid">
            <?php
            $args = [
                'post_type'      => 'ups',
                'posts_per_page' => -1, // tampilkan semua UPS
            ];
            $ups_query = new WP_Query($args);
            ?>

            <?php if ($ups_query->have_posts()): ?>
                <?php while ($ups_query->have_posts()): $ups_query->the_post(); ?>

                    <article class="ups-card">
                        <?php if (has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" loading="lazy">
                        <?php endif; ?>

                        <div class="ups-content">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>

                            <a href="<?php the_permalink(); ?>" class="ups-link">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </article>

                <?php endwhile; wp_reset_postdata(); ?>
            <?php else: ?>
                <p>Belum ada Unit Pelayanan Sosial.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Latest News -->
<section class="news-section">
    <div class="container">
        <h2 class="section-title">Berita Terbaru</h2>

        <div class="news-grid">
            <?php
            $args = [
                'post_type'      => 'post',   // pakai Post bawaan
                'posts_per_page' => 3,        // tampilkan 3 terbaru
            ];
            $news = new WP_Query($args);
            ?>

            <?php if ($news->have_posts()): ?>
                <?php while ($news->have_posts()): $news->the_post(); ?>

                    <article class="news-card">
                        <?php if (has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>

                        <div class="news-content">
                            <div class="news-date">
                                <?php echo get_the_date(); ?>
                            </div>

                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>

                            <a href="<?php the_permalink(); ?>" class="news-link">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </article>

                <?php endwhile; wp_reset_postdata(); ?>
            <?php else: ?>
                <p>Belum ada berita.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>