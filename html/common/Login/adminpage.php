<?

?>

<html>
<head>
  <title>main0716</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/admin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@500&display=swap" rel="stylesheet">
<script src ="http://code.jquery.com/jquery-1.12.4.js"></script>


<style type="text/css">
  a:link { color: #777; text-decoration: none;}
 a:visited { color: #777; text-decoration: none;}
 a:hover { color: #777; text-decoration: underline;}
</style>

  <script language="javascript">
  $(document).ready(function () {
	  $(document).on("click",".notice", function () {
	  $("#the_iframe").attr('src',$(this).attr('href'));
	})
	});
  </script>
</head>

<body>
<?


?>

<header>

</header>


<div class="main">

<h2>관리자 페이지</h2>
<nav>
<ul class="bar">
  <li class="cli"><a href="adminpage.php">home</a></li>
  <li class="cli"><a href="#" target="iframe" >사용자 관리</a></li>
  <li class="cli"><a href="#" target="iframe">게시물 관리</a>
    <ul class="sub">
      <li class="cli"><a href="notice.php" target="iframe">공지사항</a></li>
      <li class="cli"><a href="end.php" target="iframe">종료된 전시</a></li>
    </ul>
  </li>
</ul>
</nav>
<section id="top">
<iframe name="iframe" id="the_iframe" onload="calcHeight();" src="admin_main.php" style="width:100%; height:100%;"
 frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling="no" vspace=0></iframe>
</section>



</div>

</body>
</html>




