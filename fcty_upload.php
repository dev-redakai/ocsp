<?php
include('connection.php');
session_start();
$x=$_GET['submit'];
$user=$_SESSION['email'];
echo '<form action="fcty_upload1.php" enctype="multipart/form-data" method="POST">

File Upload: <input type="file" name="file">
<input type="hidden" name="cid" value="'.$x.'">
<button type="submit" name="submit" class="btn btn-sm"> Upload</button>
</form>';


?>