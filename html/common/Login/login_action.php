<?
/* DB ���� ���� */
$host   = 'localhost';  // �����ͺ��̽� ���� �ּ�
$myUser = 'jeongeum';        // �����ͺ��̽� ����� ID
$myPw   = '1202';  // �����ͺ��̽� ����� PASSWD
$myDb   = 'test_db';    // �����ͺ��̽� ��

$id=$_POST['id'];
$pw=$_POST['password'];

/* DB ���� */
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
		  alert("�α��� �Ǿ����ϴ�.");
		  location.replace("./frame_set.php");
		  </script>';
		   
	  }
	  else {
		  echo '<script>
		  alert("���̵� Ȥ�� ��й�ȣ�� �߸��Ǿ����ϴ�.");
		  history.back(); 
		  </script>';
	       }
   }
}
else
{
   echo "���̺� �����Ͱ� �����ϴ�.";
}

if($result === false)
{
    echo mysqli_error($conn);
}
mysqli_close($conn);
?>