<??>
 
<html>
<head>
    <meta charset = 'utf-8'>
	<link rel="stylesheet" href="../../css/notice_write.css">
</head>

<body>
<div class="main">
    <form method = "post" action = "notice_action.php">
    <table>
     <tr>
     <td height=20 align=center bgcolor=#ccc><font color=white>�������� �۾���</font></td>
     </tr>
     <tr>
     <td bgcolor=white>
     <table class="table2">

        <tr>
        <td>����</td>
        <td><input type="text" name="title" size=60></td>
        </tr>
 
        <tr>
        <td>����</td>
        <td><textarea name="content" cols=85 rows=15></textarea></td>
        </tr>
		
		<tr>
        <td>�̹���</td>
        <td><input type="file" name="file" accept="image/*"> </td>
        </tr>
    </table>
 
    <center>
    <input type="submit" value="�ø���">
	
    </center>
    </td>
    </tr>
    </table>
    </form>
	</div>
	<?include 'notice.class';
 $obj1 = new notice();
 ?>
</body>
</html>
