<?php include( 'views/inc/header.php' ); ?>
<section id="groupe" role="section">
    <header>
        <h1 id="titre">Les groupes</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 cadre_1" id="lien">
            <?php
            if( isset( $groupes ) && is_array( $groupes ) && count( $groupes )>0 ) {
                echo '<ul style="list-style-type:none">';
                foreach( $groupes as $groupe ) {
                    echo '<li><a href="index.php?c=groupe&a=showOne&id=' . $groupe['g_id'] . '" title="' . $groupe['g_id'] . '">Groupe n °' . $groupe['g_id'] . '</a></li>';
                }
                echo '</ul>';
            } else {
                echo 'erreur lors de l\'affichage des groupes';
            }
            ?>
            </div>
        </div>
    </div>
</section>
<?php include( 'views/inc/footer.php' ); ?>