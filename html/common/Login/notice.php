<?

?>

<html>
<head>
  <title>sub0722-��������</title>
  <link rel="stylesheet" href="../../css/notice.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@500&display=swap" rel="stylesheet">

<style type="text/css">
  a:link { color: #777; text-decoration: none;}
 a:visited { color: #777; text-decoration: none;}
 a:hover { color: #777; text-decoration: underline;}
</style>

  <script language="javascript">

  </script>
</head>

<body>

<div class="main">
 <div>
 <?include 'notice.class';
 $obj1 = new notice();
 
 ?>
 <div id="button">
 <input type="button" value="�۾���"  onclick="location.href='notice_write.php'"></input>
 </div>
 <ul class="mvlist">
		<?
		
		echo $obj1->img_up();
		?>
    </ul>
 </div>
 
  <div id="page_num" style="text-align: center;">
			    	<?
				    	if ($page <= 1){
				    		// �� ��
				    	} else {
				    		echo "<a href='?page=1'>ó��</a>";
				    	}
				    	
				    	if ($page <= 1){
				    		// �� ��
				    	} else {
				    		$pre = $page - 1;
				    		echo "<a href='?page=$pre'>�� ���� </a>";
				    		
				    	}
				    	
				    	for($i = $block_start; $i <= $block_end; $i++){
				    		if($page == $i){
				    			echo "<b> $i </b>";
				    		} else {
				    			echo "<a href='?page=$i'> $i </a>";
				    		}
				    	}
				    	
				    	if($page >= $total_page){
				    		// �� ��
				    	} else {
				    		$next = $page + 1;
				    		echo "<a href='?page=$next'> ���� ��</a>";
				    	}
					   	
				    	if($page >= $total_page){
				    		// �� ��
				    	} else {
				    		echo "<a href='?page=$total_page'>������</a>";
				    	}
					?>
				</div>	 
	
</div>
</body>
</html>


</body>
</html>


