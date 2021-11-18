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
	var $myconn;
	function connect() {
		/* DB 접속 */
	  $conn = mysqli_connect($this->host, $this->myUser, $this->myPw, $this->myDb);

        if (!$conn || mysqli_error($conn))
		{
			die ('could not connect');
		}
	}
	
	
	function select() {
		$sql = "SELECT img_date,
                   img_name,
                   img_path											  
            FROM gallery 
			where date_format(img_date,'%m') = 07";//img_date의 월이 7인 것.
			
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0)
			{
		      while($row = mysqli_fetch_assoc($result))
		      { 
		        $path = $row['img_path'];
		        $name = $row['img_name'];
		        $this->aa .="<li><img src='$path//$name'></li>";
		        return $this->aa;
		      }
	        }
	        else
	        {
		     echo "테이블에 데이터가 없습니다.";
	        }
	}
	
	function close() {
		/*DB 접속 종료*/
		mysqli_close($conn);
	}
	
} 

 ?>

