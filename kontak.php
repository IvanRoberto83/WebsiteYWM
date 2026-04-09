<?php
/*
Template Name: Kontak
*/
get_header();
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<!-- Contact Section -->
<section class="content-section">
    <div class="container" style="max-width: 1000px;">
        
        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-info">
                <h2>Informasi Kontak</h2>
                
                <div class="contact-item">
                    <div class="contact-icon-1">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="contact-details">
                        <h3>Alamat</h3>
                        <?php the_field('alamat'); ?>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="contact-details">
                        <h3>Telepon</h3>
                        <?php the_field('telepon'); ?>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="contact-details">
                        <h3>Email</h3>
                        <?php the_field('email'); ?>
                    </div>
                </div>

                <h3 style="margin-top: 2rem; margin-bottom: 1rem; color: #273F4F;">Media Sosial</h3>
                <div class="social-links">
                    <a href="<?php the_field('instagram_url'); ?>" class="social-link instagram">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="logo_instagram">
                    </a>
                    <div class="contact-details">
                        <?php the_field('instagram'); ?>
                    </div>
                </div>
                <div class="social-links">
                    <a href="<?php the_field('tiktok_url'); ?>" class="social-link instagram">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tiktok.png" alt="logo_tiktok">
                    </a>
                    <div class="contact-details">
                        <?php the_field('tiktok'); ?>
                    </div>
                </div>
                <div class="social-links">
                    <a href="<?php the_field('facebook_url'); ?>" class="social-link instagram">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="logo_instagram">
                    </a>
                    <div class="contact-details">
                        <?php the_field('facebook'); ?>
                    </div>
                </div>
            </div>

            <!-- Pendaftaran & Donasi -->
            <div class="contact-info">
                <h2>Pendaftaran</h2>
                <div class="contact-details">
                    <h3>Syarat & Kriteria</h3>
                    <ul class="contact-details-list">
                        <?php the_field('syarat_kriteria'); ?>
                    </ul>
                    <br>
                    <center>
                        <h3>Berbagi For YWM</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/qris.JPG" alt="qris" width="125px">
                        <p style="margin-top: 0.4rem;"><?php the_field('no_rekening'); ?></p>
                        <p><?php the_field('nama_rekening'); ?></p>
                    </center>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-info">
                <h2>Kirim Pesan</h2>
                <form id="contactForm" action="https://formspree.io/f/xpqjdger" method="POST">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" placeholder="Nama Anda" required>
                    </div>
                
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email Anda" required>
                    </div>
                
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda..." required></textarea>
                    </div>
                
                    <button type="submit" class="btn-submit">Kirim Pesan</button>
                </form>                    
            </div>
        </div>

        <!-- Donasi Info -->
        <div class="contact-info">
            <h2>Berbagi Peduli Wredha Mulya</h2>
            <div class="contact-details">
                <?php the_field('deskripsi_berbagi'); ?>
                
                <h3 style="margin-bottom: 0.5rem;">Kebutuhan Panti:</h3>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.5rem; margin-bottom: 1rem;">
                    <?php the_field('list_kebutuhan'); ?>
                </div>
            </div>
        </div>

        <br>
        <br>

        <!-- Map Placeholder -->
        <div class="map-container">
            <iframe 
                src="<?php the_field('link_maps'); ?>"
                width="100%" 
                height="350"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>
</section>

<?php get_footer(); ?>
