<??>
 
<html>
<head>
    <meta charset = 'utf-8'>
	<link rel="stylesheet" href="../../css/qa_write.css">
</head>

<body>
    <div id="board_write">
        <h1><a href="./qa.php">Q&A 게시판</a></h1>
            <div id="write_area">
                <form method = "post" action = "qa_action.php">
				<table>
     <tr>
     <td height=20 align=center bgcolor=#ccc><font color=white>Q&A 글쓰기</font></td>
     </tr>
     <tr>
     <td bgcolor=white>
     <table class="table2">

        <tr>
        <td>제목</td>
        <td><input type="text" name="title" size=60></td>
        </tr>
		
		<tr>
        <td>작성자</td>
        <td><input type="text" name="name" size=60></td>
        </tr>
		
        <tr>
        <td>내용</td>
        <td><textarea name="content" cols=85 rows=15></textarea></td>
        </tr>
		
		<tr>
        <td>이미지</td>
        <td><input type="file" name="file" accept="image/*"> </td>
        </tr>
		
		<tr>
        <td>비밀번호</td>
        <td><input type="password" name="pw" id="upw"  placeholder="비밀번호" required />
		<input type="checkbox" value="1" name="lockpost"/>비밀글</td>
        </tr>
    </table>
 
    <center>
    <input type="submit" value="올리기">
	
    </center>
    </td>
    </tr>
    </table>
    </form>
            </div>
        </div>
    </body>
</html>
