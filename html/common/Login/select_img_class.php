<?

class select_img {
	/* DB ���� ���� */
	var $host   = 'localhost';  // �����ͺ��̽� ���� �ּ�
	var $myUser = 'jeongeum';        // �����ͺ��̽� ����� ID
	var $myPw   = '1202';  // �����ͺ��̽� ����� PASSWD
	var $myDb   = 'test_db';    // �����ͺ��̽� ��
	
	var $path;
	var $name;
	var $aa = "";
	var $myconn;
	function connect() {
		/* DB ���� */
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
			where date_format(img_date,'%m') = 07";//img_date�� ���� 7�� ��.
			
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
		     echo "���̺� �����Ͱ� �����ϴ�.";
	        }
	}
	
	function close() {
		/*DB ���� ����*/
		mysqli_close($conn);
	}
	
} 

 ?>

