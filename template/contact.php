<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<h1><?= $title ?></h1>

<form action="" method="post">

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" placeholder="Saisissez votre adresse mail">
    </div>

    <div>
        <label for="subjet">Subject</label>
        <select name="subject" id="subect">
            <option value="">Remboursement</option>
            <option value="help">Help</option>
            <option value="problem">Problème</option>
        </select>
    </div>

    <div>
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>

    <button type="submit">Soumettre</button>

</form>

<!--soumettre afficher les donnees de mon formulaire -->

<!--<p><?= isset($email) ? $email : ''?></p>
    <p><?= isset($subject) ? $subject : ''?></p>
    <p><?= isset($message) ? $message : ''?></p>

-->
</body>
</html>
