<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Slide</title>

<SCRIPT type=text/javascript src="slide/jquery.js"></SCRIPT>
<SCRIPT type=text/javascript src="slide/jquery.jshowoff.min.js"></SCRIPT>
 <LINK rel=stylesheet type=text/css href="slide/generics-menor.css">
<LINK rel=stylesheet type=text/css href="slide/jshowoff-menor.css">
<style type="text/css">
.jshowoff P.jshowoff-slidelinks {
  POSITION: absolute;
  PADDING-BOTTOM: 0px;
  MARGIN: 0px;
  PADDING-LEFT: 0px;
  BOTTOM: 5px;
  PADDING-RIGHT: 0px;
  RIGHT: 15px;
  PADDING-TOP: 0px;
  display: none !important;
}
</style>
</head>

<body onLoad="vertical();">

<DIV class=DV_main>
<DIV class=DV_home>
<DIV id=demo>
<DIV id=slidingFeatures>
<?php
$imagem = 0;
for ($i = 1; $i <= 65; $i++) {
$imagem = $imagem +1;
?>
<DIV title=<?php echo $i ?>>
<A id=ctl00_ContentPlaceHolder1_A<?php echo $i ?> href="index.php?paginaurl=slide01" target="_top"><IMG src="slide/slide<?php echo $imagem;?>.jpg" width="313" height="150"></A>
</DIV>
<?php
}
?>

</DIV>

<SCRIPT type=text/javascript>
                $(document).ready(function() {
                    $('#slidingFeatures').jshowoff({
                        effect: 'slideLeft',
                        controlText: { play: '>', pause: '| |', previous: '<<', next: '>>' },
                        hoverPause: false
                    });
                });
	        </SCRIPT>

<SCRIPT type=text/javascript>
                $(document).ready(function() {
                    $('#thumbFeatures').jshowoff({
                        cssClass: 'thumbFeatures',
                        effect: 'slideLeft'
                    });
                });
	        </SCRIPT>
</DIV>
</DIV>
</DIV>


</body>
</html>
