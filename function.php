<?php

function connectDB()
{
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "project1";

    $objCon = mysqli_connect($serverName, $userName, $userPassword, $dbName);
    mysqli_set_charset($objCon, "utf8");
    return $objCon;
}
/*
function connectDB()
{
    $serverName = "localhost";
    $userName = "kruosirina_siri";
    $userPassword = "Qny6qpxsL3vqUUkq8asn";
    $dbName = "kruosirina_project1";

    $objCon = mysqli_connect($serverName, $userName, $userPassword, $dbName);
    mysqli_set_charset($objCon, "utf8");
    return $objCon;
}
*/
?>