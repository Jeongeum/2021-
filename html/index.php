<?

?>
<html>
<head>
  <title>Login0714</title>
  <meta charset="utf-8"><!--utf-8-->
  <link rel="stylesheet" href="./styles.css">
  <link href="https://fonts.googleapis.com/earlyaccess/notosanskr.css" rel="stylesheet">

  <script language="javascript">

  window.onload = function() {

        if (getCookie("id")) {
            document.frm.id.value = getCookie("id");
            document.frm.check.checked = true;
        }

    }

    function setCookie(name, value, expiredays)
    {
        var todayDate = new Date();
        todayDate.setDate(todayDate.getDate() + expiredays);
        document.cookie = name + "=" + escape(value) + "; path=/; expires="
                + todayDate.toGMTString() + ";"
    }

    function getCookie(Name) {
        var search = Name + "=";
        if (document.cookie.length > 0) {
            offset = document.cookie.indexOf(search);
            if (offset != -1) {
                offset += search.length;
                end = document.cookie.indexOf(";", offset);
                if (end == -1)
                    end = document.cookie.length;
                return unescape(document.cookie.substring(offset, end));
            }
        }
    }

  function send() {
    if(!frm.id.value) {
      alert("아이디를 입력해주세요!");
	  history.back();
    }
    else if(!frm.password.value){
      alert("비밀번호를 입력해주세요!");
      history.back();
    }

    else {
      document.frm.submit();
      frm.action=('common/Login/login_action.php');
    }

    if(frm.check.checked==true) {
      setCookie("id",frm.id.value,7);
    }
    else {
      setCookie("id",frm.id.value,0);
    }
  }



  </script>
</head>
<body>
  <div class="login-form">
    <h2>Login</h2>
    <form name="frm" method="post" action='common/Login/login_action.php'>
      <input type="text" name="id" class="text-field" placeholder="ID">
      <input type="password" name="password" class="text-field" placeholder="Password">
      <div class="links">
        <input type="checkbox" name="check">save ID</input>
      </div>
      <input type="reset" value="join" class="submit-btn1" onclick="location.href='common/Login/join.php'">
      <input type="submit" value="login" class="submit-btn2" onclick="send()">
    </form>
  </div>
</body>
</html>
