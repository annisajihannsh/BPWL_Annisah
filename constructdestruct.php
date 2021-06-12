<?php 


//class manusia
class Ica_comel{
	//property
	var $nama;
	var $warna;

	//method construct di jalankan pertama kali
	function __construct(){
		echo "ini adalah isi method construct </br>";
	}

	//method destruct di jalankan terakhir
	function __destruct(){
		echo "ini adalah isi method destruct </br>";
	}

	//method tampilkan nama
	function tampilkan_nama(){
		return "Nama saya Annisah </br>";
	}
}

//instansiasi dari class Ica_comel
$manusia = new Ica_comel();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();


 ?>