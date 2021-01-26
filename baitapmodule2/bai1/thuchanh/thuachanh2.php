<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>

</style>
<body>

<form method="post">
    <div>
        <h2>login</h2>
        <input type="text" name="username" size="30" placeholder="username">
        <input type="password" name="password" size="30" placeholder="password">
        <input type="submit" value="Sign in">
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username === "admin" && $password === "admin") {
        echo "<h2>welcome".$username."to webiste </h2>";

    }else{
        echo "<h2>login </h2>";
    }

}
?>

</body>
</html>
