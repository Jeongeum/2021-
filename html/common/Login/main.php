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
<h5>����̼��� 2021�� ��ݱ� ��ȹ��</h5>
<h2>�ſ� ���� �ſ�</h2>
<hr style="float:left; width:10%;"><br>
<p>2021�� ����̼����� <<�ſ� ���� �ſ�>>�� �����ε��� ������ �鿩�ٺ��� �ϴ� �ſ�� ���� �ð��� �����ϰ��� ��ȹ�Ǿ����ϴ�.
����� �츮 ������ �ٰ��� ��Ÿ����(Metaverse | ������ �ǹ��ϴ� ��Ÿ Meta�� ���� ���踦 �ǹ��ϴ� ���Ϲ��� Universe�� �ռ���)�� ���� ������ ������ �մϴ�.<br>
<br>��ǰ �ӿ� ������ �۰��� �ſ��� ���� �츮�� ������ �鿩�ٺ��� �� �ȿ��� '�ſ� ���� �ſ�'ó�� ������ ���ĵǴ� �ھƿ� ���踦 �������ʽÿ�.
�׸��� ���ο� ������ ������ �ھư� �ᱹ ������ �ڽ��� �����ϰ� �ִ� ���� ������ �������ñ� �ٶ��ϴ�.</p>
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
<input type="button" id="button1" value="������" onclick="fn_index('be');"/>
</div>
<h3 id = "YM" style="text-align:center; margin:5px; padding-right:110px;"></h3>

<div class="btn_right">
<input type="button" id="button2" value="������" onclick="fn_index('ne');"/>
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
		
		var today = new Date();  //���� ��¥ 
		var year = today.getFullYear();  
		var month = '0' + (today.getMonth() + 1); 
		var tmp_month = document.getElementById('fom_ym').value;
		
		if(tmp_month != "") {
			document.getElementById("YM").innerHTML = tmp_month + "���� ��ǰ";
			document.getElementsByName('ym_index').value = year + '-' + tmp_month;
			document.getElementsByName('ymname').value = tmp_month;
		}
		else {
			document.getElementsByName('ym_index').value = year + '-' + month;
			document.getElementsByName('ymname').value = month;
			document.getElementById("YM").innerHTML = month + "���� ��ǰ";
			
		}
		
	}
	
	function fn_index(fg) {
		var today = new Date();  //���� ��¥ 
		var year = today.getFullYear();  
		var month = document.getElementsByName('ymname').value;
		
      if(fg == 'be')   
	  {
		month = ('0' + (month - 1)).slice(-2);
		if(month == 0) 
		{
			month = 12; //�̹��⵵ 12���� ������.
		}
	  } 
	  else
	  {
	
		month = Number(month) + 1;
		month = ('0' + month).slice(-2);
		
		if(month == 13)
		{
			year = year;
			month = '0'+1; //�̹��⵵ 1���� ������.
		}
      }
	  
	  document.getElementById('fom_index').value = year + '-' + month;
      document.getElementById('fom_ym').value = month;
		
      
      console.log('value = ' + document.getElementById('fom_index').value );
      console.log('mm = ' + document.getElementById('fom_ym').value);
	  
	document.frm.submit();
   }
  
  
 /*�˾�â ���� �Լ�*/
 $(document).ready(function(){
		
		// ����� ��Ű���� Y�� �ƴ϶�� �˾�â�� ����
		if ($.cookie("nopopup") != "Y") {
			window.open("popup.html", "win_popup", "width=700, height=500, left=100, top=100");
		}
		
		// ����� ��Ű "nopopup" ���� "Y"�� �����ϰ� �������� ���ε�
		$("#clear_option").click(function(){
			
			// ��ũ�� ������ �̵� �Ӽ� ���� ����
			event.preventDefault(); 
			// ��Ű���� "N"���� ����
			$.cookie("nopopup", "N");
			// ������ ���ε�
			window.location.reload();
		});
	});
  </script>
</body>
</html>