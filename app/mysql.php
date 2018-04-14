<?php
/**
 * Created by PhpStorm.
 * User: chen_
 * Date: 2018/4/13
 * Time: 13:33
 */

$host = '192.168.200.128';
$user = 'root';
$pwd = '123456';
$db = 'test';
//$pdo = new PDO('mysql:host='.$host.';dbname='.$db.';port=3306,\''.$user.',\''.$pwd.'\'');

$mysqli = new mysqli($host, $user, $pwd, $db);

if ($mysqli->connect_errno) {
    echo "Errno: " . $mysqli->connect_errno . "\n";
}
$sql = 'SELECT * FROM users';
if ($res = $mysqli->query($sql)) {
    while ($row = $res->fetch_assoc()) {
        print_r($row);
    }
}
?>