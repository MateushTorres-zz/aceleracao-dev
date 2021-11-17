<?php
setcookie("cookie1", "e5af4874d53cd94043d5292e3531c9597b3ef8940905c68ad9859c34a8d385dd", + 7200);
setcookie("cookie2", "ebb328b218d60e181c32da49ec48709aea4fab23e3fd2ac1c1042e59d3a6a486", + 7200);
setcookie("cookie3", "cfb24c91a9b83d9967f5b6a177037f5803abf3c8a8471a62c4fa48ab076434f0", + 3600);
setcookie("cookie4", "8be591c82c5f40f0fe531704b0584056f44638e76a069cde705206f7b33409f4", + 3600);

$cookies = [];
$cookies['cookie1'] = $_COOKIE['cookie1'];
$cookies['cookie2'] = $_COOKIE['cookie2'];
$cookies['cookie3'] = $_COOKIE['cookie3'];
$cookies['cookie4'] = $_COOKIE['cookie4'];

$json = json_encode($cookies);

$arquivo = fopen("cookies.txt", "w+");
fwrite($arquivo, $json);
fclose($arquivo);

echo "<a href=\"cookies.txt\">cookies.txt</a>";
?>