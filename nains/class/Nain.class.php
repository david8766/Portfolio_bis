<?php
class Nain {
    private $id;
    private $nom;
    private $barbe;
    private $groupe;
    private $ville;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBarbe()
    {
        return $this->barbe;
    }

    /**
     * @param mixed $barbe
     *
     * @return self
     */
    public function setBarbe($barbe)
    {
        $this->barbe = $barbe;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * @param mixed $groupe
     *
     * @return self
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     *
     * @return self
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }


    public function __construct($datas=null) {
        if( !is_null( $datas ) ) {
            $this->hydrate( $datas );
        }
    }

    public function hydrate($datas) {
        foreach( $datas as $key => $value ) {
            // $key = 'n_id'
            $methodName = str_replace( 'n_', '', $key ); // $methodName = 'id'
            $methodName = str_replace( '_fk', '', $methodName ); // $methodName = 'id'
            $methodName = ucfirst( $methodName ); // $methodName = 'Id'
            $methodName = 'set' . ucfirst( $methodName ); // $methodName = 'setId'

            if( method_exists( $this, $methodName ) ) {
                $this->$methodName( $value ); // $this->setId( $datas['n_id'] );
            }
        }
    }
}