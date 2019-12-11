
<?PHP
include "../core/commandeC.php";
$commande1C=new CommandeC();
$listeCommande=$commande1C->afficherCommande();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>ID Commande</td>
<td>ID Client</td>
<td>Date Commande</td>
<td>Etat</td>
<td>Prix Commande</td>
<td>ID Livreur</td>
<td>Lieux Livraison</td>
</tr>

<?PHP
foreach($listeCommande as $row){
	?>
	<tr>
	<td><?PHP echo $row['idcom']; ?></td>
	<td><?PHP echo $row['idClient']; ?></td>
	<td><?PHP echo $row['datecom']; ?></td>
	<td><?PHP echo $row['etatcom']; ?></td>
	<td><?PHP echo $row['prixcom']; ?></td>
	<td><?PHP echo $row['idlivreur']; ?></td>
	<td><?PHP echo $row['lieucom']; ?></td>

	 <td><form method="POST" action="supprimercommande.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idcom']; ?>" name="idcom">
	</form>
	</td>
	<!-- <td><a href="modifiercommande.php?cin=<?PHP echo $row['idcom']; ?>">
	Modifier</a></td> -->
	</tr>
	<?PHP
}
?>
</table>


