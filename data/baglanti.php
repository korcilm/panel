<?php 
include_once (SINIF."class.upload.php");
include_once (SINIF."VT.php");

$VT=new VT();

$ayarlar=$VT->VeriGetir("ayarlar","WHERE ID=?", array(1),"ORDER BY ID ASC",1);
if ($ayarlar!=false) {
	$sitebaslik=$ayarlar[0]["baslik"];
	$siteanahtar=$ayarlar[0]["anahtar"];
	$siteaciklama=$ayarlar[0]["aciklama"];
	$siteurl=$ayarlar[0]["url"];
	$sitetelefon=$ayarlar[0]["telefon"];
	$sitemail=$ayarlar[0]["mail"];
	$siteadres=$ayarlar[0]["adres"];
	$sitegithub=$ayarlar[0]["github"];
	$sitelinkedin=$ayarlar[0]["linkedin"];
	$sitemedium=$ayarlar[0]["medium"];
	$sitetwitter=$ayarlar[0]["twitter"];
}

 ?>