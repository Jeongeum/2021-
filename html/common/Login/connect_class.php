<?

class create_con {
	/* DB 접속 정보 */
	var $host   = 'localhost';  // 데이터베이스 서버 주소
	var $myUser = 'jeongeum';        // 데이터베이스 사용자 ID
	var $myPw   = '1202';  // 데이터베이스 사용자 PASSWD
	var $myDb   = 'test_db';    // 데이터베이스 명
	
	function connect() {
		/* DB 접속 */
	  $conn = mysqli_connect($this->host, $this->myUser, $this->myPw, $this->myDb);

        if (!$conn || mysqli_error($conn))
		{
			die ('could not connect');
		}
	}
	
	
	
	 function close() {
		/*DB 접속 종료*/
		mysqli_close($conn);
	}
}


?>