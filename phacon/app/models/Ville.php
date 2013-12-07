<?php


class Ville extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idville;
     
    /**
     *
     * @var string
     */
    public $nom;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return array(
            'idville' => 'idville', 
            'nom' => 'nom'
        );
    }

}
