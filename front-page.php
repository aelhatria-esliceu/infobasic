<?php
    get_header();
?>
    <div class="jumbotron jumbo-front">
        <h1>Bienvenidos al mundo de Team Cherry</h1>
        <p>Explora Hollow Knight, Silksong y la futura expansión Sea of Sorrow</p>
    </div>
    <div class="container mt-4">
        <div class="row">
            
            <!-- Hollow Knight -->
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= get_theme_file_uri("inc/img/hollow-knight_upscaled.png") ?>" class="card-img-top" alt="Hollow Knight">
                    <div class="card-body">
                        <h5 class="card-title">Hollow Knight</h5>
                        <p class="card-text">Descubre Hallownest, un reino subterráneo lleno de misterio y aventuras. Vive la épica historia del Caballero.</p>
                        <a href="<?= site_url("hollow-knight") ?>" class="btn btn-primary">Saber más</a>
                    </div>
                </div>
            </div>

            <!-- Silksong -->
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= get_theme_file_uri("inc/img/silksong_upscaled.png") ?>" class="card-img-top" alt="Silksong">
                    <div class="card-body">
                        <h5 class="card-title">Silksong</h5>
                        <p class="card-text">Acompaña a Hornet en su nueva aventura a través de un reino completamente nuevo. Acción, exploración y secretos te esperan.</p>
                        <a href="<?= site_url("silksong") ?>" class="btn btn-primary">Saber más</a>
                    </div>
                </div>
            </div>

            <!-- Sea of Sorrow -->
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= get_theme_file_uri("inc/img/sea-of-sorrow_upscaled.png") ?>" class="card-img-top" alt="Sea of Sorrow">
                    <div class="card-body">
                        <h5 class="card-title">Sea of Sorrow</h5>
                        <p class="card-text">Explora la nueva expansión de Silksong, llena de misteriosas zonas marinas y secretos que esperan ser descubiertos.</p>
                        <a href="<?= site_url("sea-of-sorrow") ?>" class="btn btn-primary">Saber más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>