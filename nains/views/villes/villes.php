<?php include( 'views/inc/header.php' ); ?>
<section id="ville" role="section">
    <header>
        <h1 id="titre">Les villes</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 cadre_1" id="lien">
                <?php
                if( isset( $villes ) && is_array( $villes ) && count( $villes )>0 ) {
                    echo '<ul>';
                    foreach( $villes as $ville ) {
                        echo '<li><a href="index.php?c=ville&a=showOne&id=' . $ville['v_id'] . '" title="' . $ville['v_nom'] . '">' . $ville['v_nom'] . '</a></li>';
                    }
                    echo '</ul>';
                } else {
                    echo 'erreur lors de l\'affichage des villes';
                }
                ?>
            </div>
        </div>
    </div>

</section>
<?php include( 'views/inc/footer.php' ); ?>