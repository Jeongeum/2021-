   <?
   

   /* DB ���� ���� */
$host   = 'localhost';  // �����ͺ��̽� ���� �ּ�
$myUser = 'jeongeum';        // �����ͺ��̽� ����� ID
$myPw   = '1202';  // �����ͺ��̽� ����� PASSWD
$myDb   = 'test_db';    // �����ͺ��̽� ��

$month=$_POST['month'];
$aa="";
//$path = '../../image';

/* DB ���� */
$conn = mysqli_connect($host,$myUser,$myPw,$myDb);

if (!$conn || mysqli_error($conn))
{
    die ('could not connect');
}


// ����
$sql = "SELECT img_date,
                   img_name,
                   img_path											  
            FROM gallery 
			where date_format(img_date,'%m') = 07
			";//img_date�� ���� 7�� ��.


$result = mysqli_query($conn, $sql);

//1.
if (mysqli_num_rows($result) > 0)
{
   while($row = mysqli_fetch_assoc($result))
   { 
		  $path =$row['img_path'];
		  $name=$row['img_name'];
		  $aa .="<li><img src='$path//$name'></li>";
	  
   }
}
else
{
   echo "���̺� �����Ͱ� �����ϴ�.";
}

if($result === false)
{
    echo mysqli_error($conn);
}
mysqli_close($conn); /* DB ���� */


  
/*
//2.
if ($result)
{
		  echo '<script>
		  alert("���� �Ǿ����ϴ�.");
		  location.replace("../../index.php");
		  </script>';
	  }
if($result === false)
{
    echo mysqli_error($conn);
}*/


									   



/*while ($row = mysqli_fetch_array($result)) 
	{
?>
       <img src="http://127.0.0.1/leadstart/Bestleads/landin/Health/new/img/<? echo $row2['cimg1'] ?> "/>
        <!-- Displaying Data Read From Database -->
        <?
   }*/

?>


<html>
<head>
  <title>main0716</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@500&display=swap" rel="stylesheet">

<style type="text/css">
  a:link { color: #777; text-decoration: none;}
 a:visited { color: #777; text-decoration: none;}
 a:hover { color: #777; text-decoration: underline;}
</style>

  <script language="javascript">
  </script>
</head>

<body>
<header>
</header>


<div class="main">

<section id="top">
<div id="img">
<img src="../../image/body1.jpg">
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
<iframe width="100%" height="350" src="https://www.youtube.com/embed/SbHHSCNmYkw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="video_set">
<iframe width="100%" height="350" align="right"src="https://www.youtube.com/embed/PiW48QTK4zY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
</section>
<hr>
<hr>
<h3 style="text-align:center; margin:5px;" >Gallery</h3> 
<div class="button">
<form name="frm" method="post" action="month_select.php">
<button name="month">7��</button>
<button name="best" onclick="best_select.php">�α�</button>
</form>
</div>
<?

?>
<div class="slide">
    <ul>
	<!--/*
      <li><?echo "<img src='$path//$name'>";?></li>
      <li><?echo "<img src='$path//$name'>";?></li>
	  <li><?echo "<img src='$path//$name'>";?></li>
      <li><?echo "<img src='$path//$name'>";?></li>
	  */-->
	  
	  <?echo $aa;?>
    </ul>
</div>
</div>

</body>
</html>


