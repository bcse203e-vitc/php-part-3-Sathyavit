<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "example@domain.com";
    $sub = "Contact Form Message";
    $msg = $_POST['message'];
    $headers = "From: user@domain.com";
    mail($to, $sub, $msg, $headers);
    echo "Mail Sent!";
}
?>
<form method="post">
    Message: <textarea name="message"></textarea><br>
    <input type="submit" value="Send">
</form>
