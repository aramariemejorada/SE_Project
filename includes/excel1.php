<?php
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename='.rand().'.xls');
echo $_GET["data"];

?>