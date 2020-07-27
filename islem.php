<?php 

@session_start();
@ob_start();
error_reporting(0);
define('DATA', 'data/');
define('SAYFA', 'include/');
define('SINIF', 'class/');
include_once(DATA."baglanti.php");

 // yorum ekle
if (isset($_POST["yorum-ekle"])) {
	
	$yorum			= $_POST["yorum"];
	$kullaniciadi	= $_POST["kullaniciadi"];
	$mail		    = $_POST["mail"];	
	$blogID 		= $_POST["yazi_id"];

	if ( !$yorum || !$kullaniciadi  || !$mail || !$blogID ) {
		header("Location: ..\yazi.php?ID=$blogID&&yorum-ekle=bos");
	}else{
		$yorumlar="yorumlar";
		$insert=$VT->SorguCalistir("INSERT INTO ".$yorumlar,"SET kullaniciadi=? , mail=? , yorum=? , blogID=? ",array($kullaniciadi, $mail, $yorum, $blogID));
		
		if ($insert) {
			header("Location: ..\yazi.php?ID=$blogID&&yorum-ekle=yes");
		}else{
			header("Location: ..\yazi.php?ID=$blogID&&yorum-ekle=no");
		}
	}
}	

//yorum onay
$ID=@$_GET["yorum_id"];
$onay=@$_GET["onay"];
if (isset($ID)){
	$yorumlar="yorumlar";
	$update=$VT->SorguCalistir("UPDATE ".$yorumlar,"SET onay=? WHERE ID=?",array($onay, $ID));
	if ($update) {
		header("Location: yorum");
	}else{
		header("Location: yorum");
	}																												
}

//yorum sil
$ID=@$_GET["yorumsil_id"];
if (isset($ID)) {
	$yorumlar="yorumlar";
	$delete=$VT->SorguCalistir("DELETE FROM ".$yorumlar,"WHERE ID=?",array($ID),1);

	if ($delete) {
		header("Location: yorum");
	}else{
		header("Location: yorum");
	}
}