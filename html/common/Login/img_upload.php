<?
?>

<html>
<head><title>File Upload To Database</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8;" /> <title>���ε� ���ϸ��</title> <style> #file_list table{border:1px solid gray;border-collapse:collapse;}; #file_list th, #file_list td{border:1px solid gray;padding:5px;} </style> <script> function image_view(image, width, height) { width = width + 10; hegiht = height + 10; var op = "location=no, scrollbars=no, menubars=no, toolbars=no, resizeble=yes, left=0, top=0, width="+width+",height="+height; var url = "image_view.php?image="+image; popup = window.open(url,"ImageWindow", op); popup.focus(); }//function </script>

</head>
<body>
<h2>Please Choose a File and click Submit</h2>
<form enctype="multipart/form-data" action="uploadImage.php" method="post">
    <div><input name="userfile" type="file"/></div>
    <div><input type="submit" value="Submit"/></div>
</form>

<!--���ε� �������� �̵���ũ--> 
<p><a href='upload_form.htm'>���ε�</a></p> 
<?//PHP 5.2.5 //DB���� 
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

$result = $conn->query("select * from gallery"); 
echo '<div id="file_list"><table>'; 
echo '<tr><th>no</th><th>���ϸ�</th><th>�������ϸ�</th><th>Ÿ��</th><th>ũ��</th><th>����</th><th>����</th><th>���� IP</th><th>����</th></tr>'; 
while( $row = $result->fetch_assoc() ) 
{ //�̹��� ���� �������� 
$name = $_SERVER['DOCUMENT_ROOT']."/uploads/".$row['db_filename']; 
$imagesize = getimagesize($name);
 
print '<tr>'; 
echo "<td>".htmlentities($row['no'])."</td>"; 
//���ϸ� Ŭ���� ��â���� �̹��� ������ 
echo "<td><a href='javascript:image_view(\"{$row['db_filename']}\",{$imagesize[0]},{$imagesize[1]});'>".htmlspecialchars($row['upload_filename'])."</a></td>"; 
//����� ��ο� ���ϸ��� ������ ��� 
echo "<td>".htmlentities($row['file_path'].$row['db_filename'])."</td>"; 
echo "<td>".htmlentities($row['file_type'])."</td>"; 
echo "<td>".htmlentities(number_format(round($row['file_size'])/1024))." kb</td>"; 
echo "<td>".htmlentities($row['width'])."</td>"; 
echo "<td>".htmlentities($row['height'])."</td>"; 
echo "<td>".htmlentities($row['ip'])."</td>"; 
//���� Ŭ���� �̹������� �������� �̵� 
echo "<td><a href=\"javascript:location.href='image_delete.php?image=".$row['db_filename']."'\">����</a></td>"; 
print '</tr>'; 
}
//while 
print '</table></div>'; 
?>


</body>
</html>


</body>
</html>