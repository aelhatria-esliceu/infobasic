<?php
get_header();
?>
<?php
    while (have_posts()) {
        the_post();
        $thumb_url = get_theme_file_uri('inc/img/sea-of-sorrow_without_text_upscaled.png');
?>
    <div class="jumbotron jumbo-game" style="background-image: url('<?= $thumb_url ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="overlay">
            <h1 class="text-light"><?= the_title() ?></h1>
            <p class="text-light"><?= get_the_excerpt() ?></p>
            <a href="<?= site_url('/hollow-knight') ?>" class="btn btn-primary">Volver a Hollow Knight</a>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <h2>Acerca de <?= the_title() ?></h2>
                <p><?= the_content() ?></p>
            </div>
            <div class="col-md-4">
                <!-- Hollow Knight -->
                <div class="card mb-3">
                    <img src="<?= get_theme_file_uri('inc/img/hollow-knight_upscaled.png') ?>" class="card-img-top" alt="Hollow Knight">
                    <div class="card-body">
                        <h5 class="card-title">Hollow Knight</h5>
                        <p class="card-text">Descubre Hallownest, un reino subterráneo lleno de misterio y aventuras.</p>
                        <a href="<?= site_url('/hollow-knight') ?>" class="btn btn-primary">Ver Hollow Knight</a>
                    </div>
                </div>

                <!-- Silksong -->
                <div class="card">
                    <img src="<?= get_theme_file_uri('inc/img/silksong_upscaled.png') ?>" class="card-img-top" alt="Silksong">
                    <div class="card-body">
                        <h5 class="card-title">Silksong</h5>
                        <p class="card-text">Acompaña a Hornet en su nueva aventura por un reino desconocido.</p>
                        <a href="<?= site_url('/silksong') ?>" class="btn btn-primary">Ver Silksong</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
<?php
get_footer();
?>