<?
/*include 'notice.class';
 $obj = new notice();
 
 $obj->write();
*/

/* DB 접속 정보 */
$host   = 'localhost';  // 데이터베이스 서버 주소
$myUser = 'jeongeum';        // 데이터베이스 사용자 ID
$myPw   = '1202';  // 데이터베이스 사용자 PASSWD
$myDb   = 'test_db';    // 데이터베이스 명

$title_w = $_POST['title']; 
$content = $_POST['content'];
$file = $_POST['file'];

/* DB 접속 */
$conn = mysqli_connect($host,$myUser,$myPw,$myDb);

if (!$conn || mysqli_error($conn))
{
    die ('could not connect');
}

$sql = "INSERT INTO notice1 (no, path, name, title, cont, time)
                    values ( null , '../../image ','$file' , '$title_w' , '$content' , 'default' )
        ";
		
$result = mysqli_query($conn, $sql);  // 실행

		
if ($result)
{
	if($title_w == $_POST['title']) 
	{
		echo '<script>
			alert("finish!");
			location.replace("./notice.php");
			</script>';
	}
	else 
	{
		echo '<script>
			alert("test");
			history.back();
			</script>';
	}
	  }
if($result === false)
{
    echo mysqli_error($conn);
}
/* DB 종료 */
mysqli_close($conn);

?>