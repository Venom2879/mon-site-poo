<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>

<h1><?= $title ?></h1><!--pas d'erreur deja appeler en HomeController-->

<h2>List of users</h2>
<?php foreach ($users as $user): ?>
    <p><?= $user['username'] ?></p>
<?php endforeach ?>

<img src="images/img.jpg" alt="" width="200">

<script src="assets/js/script.js"></script>
</body>
</html>
