<h1><?= $title ?></h1><!--pas d'erreur deja appeler en HomeController-->

<h2>List of users</h2>
<?php foreach ($users as $user): ?>
    <p><?= $user['username'] ?></p>
<?php endforeach ?>

<img src="images/img.jpg" alt="" width="200">

