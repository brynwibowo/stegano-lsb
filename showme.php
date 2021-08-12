<?php
include "decode.php";

$image = "sample.png"; //image yang akan diambil pesannya

$lets_decode = new decode();
$lets_decode->printMsg($image);

?>