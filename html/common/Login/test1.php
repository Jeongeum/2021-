<?
/* DB 접속 정보 */
$host   = 'localhost';  // 데이터베이스 서버 주소
$myUser = 'jeongeum';        // 데이터베이스 사용자 ID
$myPw   = '1202';  // 데이터베이스 사용자 PASSWD
$myDb   = 'test_db';    // 데이터베이스 명

/* DB 접속 */
$conn = mysqli_connect($host,$myUser,$myPw,$myDb);

if (!$conn || mysqli_error($conn))
{
    die ('could not connect');
}

/* SELECT TEST */
$sql = "SELECT ID
             , PW
			 , EMAIL
			 , HP
          FROM aje
		  
        ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
   while($row = mysqli_fetch_assoc($result))
   {
      echo "컬럼01: " . $row["ID"]. " 컬럼02:" . $row["PW"]. " 컬럼03:" . $row["EMAIL"]. " 컬럼04:" . $row["HP"]."<br>";
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
mysqli_close($conn);
?>