<?php
class Tunnel {
    private $id;
    private $progres;
    private $villedepart;
    private $villearrivee;



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
    public function getProgres()
    {
        return $this->progres;
    }

    /**
     * @param mixed $progres
     *
     * @return self
     */
    public function setProgres($progres)
    {
        $this->progres = $progres;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVilledepart()
    {
        return $this->villedepart;
    }

    /**
     * @param mixed $villedepart
     *
     * @return self
     */
    public function setVilledepart($villedepart)
    {
        $this->villedepart = $villedepart;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVillearrivee()
    {
        return $this->villearrivee;
    }

    /**
     * @param mixed $villearrivee
     *
     * @return self
     */
    public function setVillearrivee($villearrivee)
    {
        $this->villearrivee = $villearrivee;

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