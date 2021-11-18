<?

?>

<html>
<head>
  <title>main0716</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/new.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@500&display=swap" rel="stylesheet">



<style type="text/css">
  a:link { color: #777; text-decoration: none;}
 a:visited { color: #777; text-decoration: none;}
 a:hover { color: #777; text-decoration: underline;}
</style>

  <script language="javascript">
	function calcHeight() { 
	/*var the_height = document.getElementById('the_iframe').contentWindow. document.body.scrollHeight; 
	document.getElementById('the_iframe').height = the_height; */
	document.getElementById('the_iframe').style.overflow = "hidden"; 
	}
	
	/*$(document).ready(function () {
	$(document).on("click",".cli", function () {
	 $("#hd_image").hide();
	})
	});*/
	
	function sub(index) {
		if (index == 1) 
		{
			frm.action = '../../index.php';
		}
		if (index == 2)
		{
			frm.action = 'join.php';
		}
	}
	
  </script>

</head>

<body>

<header>


<div id="hd_image" style="text-align : center;">
  <img src="../../image/795a0c16237f573a17730522e2bcce7b.png" width="500px">
</div>
  
<nav>
<ul class="bar">
  <li class="cli"><a href="frame_set.php">HOME</a></li>
  <li class="cli"><a href="intro.php" target="iframe" >ABOUT</a>
    <ul class="sub">
      <li class="cli"><a href="intro.php" target="iframe" >미술관 소개</a></li>
      <li class="cli"><a href="visit.php" target="iframe" >오시는 길</a></li>
    </ul>
  </li>
  <li class="cli"><a href="notice.php" target="iframe">NOTICE</a></li>
  <li class="cli"><a href="ing.php" target="iframe">EXHIBITION</a>
    <ul class="sub">
      <li class="cli"><a href="ing.php" target="iframe">진행중인 전시</a></li>
      <li class="cli"><a href="end.php" target="iframe">종료된 전시</a></li>
    </ul></li>
	<li class="cli"><a href="qa.php" target="iframe">Q&A </a></li>
</ul>
</nav>
</header>

<section> 
 <iframe name="iframe" id="the_iframe" onload="calcHeight();" src="main.php" style="width:100%; height:100%;"
 frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling="no" vspace=0></iframe>
</section>

</div>

<footer> 
  <div>
    <br><span>만든이 : 호서대학교 컴퓨터공학부</span> <span> | </span>
    <span> 20181194 안정음 </span> <span> | </span>
  </div>
</footer>

</body>
</html>