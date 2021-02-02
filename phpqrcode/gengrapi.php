<?php
include "qrlib.php";
echo QRcode::png(base64_decode($_GET["data"]));
?>
