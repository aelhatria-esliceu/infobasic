<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Vuelve al inicio</p>
                <a href="home">Home</a>
            </div>
            <div class="col-md-3">
                <?php
                    wp_nav_menu( array(
                    "theme_location"  => "infobasic_footer_interno",
                    ) );
                ?>
            </div>
            <div class="col-md-3">
                <?php
                    wp_nav_menu( array(
                    "theme_location"  => "infobasic_footer_externo",
                    ) );
                ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>