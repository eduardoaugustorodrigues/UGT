<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UGT- União Geral dos Trabalhadores Distrito Federal</title>
<style type="text/css">
body {
	background-color: #FFFFFF;
	margin: 0;
	padding:0;
	text-align:center;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
#tudo {
	position:relative;
	width: 960px;
	margin: 0 auto;
	text-align:left;
}
.menuTopo{
	width:100%; 
	height:28px; 
	background:url(img/menu.png); 
	text-align:center;
	padding-top:7px;
	padding-bottom:0px;
}
.menuTopo a {
	font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	color:#FFFFFF;
	font-size:14px;
	text-decoration:none;
}
.menuTopo span {
	font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	color:#FFFFFF;
	font-size:14px;
	text-decoration:none;
	font-weight:bold;
	padding-right:5px;
	padding-left:5px;
}
.areaSlide{
	margin:0px; 
	padding:0px; 
	width:960px; 
	height:410px;
}
#slide {
	position:absolute;
	left:0px;
	top:35px;
	width:960px;
	height:410px;
	z-index:1;
}
#logo {
	position: absolute;
	right: 1px;
	top: 452px;
	width: 444px;
	height: 189px;
	z-index: 1;
}
.cssiframe{
	border:none;
	overflow-x:hidden;
	overflow-y:hidden;
	width:960px;
	height:410px;
}
.maisnoticias{

text-decoration:none;	

color:#474747;

font-size:12px;

}

</style>


</head>

<body>
    <div id="tudo">
    
        <div class="menuTopo">
            <a href="index.php">Home</a>
            <span>|</span>
            <a href="?paginaurl=historico">Histórico</a>
            <span>|</span>
            <a href="?paginaurl=presidencia">Presidência</a>
            <span>|</span>
            <a href="?paginaurl=diretoria">Diretoria</a>
            <span>|</span>
            <a href="?paginaurl=filiacao">Filiação</a>
            <span>|</span>
            <a href="?paginaurl=ver-artigos">Artigos</a>
             <span>|</span>
            <a href="?paginaurl=ver-documentos">Documentos</a>
            <span>|</span>
            <a href="?paginaurl=faleconosco">Fale conosco</a>
            <span>|</span>
            <a href="http://webmail.ugtdf.org.br/" target="_blank"> Webmail</a>
        </div>
        <?php
        include('noticia-titulo.php');
        function noticia($id, $css, $titulo){
            if($css == "verm"){
            $css2 = ' style="text-decoration:none; color:#b50000; font-size:18px;"';
            }else if($css == "padr"){
            $css2 = ' style="text-decoration:none; color:#474747; font-size:13px;"';
            }
            echo $mostarNoticia = '<a href="index.php?paginaurl=noticia&n='.$id.'"'.$css2.'>'.$titulo.'</a>';
            return $mostarNoticia;
        }
        ?>
        <div class="areaSlide">
            <div id="slide">
                <iframe name="slide" src="slide.php" scrolling="no" frameborder="0" class="cssiframe" allowTransparency="true"></iframe>
            </div>
        </div>
    
        <div style="float:left; width:622px; margin-bottom:5px;"><?php if(@$_GET[paginaurl]==""){ ?>
            <div style="float:left; width:622px; background:#f0f0f0;">
                <div style="float:left; width:582px; color:#474747; font-size:22px; font-weight:500; padding-top:15px;">&nbsp;Destaque da semana</div>
                <div style="float:right; width:40px; height:41px;"><img src="img/detalhe.png" width="40" height="41"></div>  
                
    
                <div style="width:100%;clear:both; text-align:center; padding-top:10px;">
        <a href="index.php?paginaurl=noticia&n=420" style="text-decoration:none; font-size:31px; color:#000000;"><img src="img/capa-01-06-2015.jpg" width="588" height="180"  alt=""/></a></div>
                <div style="width:97%;clear:both; padding-left:8px; color:#474747; font-size:13px; padding-top:5px;">Dia Mundial de Combate ao Trabalho Infantil <a href="index.php?paginaurl=noticia&n=420">Veja +</a> 
                </div>
                
                <hr>
              <div style="float:left; width:247px; padding-top:10px; padding-left:10px; margin-bottom:20px;">
                 
                    <?php for ($iNot = $totoalNoticias; $iNot >= ($totoalNoticias - 1); $iNot--) {
					$i=$iNot; noticia($i, 'verm', $noticia[$i]); ?>
                    <br>
                    <br>
                    <?php }$totoalNoticias = $i - 1;?>
                </div>
                
                <div style="float:left; width:104px;">&nbsp;</div>
                
                <div style="float:left; width:257px; padding-top:10px; margin-bottom:20px;">
                    <?php for ($iNot = $totoalNoticias; $iNot >= ($totoalNoticias - 1); $iNot--) {
					$i=$iNot; noticia($i, 'verm', $noticia[$i]); ?>
                    <br>
                    <br>
                    <?php }$totoalNoticias = $i - 1;?>
                </div>  
     
            </div>
            <div style="float:left; width:623px;">
                <div style="float:left; width:247px; padding-top:10px; padding-left:10px; margin-bottom:20px;">
                    <?php for ($iNot = $totoalNoticias; $iNot >= ($totoalNoticias - 1); $iNot--) {
					$i=$iNot; noticia($i, 'verm', $noticia[$i]); ?>
                    <br>
                    <br>
                    <?php }$totoalNoticias = $i - 1;?>
                </div>
                
                <div style="float:left; width:104px;">&nbsp;</div>
                
                <div style="float:left; width:257px; padding-top:10px; margin-bottom:20px;">
                    <?php for ($iNot = $totoalNoticias; $iNot >= ($totoalNoticias - 1); $iNot--) {
					$i=$iNot; noticia($i, 'verm', $noticia[$i]); ?>
                    <br>
                    <br>
                    <?php }$totoalNoticias = $i - 1;?>
                </div>
                
            </div>
            
            <div style="float:left; width:623px; padding-top:35px;">
            	<div style="float:left; width:302px; height:268px; background:#f0f0f0;">
                <div style="float:left; width:262px; color:#474747; font-size:22px; font-weight:500; padding-top:15px;">&nbsp;Notícias da Semana</div>
                <div style="float:right; width:40px; height:41px;"><img src="img/detalhe.png" width="40" height="41"></div>
                <?php for ($iNot = $totoalNoticias; $iNot >= ($totoalNoticias - 3); $iNot--) {?>
                <div style="width:285px; clear:both; padding-left:8px; color:#474747; font-size:13px; padding-top:12px; padding-bottom:12px;"><div style="float:left; width:265px; cursor:pointer;"><strong><?php $i=$iNot; noticia($i, 'padr', $noticia[$i]); ?></strong></div></div>
                <?php }$totoalNoticias = $i - 1;?>
                <div style="width:285px; clear:both; padding-left:8px; color:#474747; font-size:12px; padding-top:20px; padding-bottom:12px; text-align:right;"><em><span style="cursor:pointer;" onClick="location.href='index.php?paginaurl=mais-noticia'">Leia mais</span></em></div>
                </div>
                
                <div style="float:left; width:19px;">&nbsp;</div>
                
                <div style="float:left; width:302px; height:268px; background:#f0f0f0;">
                <div style="float:left; width:262px; color:#474747; font-size:22px; font-weight:500; padding-top:15px;">&nbsp;Notícias</div>
                <div style="float:right; width:40px; height:41px;"><img src="img/detalhe.png" width="40" height="41"></div>
                <?php for ($iNot = $totoalNoticias; $iNot >= ($totoalNoticias - 3); $iNot--) {?>
                <div style="width:285px; clear:both; padding-left:8px; color:#474747; font-size:13px; padding-top:12px; padding-bottom:12px;"><div style="float:left; width:265px; cursor:pointer;"><strong><?php $i=$iNot; noticia($i, 'padr', $noticia[$i]); ?></strong></div></div>
                <?php }$totoalNoticias = $i - 1;?>
                <div style="width:285px; clear:both; padding-left:8px; color:#474747; font-size:12px; padding-top:20px; padding-bottom:12px; text-align:right;"><em><span style="cursor:pointer;" onClick="location.href='index.php?paginaurl=mais-noticia'">Leia mais</span></em></div>
                
                </div>
            
            </div>
            <?php 
			}
			else if($_GET['paginaurl']=="historico"){
				include('historico.php');
			}else if($_GET['paginaurl']=="presidencia"){
				include('presidencia.php');
			}else if($_GET['paginaurl']=="diretoria"){
				include('diretoria.php');
			}else if($_GET['paginaurl']=="filiacao"){
				include('filiacao.php');
			}else if($_GET['paginaurl']=="ver-artigos"){
				include('ver-artigos.php');
			}else if($_GET['paginaurl']=="ver-documentos"){
				include('ver-documentos.php');
			}else if($_GET['paginaurl']=="artigos"){
				include('artigos.php');
			}else if($_GET['paginaurl']=="faleconosco"){
				include('faleconosco.php');
			}else if($_GET['paginaurl']=="noticia"){
				include('noticia.php');
			}else if($_GET['paginaurl']=="mais-noticia"){
				include('mais-noticia.php');
			}
			?>
    	</div>
   	  <div style="float:left; width:337px;">
       	<div style="float:left; width:337px;"><img src="img/logo.png" width="337" height="203"><br /><br /><br /></div>
        	<div style="float:left; width:337px;">
            	<img src="img/redesociais.jpg" width="300" height="60" usemap="#Map" border='0' style="margin-left:30px">
                <map name="Map">
                  <area shape="rect" coords="6,3,62,54" href="https://www.facebook.com/ugtbrasilia" target="_blank">
                  <area shape="rect" coords="73,3,121,54" href="https://twitter.com/UGTDF" target="_blank">
                  <area shape="rect" coords="125,3,176,58" href="http://www.youtube.com/user/tvugt" target="_blank">
                  <area shape="rect" coords="189,3,237,57" href="https://plus.google.com/114230913011395846400#114230913011395846400/posts" target="_blank">
                  <area shape="rect" coords="245,4,303,63" href=" https://instagram.com/ugtbrasilia   " target="_blank">
                </map>
                <br><br>
        	</div>
       	<div style="float:left; width:337px;">
            	<iframe src="http://www.facebook.com/plugins/likebox.php?id=450355301739206&amp;width=313&amp;connections=9&height=265" scrolling="no" align="right" frameborder="0" style="border:none; overflow:hidden; width:313px; height:265px;" allowTransparency="true"></iframe><br><br>
        </div>
        	<div style="float:left; width:337px; padding-top:20px; text-align:right;">
             	<a href="http://www.oit.org.br/content/trabalho-decente-e-combate-pobreza"><img src="img/trabalho_decente.jpg" width="313" height="227" alt="Trabalho Decente"></a>
           </div>

        	
		</div>
        <div style="float:left; margin-top:20px; width:100%; background:#b50000;">
            <div style="float:left; width:90%; padding-top:20px; padding-left:7px; color:#FFFFFF; font-size:36px; font-weight:bold; padding-bottom:30px;">.: UGT DIGITAL</div>
          <div style="float:left; width:100%;">
          		<div style="float:left; width:7px; height:200px;">&nbsp;</div>                
            	<div style="float:left; width:296px; border: solid 2px #FFFFFF; color:#FFFFFF; font-size:14px;">
                <iframe width="296" height="148" src="https://www.youtube.com/embed/oUhrZ1nW2d4" frameborder="0" allowfullscreen></iframe>
                <div style="width:286px; clear:both; border-top: solid 2px #FFFFFF; margin-top:-3px; padding:5px; text-align:center;">Lotação dos nomeados da SES.<br><br></div>
                </div>
                <div style="float:left; width:23px; height:200px;">&nbsp;</div>
                <div style="float:left; width:296px; border: solid 2px #FFFFFF; color:#FFFFFF; font-size:14px;">
                <iframe width="296" height="148" src="https://www.youtube.com/embed/j-MRBja5zY8" frameborder="0" allowfullscreen></iframe>
                <div style="width:286px; clear:both; border-top: solid 2px #FFFFFF; margin-top:-3px; padding:5px; text-align:center;">Banco terá que reintegrar trabalhador dispensado durante lic</div>
                </div>
                <div style="float:left; width:23px; height:200px;">&nbsp;</div>
                <div style="float:left; width:296px; border: solid 2px #FFFFFF; color:#FFFFFF; font-size:14px;">
                <iframe width="296" height="148" src="https://www.youtube.com/embed/WbopjB2sonY" frameborder="0" allowfullscreen></iframe>
                <div style="width:286px; clear:both; border-top: solid 2px #FFFFFF; margin-top:-3px; padding:5px; text-align:center;">Administração em tempo de crise - Adm. Joel Jorge</div>
                </div>
            </div>
        	
            <div style="width:100%;clear:both; padding-bottom:8px; padding-top:30px; text-align:center; color:#ffffff; font-size:13px; background:#b50000;">
            UGT - UNIÃO GERAL DOS TRABALHADORES<br> 
            <br>
            <div style="font-size:12px; color: #FFFFFF; text-align:left; margin-left:2px;">
            <table border="0" cellpadding="0" cellspacing="0" style="margin-left:5px; margin-top:5px;">
            <tr>
            <td style="padding-right:3px;">Fone:</td><td>(61) 3244-0824</td>
            </tr>
            <tr>
            <td style="padding-right:3px;">Endereço:</td><td>SEP SUL EQ 707/907 - Conj. E N. 10 Sl 512, Ed. San Marino.</td>
            </tr>
            <tr>
            <td style="padding-right:3px;">CEP:</td><td>70.390-078 - Brasília/DF</td>
            </tr>
            <tr>
            <td style="padding-right:3px;">E-mail:</td><td> ugtbrasilia@gmail.com</td>
            </tr>
            <tr>
              <td style="padding-right:3px;">Site:</td>
              <td>www.ugtbrasilia.com.br</td>
            </tr>
            <tr>
            <td style="padding-right:3px;">Facebook:</td><td> facebook.com/ugtbrasilia </td>
            </tr>
            <tr>
            <td style="padding-right:3px;">Twitter:</td><td> twitter.com/UGTDF</td>
            </tr>
            </table>
            </div>
            
            <div  style="width:100%;clear:both; text-align:right;">
            Desenvolvido por <a href="http://x3sistemas.com.br/" target="_blank" style="text-decoration:none; color:#FFFFFF; font-weight:bold;">X3 Sistemas</a>&nbsp;&nbsp;
            </div>
            </div>
            
            
        	
        </div>

    
    
    </div>




</body>
</html>