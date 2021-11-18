<?
include 'admin_member.class';
$obj = new member();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/admin.css">
    <title></title>
  </head>
  <body>
    <div class="wrapper">
			<a href="./home.html"><img src="로고1.png"></a>
		</div>
		<ul class="nav">
			<li><a href="../car/home.html">홈</a></li>
			<li><a href="../car/소개.html">소개</a></li>
			<li><a href="../car/등록.html">등록 및 조회</a>
						<ul class="sub">
							<li><a href="../car/등록.html">기본정보/정비내역 등록</a></li>
							<li><a href="../car/조회.html">이력 조회</a></li>
						</ul>
			</li>
			<li><a href="./주행거리입력.html">주행거리 입력</a></li>
		</ul>

    <div class="cont">
      <div class="title"><h2>사용자 관리</h2></div>
      <div class="user_table">
      <table>
	  <th>번호</th>
	  <th>ID</th>
	  <th>E-MAIL</th>
	  <th>파일</th>
	  <th>인증여부</th>
	  
        <?
		echo $obj->table_member();
		?>
      </table>
    </div>
    </div>
  </body>
  <footer>
    <p>중고차 사기 방지를 위한 <b>블록체인 기반</b> 자동차 정비이력 시스템 </p>
      <p>호서대학교 컴퓨터공학부 캡스톤디자인 12조</p>
  </footer>
</html>
