<?php
session_start();

if (isset($_SESSION['lk-name'])){
    $lkName = $_SESSION['lk-name'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

    <title>Step 2</title>
</head>
<body>
<div class="container">

    <form class="mt-5" action="action.php" method="POST">

        <div id="user-cards">

            <div class="user-card user-card-0 card mb-3">
                <div class="input-group">
                    <span class="input-group-text">Login (Электронная почта)</span>
                    <input name="users[0][email]" type="email" class="form-control">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Фамилия Имя</span>
                    <input name="users[0][name]" type="text" class="form-control">
                    <button id="delete-user-0" class="btn btn-danger delete-user-btn" type="button">-</button>
                </div>
            </div>

        </div>

        <button id="add-user" class="btn btn-success">+</button>

        <input type="submit" name="submit" value="Готово" class="btn btn-primary float-end">
    </form>
</div>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/step2index.js"></script>
</body>
</html>