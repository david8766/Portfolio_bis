<?php include( 'views/inc/header.php' ); ?>

<article id="taverne" role="article">
    <header>
        <h1 id="titre">Les tavernes</h1>
	</header>
	<div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 cadre_1" id="lien">
		        <?php
			    if( isset( $tavernes ) && is_array( $tavernes ) && count( $tavernes )>0 ) {
			        echo '<ul style="list-style-type: none;">';
			        foreach( $tavernes as $taverne ) {
			            echo '<li><a href="index.php?c=taverne&a=showOne&id=' . $taverne['t_id'] . '" title="' . $taverne['t_nom'] . '">' . $taverne['t_nom'] . '</a></li>';
			        }
			        echo '</ul>';
			    }
			    else {
			    	echo 'erreur lors de l\'affichage des tavernes';
			    }
			    ?>
			</div>
        </div>
    </div> 
</article>

<?php include( 'views/inc/footer.php' ); ?>