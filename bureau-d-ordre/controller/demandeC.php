<?php

include_once '../../config.php';
require_once '../../Model/demande.php';

class demandeC{
    // CRUD
    public function afficher_demande(){
        $sql="SELECT * FROM demande" ;
        $db = config::getConnexion() ;
        try {
            $liste = $db->query($sql) ;
            return $liste ;
        }
        catch(Exception $e) {
            die('Erreur:' .$e->getMessage()) ;
        }
    }

    function ajouter_demande($demande){
        $sql="INSERT INTO demande (reference,objet,type,expediteur,destinateur,details,document,traitement,cin_agent) 
				VALUES (:reference,:objet,:type,:expediteur,:destinateur,:details,:document,:traitement,:cin_agent)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'reference' => $demande->getreference(),
                'objet' => $demande->getobjet(),
                'type' => $demande->gettype(),
                'expediteur' => $demande->getexpediteur(),
                'destinateur' => $demande->getdestinateur(),
                'details' => $demande->getdetails(),
                'document' => $demande->getdocument(),
                'traitement' => $demande->gettraitement(),
                'cin_agent' => $demande->getcin_agent()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function supprimer_demande($reference){
        $sql="DELETE FROM demande WHERE reference= :reference";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':reference',$reference);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifier_demande($demande, $reference){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE demande SET 
						reference = :reference, 
						objet = :objet, 
						type = :type, 
						expediteur = :expediteur,
						destinateur = :destinateur, 
						details = :details,
                        document = :document,
                        traitement = :traitement,
                        cin_agent = :cin_agent
						
					WHERE reference = :reference"
            );

            $query->execute([
                'reference' => $demande->getreference(),
                'objet' => $demande->getobjet(),
                'type' => $demande->gettype(),
                'expediteur' => $demande->getexpediteur(),
                'destinateur' => $demande->getdestinateur(),
                'details' => $demande->getdetails(),
                'document' => $demande->getdocument(),
                'traitement' => $demande->gettraitement(),
                'cin_agent' => $demande->getcin_agent()
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function getdemandebyreference($reference)
    {
        $requete = "select * from demande where reference= '".$reference."'";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetch();
            return $result ;
        } catch (PDOException $th) {
           echo $th->getMessage();
        }
    }




}
?>