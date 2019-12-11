<?PHP
class Commande{
	private $idcom;
	private $idClient;
	private $datecom;
	private $etatcom;
	private $prixcom;
	private $idlivreur;
	private $lieucom;
	private $idLC;


	function __construct($idcom,$idClient,$datecom,$etatcom,$prixcom,$idlivreur,$lieucom,$idLC){
		$this->idcom=$idcom;
		$this->idClient=$idClient;
		$this->datecom=$datecom;
		$this->etatcom=$etatcom;
		$this->prixcom=$prixcom;
		$this->idlivreur=$idlivreur;
		$this->lieucom=$lieucom;
		$this->idLC=$idLC;


	}
	function getIdcom(){
		return $this->idcom;
	}
	function getIdClient(){
		return $this->idClient;
	}
	function getIdLCcom(){
		return $this->idLCcom;
	}
	function getEtatcom(){
		return $this->etatcom;
	}
	function getPrixcom(){
		return $this->prixcom;
	}
	function getIdlivreur(){
		return $this->idlivreur;
	}
	function getLieucom(){
		return $this->lieucom;
	}
	function getIdLC(){
		return $this->idLC;
	}

	///////////////////////////////
	
	function setIdcom($idcom){
		$this->idcom=$idcom;
	}
	function setIdCient($idCient){
		$this->idCient=$idCient;
	}
	function setIdLCcom($idLCcom){
		$this->idLCcom;
	}
	function setEtatcom($etatcom){
		$this->etatcom=$etatcom;
	}
	function setPrixcom($prixcom){
		$this->prixcom=$prixcom;
	}
	function setIdlivreur($idlivreur){
		$this->idlivreur=$idlivreur;
	}
	function setLieucom($lieucom){
		$this->lieucom=$lieucom;
	}
	function setIdLC($idLC){
		$this->idLC=$idLC;
	}
	
	
}

?>