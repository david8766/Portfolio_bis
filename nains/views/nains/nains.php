<?php include( 'views/inc/header.php' ); ?>
<section role="section">
    <header>
        <h1 id=titre>Les nains</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-4"><img src="images/nains.jpg" alt="nain"></div>
                <div class="col-lg-4 cadre_1" id="lien">
                <?php
                    if( isset( $nains ) && is_array( $nains ) && count( $nains )>0 ) {
                        echo '<ul style="list-style-type: none;">';
                        foreach( $nains as $nain ) {
                            echo '<li><a href="index.php?c=nain&a=showOne&id=' . $nain['n_id'] . '" title="' . $nain['n_nom'] . '">' . $nain['n_nom'] . '</a></li>';
                        }
                        echo '</ul>';
                    }
                    else {
                    echo 'erreur lors de l\'affichage des nains';
                    }
                ?>
                </div>
            <div class="col-lg-4" id="img_nain"><img src="images/nains2.jpg" alt="nain"></div>
        </div>
    </div>
</section>
<?php include( 'views/inc/footer.php' ); ?>