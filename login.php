<head>
    <tile>Trang đăng nhập nè</tile>
    <meta charset="utf-8">
</head>

<form action="#" method="post">
  <div class="container">
    <label for="uname"><b>lbUserName</b></label>
    <input type="text"  name="uname" required>
  </div>
  <div class="container">
    <label for="psw"><b>lbPassword</b></label>
    <input type="password" name="psw" required >
    <button type="submit" name= "btnsubmit">Login</button>   
  </div>
   
</form>

<?php 
  if(isset($_POST['btnsubmit'])) {
    if($_POST['uname'] == "admin" && $_POST['psw'] == "admin") {
      echo "Đăng nhập thành công";
    header("Location: success.php");
    } else {
      echo "Đăng nhập thất bại";
    }
  }
?>