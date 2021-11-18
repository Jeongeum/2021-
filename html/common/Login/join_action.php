<?
/* DB 접속 정보 */
$host   = 'localhost';  // 데이터베이스 서버 주소
$myUser = 'jeongeum';        // 데이터베이스 사용자 ID
$myPw   = '1202';  // 데이터베이스 사용자 PASSWD
$myDb   = 'test_db';    // 데이터베이스 명

$id=$_POST['id'];
$pw=$_POST['pw'];
$email=$_POST['email'];
$hp=$_POST['hp'];
$admin=$_POST['check'];

/* DB 접속 */
$conn = mysqli_connect($host,$myUser,$myPw,$myDb);

if (!$conn || mysqli_error($conn))
{
    die ('could not connect');
}

/* INSERT TEST */
$sql = "INSERT INTO aje
		         ( 
				     id,
					 pw,
					 email,
					 hp

				 )
				 VALUES ( '$id', 
				          '$pw',
						  '$email',
						  '$hp'
					)
        ";
		
$result = mysqli_query($conn, $sql);  // 실행

		
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
}
/* DB 종료 */
mysqli_close($conn);

?>