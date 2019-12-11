<?PHP
include "../core/persoC.php";
$perso1C=new PersoC();
$listePerso=$perso1C->afficherPerso();

?>


<?PHP
foreach($listePerso as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['poste']; ?></td>
	

	
	
	</tr>
	<?PHP
}
?>
</table>


