<?php
require_once('encode.php');

$pesan = "Pesan rahasiamu ketik disini";
$image = "sample.png";
$lets_encode = new encode();

$lets_encode->executeLSB($pesan,$image);

?>