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
	document.getElementById('the_iframe').style.overflow = "auto"; 
	}
	
	
	function click() {
        if ($('#hd_image').css('display') == 'block') {
            $('#hd_image').css('display', 'none');
        } else {
            $('#hd_image').css('display', 'block');
        }
    }
	/*1. */
	
	
 /*2.
   $(".cli").click(function() { 

    $("#hd_image").hide();
	});
     */
    
function sub(index) {
		if (index == 1) 
		{
			frm.action = 'index.php';
		}
		if (index == 2)
		{
			frm.action = './join.php';
		}
	}

  </script>

</head>

<body>

<header>

<h1 style="text-align : center;"> Self - Portroit </h1>
<!--

  -->
<div id="hd_image" style="text-align : center;">
  <img src="../../image/main1.jpg" width="500px">
 </div>
  
</header>

<form name="frm" method="post" style="text-align : center; margin-top : 20px;">
  <input type="button" value="Login" onclick="sub(1)">
  <input type="button" value="Sign up" onclick="sub(2)">
  </form>



</body>
<footer> 
  <div>
    <br><span>������ : ȣ�����б� ��ǻ�Ͱ��к�</span> <span> | </span>
    <span> 20181194 ������ </span> <span> | </span>
  </div>
</footer>
</html>


<!--
���� ���������� �α���/ȸ������/�α׾ƿ� ��ư �����
<form name="frm" method="post" style="text-align : right;">
  <input type="button" value="Login" onclick="sub(1)">
  <input type="button" value="Sign up" onclick="sub(2)">
  </form>
  
  function sub(index) {
		if (index == 1) 
		{
			frm.action = 'index.php';
		}
		if (index == 2)
		{
			frm.action = './join.php';
		}
	}
  -->