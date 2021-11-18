<?
/* DB 접속 정보 */
$host   = 'localhost';  // 데이터베이스 서버 주소
$myUser = 'jeongeum';        // 데이터베이스 사용자 ID
$myPw   = '1202';  // 데이터베이스 사용자 PASSWD
$myDb   = 'test_db';    // 데이터베이스 명

$id=$_POST['id'];
$pw=$_POST['password'];

/* DB 접속 */
$conn = mysqli_connect($host,$myUser,$myPw,$myDb);

if (!$conn || mysqli_error($conn))
{
    die ('could not connect');
}

/* SELECT TEST */
$sql = "SELECT pw
          FROM aje
		  WHERE id = '$id'
        ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
   while($row = mysqli_fetch_assoc($result))
   {
      if($row['pw']==$pw) 
	  {
		  
		   echo '<script>
		  alert("로그인 되었습니다.");
		  location.replace("./frame_set.php");
		  </script>';
		   
	  }
	  else {
		  echo '<script>
		  alert("아이디 혹은 비밀번호가 잘못되었습니다.");
		  history.back(); 
		  </script>';
	       }
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