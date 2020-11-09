<form>
    <div class="login">
        <h2>login</h2>
        <input type="text" name="username" placeholder="username"/>
        <input type="text" name="password" placeholder="password"/>
        <input type="submit" value="sign in"/>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "admin" && $password === "admin") {
            echo "<h2>welcome<span style='color: red'>" . $username . "</span> to website</h2>";
        } else {
            echo "<h2><span style='color: red'>login error</span></h2>";
        }

    }
    ?>
</form>
