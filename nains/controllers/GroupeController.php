<?php
class GroupeController {
    private $model;

    public function __construct() {
        require_once( 'models/GroupeModel.php' );
        $this->model = new GroupeModel;
    }

    public function showAction() {
        $groupes = $this->model->selectAll();
        include( 'views/groupes/groupes.php' );
    }

    public function showOneAction( $id ) {
        $groupe = $this->model->selectOne( $id );

        require_once( 'class/Groupe.class.php' );
        $groupeObj = new Groupe( $groupe );

        require_once( 'models/NainModel.php' );
        $nainModel = new NainModel;
        $nains = $nainModel->selectAllFromGroup( $id );

        require_once( 'models/TunnelModel.php' );
        $tunnelModel = new TunnelModel;
        $tunnel = $tunnelModel->selectOne(  $groupeObj->getTunnel() );

        require_once( 'models/TaverneModel.php' );
        $taverneModel = new TaverneModel;
        $tavernes = $taverneModel->selectAll();
        $tunnels = $tunnelModel->selectAll();

        include( 'views/groupes/groupe.php' );
    }

    public function modifAction( $id ) {
        $groupe = $this->model->selectOne( $id );

        require_once( 'class/Groupe.class.php' );
        $groupeObj = new Groupe( $groupe );

        $groupeObj->setDebuttravail( $_POST['hdeb'] );
        $groupeObj->setFintravail( $_POST['hfin'] );
        $groupeObj->setTunnel( $_POST['tunnel'] );
        $groupeObj->setTaverne( $_POST['taverne'] );

        if( $this->model->modif( $groupeObj ) ) {
            $_SESSION['message'] = 'Groupe modifié';
        } else {
            $_SESSION['message'] = 'Modification échouée';
        }

        $this->showOneAction( $id );
    }
}