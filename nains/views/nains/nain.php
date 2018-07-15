<?php include( 'views/inc/header.php' ); ?>
<section role="section">
    <header>
        <h1 id="titre">Fiche du nain</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-8" id="img_nain"><img src="images/nains3.jpg" alt="nain"></div>
            <div class="col-lg-4 cadre_2" id="lien">
            <?php
            if( isset( $nainObj ) && is_object( $nainObj ) && get_class( $nainObj )=='Nain' ) {
                echo '<p>Nom : ' . $nainObj->getNom().'</p></br>';
                echo '<p>Longueur de barbe : ' . $nainObj->getBarbe() . ' cm</p></br>';
                echo '<p>Originaire de <a href="index.php?c=ville&a=showOne&id=' . $nainObj->getVille()->getId() . '" title="' . $nainObj->getVille()->getNom()  . '">' . $nainObj->getVille()->getNom()  . '</a></p></br>';

                if( !is_null( $nainObj->getGroupe()->getTaverne()->getNom() ) ) {
                    echo '<p>Boit dans <a href="index.php?c=taverne&a=showOne&id=' . $nainObj->getGroupe()->getTaverne()->getId() . '" title="' . $nainObj->getGroupe()->getTaverne()->getNom() . '">' . $nainObj->getGroupe()->getTaverne()->getNom() . '</a></p></br>';
                }

                if( !is_null( $nainObj->getGroupe()->getTunnel()->getId() ) ) {
                    echo '<p>Travaille de ' . $nainObj->getGroupe()->getDebuttravail() . ' à ' . $nainObj->getGroupe()->getFintravail() . ' dans le tunnel de <a href="index.php?c=ville&a=showOne&id=' . $nainObj->getGroupe()->getTunnel()->getVilledepart()->getId() . '" title="' . $nainObj->getGroupe()->getTunnel()->getVilledepart()->getNom() . '">' . $nainObj->getGroupe()->getTunnel()->getVilledepart()->getNom() . '</a> à <a href="index.php?c=ville&a=showOne&id=' . $nainObj->getGroupe()->getTunnel()->getVillearrivee()->getId() . '" title="' . $nainObj->getGroupe()->getTunnel()->getVillearrivee()->getNom() . '">' . $nainObj->getGroupe()->getTunnel()->getVillearrivee()->getNom() . '</a><p></br>';
                }

                if( !is_null( $nainObj->getGroupe()->getId() ) ) {
                    echo '<p>Membre du <a href="index.php?c=groupe&a=showOne&id=' . $nainObj->getGroupe()->getId() . '" title="Groupe n° ' . $nainObj->getGroupe()->getId() . '">groupe n° ' . $nainObj->getGroupe()->getId() . '</a><p></br>';
                } else {
                    echo '<p>Membre d\'aucun groupe</p></br>';
                }
            } else {
                echo 'erreur: aucun nain sélectionné';
            }
            ?>
            </div>

        </div>
    </div>
</section>
<aside role="aside">
    <hr>
    <div class="container" >
        <div class="row">
            <div class="col-lg-8" id="img_nain"></div>
            <div class="col-lg-4 cadre_2">
                <?php
                if( isset( $_SESSION['message'] ) ) {
                    echo $_SESSION['message'];
                    unset( $_SESSION['message'] );
                }
                ?>
                <form class="form-group" action="index.php?c=nain&a=modif&id=<?php echo $nainObj->getId(); ?>" method="post">
                    <fieldset class="form-group">
                        <legend>Changer de groupe:</legend>
                        <br>
                        <select class="custom-select my-1 mr-sm-2" id="groupes" name="groupe" >
                            <option value="0">En vacances</option>
                            <?php
                            foreach( $groupes as $groupe ) {
                                if( $groupe['g_id']==$nainObj->getGroupe()->getId() ) {
                                    echo '<option selected="selected">' . $groupe['g_id'] . '</option>';
                                } else {
                                    echo '<option>' . $groupe['g_id'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <br>
                        <br>
                        <input class="btn btn-primary mb-2" type="submit" value="Affecter">
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
</aside>
<?php include( 'views/inc/footer.php' ); ?>