<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?> Yayasan Wredha Mulya</title>

    <?php wp_head(); ?>
</head>
<body>

<header id="header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <div class="logo-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"></div>
                <div class="logo-text">
                    <h1>Yayasan Wredha Mulya</h1>
                    <p>Daerah Istimewa Yogyakarta</p>
                </div>
            </div>
            <nav class="desktop-nav">
                <a href="<?php echo home_url('/'); ?>" 
                class="<?php echo is_front_page() ? 'active' : ''; ?>">
                    Beranda
                </a>

                <a href="<?php echo site_url('/profil'); ?>" 
                class="<?php echo is_page('profil') ? 'active' : ''; ?>">
                    Profil
                </a>

                <a href="<?php echo site_url('/tata-kelola'); ?>" 
                class="<?php echo is_page('tata-kelola') ? 'active' : ''; ?>">
                    Tata Kelola
                </a>

                <a href="<?php echo site_url('/data-lansia'); ?>" 
                class="<?php echo is_page('data-lansia') ? 'active' : ''; ?>">
                    Lansia
                </a>

                <a href="<?php echo site_url('/unit-pelayanan-sosial'); ?>" 
                class="<?php echo ( is_post_type_archive('ups') || is_singular('ups') ) ? 'active' : ''; ?>">
                    UPS
                </a>

                <a href="<?php echo site_url('/berita-dan-kegiatan'); ?>" 
                class="<?php echo ( is_page('berita-dan-kegiatan') || is_singular('post') ) ? 'active' : ''; ?>">
                    Berita
                </a>

                <a href="<?php echo site_url('/galeri'); ?>" 
                class="<?php echo is_page('galeri') ? 'active' : ''; ?>">
                    Galeri
                </a>

                <a href="<?php echo site_url('/kontak'); ?>" 
                class="<?php echo is_page('kontak') ? 'active' : ''; ?>">
                    Kontak
                </a>
            </nav>
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <nav>
        <a href="<?php echo home_url('/'); ?>" 
        class="<?php echo is_front_page() ? 'active' : ''; ?>">
            Beranda
        </a>

        <a href="<?php echo site_url('/profil'); ?>" 
        class="<?php echo is_page('profil') ? 'active' : ''; ?>">
            Profil
        </a>

        <a href="<?php echo site_url('/tata-kelola'); ?>" 
        class="<?php echo is_page('tata-kelola') ? 'active' : ''; ?>">
            Tata Kelola
        </a>

        <a href="<?php echo site_url('/data-lansia'); ?>" 
        class="<?php echo is_page('data-lansia') ? 'active' : ''; ?>">
            Lansia
        </a>

        <a href="<?php echo site_url('/unit-pelayanan-sosial'); ?>" 
        class="<?php echo ( is_post_type_archive('ups') || is_singular('ups') ) ? 'active' : ''; ?>">
            UPS
        </a>

        <a href="<?php echo site_url('/berita-dan-kegiatan'); ?>" 
        class="<?php echo ( is_page('berita-dan-kegiatan') || is_singular('post') ) ? 'active' : ''; ?>">
            Berita
        </a>

        <a href="<?php echo site_url('/galeri'); ?>" 
        class="<?php echo is_page('galeri') ? 'active' : ''; ?>">
            Galeri
        </a>

        <a href="<?php echo site_url('/kontak'); ?>" 
        class="<?php echo is_page('kontak') ? 'active' : ''; ?>">
            Kontak
        </a>
    </nav>
</div>
