<?php
require "vendor/autoload.php";
///////    forward slash
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

$qr = new QrCode('Hello Bachho');
$writer = new PngWriter();
$result = $writer->write($qr);
header("Content-type: ".$result->getMimeType());
echo $result->getString();
?>