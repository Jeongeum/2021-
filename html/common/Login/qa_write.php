<??>
 
<html>
<head>
    <meta charset = 'utf-8'>
	<link rel="stylesheet" href="../../css/qa_write.css">
</head>

<body>
    <div id="board_write">
        <h1><a href="./qa.php">Q&A �Խ���</a></h1>
            <div id="write_area">
                <form method = "post" action = "qa_action.php">
				<table>
     <tr>
     <td height=20 align=center bgcolor=#ccc><font color=white>Q&A �۾���</font></td>
     </tr>
     <tr>
     <td bgcolor=white>
     <table class="table2">

        <tr>
        <td>����</td>
        <td><input type="text" name="title" size=60></td>
        </tr>
		
		<tr>
        <td>�ۼ���</td>
        <td><input type="text" name="name" size=60></td>
        </tr>
		
        <tr>
        <td>����</td>
        <td><textarea name="content" cols=85 rows=15></textarea></td>
        </tr>
		
		<tr>
        <td>�̹���</td>
        <td><input type="file" name="file" accept="image/*"> </td>
        </tr>
		
		<tr>
        <td>��й�ȣ</td>
        <td><input type="password" name="pw" id="upw"  placeholder="��й�ȣ" required />
		<input type="checkbox" value="1" name="lockpost"/>��б�</td>
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
        </div>
    </body>
</html>
