<form method="post">
    <div class="login">
        <input type="text" name="username"  placeholder="username" />
        <input type="password" name="password" placeholder="password" />
        <input type="submit" value="Sign in"/>
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username === "admin" && $password === "admin") {
        echo "<h2> Welcome </h2>";
    } else{
        echo "<h2> Login Error </h2>";
    }
}
?>
