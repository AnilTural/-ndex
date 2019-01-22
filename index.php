

 <!DOCTYPE html>
<html>


<head>
<title>Page Title</title>
</head>


<body>

<h1> Php CRUD Islemleri </h1>

<div id= "menu">

 <a href ="index.php"> Ana Sayfa </a> <br /> <br />
 <a href ="index.php?sayfa=ekle"> Kayit Ekle </a> <br /> <br />
 <a href ="index.php?sayfa=sil"> Sil </a>  <br /> <br />
 <a href ="index.php?sayfa=duzenle"> Duzenle </a>  <br /> <br />
 <a href ="index.php?sayfa=listele"> Listele </a>
 
</div>

<div id= "icerik">
$link = mysql_connect('hostname','dbuser','dbpassword'); 
<?php

include("baglanti.php");


$sayfa = @$_GET["sayfa"];
switch($sayfa) {
	
	
	case "ekle" ;
	include ("ekle.php");
	break;
	
	case "sil" ;
	include ("sil.php");
	break;
	
	case "duzenle" ;
	include ("duzenle.php");
	break;
	
	case "listele" ;
	include ("listele.php");
	break;
	
	default;
	include("anasayfa.php");
	break;

               }






</div>



</body>


</html> 



