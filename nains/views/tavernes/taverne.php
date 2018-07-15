<?php
include( 'views/inc/header.php' );
?>

<h1 id="titre">Fiche de la taverne</h1>
<section  role="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8"><img src="images/biere.jpg" alt="ville"></div>
            <div class="col-lg-4 cadre_2" id="lien">
            <?php
            if( isset( $taverneObj ) && is_object( $taverneObj ) && get_class( $taverneObj )=='Taverne' ) {
                echo 'Nom : ' . $taverne['t_nom'] ;
                echo '<br>Nombre de chambres disponibles : ' . $taverneObj->getChambres() ;
                echo '<br>Cette taverne se situe dans la ville de : <a href="index.php?c=ville&a=showOne&id=' . $taverneObj->getVille()->getId() . '" title="'. $taverneObj->getVille()->getNom() .' "> ' . $taverneObj->getVille()->getNom() . '</a>' ;
                echo '<br><br>
                <u>Liste des bières proposées :</u>
                <br>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 biere" style="padding-right:0;"><img src="images/blonde.png" alt="blonde1"></div>
                        <div class="col-lg-7" style="padding-left:0;padding-right:2vh;">
                        
                        Blonde : ';
                        if($taverneObj->getBlonde() == 0){
                            echo 'et bin non y\'en a pas!';
                        }
                        else{
                            echo 'Une blonde est toujours consentante !!';
                        } 
                        echo '
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-2 biere"><img src="images/brune.gif" alt="brune"></div>
                        <div class="col-lg-8">
                        <p style="padding-left:2vh;">
                        Brune : ';
                        if($taverneObj->getBrune() == 0){
                            echo 'et non y\'en a pas!';
                        }
                        else{
                            echo 'Une brune ne compte pas pour des prunes !!';
                        } 
                        echo'</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-2 biere"><img src="images/rousse.gif" alt="blonde1"></div>
                        <div class="col-lg-8">
                        <p style="padding-left:2vh;">
                        Rousse : ';
                        if($taverneObj->getRousse() == 0){
                            echo 'et non y\'en a pas!';
                        }
                        else{
                            echo 'Une rousse n\'est jamais de mauvais poil !!';
                        } 
                        echo'</p>
                        </div>
                    </div>
                <br>
                </div>';        
            } else {
                echo 'erreur: aucune taverne selectionnée';
            }
            ?>
            </div>
        </div>
    </div> 
</section>

<?php
include( 'views/inc/footer.php' );
?>