<?PHP
include "../core/commandeC.php";
$produitC=new commandeC();
if (isset($_POST["idCom"])){
	$produitC->supprimercommande($_POST["idCom"]);
	header('Location: Gestion Commande.php');
}

?>