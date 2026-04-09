<?php
function wredha_assets() {

    // CSS utama
    wp_enqueue_style(
        'wredha-style',
        get_template_directory_uri() . '/assets/css/style.css'
    );

    // Font Awesome
    wp_enqueue_style(
        'fa',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css'
    );

    // JS
    wp_enqueue_script(
        'wredha-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'wredha_assets');

// Buat upload Unit Pelayanan Sosial
function ups_post_type() {
    register_post_type('ups', [
        'labels' => [
            'name'          => 'Unit Pelayanan Sosial',
            'singular_name' => 'UPS',
        ],
        'public'        => true,
        'menu_icon'     => 'dashicons-building',
        'has_archive'   => true,
        'supports'      => ['title', 'editor', 'thumbnail'],
        'rewrite'       => ['slug' => 'unit-pelayanan-sosial'],
    ]);
}
add_action('init', 'ups_post_type');

// Buat upload Organ Yayasan
function organ_post_type() {
    register_post_type('organ', [
        'labels' => [
            'name'          => 'Organ Yayasan',
            'singular_name' => 'OrganYayasan',
        ],
        'public'        => true,
        'menu_icon'     => 'dashicons-groups',
        'has_archive'   => true,
        'supports'      => ['title', 'editor', 'thumbnail'],
        'rewrite'       => ['slug' => 'organyayasan'],
    ]);
}
add_action('init', 'organ_post_type');

// Buat upload Galeri
function galeri_cpt() {
    register_post_type('galeri',
        array(
            'labels' => array(
                'name' => 'Galeri',
                'singular_name' => 'Foto Galeri'
            ),
            'public' => true,
            'menu_icon' => 'dashicons-format-gallery',
            'supports' => array('title', 'thumbnail'),
        )
    );
}
add_action('init', 'galeri_cpt');

// Buat kategori Galeri
function create_galeri_taxonomy() {
    $labels = array(
        'name'              => 'Kategori Galeri',
        'singular_name'     => 'Kategori',
        'search_items'      => 'Cari Kategori',
        'all_items'         => 'Semua Kategori',
        'parent_item'       => 'Kategori Induk',
        'parent_item_colon' => 'Kategori Induk:',
        'edit_item'         => 'Edit Kategori',
        'update_item'       => 'Update Kategori',
        'add_new_item'      => 'Tambah Kategori Baru',
        'new_item_name'     => 'Nama Kategori Baru',
        'menu_name'         => 'Kategori Galeri',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'kategori-galeri'),
        'show_in_rest'      => true,
    );

    register_taxonomy('kategori_galeri', array('galeri'), $args);
}
add_action('init', 'create_galeri_taxonomy');

// Menambahkan kategori default saat tema diaktifkan
function insert_default_galeri_categories() {
    if (!term_exists('panti-wredha-mulya', 'kategori_galeri')) {
        wp_insert_term(
            'Panti Wredha Mulya',
            'kategori_galeri',
            array('slug' => 'panti-wredha-mulya')
        );
    }
    
    if (!term_exists('paguyuban-lansia', 'kategori_galeri')) {
        wp_insert_term(
            'Paguyuban Lansia Wredha Mulya',
            'kategori_galeri',
            array('slug' => 'paguyuban-lansia')
        );
    }
    
    if (!term_exists('pembinaan-posyandu', 'kategori_galeri')) {
        wp_insert_term(
            'Pembinaan Pos Yandu Lansia',
            'kategori_galeri',
            array('slug' => 'pembinaan-posyandu')
        );
    }
    
    if (!term_exists('homecare-lansia', 'kategori_galeri')) {
        wp_insert_term(
            'Homecare Lansia',
            'kategori_galeri',
            array('slug' => 'homecare-lansia')
        );
    }
    
    if (!term_exists('sekolah-lansia', 'kategori_galeri')) {
        wp_insert_term(
            'Sekolah Lansia Wredha Mulya',
            'kategori_galeri',
            array('slug' => 'sekolah-lansia')
        );
    }
}
add_action('after_switch_theme', 'insert_default_galeri_categories');

// Custom Post Type: Lansia
function lansia_post_type() {
    register_post_type('lansia', [
        'labels' => [
            'name'               => 'Data Lansia',
            'singular_name'      => 'Lansia',
            'add_new_item'       => 'Tambah Lansia',
            'edit_item'          => 'Edit Data Lansia',
            'new_item'           => 'Lansia Baru',
            'view_item'          => 'Lihat Data Lansia',
            'search_items'       => 'Cari Lansia',
            'not_found'          => 'Lansia tidak ditemukan',
        ],
        'public'        => true,
        'show_in_menu'  => true,
        'menu_icon'     => 'dashicons-admin-users',
        'has_archive'   => false,
        'supports'      => ['title', 'thumbnail'],   // title = Nama Lansia, thumbnail = foto
        'rewrite'       => ['slug' => 'lansia'],
    ]);
}
add_action('init', 'lansia_post_type');

// Meta Box: Detail Lansia (Kelas, JK, TTL, Alamat)
function lansia_add_meta_boxes() {
    add_meta_box(
        'lansia_detail',
        'Detail Lansia',
        'lansia_meta_box_html',
        'lansia',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'lansia_add_meta_boxes');

function lansia_meta_box_html($post) {
    wp_nonce_field('lansia_save_meta', 'lansia_nonce');

    $kelas         = get_post_meta($post->ID, 'kelas', true);
    $jenis_kelamin = get_post_meta($post->ID, 'jenis_kelamin', true);
    $tempat_lahir  = get_post_meta($post->ID, 'tempat_lahir', true);
    $tanggal_lahir = get_post_meta($post->ID, 'tanggal_lahir', true);
    $alamat        = get_post_meta($post->ID, 'alamat', true);
    ?>
    <style>
        .lansia-meta-table { width: 100%; border-collapse: collapse; }
        .lansia-meta-table th { text-align: left; padding: 8px 10px; width: 160px; font-weight: 600; color: #1d2327; vertical-align: middle; }
        .lansia-meta-table td { padding: 6px 10px; }
        .lansia-meta-table input, .lansia-meta-table select, .lansia-meta-table textarea {
            width: 100%; padding: 6px 10px; border: 1px solid #d1d5db; border-radius: 6px; font-size: 14px;
        }
    </style>

    <table class="lansia-meta-table">
        <tr>
            <th>Kelas</th>
            <td>
                <select name="kelas">
                    <option value="">-- Pilih Kelas --</option>
                    <option value="1" <?php selected($kelas, '1'); ?>>Kelas 1</option>
                    <option value="2" <?php selected($kelas, '2'); ?>>Kelas 2</option>
                    <option value="3" <?php selected($kelas, '3'); ?>>Kelas 3</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>
                <select name="jenis_kelamin">
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki" <?php selected($jenis_kelamin, 'Laki-laki'); ?>>Laki-laki</option>
                    <option value="Perempuan" <?php selected($jenis_kelamin, 'Perempuan'); ?>>Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td><input type="text" name="tempat_lahir" value="<?php echo esc_attr($tempat_lahir); ?>" placeholder="cth: Yogyakarta"></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><input type="date" name="tanggal_lahir" value="<?php echo esc_attr($tanggal_lahir); ?>">
                <small style="color:#6b7280;">Umur akan dihitung otomatis dari tanggal lahir ini.</small>
            </td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><textarea name="alamat" rows="3" placeholder="Alamat lengkap lansia..."><?php echo esc_textarea($alamat); ?></textarea></td>
        </tr>
    </table>
    <?php
}

function lansia_save_meta($post_id) {
    if (!isset($_POST['lansia_nonce']) || !wp_verify_nonce($_POST['lansia_nonce'], 'lansia_save_meta')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    $fields = ['kelas', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'alamat'];
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post_lansia', 'lansia_save_meta');

// Buat Thumbnail di Home
add_theme_support('post-thumbnails');

function mytheme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_setup');