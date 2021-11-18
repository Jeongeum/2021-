<?
include $_SERVER['DOCUMENT_ROOT']."/db.php"; 
include 'qa.class';
 $obj = new qa();
 $bno = $_GET['idx'];
 $sql = mq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
?>

<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="../../css/qa.css" />
<link rel="stylesheet" type="text/css" href="../../css/jquery-ui.css" />
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>
<script type="text/javascript" src="../js/common.js"></script>
</head>
<body>
<!-- 글 불러오기 -->

<div class="main">
<?
echo $obj -> read();
?> 
<!-- 댓글 불러오기 -->
<div class="reply_view">
	<h3 >댓글목록</h3>
	<?php
			$sql3 = mq("select * from reply where con_num='".$bno."' order by idx asc");
			while($row = $sql3->fetch_array()){ 
		?>
		<div class="dap_lo">
			<div><b><?php echo $row['name'];?></b></div>
			<div class="dap_to comt_edit"><?php echo nl2br("$row[content]"); ?></div>
			<div class="rep_me dap_to"><?php echo $row['date']; ?></div>
			<div class="rep_me rep_menu">
				<a class="dat_edit_bt" href="#">수정</a>
				<a class="dat_delete_bt" href="#">삭제</a>
			</div>
			<!-- 댓글 수정 폼 dialog -->
			<div class="dat_edit">
				<form method="post" action="rep_modify_ok.php">
					<input type="hidden" name="rno" value="<?php echo $row['idx']; ?>" />
					<input type="hidden" name="b_no" value="<?php echo $bno; ?>">
					<input type="password" name="pw" class="dap_sm" placeholder="비밀번호" />
					<textarea name="content" class="dap_edit_t"><?php echo $row['content']; ?></textarea>
					<input type="submit" value="수정하기" class="re_mo_bt">
				</form>
			</div>
			<!-- 댓글 삭제 비밀번호 확인 -->
			<div class='dat_delete'>
				<form action="reply_delete.php" method="post">
					<input type="hidden" name="rno" value="<?php echo $row['idx']; ?>" />
					<input type="hidden" name="b_no" value="<?php echo $bno; ?>">
			 		<p>비밀번호<input type="password" name="pw" /> <input type="submit" value="확인"></p>
				 </form>
			</div>
		</div>
	<?php } ?>

	<!--- 댓글 입력 폼 -->
	<div class="dap_ins">
		<form action="reply_action.php?idx=<?php echo $bno; ?>" method="post">
			<input type="text" name="dat_user" id="dat_user" class="dat_user" size="15" placeholder="아이디">
			<input type="password" name="dat_pw" id="dat_pw" class="dat_pw" size="15" placeholder="비밀번호">
			<div style="margin-top:10px; ">
				<textarea name="content" class="reply_content" id="re_content" ></textarea>
				<button id="rep_bt" class="re_bt">댓글</button>
			</div>
		</form>
	</div>
</div>
</div>
</body>
</html>