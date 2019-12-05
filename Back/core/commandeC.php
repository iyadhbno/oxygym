<?php
include_once "../config.php";

class commandeC
{
	
 
}


//////////////////////////////////////////////////////
	
	function affichercommande(){
		$sql="SElECT * From commande ORDER BY idcom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

	}


	/////////////////////////////////////////


function supprimercommande($idcom){
		$sql="DELETE FROM commande where idcom= :idcom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idcom',$idcom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	///////////////////////////////////////////


	function modifiercommande($commande,$idcom){
		$sql="UPDATE commande SET idcom=:idcom, datecom=:datecom, prixcom=:prixcom, lieucom=:lieucom, idclient=:idclient, idlivreur=:idlivreur, etatcom=:etatcom WHERE idcom=:idcom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idcom=$commande->getidcom();
        $datecom=$commande->getdatecom();
        $prixcom=$commande->getprixcom();
        $lieucom=$commande->getlieu();
        $idclient=$commande->getidclient();
        $idlivreur=$commande->getidlivreur();
        $etatcom=$commande->getetatcom();



$datas = array( ':idc'=>$idC, ':nomC'=>$nomC,':famille'=>$famille);
	
		$req->bindValue(':idC',$idC);
		$req->bindValue(':nomC',$nomC);
		$req->bindValue(':famille',$famille);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

}
?>