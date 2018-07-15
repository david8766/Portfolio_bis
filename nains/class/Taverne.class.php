<?php
class Taverne {
    private $id;
    private $nom;
    private $chambres;
    private $blonde;
    private $brune;
    private $rousse;
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
    public function getChambres()
    {
        return $this->chambres;
    }

    /**
     * @param mixed $chambres
     *
     * @return self
     */
    public function setChambres($chambres)
    {
        $this->chambres = $chambres;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBlonde()
    {
        return $this->blonde;
    }

    /**
     * @param mixed $blonde
     *
     * @return self
     */
    public function setBlonde($blonde)
    {
        $this->blonde = $blonde;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrune()
    {
        return $this->brune;
    }

    /**
     * @param mixed $brune
     *
     * @return self
     */
    public function setBrune($brune)
    {
        $this->brune = $brune;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRousse()
    {
        return $this->rousse;
    }

    /**
     * @param mixed $rousse
     *
     * @return self
     */
    public function setRousse($rousse)
    {
        $this->rousse = $rousse;

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
            // $key = 't_id'
            $methodName = str_replace( 't_', '', $key ); // $methodName = 'id'
            $methodName = str_replace( '_fk', '', $methodName ); // $methodName = 'id'
            $methodName = ucfirst( $methodName ); // $methodName = 'Id'
            $methodName = 'set' . ucfirst( $methodName ); // $methodName = 'setId'

            if( method_exists( $this, $methodName ) ) {
                $this->$methodName( $value ); // $this->setId( $datas['t_id'] );
            }
        }
    }
}