<?PHP
include "../config.php";
class CoachC {
	function afficherCoach(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From coach";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function ajouterCoach($coach){
		$sql="insert into coach (nomprenom,email,age,specialite,experience,salaire,date,image) values (:nomprenom, :email,:age,:specialite,:experience,:salaire,:date,image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nomprenom=$coach->getNomprenom();
		$email=$coach->getEmail();
		$age=$coach->getAge();
        $specialite=$coach->getSpecialite();
        $experience=$coach->getExperience();
        $salaire=$coach->getSalaire();
		$date=$coach->getDate();
		$image=$coach->getImage();


		$req->bindValue(':nomprenom',$nomprenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':age',$age);
		$req->bindValue(':specialite',$specialite);
		$req->bindValue(':experience',$experience);
		$req->bindValue(':salaire',$salaire);
		$req->bindValue(':date',$date);
		$req->bindValue(':image',$image);


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function supprimerCoach($id){
		$sql="DELETE FROM coach where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}





}


?>