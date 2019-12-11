<?PHP
include "../config.php";
class commandeC {


	function afficherCommande(){
		//$sql="SElECT * From commande e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	
	////////////////////////////////////////


	function ajouterCommande($commandec){
		$sql="insert into commande (idcom,idclient,datecom,etatcom,prixcom,idlivreur,lieucom,idLC) values (:idcom,:idclient,:datecom,:prixcom,:idlivreur,:lieucom,:idLC)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$idcom=$commandec->getIdcom();
		$idclient=$commandec->getIdclient();
		$datecom=$commandec->getDatecom();
		$etatcom=$commandec->getEtatcom();
		$prixcom=$commandec->getPrixcom();
        $idlivreur=$commandec->getIdlivreur();
        $lieucom=$commandec->getLieucom();
        $idLC=$commandec->getIdLC();

		$req->bindValue(':idcom',$idcom);
		$req->bindValue(':idclient',$idclient);
		$req->bindValue(':datecom',$datecom);
		$req->bindValue(':etatcom',$etatcom);
		$req->bindValue(':prixcom',$prixcom);
		$req->bindValue(':idlivreur',$idlivreur);
		$req->bindValue(':lieucom',$lieucom);
		$req->bindValue(':idLC',$idLC);
		


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}


	///////////////////////////////////////////////////


	function supprimerCommande($idcom){
		$sql="DELETE FROM commande where  idcom= :idcom";
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


	///////////////////////////////////////////////////


	function modifierCommande($commandec,$idcom){
		$sql="UPDATE commande SET  idcom=:idcom,idclient=:idclient,datecom=:datecom,etatcom=:etatcom,prixcom=:prixcom,idlivreur=:idlivreur,lieucom=:lieucom,idLC=:idLC WHERE idcom=:dicom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		$idcom=$commandec->getIdcom();
		$idclient=$commandec->getIdclient();
		$datecom=$commandec->getDatecom();
		$etatcom=$commandec->getEtatcom();
		$prixcom=$commandec->getPrixcom();
        $idlivreur=$commandec->getIdlivreur();
        $lieucom=$commandec->getLieucom();
        $idLC=$commandec->getIdLC();

	

		$datas = array(':idcom'=>$idcom,':idclient'=>$idclient, ':datecom'=>$datecom, ':etatcom'=>$etatcom,':prixcom'=>$prixcom,':idlivreur'=>$idlivreur,':lieucom'=>$lieucom,':idLC'=>$idLC);
		$req->bindValue(':idcom',$idcom);
		$req->bindValue(':idclient',$idclient);
		$req->bindValue(':datecom',$datecom);
		$req->bindValue(':etatcom',$etatcom);
		$req->bindValue(':prixcom',$prixcom);
		$req->bindValue(':idlivreur',$idlivreur);
		$req->bindValue(':lieucom',$lieucom);
		$req->bindValue(':idLC',$idLC);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	///////////////////////////////////////////////////////////
	


	function recupererCommande($idcom){
		$sql="SELECT * from  commande where idcom=$idcom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}




}

?>