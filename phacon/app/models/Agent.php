<?php


class Agent extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idagent;
     
    /**
     *
     * @var string
     */
    public $nom;
     
    /**
     *
     * @var string
     */
    public $prenom;
     
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
    public $date_naissance;
     
    /**
     *
     * @var string
     */
    public $date_debut_contrat;
     
    /**
     *
     * @var string
     */
    public $date_fin_contrat;
     
    /**
     *
     * @var string
     */
    public $type_contrat;
     
    /**
     *
     * @var string
     */
    public $code_postal;
     
    /**
     *
     * @var integer
     */
    public $idville;
     
    /**
     *
     * @var string
     */
    public $type_piece_identite;
     
    /**
     *
     * @var string
     */
    public $numero_piece_identite;
     
    /**
     *
     * @var string
     */
    public $date_debut_piece_identite;
     
    /**
     *
     * @var string
     */
    public $date_fin_piece_identite;
     
    /**
     *
     * @var string
     */
    public $commune_piece_identite;
     
    /**
     *
     * @var string
     */
    public $pays_piece_identite;
     
    /**
     *
     * @var string
     */
    public $email;
     
    /**
     * Validations and business logic
     */
    public function validation()
    {

        $this->validate(
            new Email(
                array(
                    "field"    => "email",
                    "required" => true,
                )
            )
        );
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return array(
            'idagent' => 'idagent', 
            'nom' => 'nom', 
            'prenom' => 'prenom', 
            'adresse' => 'adresse', 
            'telephone' => 'telephone', 
            'date_naissance' => 'date_naissance', 
            'date_debut_contrat' => 'date_debut_contrat', 
            'date_fin_contrat' => 'date_fin_contrat', 
            'type_contrat' => 'type_contrat', 
            'code_postal' => 'code_postal', 
            'idville' => 'idville', 
            'type_piece_identite' => 'type_piece_identite', 
            'numero_piece_identite' => 'numero_piece_identite', 
            'date_debut_piece_identite' => 'date_debut_piece_identite', 
            'date_fin_piece_identite' => 'date_fin_piece_identite', 
            'commune_piece_identite' => 'commune_piece_identite', 
            'pays_piece_identite' => 'pays_piece_identite', 
            'email' => 'email'
        );
    }

}
