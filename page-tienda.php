<?php
    get_header();
?>
    <div class="jumbotron jumbo-tienda">
        <h1>Compra tu ropa online</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="<?= get_theme_file_uri("inc/img/Imagen (8).jpg") ?>" alt="" srcset="">
                    <div class="card-body">
                        <h5>Camiseta a medida</h5>
                        <a href="<?= site_url("camisetas") ?>" class="btn btn-primary">Ir...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="<?= get_theme_file_uri("inc/img/Imagen (9).jpg") ?>" alt="" srcset="">
                    <div class="card-body">
                        <h5>Tejanos flexibles</h5>
                        <a href="<?= site_url("tejanos") ?>" class="btn btn-primary">Ir...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>