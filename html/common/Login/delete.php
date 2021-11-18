<?
/* DB 접속 정보 */
$host   = 'localhost';  // 데이터베이스 서버 주소
$myUser = 'jeongeum';        // 데이터베이스 사용자 ID
$myPw   = '1202';  // 데이터베이스 사용자 PASSWD
$myDb   = 'test_db';    // 데이터베이스 명

$bno = $_GET['idx'];


/* DB 접속 */
$conn = mysqli_connect($host,$myUser,$myPw,$myDb);

if (!$conn || mysqli_error($conn))
{
    die ('could not connect');
}


$sql = "delete board 
          from board 
		 where idx='$bno';
	   ";
					  
$result = mysqli_query($conn, $sql);

    
    if($result) 
	  {
		 echo "<script>
		 alert('삭제되었습니다.');
		 </script>
		 
		 <meta http-equiv='refresh' content='0 url=./qa.php'>"; 
		   
	  }
	  else {
		  echo '<script>
		  alert("error.");
		  history.back(); 
		  </script>';
	       }

if($result === false)
{
    echo mysqli_error($conn);
}
mysqli_close($conn);
?>