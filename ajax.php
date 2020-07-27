<?php 
@session_start();
@ob_start();
error_reporting(0);
define('DATA', 'data/');
define('SAYFA', 'include/');
define('SINIF', 'class/');
include_once(DATA."baglanti.php");
define('SITE', $siteurl);

if ($_POST) {
   if (!empty($_POST["tablo"]) && !empty($_POST["ID"]) && !empty($_POST["durum"])) {

       $tablo=$VT->filter($_POST["tablo"]);
       $ID=$VT->filter($_POST["ID"]);
       $durum=$VT->filter($_POST["durum"]);
       $guncelle=$VT->SorguCalistir("UPDATE ".$tablo,"SET durum=? WHERE ID=?",array($durum,$ID),1);
       if ($guncelle==true) {
           echo "TAMAM";
       }
       else{
           echo "HATA";
       }
   }
   else{
      echo "BOS";
   }
}

?>

