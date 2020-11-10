<style>
    form{
        background: lightskyblue;
        margin: 0px auto;
        width: 400px;
        text-align: center;
    }
    input{
        text-align: center;
        margin: 0px auto;

    }
</style>
<form method="post"">
    <h1>Đăng nhập</h1>
    <input type="text" name="User" placeholder="Tài khoản"> <br><br>
    <input type="password" name="Password" placeholder="Mật khẩu"> <br><br>
    <button type="submit" name="btn" id="submit" style="background: orange">Login</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["User"] == "pham dao" && $_POST["Password"] == "admin") {
        echo header("location: phuongtrinhbac2.php");
    }
    else {
        echo "sai mat khau mat roi";
    }
}
