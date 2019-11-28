
                    <?PHP
                    include "../core/commandeC.php";
                    $commande1C=new commandeC();
                    $listecommande=$commande1C->affichercommande();
                    ?>
<table border="1">
<tr>
<td>Identifiant commande</td>
<td>date commande</td>
<td>prix commmande</td>
<td>lieux de livraison</td>
<td>identifiant client</td>

</tr>
                    <?PHP

foreach($listeclient as $row){
  ?>
  <tr>
  <td><?PHP echo $row['idCom']; ?></td>
  <td><?PHP echo $row['dateCom']; ?></td>
  <td><?PHP echo $row['prixCom']; ?></td>
  <td><?PHP echo $row['lieuCom']; ?></td>
  <td><?PHP echo $row['idClient']; ?></td>
  <td><a><img class="" src="<?php echo $row['image'];?>" style="width: 100px; height:100px;"></a></td>
  <td><form method="POST" action="supprimercommande.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['idCom']; ?>" name="idCom">
  </form>
  </td>
  <td><a href="modifiercommande.php?idP=<?PHP echo $row['idCom']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
</table>
