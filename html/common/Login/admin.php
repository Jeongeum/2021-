<?
include 'admin_member.class';
$obj = new member();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/admin.css">
    <title></title>
  </head>
  <body>
    <div class="wrapper">
			<a href="./home.html"><img src="�ΰ�1.png"></a>
		</div>
		<ul class="nav">
			<li><a href="../car/home.html">Ȩ</a></li>
			<li><a href="../car/�Ұ�.html">�Ұ�</a></li>
			<li><a href="../car/���.html">��� �� ��ȸ</a>
						<ul class="sub">
							<li><a href="../car/���.html">�⺻����/���񳻿� ���</a></li>
							<li><a href="../car/��ȸ.html">�̷� ��ȸ</a></li>
						</ul>
			</li>
			<li><a href="./����Ÿ��Է�.html">����Ÿ� �Է�</a></li>
		</ul>

    <div class="cont">
      <div class="title"><h2>����� ����</h2></div>
      <div class="user_table">
      <table>
	  <th>��ȣ</th>
	  <th>ID</th>
	  <th>E-MAIL</th>
	  <th>����</th>
	  <th>��������</th>
	  
        <?
		echo $obj->table_member();
		?>
      </table>
    </div>
    </div>
  </body>
  <footer>
    <p>�߰��� ��� ������ ���� <b>���ü�� ���</b> �ڵ��� �����̷� �ý��� </p>
      <p>ȣ�����б� ��ǻ�Ͱ��к� ĸ��������� 12��</p>
  </footer>
</html>
