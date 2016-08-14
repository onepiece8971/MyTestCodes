<?php
//excel下载
$download_name = 'haha.xls';
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$download_name\";");
die(mb_convert_encoding($xls, 'UTF-8', 'UTF-8'));