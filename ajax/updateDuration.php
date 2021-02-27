<?php
require_once("../includes/config.php");

if(isset($_POST["videoId"]) && isset($_POST["username"]) && isset($_POST["progress"])) {
    $videoId = strip_tags($_POST["videoId"]);
    $username = strip_tags($_POST["username"]);
    $progress = strip_tags($_POST["progress"]);

    $query = $con->prepare("UPDATE videoProgress SET progress=:progress, dateModified=NOW() 
                            WHERE username=:username AND videoId=:videoId");
    $query->bindValue(":progress", $progress);
    $query->bindValue(":username", $username);
    $query->bindValue(":videoId", $videoId);
    $query->execute();


} else {
    echo "No videoId or username passed into file";
}
    
?>