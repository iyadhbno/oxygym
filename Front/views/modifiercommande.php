<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";
if (isset($_GET['idCom'])){
	$commandeC=new commmandeC();
    $result=$commandeC->recuperercommande($_GET['idCom']);
	foreach($result as $row){
		$idCom=$row['idCom'];
		$dateCom=$row['dateCom'];
		$prixCom=$row['prixCom'];
		$lieuCom=$row['lieuCom'];
		$idClient=$row['idClient'];
		?>
<form method="POST">
<table>
<caption>Modifier commande</caption>
<tr>
<td>identifiant commande</td>
<td><input type="text" name="idCom" value="<?PHP echo $idCom ?>"></td>
</tr>
<tr>
<td>date de commande</td>
<td><input type="date" name="dateCom" value="<?PHP echo $dateCom ?>"></td>
</tr>
<tr>
<td>prix de la commande</td>
<td><input type="number" name="prixCom" value="<?PHP echo $prixCom ?>"></td>
</tr>
<tr>
<td>lieux de la livraison</td>
<td><input type="text" name="lieuxCom" value="<?PHP echo $lieuxCom ?>"></td>
</tr>
<tr>
<td>identifiant du client</td>
<td><input type="text" name="idClient" value="<?PHP echo $idClient ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idCom" value="<?PHP echo $_GET['idCom'];?>"></td>
</tr>
</table>
</form>

<?PHP
	}
}
if (isset($_POST['modifier'])){
	$commande=new commande($_POST['idCom'],$_POST['dateCom'],$_POST['prixCom'],$_POST['lieuCom'],$_POST['idClient']);
	$commandeC->modifiercommande($commande,$_POST['idCom']);
	echo $_POST['idCom'];
	header('Location: Affichercommande.php');
}
?>

