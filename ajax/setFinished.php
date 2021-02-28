<?php
require_once("../includes/config.php");

if(isset($_POST["videoId"]) && isset($_POST["username"])) {
    $videoId = strip_tags($_POST["videoId"]);
    $username = strip_tags($_POST["username"]);

    $query = $con->prepare("UPDATE videoProgress SET finished=1, progress=0 
                            WHERE username=:username AND videoId=:videoId");
    $query->bindValue(":username", $username);
    $query->bindValue(":videoId", $videoId);
    $query->execute();


} else {
    echo "No videoId or username passed into file";
}
    
?>