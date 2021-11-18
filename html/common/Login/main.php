<?
include ('select_img(test).class');
?>

<html>
<head>
  <title>main0716</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@500&display=swap" rel="stylesheet">
<script src ="http://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="plugins/cookie/jquery.cookie.js"></script>
  
  
<style type="text/css">
  a:link { color: #777; text-decoration: none;}
 a:visited { color: #777; text-decoration: none;}
 a:hover { color: #777; text-decoration: underline;}
</style>

  
</head>

<body onload="fninit()">
<?
$obj = new select_img();
?>

<header>
</header>


<div class="main">



<div class="slide2">
    <ul>
	<li><img src='../../image/top1.jpg'></li>
	<li><img src='../../image/top2.jpg'></li>
	<li><img src='../../image/top3.jpg'></li>
	<li><img src='../../image/top4.jpg'></li>
    </ul>
</div>
<hr><hr>
<section id="top">
<div id="img">
<img src="../../image/unnamed.jpg">
</div>

<div class="text" style="float:left;">
<h5>서울미술관 2021년 상반기 기획전</h5>
<h2>거울 속의 거울</h2>
<hr style="float:left; width:10%;"><br>
<p>2021년 서울미술관의 <<거울 속의 거울>>은 현대인들의 내면을 들여다보게 하는 거울과 같은 시간을 마련하고자 기획되었습니다.
어느새 우리 곁으로 다가온 메타버스(Metaverse | 가공을 의미하는 메타 Meta와 현실 세계를 의미하는 유니버스 Universe의 합성어)에 대해 생각해 보고자 합니다.<br>
<br>작품 속에 입혀진 작가의 거울을 통해 우리의 내면을 들여다보고 그 안에서 '거울 속의 거울'처럼 무한히 증식되는 자아와 세계를 만나보십시오.
그리고 새로운 세상의 수많은 자아가 결국 본래의 자신을 형성하고 있는 예술 경험을 느껴보시기 바랍니다.</p>
</div>
<br>
</section>
<hr>
<hr>

<section id="middle">
 <div id="video">
  <div class="video_set">
<iframe width="100%" height="350" src="https://www.youtube.com/embed/NXiEoSjVvK0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
<div class="video_set">
<iframe width="100%" height="350" align="right" src="https://www.youtube.com/embed/0r54AhFiHy4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</div>
</section>
<hr>
<hr>

<form method="post" name="frm" id="frm" action="<?$_server['php_self']?>">
<input type="hidden" id="fom_index" name="ym_index" value="<?=$_POST['ym_index']?>"/>
<input type="hidden" id="fom_ym" name="ymname" value="<?=$_POST['ymname']?>"/>
<div class="btn_left">
<input type="button" id="button1" value="이전달" onclick="fn_index('be');"/>
</div>
<h3 id = "YM" style="text-align:center; margin:5px; padding-right:110px;"></h3>

<div class="btn_right">
<input type="button" id="button2" value="다음달" onclick="fn_index('ne');"/>
</div>

</form>

<div class="slide">
    <ul>
   <?
   echo $obj->gallery_select();
   ?>
    </ul>
</div>

</div>

<script language="javascript">
    
	
	function fninit() {
		
		var today = new Date();  //현재 날짜 
		var year = today.getFullYear();  
		var month = '0' + (today.getMonth() + 1); 
		var tmp_month = document.getElementById('fom_ym').value;
		
		if(tmp_month != "") {
			document.getElementById("YM").innerHTML = tmp_month + "월의 작품";
			document.getElementsByName('ym_index').value = year + '-' + tmp_month;
			document.getElementsByName('ymname').value = tmp_month;
		}
		else {
			document.getElementsByName('ym_index').value = year + '-' + month;
			document.getElementsByName('ymname').value = month;
			document.getElementById("YM").innerHTML = month + "월의 작품";
			
		}
		
	}
	
	function fn_index(fg) {
		var today = new Date();  //현재 날짜 
		var year = today.getFullYear();  
		var month = document.getElementsByName('ymname').value;
		
      if(fg == 'be')   
	  {
		month = ('0' + (month - 1)).slice(-2);
		if(month == 0) 
		{
			month = 12; //이번년도 12월로 가도록.
		}
	  } 
	  else
	  {
	
		month = Number(month) + 1;
		month = ('0' + month).slice(-2);
		
		if(month == 13)
		{
			year = year;
			month = '0'+1; //이번년도 1월로 가도록.
		}
      }
	  
	  document.getElementById('fom_index').value = year + '-' + month;
      document.getElementById('fom_ym').value = month;
		
      
      console.log('value = ' + document.getElementById('fom_index').value );
      console.log('mm = ' + document.getElementById('fom_ym').value);
	  
	document.frm.submit();
   }
  
  
 /*팝업창 관련 함수*/
 $(document).ready(function(){
		
		// 저장된 쿠키값이 Y가 아니라면 팝업창을 생성
		if ($.cookie("nopopup") != "Y") {
			window.open("popup.html", "win_popup", "width=700, height=500, left=100, top=100");
		}
		
		// 저장된 쿠키 "nopopup" 값을 "Y"로 변경하고 페이지를 리로드
		$("#clear_option").click(function(){
			
			// 링크의 페이지 이동 속성 강제 차단
			event.preventDefault(); 
			// 쿠키값을 "N"으로 변경
			$.cookie("nopopup", "N");
			// 페이지 리로드
			window.location.reload();
		});
	});
  </script>
</body>
</html>