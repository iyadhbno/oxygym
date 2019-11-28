<?php
include_once "../config.php";

class commandeC
{
	function ajoutercommande($commande)
	{
		$sql="insert into commande (idCom,dateCom,prixCom,lieuCom,idClient) values (:idCom,:dateCom,:prixCom,:lieuCom,:idClient)";
		$db = config::getConnexion();
		
		try
		{
       
        $idCom=$commande->get_idCom();
        $dateCom=$commande->get_dateCom();
        $prixCom=$commande->get_prixCom();
        $lieuCom=$commande->get_lieuCom();
        $idClient=$commande->get_idClient();

        $req=$db->prepare($sql);
     
		$req->bindValue(':idCom',$idCom);
		$req->bindValue(':dateCom',$dateCom);
		$req->bindValue(':prixCom',$prixCom);
		$req->bindValue(':lieuCom',$lieuCom);
		$req->bindValue(':idClient',$idClient);
        $req->execute();
           
        }

        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

	}
/*
	function recuperercommande($idClient)
	{
   		$sql="SELECT * from historiquecommande where idClient=$idClient";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function recuperercommande1($idClient)
	{
   		$sql="SELECT * from commande  where idClient=$idClient";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function recupererdernierID()
	{
		$sql="SELECT MAX(idCommande) as max from commande";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function recuperercontenucommande($idCommande)
	{
        $sql="SELECT * from lignecommande where idCommande=$idCommande";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function notification($idClient)
	{
		$sql="SELECT count(*) as cnt from historiquecommande where idClient=:idClient and etatCommande='Validee' ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idClient',$idClient);
		try{
            $req->execute();
            return $req;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
}*/
?>