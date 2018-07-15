<?php include( 'views/inc/header.php' ); ?>
<section  role="section">
    <header>
        <h1 id="titre">Fiche de la ville</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-8"><img src="images/ville.jpg" alt="ville"></div>
            <div class="col-lg-4 cadre_2" id="lien">
                <?php
                if( isset( $villeObj ) && is_object( $villeObj ) && get_class( $villeObj )=='Ville' ) {
                    echo 'Nom : ' . $villeObj->getNom();
                    echo '<br>Superficie : ' . $villeObj->getSuperficie() . ' km²';
                    echo '<br>Liste nains originaires de cette ville : <ul style="list-style-type:none">';
                    foreach( $nains as $nain ) {
                        echo '<li><a href="index.php?c=nain&a=showOne&id=' . $nain['n_id'] . '" title="' . $nain['n_nom'] . '">' . $nain['n_nom'] . '</a></li>';
                    }
                    echo '</ul>';
                    echo '<br>Liste tavernes de la ville : <ul style="list-style-type:none">';
                    foreach( $tavernes as $taverne ) {
                        echo '<li><a href="index.php?c=taverne&a=showOne&id=' . $taverne['t_id'] . '" title="' . $taverne['t_nom'] . '">' . $taverne['t_nom'] . '</a></li>';
                    }
                    echo '</ul>';
                    echo '<br>Liste tunnels de la ville : <ul style="list-style-type:none">';
                    foreach( $tunnels as $tunnel ) {
                        if( $tunnel['v_depart']==$villeObj->getNom() ) {
                            $ville = $tunnel['v_arrivee'];
                            $id_ville = $tunnel['v_arrivee_id'];
                        } else {
                            $ville = $tunnel['v_depart'];
                            $id_ville = $tunnel['v_depart_id'];
                        }

                        if( $tunnel['t_progres']==100 ) {
                            echo '<li>Tunnel vers <a href="index.php?c=ville&a=showOne&id=' . $id_ville . '" title="' . $ville . '">' . $ville . '</a> : Ouvert</li>';
                        } else {
                            echo '<li>Tunnel vers <a href="index.php?c=ville&a=showOne&id=' . $id_ville . '" title="' . $ville . '">' . $ville . '</a> : ' . $tunnel['t_progres'] . '%</li>';
                        }
                    }
                    echo '</ul>';
                } else {
                    echo 'erreur: aucune ville selectionnée';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php include( 'views/inc/footer.php' ); ?>