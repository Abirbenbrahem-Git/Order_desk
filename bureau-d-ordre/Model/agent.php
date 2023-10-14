<?php

class agent
{
    private $cin;
    private $nom;
    private $prenom;
    private $mail;
    private $motdepasse;
    private $role;
    

    /**
     * @param $cin
     * @param $nom
     * @param $prenom
     * @param $mail
     * @param $motdepasse
     * @param $role
    
     */
    public function __construct($cin, $nom, $prenom, $mail, $motdepasse, $role)
    {
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->motdepasse = $motdepasse;
        $this->role = $role;
        
    }

    /**
     * @return mixed
     */
    public function getcin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setcin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getnom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setnom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getprenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setprenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getmail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setmail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getmotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * @param mixed $motdepasse
     */
    public function setmotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;
    }

    /**
     * @return mixed
     */
    public function getrole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setrole($role)
    {
        $this->role = $role;
    }




}