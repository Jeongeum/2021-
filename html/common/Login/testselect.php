   <?
   

   /* DB 접속 정보 */
$host   = 'localhost';  // 데이터베이스 서버 주소
$myUser = 'jeongeum';        // 데이터베이스 사용자 ID
$myPw   = '1202';  // 데이터베이스 사용자 PASSWD
$myDb   = 'test_db';    // 데이터베이스 명

$month=$_POST['month'];
$aa="";
//$path = '../../image';

/* DB 접속 */
$conn = mysqli_connect($host,$myUser,$myPw,$myDb);

if (!$conn || mysqli_error($conn))
{
    die ('could not connect');
}


// 실행
$sql = "SELECT img_date,
                   img_name,
                   img_path											  
            FROM gallery 
			where date_format(img_date,'%m') = 07
			";//img_date의 월이 7인 것.


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
   echo "테이블에 데이터가 없습니다.";
}

if($result === false)
{
    echo mysqli_error($conn);
}
mysqli_close($conn); /* DB 종료 */


  
/*
//2.
if ($result)
{
		  echo '<script>
		  alert("가입 되었습니다.");
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
<button name="month">7월</button>
<button name="best" onclick="best_select.php">인기</button>
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


