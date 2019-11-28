<?php
class commande
{
	//
	private $idCom;
	private $dateCom;
	private $prixCom;
	private $lieuCom;
	private $idClient;

		public function __construct($idCom,$dateCom,$prixCom,$lieucom,$idClient)
		{
			$this->idCommande=$idCom;
			$this->dateCommande=$dateCom;
			$this->montantCommande=$prixCom;
			$this->lieuLivraison=$lieuCom;
			$this->idClient=$idClient;
		}


		public function get_idCom()
		{
			return $this->idCom;
		}


		public function set_idCom($idCom)
		{
			$this->idCom = $idCom;
		}

		//========================================



		public function get_dateCom()
		{
			return $this->dateCom;
		}

		public function set_dateCom($dateCom)
		{
			$this->dateCom = $dateCom;
		}

		//========================================



		public function get_prixCom()
		{
			return $this->prixCom;
		}

		public function set_prixCom($prixCom)
		{
			$this->prixCom = $prixCom;
		}
		
		//========================================



		public function get_lieuCom()
		{
			return $this->lieuCom;
		}

		public function set_lieuCom($lieuCom)
		{
			$this->lieuCom = $lieuCom;
		}

		//========================================

		
		public function get_idClient()
		{
			return $this->idClient;
		}

		public function set_idClient($idClient)
		{
			$this->idClient = $idClient;
		}
		//============================
}	
?>