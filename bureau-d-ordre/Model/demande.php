<?php

class demande
{
    private $reference;
    private $objet;
    private $type;
    private $expediteur;
    private $destinateur;
    private $details;
    private $document;
    private $traitement;
    private $cin_agent;

    /**
     * @param $reference
     * @param $objet
     * @param $type
     * @param $expediteur
     * @param $destinateur
     * @param $details
     * @param $document
     * @param $traitement
     * @param $cin_agent
    
     */
    public function __construct($reference, $objet, $type, $expediteur, $destinateur, $details, $document, $traitement, $cin_agent)
    {
        $this->reference = $reference;
        $this->objet = $objet;
        $this->type = $type;
        $this->expediteur = $expediteur;
        $this->destinateur = $destinateur;
        $this->details = $details;
        $this->document = $document;
        $this->traitement = $traitement;
        $this->cin_agent = $cin_agent;
    }

    /**
     * @return mixed
     */
    public function getreference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setreference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getobjet()
    {
        return $this->objet;
    }

    /**
     * @param mixed $objet
     */
    public function setobjet($objet)
    {
        $this->objet = $objet;
    }

    /**
     * @return mixed
     */
    public function gettype()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function settype($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getexpediteur()
    {
        return $this->expediteur;
    }

    /**
     * @param mixed $expediteur
     */
    public function setexpediteur($expediteur)
    {
        $this->expediteur = $expediteur;
    }

    /**
     * @return mixed
     */
    public function getdestinateur()
    {
        return $this->destinateur;
    }

    /**
     * @param mixed $destinateur
     */
    public function setdestinateur($destinateur)
    {
        $this->destinateur = $destinateur;
    }

    /**
     * @return mixed
     */
    public function getdetails()
    {
        return $this->details;
    }

    /**
     * @param mixed $details
     */
    public function setdetails($details)
    {
        $this->details = $details;
    }


    
    /**
     * @return mixed
     */
    public function getdocument()
    {
        return $this->document;
    }

    /**
     * @param mixed $document
     */
    public function setdocument($document)
    {
        $this->document = $document;
    }


    
    /**
     * @return mixed
     */
    public function gettraitement()
    {
        return $this->traitement;
    }

    /**
     * @param mixed $traitement
     */
    public function settraitement($traitement)
    {
        $this->traitement = $traitement;
    }

/**
     * @return mixed
     */
    public function getcin_agent()
    {
        return $this->cin_agent;
    }

    /**
     * @param mixed $cin_agent
     */
    public function setcin_agent($cin_agent)
    {
        $this->cin_agent = $cin_agent;
    }


}