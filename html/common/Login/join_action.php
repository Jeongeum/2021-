<?
/* DB ���� ���� */
$host   = 'localhost';  // �����ͺ��̽� ���� �ּ�
$myUser = 'jeongeum';        // �����ͺ��̽� ����� ID
$myPw   = '1202';  // �����ͺ��̽� ����� PASSWD
$myDb   = 'test_db';    // �����ͺ��̽� ��

$id=$_POST['id'];
$pw=$_POST['pw'];
$email=$_POST['email'];
$hp=$_POST['hp'];
$admin=$_POST['check'];

/* DB ���� */
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
		
$result = mysqli_query($conn, $sql);  // ����

		
if ($result)
{
			echo '<script>
		  alert("���� �Ǿ����ϴ�.");
		  location.replace("../../index.php");
		  </script>';
}

if($result === false)
{
    echo mysqli_error($conn);
}
/* DB ���� */
mysqli_close($conn);

?>