<?php 

include_once 'Model.php';
class Pesanan extends Model
{

	public $id_pesanan;
	public $no_meja;
	public $tanggal;
	public $jumlah_harga;
	public $jumlah_bayar;
	public $id_member;
	public $id_user;

	public function getDataLaporan()
	{
		$query = $this->db->prepare("SELECT * FROM pesanan ");
		$query -> execute();
		$data = $query->fetchAll();

		return $data;
	}

	public function getDataLaporanSpesifik()
	{
		$query = $this->db->prepare("SELECT * FROM pesanan WHERE tanggal=:tanggal");
		$query -> bindparam(":tanggal",$id);
		$query -> execute();
		$data = $query->fetchAll();

		return $data;
	}



}


 ?>
