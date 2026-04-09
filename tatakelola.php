<?php
/*
Template Name: Tata Kelola
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
    <div class="container" style="max-width: 900px;">
        
        <!-- Organ Yayasan -->
        <div class="content-card">
            <h2>Organ Yayasan</h2>

            <!-- Badan Pembina -->
            <div class="bidang-section">
                <div class="bidang-header">
                    <i class="fa-solid fa-users"></i>
                    <h3>Badan Pembina</h3>
                </div>
                <div class="bidang-grid">
                    <?php
                    $args = [
                        'post_type' => 'organ',
                        'posts_per_page' => -1,
                        'meta_query' => [
                            [
                                'key'   => 'jenis_organ',
                                'value' => 'pembina'
                            ]
                        ]
                    ];

                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="bidang-card">
                            <p>
                                <b><?php the_field('jabatan'); ?> :</b>
                                <?php the_field('nama'); ?>
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <!-- Badan Pengawas -->
            <div class="bidang-section">
                <div class="bidang-header">
                    <i class="fa-solid fa-user-shield"></i>
                    <h3>Badan Pengawas</h3>
                </div>
                <div class="bidang-grid">
                    <?php
                    $args = [
                        'post_type' => 'organ',
                        'posts_per_page' => -1,
                        'meta_query' => [
                            [
                                'key'   => 'jenis_organ',
                                'value' => 'pengawas'
                            ]
                        ]
                    ];

                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="bidang-card">
                            <p>
                                <b><?php the_field('jabatan'); ?> :</b>
                                <?php the_field('nama'); ?>
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <!-- Pengurus Harian -->
            <div class="bidang-section">
                <div class="bidang-header">
                    <i class="fa-solid fa-user-tie"></i>
                    <h3>Pengurus Harian</h3>
                </div>
                <div class="bidang-grid">
                    <?php
                    $args = [
                        'post_type' => 'organ',
                        'posts_per_page' => -1,
                        'meta_query' => [
                            [
                                'key'   => 'jenis_organ',
                                'value' => 'harian'
                            ]
                        ]
                    ];

                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="bidang-card">
                            <p>
                                <b><?php the_field('jabatan'); ?> :</b>
                                <?php the_field('nama'); ?>
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <!-- Pengurus Bidang Humas, IT dan Dokumentasi -->
            <div class="bidang-section">
                <div class="bidang-header">
                    <i class="fa-solid fa-bullhorn"></i>
                    <h3>Pengurus Bidang Humas, IT dan Dokumentasi</h3>
                </div>
                <div class="bidang-grid">
                    <?php
                    $args = [
                        'post_type' => 'organ',
                        'posts_per_page' => -1,
                        'meta_query' => [
                            [
                                'key'   => 'jenis_organ',
                                'value' => 'humas'
                            ]
                        ]
                    ];

                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="bidang-card">
                            <p>
                                <b><?php the_field('jabatan'); ?> :</b>
                                <?php the_field('nama'); ?>
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <!-- Pengurus Bidang Pendidikan, Penelitian dan Pengembangan -->
            <div class="bidang-section">
                <div class="bidang-header">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <h3>Pengurus Bidang Pendidikan, Penelitian dan Pengembangan</h3>
                </div>
                <div class="bidang-grid">
                    <?php
                    $args = [
                        'post_type' => 'organ',
                        'posts_per_page' => -1,
                        'meta_query' => [
                            [
                                'key'   => 'jenis_organ',
                                'value' => 'pendidikan'
                            ]
                        ]
                    ];

                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="bidang-card">
                            <p>
                                <b><?php the_field('jabatan'); ?> :</b>
                                <?php the_field('nama'); ?>
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <!-- Pengurus Bidang Kesejahteraan dan Kesehatan -->
            <div class="bidang-section">
                <div class="bidang-header">
                    <i class="fa-solid fa-heart-pulse"></i>
                    <h3>Pengurus Bidang Kesejahteraan dan Kesehatan</h3>
                </div>
                <div class="bidang-grid">
                    <?php
                    $args = [
                        'post_type' => 'organ',
                        'posts_per_page' => -1,
                        'meta_query' => [
                            [
                                'key'   => 'jenis_organ',
                                'value' => 'kesehatan'
                            ]
                        ]
                    ];

                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="bidang-card">
                            <p>
                                <b><?php the_field('jabatan'); ?> :</b>
                                <?php the_field('nama'); ?>
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <!-- Pengurus Bidang Penggalangan Dana dan Kerjasama -->
            <div class="bidang-section">
                <div class="bidang-header">
                    <i class="fa-solid fa-handshake"></i>
                    <h3>Pengurus Bidang Penggalangan Dana dan Kerjasama</h3>
                </div>
                <div class="bidang-grid">
                    <?php
                    $args = [
                        'post_type' => 'organ',
                        'posts_per_page' => -1,
                        'meta_query' => [
                            [
                                'key'   => 'jenis_organ',
                                'value' => 'dana'
                            ]
                        ]
                    ];

                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="bidang-card">
                            <p>
                                <b><?php the_field('jabatan'); ?> :</b>
                                <?php the_field('nama'); ?>
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <!-- Pengurus Bidang Kawasan dan Sarana Prasarana -->
            <div class="bidang-section">
                <div class="bidang-header">
                    <i class="fa-solid fa-building"></i>
                    <h3>Pengurus Bidang Kawasan dan Sarana Prasarana</h3>
                </div>
                <div class="bidang-grid">
                    <?php
                    $args = [
                        'post_type' => 'organ',
                        'posts_per_page' => -1,
                        'meta_query' => [
                            [
                                'key'   => 'jenis_organ',
                                'value' => 'kawasan'
                            ]
                        ]
                    ];

                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="bidang-card">
                            <p>
                                <b><?php the_field('jabatan'); ?> :</b>
                                <?php the_field('nama'); ?>
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <!-- Penanggung Jawab Bidang Pelaksana Harian -->
            <div class="bidang-section">
                <div class="bidang-header">
                    <i class="fa-solid fa-user-tie"></i>
                    <h3>Bidang Pelaksana Harian</h3>
                </div>
                <div class="bidang-grid">
                    <?php
                    $args = [
                        'post_type' => 'organ',
                        'posts_per_page' => -1,
                        'meta_query' => [
                            [
                                'key'   => 'jenis_organ',
                                'value' => 'pj'
                            ]
                        ]
                    ];

                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="bidang-card">
                            <p>
                                <b><?php the_field('jabatan'); ?> :</b>
                                <?php the_field('nama'); ?>
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <!-- Operasional Luar Panti -->
            <div class="bidang-section">
                <div class="bidang-header">
                    <i class="fa-solid fa-handshake"></i>
                    <h3>Operasional Luar Panti</h3>
                </div>
                <div class="bidang-grid">
                    <?php
                    $args = [
                        'post_type' => 'organ',
                        'posts_per_page' => -1,
                        'meta_query' => [
                            [
                                'key'   => 'jenis_organ',
                                'value' => 'luar'
                            ]
                        ]
                    ];

                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="bidang-card">
                            <p>
                                <b><?php the_field('jabatan'); ?> :</b>
                                <?php the_field('nama'); ?>
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <!-- RT & Lingkungan -->
            <div class="bidang-section">
                <div class="bidang-header">
                    <i class="fa-solid fa-house"></i>
                    <h3>RT dan Lingkungan</h3>
                </div>
                <div class="bidang-grid">
                    <?php
                    $args = [
                        'post_type' => 'organ',
                        'posts_per_page' => -1,
                        'meta_query' => [
                            [
                                'key'   => 'jenis_organ',
                                'value' => 'lingkungan'
                            ]
                        ]
                    ];

                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="bidang-card">
                            <p>
                                <b><?php the_field('jabatan'); ?> :</b>
                                <?php the_field('nama'); ?>
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <!-- TU & Keuangan -->
            <div class="bidang-section">
                <div class="bidang-header">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <h3>TU dan Keuangan</h3>
                </div>
                <div class="bidang-grid">
                    <?php
                    $args = [
                        'post_type' => 'organ',
                        'posts_per_page' => -1,
                        'meta_query' => [
                            [
                                'key'   => 'jenis_organ',
                                'value' => 'uang'
                            ]
                        ]
                    ];

                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="bidang-card">
                            <p>
                                <b><?php the_field('jabatan'); ?> :</b>
                                <?php the_field('nama'); ?>
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <!-- Panti -->
            <div class="bidang-section">
                <div class="bidang-header">
                    <i class="fa-solid fa-house-medical"></i>
                    <h3>Panti</h3>
                </div>
                <div class="bidang-grid">
                    <?php
                    $args = [
                        'post_type' => 'organ',
                        'posts_per_page' => -1,
                        'meta_query' => [
                            [
                                'key'   => 'jenis_organ',
                                'value' => 'panti'
                            ]
                        ]
                    ];

                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="bidang-card">
                            <p>
                                <b><?php the_field('jabatan'); ?> :</b>
                                <?php the_field('nama'); ?>
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>

        <!-- Jaringan Kerja -->
        <div class="content-card gradient-card">
            <h2>Jaringan Kerja</h2>
            <div class="jaringan-section">
                <div class="jaringan-header">
                    <i class="fa-solid fa-building"></i>
                    <h3>Yayasan Wredha Mulya</h3>
                </div>
                <div class="jaringan-grid">
                    <div class="jaringan-card">
                        <i class="fa-solid fa-landmark" style="margin-left: 0.25rem; margin-right: 0.15rem;"></i>
                        <?php the_field('jaringan_kerja_1'); ?>
                    </div>
                    <div class="jaringan-card">
                        <i class="fa-solid fa-hospital"></i>
                        <?php the_field('jaringan_kerja_2'); ?>
                    </div>
                    <div class="jaringan-card">
                        <i class="fa-solid fa-users"></i>
                        <?php the_field('jaringan_kerja_3'); ?>
                    </div>
                    <div class="jaringan-card">
                        <i class="fa-solid fa-user" style="margin-left: 0.38rem; margin-right: 0.28rem;"></i>
                        <?php the_field('jaringan_kerja_4'); ?>
                    </div>
                    <div class="jaringan-card">
                        <i class="fa-solid fa-school"></i>
                        <?php the_field('jaringan_kerja_5'); ?>
                    </div>
                    <div class="jaringan-card">
                        <i class="fa-solid fa-user-tie" style="margin-left: 0.38rem; margin-right: 0.28rem;"></i>
                        <?php the_field('jaringan_kerja_6'); ?>
                    </div>
                    <div class="jaringan-card">
                        <i class="fa-solid fa-hands-holding-circle"></i>
                        <?php the_field('jaringan_kerja_7'); ?>
                    </div>
                    <div class="jaringan-card">
                        <i class="fa-solid fa-hand-holding-dollar" style="margin-left: 0.1rem; margin-right: 0.1rem;"></i>
                        <?php the_field('jaringan_kerja_8'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Strategi Pelaksanaan Program -->
        <div class="content-card">
            <h2>Strategi Pelaksanaan Program</h2>
            <div class="strategi-container">
                <div class="strategi-item">
                    <div class="strategi-number">01</div>
                    <div class="strategi-content">
                        <i class="fa-solid fa-handshake-angle"></i>
                        <?php the_field('strategi_pelaksanaan_1'); ?>
                    </div>
                </div>
                <div class="strategi-item">
                    <div class="strategi-number">02</div>
                    <div class="strategi-content">
                        <i class="fa-solid fa-bullhorn" style="margin-left: 0.15rem; margin-right: 0.25rem;"></i>
                        <?php the_field('strategi_pelaksanaan_2'); ?>
                    </div>
                </div>
                <div class="strategi-item">
                    <div class="strategi-number">03</div>
                    <div class="strategi-content">
                        <i class="fa-solid fa-chart-line" style="margin-left: 0.15rem; margin-right: 0.25rem;"></i>
                        <?php the_field('strategi_pelaksanaan_3'); ?>
                    </div>
                </div>
                <div class="sistem-kerja">
                    <h3><i class="fa-solid fa-gears"></i> Sistem Kerja</h3>
                    <div class="sistem-grid">
                        <div class="sistem-box">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span><?php the_field('sistem_kerja_1'); ?></span>
                        </div>
                        <div class="sistem-box">
                            <i class="fa-solid fa-magnifying-glass-chart"></i>
                            <span><?php the_field('sistem_kerja_2'); ?></span>
                        </div>
                        <div class="sistem-box">
                            <i class="fa-solid fa-clipboard-check"></i>
                            <span><?php the_field('sistem_kerja_3'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <!-- Sumber Dana -->
        <div class="content-card gradient-card">
            <h2>Sumber Dana</h2>
            <div class="dana-container">
                <div class="dana-section">
                    <div class="dana-header">
                        <i class="fa-solid fa-building-circle-check"></i>
                        <h3>Persewaan</h3>
                    </div>
                    <div class="dana-items">
                        <div class="dana-item">
                            <i class="fa-solid fa-hotel" style="margin-left: 0.17rem; margin-right: 0.23rem;"></i>
                            <span><?php the_field('sumber_dana_persewaan_1'); ?></span>
                        </div>
                        <div class="dana-item">
                            <i class="fa-solid fa-users-rectangle"></i>
                            <span><?php the_field('sumber_dana_persewaan_2'); ?></span>
                        </div>
                        <div class="dana-item">
                            <i class="fa-solid fa-house-medical" style="margin-left: 0.1rem; margin-right: 0.1rem;"></i>
                            <span><?php the_field('sumber_dana_persewaan_3'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="dana-section">
                    <div class="dana-header">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                        <h3>Sumbangan Masyarakat</h3>
                    </div>
                    <div class="dana-items">
                        <div class="dana-item">
                            <i class="fa-solid fa-gift"></i>
                            <span><?php the_field('sumber_dana_sumbangan_masyarakat'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>