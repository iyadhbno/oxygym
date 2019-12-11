<?PHP
include "../config.php";
class PersoC {
	function afficherPerso(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.id= a.id";
		$sql="SElECT * From personnel";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function ajouterPerso($perso){
		$sql="insert into personnel (cin,nom,prenom,poste) values (:cin, :nom,:prenom,:poste)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$cin=$perso->getCin();
		$nom=$perso->getNom();
		$prenom=$perso->getPrenom();
        $poste=$perso->getPoste();
        
	

		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':poste',$poste);
		

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}






}

?>