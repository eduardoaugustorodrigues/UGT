<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Slide</title>

<SCRIPT type=text/javascript src="slide/jquery.js"></SCRIPT>
<SCRIPT type=text/javascript src="slide/jquery.jshowoff.min.js"></SCRIPT>
 <LINK rel=stylesheet type=text/css href="slide/generics.css">
<LINK rel=stylesheet type=text/css href="slide/jshowoff.css">

</head>

<body onLoad="vertical();">

<DIV class=DV_main>
<DIV class=DV_home>
<DIV id=demo>
<DIV id=slidingFeatures>

<DIV title=1>
<A id=ctl00_ContentPlaceHolder1_A1 href="javascript:void(0);"><IMG src="slide/slide-topo1.jpg" width="960" height="410"></A>
</DIV>

<DIV title=2>
<A id=ctl00_ContentPlaceHolder1_A2 href="javascript:void(0);"><IMG src="slide/slide-topo2.jpg" width="960" height="410"></A>
</DIV>

<DIV title=3>
<A id=ctl00_ContentPlaceHolder1_A3 href="javascript:void(0);"><IMG src="slide/slide-topo3.jpg" width="960" height="410"></A>
</DIV>

<DIV title=4>
<A id=ctl00_ContentPlaceHolder1_A4 href="javascript:void(0);"><IMG src="slide/8anos..png" width="960" height="410"></A>
</DIV>

<DIV title=5>
<A id=ctl00_ContentPlaceHolder_A5 href="javascript:void(0);"><IMG src="img/abonougt.png" width="960" height="410"></A>
</DIV>

<DIV title=6>
<A id=ctl00_ContentPlaceHolder1_A6 href="javascript:void(0);"><IMG src="img/faceugt.png" width="960" height="410"></A>
</DIV>

<DIV title=7>
<A id=ctl00_ContentPlaceHolder1_A7 href="javascript:void(0);"><IMG src="img/outubro-rosa.png" width="960" height="410"></A>
</DIV>

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
