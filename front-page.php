<?php
    get_header();
?>
    <div class="jumbotron jumbo-front">
        <h1>Bienvenidos a nuestra tienda</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= get_theme_file_uri("inc/img/Imagen (5).jpg") ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Blog</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="<?= site_url("blog") ?>" class="btn btn-primary">Ir al blog</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= get_theme_file_uri("inc/img/Imagen (6).jpg") ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tienda</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="<?= site_url("tienda") ?>" class="btn btn-primary">Tienda</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= get_theme_file_uri("inc/img/Imagen (7).jpg") ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ofertas</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="<?= site_url("ofertas") ?>" class="btn btn-primary">Ofertas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>