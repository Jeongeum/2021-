<?
/* DB ���� ���� */
$host   = 'localhost';  // �����ͺ��̽� ���� �ּ�
$myUser = 'jeongeum';        // �����ͺ��̽� ����� ID
$myPw   = '1202';  // �����ͺ��̽� ����� PASSWD
$myDb   = 'test_db';    // �����ͺ��̽� ��

/* DB ���� */
$conn = mysqli_connect($host,$myUser,$myPw,$myDb);

if (!$conn || mysqli_error($conn))
{
    die ('could not connect');
}

/* SELECT TEST */
$sql = "SELECT ID
             , PW
			 , EMAIL
			 , HP
          FROM aje
		  
        ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
   while($row = mysqli_fetch_assoc($result))
   {
      echo "�÷�01: " . $row["ID"]. " �÷�02:" . $row["PW"]. " �÷�03:" . $row["EMAIL"]. " �÷�04:" . $row["HP"]."<br>";
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