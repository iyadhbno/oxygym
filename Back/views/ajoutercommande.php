<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";

if (isset($_POST['idCom']) and isset($_POST['dateCom']) and isset($_POST['prixCom']) and isset($_POST['lieuCom']) and isset($_POST['idClient']))
{
$commande1=new commande($_POST['idCom'],$_POST['dateCom'],$_POST['prixCom'],$_POST['lieuCom'],$_POST['idClient']);

$commande1c=new CommandeC();
$commande1c->ajoutercommande($commande1);
header('Location: Gestion Commande.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>

