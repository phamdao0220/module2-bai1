<!DOCTYPE HTML>
<html>
<style type="text/css">
  .login{
      height: 180px;width: 230px;
      margin:0;
      padding: 10px;
      border: 1px #cccccc solid;;
  }
    .login input {
        padding: 5px; margin:5px;
    }
</style>
<body>
<form>
    <div class="login">
        <h2>login</h2>
        <input type="text" name="username"size="30"placeholder="username"/>
        <input type="text" name="password"size="30"placeholder="password"/>
        <input type="submit" value="sign in"/>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] =="POST"){
        $username=$_POST["username"];
        $password=$_POST["password"];
        if ($username ==="admin"&& $password==="admin"){
            echo"<h2>Welcome <span style='color: red'>".$username."</span> to website</h2>";

        }else{
            echo"<h2><span style='color:red'>login error</span></h2>";
        }
    }
    ?>
</form>
</body>
</html>

