<?

class select_img {
	/* DB 접속 정보 */
	var $host   = 'localhost';  // 데이터베이스 서버 주소
	var $myUser = 'jeongeum';        // 데이터베이스 사용자 ID
	var $myPw   = '1202';  // 데이터베이스 사용자 PASSWD
	var $myDb   = 'test_db';    // 데이터베이스 명
	
	var $path;
	var $name;
	var $aa = "";
	var $conn;
	var $sql;
	var $result;
	var $index;
	
	
	
	
	function gallery_select()
	{
		$this->conn = mysqli_connect($this->host, $this->myUser, $this->myPw, $this->myDb);

        if (!$this->conn || mysqli_error($this->conn))
		{
			die ('could not connect');
		}
		$this->index = $_POST['ym_index'];
		print_r($_POST);
        if ($this->index)
		{
			$this->sql = "SELECT img_ym,
                   img_name,
                   img_path
                       FROM gallery 
			           where date_format(img_ym,'%Y-%m') = $index";
		} 
				   
			$this->result = mysqli_query($this->conn,$this->sql);
			if (mysqli_num_rows($this->result) > 0)
			{
		      while($row = mysqli_fetch_assoc($this->result))
		      { 
		        $this->path = $row['img_path'];
		        $this->name = $row['img_name'];
		        $this->aa .="<li><img src='$this->path//$this->name'></li>";
		        
		      }return $this->aa;
	        }
	        
			mysqli_close($this->conn);
	}
} 

 ?>

