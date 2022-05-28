<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED); 
/******************************************
Asisten Pemrogaman 11
 ******************************************/

class TabelPasien extends DB
{
	function getPasien()
	{
		// Query mysql select data pasien
		$query = "SELECT * FROM pasien";
		// Mengeksekusi query
		return $this->execute($query);
	}
	function addPasien($data){
		$nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tgl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];
		$query = "INSERT INTO PASIEN Values(NULL, '$nik', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp')";
		return $this->execute($query);
	}

	function updatePasien($id, $data){
		$nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tgl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];
		$query = "UPDATE pasien set nik='$nik', nama='$nama', tempat='$tempat', tl='$tl', gender='$gender', email='$email', telp='$telp' where id=$id";
		return $this->execute($query);
	}

	function deletePasien($id){
		$query = "DELETE FROM pasien where id=$id";
		return $this->execute($query);
	}

}
