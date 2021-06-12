<?php 
	//class parent
	class ica_comel{

		//property class ica_comel
		public $nama_saya;

		//method pada class ica_comel
		function berinama($saya){
			$this->nama_saya = $saya;
		}
	}
	//class turunan atau sub class dari class ica_comel
	//kita menghubungkan class dengan syntax extends
	class teman extends ica_comel {
		//property class teman
		public $nama_teman;

		//method pada class teman
		function berinamaTeman($teman){
			$this->nama_teman = $teman;
		}
	}
	//instansiasi class teman
	$teman = new teman();
	/*method beri nama adalah method pada class ica_comel, tapi kita bisa 
	mengaksesnya karena telah menghubungkan class teman dengan class ica_comel*/
	$teman->berinama("Annisah");
	$teman->berinamaTeman("Saniyyah Azhari");
	//menampilkan isi property
	echo "Nama Saya : ".$teman->nama_saya."</br>";
	echo "Nama Teman Saya : ".$teman->nama_teman;
 ?>