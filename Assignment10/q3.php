<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['remember'])) {
        setcookie('username', $_POST['username'], time() + 86400);
    }
}
$username = $_COOKIE['username'] ?? 'Guest';
echo "Welcome $username";
?>
<form method="post">
    Username: <input type="text" name="username">
    <label><input type="checkbox" name="remember"> Remember Me</label>
    <input type="submit" value="Login">
</form>
