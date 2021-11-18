<?
/* DB 접속 정보 */
$host   = 'localhost';  // 데이터베이스 서버 주소
$myUser = 'jeongeum';        // 데이터베이스 사용자 ID
$myPw   = '1202';  // 데이터베이스 사용자 PASSWD
$myDb   = 'test_db';    // 데이터베이스 명

$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');

/* DB 접속 */
$conn = mysqli_connect($host,$myUser,$myPw,$myDb);

if (!$conn || mysqli_error($conn))
{
    die ('could not connect');
}

if(isset($_POST['lockpost'])) {
	$lo_post = '1';
} else {
	$lo_post = '2';
}
$sql = "insert into board(name, pw, title, content, date, lock_post) 
                   values('$username',
			              '$userpw',
					      '$title',
					      '$content',
					      '$date',
						  '$lo_post'
					      )";
					  
$result = mysqli_query($conn, $sql);


    if($username && $userpw && $title && $content) 
	  {
		 echo "<script>
		 alert('finish.');
		 location.href='./qa.php';</script>"; 
		   
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