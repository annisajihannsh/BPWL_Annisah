<?php 
//PHP OOP Part 2 Pengertian Class, Object, Property, dan Method 

//class manusia
class manusia {
	//property
	var $nama;
	var $warna;


	//method manusia
	function tampilkan_nama(){
		return "Nama Saya Annisah </br>";
	}
	
	function warna_kulit(){
		return "Warna kulit Saya putih </br>";
	}
}

//instansiasi class manusia
$manusia = new manusia();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();

//memanggil method warna kulit dari class manusia
echo $manusia->warna_kulit();

 ?>