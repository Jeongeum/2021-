   <?
   /* DB ���� ���� */
$host   = 'localhost';  // �����ͺ��̽� ���� �ּ�
$myUser = 'jeongeum';        // �����ͺ��̽� ����� ID
$myPw   = '1202';  // �����ͺ��̽� ����� PASSWD
$myDb   = 'test_db';    // �����ͺ��̽� ��

$best=$_POST['best'];
//$path = '../../image';

/* DB ���� */
$conn = mysqli_connect($host,$myUser,$myPw,$myDb);

if (!$conn || mysqli_error($conn))
{
    die ('could not connect');
}


// ����
$sql = "SELECT img_date,
                   img_name,
                   img_path											  
            FROM gallery 
			where img_name LIKE '%best%'
			";//img_name�� best ���ڿ��� ���Ե� ��.


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
   echo "���̺� �����Ͱ� �����ϴ�.";
}

if($result === false)
{
    echo mysqli_error($conn);
}
mysqli_close($conn); /* DB ���� */



/*
//2.
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
}*/


									   



/*while ($row = mysqli_fetch_array($result)) 
	{
?>
       <img src="http://127.0.0.1/leadstart/Bestleads/landin/Health/new/img/<? echo $row2['cimg1'] ?> "/>
        <!-- Displaying Data Read From Database -->
        <?
   }*/

?>