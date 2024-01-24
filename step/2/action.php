<?php
session_start();

const ROOT_DIRECTORY = __DIR__ . '/../../';

if (!isset($_POST['submit'])){
    header('Location: /index.php');
    exit();
}

$lkName = $_SESSION['lk-name'];
$users = $_POST['users'];

@touch(ROOT_DIRECTORY . '/files/step/' . $lkName . '/step_2.txt');

foreach ($users as $user){
    $writeString = $lkName . '|' . $user['email'] . '|' . $user['name'];
    file_put_contents(ROOT_DIRECTORY . '/files/step/' . $lkName . '/step_2.txt', $writeString . PHP_EOL, FILE_APPEND);
}

header('Location: /index.php');
exit();