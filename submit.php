
<?php
$a = $_GET['name'];
$b = $_GET['tel'];
$c = $_GET['company'];

function submit ($a, $b, $c) {
    return '$a';
    return '$b';
    return '$c';
}
$d = submit ($a, $b, $c);
echo $d;

?>