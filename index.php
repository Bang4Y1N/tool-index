<html>
<head>
<title>[+] Tool Online [+]</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="https://i.imgur.com/PTZAJzq.png">
<link rel="icon" href="https://i.imgur.com/PTZAJzq.png" type="image/x-icon">
</head>
<body oncontextmenu="return false" onkeydown="return false" onmousedown="return false">
<meta name="description" content="Kumpulan tool online untuk hacking">
<meta property="og:description" content="Kumpulan tool online untuk hacking">
<meta name="copyright" content="Tool">
<meta name="theme-color" content="#000">
<center>
<style>
body {
 font-family: ubuntu;
	background:url('https://i.imgur.com/wpHcYs4.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
	.footer-greetings {
			left: 0;
			bottom: 0;
			position: fixed;
			background: #1c1c1c;
			width: 100%;
			height: 21px;
			display: flex;
			justify-content: center;
			align-items: center;
			border-top-right-radius: 20px;
			border-top-left-radius: 20px;
	}
	.footer-greetings p {
			color: #888;
			font-size: 11px;
			font-family: 'Roboto Mono';
	}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<script type="text/javascript">

var snowmax=35
var snowcolor=new Array("#AAAACC","#DDDDFF","#CCCCDD","#F3F3F3","#F0FFFF")
var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")
var snowletter="*"
var sinkspeed=0.6
var snowmaxsize=22
var snowminsize=8
var snowingzone=1

// Do not edit below this line
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent 
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)  
var browserok=ie5||ns6||opera

function randommaker(range) {		
	rand=Math.floor(range*Math.random())
    return rand
}

function initsnow() {
	if (ie5 || opera) {
		marginbottom = document.body.clientHeight
		marginright = document.body.clientWidth
	}
	else if (ns6) {
		marginbottom = window.innerHeight
		marginright = window.innerWidth
	}
	var snowsizerange=snowmaxsize-snowminsize
	for (i=0;i<=snowmax;i++) {
		crds[i] = 0;                      
    	lftrght[i] = Math.random()*15;         
    	x_mv[i] = 0.03 + Math.random()/10;
		snow[i]=document.getElementById("s"+i)
		snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
		snow[i].size=randommaker(snowsizerange)+snowminsize
		snow[i].style.fontSize=snow[i].size
		snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
		snow[i].sink=sinkspeed*snow[i].size/5
		if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
		if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
		if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
		if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
		snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
		snow[i].style.left=snow[i].posx
		snow[i].style.top=snow[i].posy
	}
	movesnow()
}

function movesnow() {
	for (i=0;i<=snowmax;i++) {
		crds[i] += x_mv[i];
		snow[i].posy+=snow[i].sink
		snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);
		snow[i].style.top=snow[i].posy
		
		if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
			if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
			if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
			if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
			if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
			snow[i].posy=0
		}
	}
	var timer=setTimeout("movesnow()",50)
}

for (i=0;i<=snowmax;i++) {
	document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
	window.onload=initsnow
}
</script>
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Abel);
@import url(http://fonts.googleapis.com/css?family=Iceberg);

*, body, html{cursor: url(http://cur.cursors-4u.net/cursors/cur-9/cur863.ani), url(http://cur.cursors-4u.net/cursors/cur-9/cur863.png), default !important;}
html {background: #111111;color: #ffffff;font-family: 'Iceberg';font-size: 13px;width: 100%;}
li {display: inline;margin: 5px;padding: 5px;}
table, th, td {border-collapse:collapse;font-family: Tahoma, Geneva, sans-serif;background: transparent;font-family: 'Iceberg';font-size: 13px;}
.table_home, .th_home, .td_home {border: 1px solid #ffffff;}
.table_home tr:hover {background-color: green;}
.th_home tr:hover{background-color: #1a1a1a;}
.wenk{color: lime;}
th {padding: 10px;}
a {color: #ffffff;text-decoration: none;}
a:hover {color: gold;text-decoration: underline;text-shadow: 0pt 0pt 0.9em lime, 0pt 0pt 0.9em lime;color: #00ff00;text-decoration: none;}
#tangina:hover{ background-color: #1a1a1a; }
b {color: gold;}
input[type=text], input[type=password],input[type=submit] {background: transparent;color: #ffffff;border: 1px solid #ffffff;margin: 5px auto;padding-left: 5px;
    font-family: 'Abel';font-size: 13px;}
textarea {border: 1px solid #ffffff;width: 100%;height: 400px;padding-left: 5px;margin: 10px auto;resize: none;background: transparent;color: #ffffff;font-family: 'Abel';font-size: 13px;}
select {background: transparent;color: #ffffff;border: 1px solid #ffffff;margin: 5px auto;padding-left: 5px;font-family: 'Abel';font-size: 13px;}
.but {background: transparent;color: #ffffff;border: 1px solid #ffffff;margin: 5px auto;padding-left: 5px;font-family: 'Abel';font-size: 13px;}
li a:hover{text-shadow: 0pt 0pt 0.99em lime, 0pt 0pt 0.99em lime;color: #00ff00;text-decoration: none;}
.th_home, .titulo {text-shadow: 0pt 0pt 0.99em lime, 0pt 0pt 0.99em lime;color: #00ff00;text-decoration: none;}
.board {text-align: center;border: 1px solid rgba(255,180,0,0.4);border-radius: 4px;width: 500px;}
.board p {font-size: 65px;font-family: 'Monoton', cursive;color: #fff;text-transform: uppercase;padding: 0;margin: 0;}

</style><br>
<center>
<font size=4 face=courier>Kumpulan Tool Online by <font color=yellow>Bang4Y1N</font>
<style>img[alt="www.000webhost.com"]{display:none;}</style><center>
<img src=https://i.imgur.com/3UNL6yA.png height="220" width="220" opacity="50">
<center><font color=#c6c5c4 size=2 face=courier new>[ <font color=#006400 face=courier new>bang4y1n@protonmail.com<font color=#c6c5c4> ]</font></center>
<center><font color=#00FF00 size=2 >Github : </font><a href="https://github.com/Bang4Y1N">https://github.com/Bang4Y1N</a><br>
<center><font color=#00FF00 size=2 >My Blog : </font><a href="https://bang4y1n.my.id">https://bang4y1n.my.id</a><br>
<center><font color=#00FF00 size=2 >Link : </font><a href="https://smcyber45.my.id">https://smcyber45.my.id</a><br>
<a href=http://nangluc.vn/upload/hinhanh/tool/comment.php target=_blank>Ada Saran Tool ? <font color=yellow>Comment disini</a>
<center><br><b><u></b></u><font size=5 face=helvetica color=#ffa500>List Tool</font><br>
<a href=http://nangluc.vn/upload/hinhanh/tool/test.php target=_blank><font size=4>[+] CSRF Balitbang 3.5.3 [+]</a><br>
<a href=http://nangluc.vn/upload/hinhanh/tool/inijso.php target=_blank><font size=4>[+] JSO Creator [+]</a><br>
<a href=http://nangluc.vn/upload/hinhanh/tool/CSRF.php target=_blank><font size=4>[+] CSRF Online[+]</a><br>
<a href=http://nangluc.vn/upload/hinhanh/tool/encode.php target=_blank><font size=4>[+] Encode & Decode Tools [+]</a><br>
<a href=http://nangluc.vn/upload/hinhanh/tool/finder.php target=_blank><font size=4>[+] Fast Admin Finder [+]</a><br>
<a href=https://contabililondra.co.uk/css/mailer.php target=_blank><font size=4>[+] Email Bomber [+]</a><br>
<a href=http://nangluc.vn/upload/hinhanh/tool/deface.php target=_blank><font size=4>[+] Script Deface Generator [+]</a><br>
<a href=http://nangluc.vn/upload/hinhanh/tool/webdav.php target=_blank><font size=4>[+] WebDav Mass Deface [+]</a><br>
<a href=http://nangluc.vn/upload/hinhanh/tool/elfinder.php target=_blank><font size=4>[+] elFinder Auto Exploit [+]</a><br>
<a href=http://nangluc.vn/upload/hinhanh/tool/iplookup.php target=_blank><font size=4>[+] IP Lookup [+]</a><br><br>
<a href=index2.php><font size=3><b>NEXT</b></font></a><br>
<font size=1>
<?php
print "".$_SERVER['REMOTE_ADDR'];
?>
<html>
<br>
<?php
print "" .$_SERVER['HTTP_USER_AGENT'];
?>
<?php
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);
?>
<div class="footer-greetings"></font>
<marquee><font face=courier size=1 color=white>Our Team : <i>BANG4Y1N | DENNIS | ELVARI | FIRMAN | GILANG | HMEI7 (dlOrds7) | IRS HACKED | LUZKARA17 | MANUSIA HOMO | MCA.RD | MR.G0Y4N9 | MR.FR3ASTEA | MR.FREEZE | MR.I0U5 | MR.L | MŘ.SQŰ3ŘP4ÑŤ§ | NABIL | PRASS | PRASETYO | RAF$ | RIDWAN | RIFKY | ROBBY MAULANA | TAMA | TEGAR | TN.CHA0S A.I.T | X ONE | メᶜᵞᴮᴱᴿ | YONI08 | Z41D4N | ./KAL6666G05T</i> -+- We Are <b>Sabang Merauke Cyber 45</marquee>
