<?php 
echo '<center>';
	require_once 'siswa.php';

	$identitas1 = new identitas ('della', 'Bandung', 'XI TKR 3', 'Pelajar');
	
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';
	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "Tempat Lahir = ".$identitas1->get_tempat().'<br>';
	echo "Kelas = ".$identitas1->get_kelas().'<br>';
	echo "Status = ".$identitas1->get_status().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

	$identitas1 = new identitas ('Dona', 'pangandaran', 'XI RPL 1', 'Pelajar');

	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "Tempat Lahir = ".$identitas1->get_tempat().'<br>';
	echo "Kelas = ".$identitas1->get_kelas().'<br>';
	echo "Status = ".$identitas1->get_status().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

	$identitas1 = new identitas ('wenti', 'jawa', 'XI RPL 1', 'Pelajar');

	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "Tempat Lahir = ".$identitas1->get_tempat().'<br>';
	echo "Kelas = ".$identitas1->get_kelas().'<br>';
	echo "Status = ".$identitas1->get_status().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

	$identitas1 = new identitas ('yeni', 'Bandung', 'XI RPL 2', 'Pelajar');

	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "Tempat Lahir = ".$identitas1->get_tempat().'<br>';
	echo "Kelas = ".$identitas1->get_kelas().'<br>';
	echo "Status = ".$identitas1->get_status().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';



?>