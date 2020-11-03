<?php


$host = "localhost";
$user = "root";
$pass = "";
$db_name = "chat_info";

    $con = new mysqli($host,$user,$pass,$db_name);

    function formatDate($date)
    {
        return date('g:i a',strtotime($date));
    }


?>
