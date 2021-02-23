<?php
require_once("includes/header.php");

$preview = new PreviewProvider($con, $userLoggedIn);

echo $preview->createPreviewVideo(null);

require_once("includes/footer.php");
?>