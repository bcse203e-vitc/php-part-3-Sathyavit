<?php
if (isset($_FILES['file'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $_FILES['file']['name']);
    echo "<img src='uploads/" . $_FILES['file']['name'] . "' width='200'>";
}
?>
<form method="post" enctype="multipart/form-data">
    Select image: <input type="file" name="file">
    <input type="submit" value="Upload">
</form>
