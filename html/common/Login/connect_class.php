<?

class create_con {
	/* DB ���� ���� */
	var $host   = 'localhost';  // �����ͺ��̽� ���� �ּ�
	var $myUser = 'jeongeum';        // �����ͺ��̽� ����� ID
	var $myPw   = '1202';  // �����ͺ��̽� ����� PASSWD
	var $myDb   = 'test_db';    // �����ͺ��̽� ��
	
	function connect() {
		/* DB ���� */
	  $conn = mysqli_connect($this->host, $this->myUser, $this->myPw, $this->myDb);

        if (!$conn || mysqli_error($conn))
		{
			die ('could not connect');
		}
	}
	
	
	
	 function close() {
		/*DB ���� ����*/
		mysqli_close($conn);
	}
}


?>