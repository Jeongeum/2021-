<!--- �Խñ� ���� -->
<?
include 'qa.class';
 $obj = new qa();
 
?>
 
<html>
<head>
    <meta charset = 'utf-8'>
	<link rel="stylesheet" href="../../css/qa_write.css">
</head>

<body>
    <div id="board_write">
        <h1><a href="./qa.php">Q&A �Խ���</a></h1>
            <div id="write_area">
                <?
				echo $obj -> modify();
				?>
            </div>
        </div>
		
    </body>
</html>
