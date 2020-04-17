<?php
$url = $_SERVER["REQUEST_URI"];
$if = '?cadastro=ok';
 $real = "$url $if";
 echo $real;