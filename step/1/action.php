<?php
session_start();

const ROOT_DIRECTORY = __DIR__ . '/../../';

if (!isset($_POST['submit'])){
    header('Location: /index.php');
    exit();
}

$lkName = $_POST['lk-name'];
$clientName = $_POST['client-name'];

$writeString = $lkName . '|' . $clientName;

@mkdir(ROOT_DIRECTORY . '/files/step/' . $lkName, 0777, true);
@touch(ROOT_DIRECTORY . '/files/step/' . $lkName . '/step_1.txt');
file_put_contents(ROOT_DIRECTORY . '/files/step/' . $lkName . '/step_1.txt', $writeString . PHP_EOL);

$_SESSION['lk-name'] = $lkName;
header('Location: /step/2/index.php');
exit();