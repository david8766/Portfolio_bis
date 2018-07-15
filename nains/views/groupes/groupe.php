<?php include( 'views/inc/header.php' ); ?>
<section role="section">
    <header>
        <h1 id="titre">Fiche du groupe</h1>
    </header>
    <div class="container" >
        <div class="row">
            <div class="col-lg-8"><img src="images/nains7.png" alt="nains"></div>
            <div class="col-lg-4 cadre_2" id="lien">
                <?php
                if( isset( $groupeObj ) && is_object( $groupeObj ) && get_class( $groupeObj )=='Groupe' ) {
                    echo 'Groupe n° : ' . $groupeObj->getId();
                    echo '<br>Liste des  nains du groupe : <ul>';
                    foreach( $nains as $nain ) {
                        echo '<li><a href="index.php?c=nain&a=showOne&id=' . $nain['n_id'] . '" title="' . $nain['n_nom'] . '">' . $nain['n_nom'] . '</a></li>';
                    }
                    echo '</ul>';
                    if( !is_null( $groupe['t_id'] ) ) {
                        echo '<br>Ils boivent dans la taverne : <a href="index.php?c=taverne&a=showOne&id=' . $groupe['t_id'] . '" title="' . $groupe['t_nom'] . '">' . $groupe['t_nom'] . '</a>';
                    } else {
                        echo '<br>Ils ne boivent dans aucune taverne';
                    }

                    if( $tunnel['t_progres']==100 ) {
                        $travail = 'Ils entretiennent';
                    } else {
                        $travail = 'Ils creusent';
                    }
                    echo '<br>' . $travail . ' de ' . $groupeObj->getDebuttravail() . ' à ' . $groupeObj->getFintravail() . ' le tunnel de <a href="index.php?c=ville&a=showOne&id=' . $tunnel['v_depart_id'] . '" title="' . $tunnel['v_depart'] . '">' . $tunnel['v_depart'] . '</a> à <a href="index.php?c=ville&a=showOne&id=' . $tunnel['v_arrivee_id'] . '" title="' . $tunnel['v_arrivee'] . '">' . $tunnel['v_arrivee'] . '</a> (' . $tunnel['t_progres'] . '%)';
                } else {
                    echo 'erreur: aucun groupe sélectionné';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<br>
<hr>
<br>
<aside role="aside">
    <div class="container" >
        <div class="row">
            <div class="col-lg-12 cadre_2">
            <?php
                if( isset( $_SESSION['message'] ) ) {
                    echo $_SESSION['message'];
                    unset( $_SESSION['message'] );
                }
            ?>
                <form class="form-group" action="index.php?c=groupe&a=modif&id=<?php echo $groupeObj->getId(); ?>" method="post">
                    <fieldset class="form-group">
                        <legend>Modification du groupe:</legend>

                        <label for="hDeb">Horaire de début</label>
                        <input type="time" id="hDeb" name="hdeb" value="<?php echo $groupeObj->getDebuttravail(); ?>">
                        <br><label for="hFin">Horaire de fin</label>
                        <input type="time" id="hFin" name="hfin" value="<?php echo $groupeObj->getFintravail(); ?>">
                        <br><label for="tunnels">Affectez à un nouveau tunnel : </label>
                        <select id="tunnels" name="tunnel">
                            <?php
                            foreach( $tunnels as $tunnel ) {
                                if( $tunnel['t_id']==$groupeObj->getTunnel() ) {
                                    echo '<option selected="selected">' . $tunnel['t_id'] . '</option>';
                                } else {
                                    echo '<option>' . $tunnel['t_id'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <br><label for="tavernes">Affectez à une nouvelle taverne : </label>
                        <select id="tavernes" name="taverne">
                            <?php
                            foreach( $tavernes as $taverne ) {
                                if( $taverne['t_id']==$groupeObj->getTaverne() ) {
                                    echo '<option selected="selected" value="' . $taverne['t_id'] . '">' . $taverne['t_nom'] . '</option>';
                                } else {
                                    echo '<option value="' . $taverne['t_id'] . '">' . $taverne['t_nom'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <br>
                        <input class="btn btn-primary mb-2" type="submit" value="Modifier">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</aside>
<?php include( 'views/inc/footer.php' ); ?>