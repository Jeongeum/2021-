<?
/* DB ���� ���� */
$host   = 'localhost';  // �����ͺ��̽� ���� �ּ�
$myUser = 'jeongeum';        // �����ͺ��̽� ����� ID
$myPw   = '1202';  // �����ͺ��̽� ����� PASSWD
$myDb   = 'test_db';    // �����ͺ��̽� ��

$bno = $_GET['idx'];
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];

/* DB ���� */
$conn = mysqli_connect($host,$myUser,$myPw,$myDb);

if (!$conn || mysqli_error($conn))
{
    die ('could not connect');
}


$sql = "update board set name = '$username',
                         pw = '$userpw',
						 title = '$title',
						 content = '$content' 
				   where idx = $bno
	   ";
					  
$result = mysqli_query($conn, $sql);

    
    if($username && $userpw && $title && $content) 
	  {
		 echo "<script>
		 alert('�����Ǿ����ϴ�.');
		 </script>
		 
		 <meta http-equiv='refresh' content='0 url=./read.php?idx=$bno'>"; 
		   
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