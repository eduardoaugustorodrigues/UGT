<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Noticias</title>
<link rel="stylesheet" type="text/css" href="style.css?version=new" />
<script type="text/javascript" src="js/jquery-1.8.2.js" ></script>
<script type="text/javascript" src="js/jquery-ui-1.9.0.custom.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui-tabs-rotate.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 7000, true);
	});
</script>
<style type="text/css">
#featured ul.ui-tabs-nav {
  width: 198px !important;
  overflow: hidden;
}
</style>
</head>
<body>
		<div id="featured" >
		  <ul class="ui-tabs-nav">
 <?php 
$cont =  1;
$modInfo     = new DOMDocument();
$modInfo->load('slide-noticia.xml');
$moduloInfo = $modInfo->getElementsByTagName( "noticia" );							  
foreach($moduloInfo as $itemModuloInfo ){
$Ids  = $itemModuloInfo->getElementsByTagName("id");
$Id   = $Ids->item(0)->nodeValue;

$urls  = $itemModuloInfo->getElementsByTagName("url_imagem");
$url   = $urls->item(0)->nodeValue;

$resumos  = $itemModuloInfo->getElementsByTagName("resumo_titulo");
$resumo   = $resumos->item(0)->nodeValue;

$cont = $cont + 1;
?>           
<li class="ui-tabs-nav-item" id="nav-fragment-1"><a href="#fragment-<?php echo $cont ?>"><img src="<?php echo $url ?>" width="80" height="50" /><span><?php echo $resumo ?>﻿</span></a></li>
<?php 
}
?>
	      </ul>

 <?php 
$cont =  1;
$modInfo     = new DOMDocument();
$modInfo->load('slide-noticia.xml');
$moduloInfo = $modInfo->getElementsByTagName( "noticia" );							  
foreach($moduloInfo as $itemModuloInfo ){
$Ids  = $itemModuloInfo->getElementsByTagName("id");
$Id   = $Ids->item(0)->nodeValue;

$urls  = $itemModuloInfo->getElementsByTagName("url_imagem");
$url   = $urls->item(0)->nodeValue;

$titulos  = $itemModuloInfo->getElementsByTagName("titulonormal");
$titulo   = $titulos->item(0)->nodeValue;

$cont = $cont + 1;
?>           
	    <!-- First Content -->
	    <div id="fragment-<?php echo $cont ?>" class="ui-tabs-panel" style="">
			<img src="<?php echo $url ?>" width="400" height="250" />
			 <div class="info" style="width:100%">
             	<a href="index.php?paginaurl=noticia&n=<?php echo $Id ?>" target="_top">
				<h2><?php echo $titulo ?></h2>
				<p>Veja +</p>
             	</a>
			 </div>
	    </div>
<?php
}
?>	
		

		</div>
	</div>


</body>
</html>