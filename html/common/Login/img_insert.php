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

/* DB 접속 */
$conn = mysqli_connect($host,$myUser,$myPw,$myDb);

if (!$conn || mysqli_error($conn))
{
    die ('could not connect');
}
else 
{
echo 'db 등록 완료';}
/* INSERT TEST */
/*
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
*/

$sql = "INSERT INTO edu (no, path, name, title, cont, time) values ( null , '../../image ','2b23c4745d6f7cc701adf713740be772.jpg' , '1/11(금) 교육활동사진' , '[다색조선; 폴 자쿨레]展 연계 교육프로그램' , '2021-01-11' );";

$result = mysqli_query($conn, $sql);  // 실행

if($result == false)
{
		mysqli_error($conn);
}
if($result === false)
{
    echo mysqli_error($conn);
}
mysqli_close($conn);

/*
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query1 = mysqli_query($connection,"SELECT cimage.cimgid,cimage.companyID,cimage.cimg1 FROM cimage where companyID=$id");
    while ($row2 = mysqli_fetch_array($query1)) {
?>
       <img src="http://127.0.0.1/leadstart/Bestleads/landin/Health/new/img/<?php echo $row2['cimg1'] ?> "/>
        <!-- Displaying Data Read From Database -->
        <?php
   }
}
*/
?>