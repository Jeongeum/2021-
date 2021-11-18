   <?
   /* DB 접속 정보 */
$host   = 'localhost';  // 데이터베이스 서버 주소
$myUser = 'jeongeum';        // 데이터베이스 사용자 ID
$myPw   = '1202';  // 데이터베이스 사용자 PASSWD
$myDb   = 'test_db';    // 데이터베이스 명

$best=$_POST['best'];
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
			where img_name LIKE '%best%'
			";//img_name에 best 문자열이 포함된 것.


$result = mysqli_query($conn, $sql);

//1.
if (mysqli_num_rows($result) > 0)
{
   while($row = mysqli_fetch_assoc($result))
   {
		  $path =$row['img_path'];
		  $name=$row['img_name'];
		  echo "<img src='$path//$name'>";
	  
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