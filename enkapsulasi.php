<?php 
	//class mei
	class ica_comel{
		//prop
		public $nama;
		public $warna;

		//method tampilkan_nama
		function tampilkan_nama(){
			return "Nama saya Annisah </br>";
		}
	}

	//instansiasi class ica_comel
	$ica_comel = new ica_comel();

	//memanggil method tampilkan_nama dari class ica_comel
	echo $ica_comel->tampilkan_nama();
 ?>