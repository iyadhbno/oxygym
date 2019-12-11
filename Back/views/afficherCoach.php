
<?PHP
include "../core/coachC.php";
$coach1C=new CoachC();
$listeCoach=$coach1C->afficherCoach();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>nomprenom</td>
<td>email</td>
<td>age</td>
<td>Specialite</td>
<td>experience</td>
<td>salaire</td>
<td>date</td>
</tr>

<?PHP
foreach($listeCoach as $row){
	?>
	<tr>
	<td><?PHP echo $row['nomprenom']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['age']; ?></td>
	<td><?PHP echo $row['specialite']; ?></td>
	<td><?PHP echo $row['experience']; ?></td>
	<td><?PHP echo $row['salaire']; ?></td>
	<td><?PHP echo $row['date']; ?></td>

	 <td><form method="POST" action="supprimercoach.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['nomprenom']; ?>" name="nomprenom">
	</form>
	</td>
	<!-- <td><a href="modifierEmploye.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td> -->
	</tr>
	<?PHP
}
?>
</table>


