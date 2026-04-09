<?php
/*
Template Name: Profil
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
        
        <!-- Tentang Kami -->
        <div class="content-card">
            <h2>Tentang Kami</h2>
            <p style="font-size: 1.125rem; line-height: 1.8;">
                <?php the_field('tentang_kami'); ?>
            </p>
        </div>

        <!-- Visi -->
        <div class="content-card gradient-card">
            <h2>Visi</h2>
            <p style="font-size: 1.125rem; line-height: 1.8;">
                <?php the_field('visi'); ?>
            </p>
        </div>

        <!-- Misi -->
        <div class="content-card">
            <h2>Misi</h2>
            <ul class="mission-tujuan-list">
                <li class="mission-tujuan-item">
                    <div class="mission-tujuan-icon gray">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <div class="mission-tujuan-content">
                        <?php the_field('misi1'); ?>
                    </div>
                </li>
        
                <li class="mission-tujuan-item">
                    <div class="mission-tujuan-icon gray">
                        <i class="fa-solid fa-seedling"></i>
                    </div>
                    <div class="mission-tujuan-content">
                        <?php the_field('misi2'); ?>
                    </div>
                </li>
        
                <li class="mission-tujuan-item">
                    <div class="mission-tujuan-icon gray">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <div class="mission-tujuan-content">
                        <?php the_field('misi3'); ?>
                    </div>
                </li>
        
                <li class="mission-tujuan-item">
                    <div class="mission-tujuan-icon gray">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <div class="mission-tujuan-content">
                        <?php the_field('misi4'); ?>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Slogan -->
        <div class="content-card gradient-card">
            <h2>Slogan</h2>
            <p style="font-size: 1.125rem; line-height: 1.8;"><?php the_field('sloganutama'); ?></p>
            <br>
            <ul class="slogan-list">
                <li class="slogan-item">
                    <div class="slogan-icon">
                        <i class="fa-solid fa-face-smile"></i>
                    </div>
                    <div class="slogan-content">
                        <?php the_field('slogan1'); ?>
                    </div>
                </li>
            
                <li class="slogan-item">
                    <div class="slogan-icon">
                        <i class="fa-solid fa-hands-praying"></i>
                    </div>
                    <div class="slogan-content">
                        <?php the_field('slogan2'); ?>
                    </div>
                </li>
            
                <li class="slogan-item">
                    <div class="slogan-icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <div class="slogan-content">
                        <?php the_field('slogan3'); ?>
                    </div>
                </li>
            
                <li class="slogan-item">
                    <div class="slogan-icon">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="slogan-content">
                        <?php the_field('slogan4'); ?>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Tujuan -->
        <div class="content-card">
            <h2>Tujuan</h2>
            <ul class="mission-tujuan-list">
                <li class="mission-tujuan-item">
                    <div class="mission-tujuan-icon gray">
                        <i class="fa-solid fa-person-rays"></i>
                    </div>
                    <div class="mission-tujuan-content">
                        <?php the_field('tujuan1'); ?>
                    </div>
                </li>
            
                <li class="mission-tujuan-item">
                    <div class="mission-tujuan-icon gray">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <div class="mission-tujuan-content">
                        <?php the_field('tujuan2'); ?>
                    </div>
                </li>
            
                <li class="mission-tujuan-item">
                    <div class="mission-tujuan-icon gray">
                        <i class="fa-solid fa-house-user"></i>
                    </div>
                    <div class="mission-tujuan-content">
                        <?php the_field('tujuan3'); ?>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Logo -->
        <div class="content-card gradient-card">
            <h2>Logo</h2>
            <table>
                <tr>
                    <td>
                        <?php the_field('logo'); ?>
                    </td>
                    <td><img class="logo-item" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.png" alt="logo"></td>
                </tr>
            </table>
        </div>

        <!-- Gagasan/Ide -->
        <div class="content-card">
            <h2>Gagasan/Ide</h2>
            <ul class="all-list">
                <li><i id="panah" class="fa-solid fa-caret-right"></i>
                    <p class="content-card-p"> <?php the_field('gagasanide1'); ?></p>
                </li>
                <li><i id="panah" class="fa-solid fa-caret-right"></i>
                    <p class="content-card-p"> <?php the_field('gagasanide2'); ?></p>
                </li>
            </ul>
        </div>

        <!-- Pendiri -->
        <div class="content-card gradient-card">
            <h2>Pendiri</h2>
            <ol class="all-list">
                <li><i class="fa-solid fa-user"></i>
                    <p class="content-card-p2"><?php the_field('pendiri1'); ?></p>
                </li>
                <li><i class="fa-solid fa-user"></i>
                    <p class="content-card-p2"><?php the_field('pendiri2'); ?></p>
                </li>
                <li><i class="fa-solid fa-user"></i>
                    <p class="content-card-p2"><?php the_field('pendiri3'); ?></p>
                </li>
                <li><i class="fa-solid fa-user"></i>
                    <p class="content-card-p2"><?php the_field('pendiri4'); ?></p>
                </li>
            </ol>
        </div>
        
    </div>
</section>

<?php get_footer(); ?>
