<?php
/*
Template Name: Lansia
*/
get_header();
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<!-- Lansia Section -->
<section class="lansia-section">
    <div class="container">

        <?php
        $kelas_list = ['1', '2', '3'];

        foreach ($kelas_list as $kelas) :
            $args = [
                'post_type'      => 'lansia',
                'posts_per_page' => -1,
                'meta_query'     => [
                    [
                        'key'     => 'kelas',
                        'value'   => $kelas,
                        'compare' => '=',
                    ]
                ],
                'orderby' => 'title',
                'order'   => 'ASC',
            ];
            $lansia_query = new WP_Query($args);

            if ($lansia_query->have_posts()) :
        ?>

        <!-- Kelas Tab -->
        <div class="lansia-kelas-block">
            <div class="kelas-header">
                <div class="kelas-badge">Kelas <?php echo esc_html($kelas); ?></div>
                <span class="kelas-count"><?php echo $lansia_query->found_posts; ?> Lansia</span>
            </div>

            <div class="lansia-grid">
                <?php while ($lansia_query->have_posts()) : $lansia_query->the_post(); ?>

                    <div class="lansia-card">
                        <div class="lansia-foto">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" loading="lazy">
                            <?php else : ?>
                                <div class="lansia-foto-placeholder">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="lansia-info">
                            <h3 class="lansia-nama"><?php the_title(); ?></h3>
                            <ul class="lansia-detail-list">
                                <li>
                                    <span class="lansia-label"><i class="fa-solid fa-venus-mars"></i> Jenis Kelamin</span>
                                    <span class="lansia-value"><?php echo esc_html(get_post_meta(get_the_ID(), 'jenis_kelamin', true)); ?></span>
                                </li>
                                <li>
                                    <span class="lansia-label"><i class="fa-solid fa-cake-candles"></i> Tempat, Tgl Lahir</span>
                                    <span class="lansia-value">
                                        <?php
                                        $tempat = get_post_meta(get_the_ID(), 'tempat_lahir', true);
                                        $tgl    = get_post_meta(get_the_ID(), 'tanggal_lahir', true);
                                        echo esc_html($tempat);
                                        if ($tempat && $tgl) echo ', ';
                                        if ($tgl) {
                                            $date = DateTime::createFromFormat('Y-m-d', $tgl);
                                            echo $date ? esc_html($date->format('d F Y')) : esc_html($tgl);
                                        }
                                        ?>
                                    </span>
                                </li>
                                <li>
                                    <span class="lansia-label"><i class="fa-solid fa-hourglass-half"></i> Umur</span>
                                    <span class="lansia-value">
                                        <?php
                                        $tgl_lahir = get_post_meta(get_the_ID(), 'tanggal_lahir', true);
                                        if ($tgl_lahir) {
                                            $birth = new DateTime($tgl_lahir);
                                            $today = new DateTime();
                                            $age   = $today->diff($birth)->y;
                                            echo esc_html($age) . ' Tahun';
                                        } else {
                                            echo esc_html(get_post_meta(get_the_ID(), 'umur', true));
                                        }
                                        ?>
                                    </span>
                                </li>
                                <li>
                                    <span class="lansia-label"><i class="fa-solid fa-location-dot"></i> Alamat</span>
                                    <span class="lansia-value"><?php echo esc_html(get_post_meta(get_the_ID(), 'alamat', true)); ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>

        <?php endif; endforeach; ?>

    </div>
</section>

<?php get_footer(); ?>