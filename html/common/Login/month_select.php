   <?
   
  class selectt {
   /* DB ���� ���� */
var $host   = 'localhost';  // �����ͺ��̽� ���� �ּ�
var $myUser = 'jeongeum';        // �����ͺ��̽� ����� ID
var $myPw   = '1202';  // �����ͺ��̽� ����� PASSWD
var $myDb   = 'test_db';    // �����ͺ��̽� ��

var $month=$_POST['month'];
var $aa="";
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
			where date_format(img_date,'%m') = 07
			";//img_date�� ���� 7�� ��.


$result = mysqli_query($conn, $sql);

//1.
if (mysqli_num_rows($result) > 0)
{
   while($row = mysqli_fetch_assoc($result))
   { 
		  $path =$row['img_path'];
		  $name=$row['img_name'];
		  $aa .="<li><img src='$path//$name'></li>";
	  
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


  }
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