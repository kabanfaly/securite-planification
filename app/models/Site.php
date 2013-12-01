<?php


class Site extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idsite;
     
    /**
     *
     * @var string
     */
    public $nom;
     
    /**
     *
     * @var string
     */
    public $adresse;
     
    /**
     *
     * @var string
     */
    public $telephone;
     
    /**
     *
     * @var string
     */
    public $code_postal;
     
    /**
     *
     * @var string
     */
    public $idville;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return array(
            'idsite' => 'idsite', 
            'nom' => 'nom', 
            'adresse' => 'adresse', 
            'telephone' => 'telephone', 
            'code_postal' => 'code_postal', 
            'idville' => 'idville'
        );
    }

}
