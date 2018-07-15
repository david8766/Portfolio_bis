<?php
class Groupe {
    private $id;
    private $debuttravail;
    private $fintravail;
    private $taverne;
    private $tunnel;



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
    public function getDebuttravail()
    {
        return $this->debuttravail;
    }

    /**
     * @param mixed $debuttravail
     *
     * @return self
     */
    public function setDebuttravail($debuttravail)
    {
        $this->debuttravail = $debuttravail;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFintravail()
    {
        return $this->fintravail;
    }

    /**
     * @param mixed $fintravail
     *
     * @return self
     */
    public function setFintravail($fintravail)
    {
        $this->fintravail = $fintravail;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaverne()
    {
        return $this->taverne;
    }

    /**
     * @param mixed $taverne
     *
     * @return self
     */
    public function setTaverne($taverne)
    {
        $this->taverne = $taverne;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTunnel()
    {
        return $this->tunnel;
    }

    /**
     * @param mixed $tunnel
     *
     * @return self
     */
    public function setTunnel($tunnel)
    {
        $this->tunnel = $tunnel;

        return $this;
    }


    public function __construct($datas=null) {
        if( !is_null( $datas ) ) {
            $this->hydrate( $datas );
        }
    }

    public function hydrate($datas) {
        foreach( $datas as $key => $value ) {
            // $key = 'g_id'
            $methodName = str_replace( 'g_', '', $key ); // $methodName = 'id'
            $methodName = str_replace( '_fk', '', $methodName ); // $methodName = 'id'
            $methodName = ucfirst( $methodName ); // $methodName = 'Id'
            $methodName = 'set' . ucfirst( $methodName ); // $methodName = 'setId'

            if( method_exists( $this, $methodName ) ) {
                $this->$methodName( $value ); // $this->setId( $datas['g_id'] );
            }
        }
    }
}