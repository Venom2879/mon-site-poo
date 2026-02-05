<h1><?= $title ?></h1>

<form action="" method="post">

    <div>
        <label for="title">Titre</label>
        <input id="title" type="text" name="title" placeholder="Saisissez le Titre">
    </div>

    <div>
        <label for="price">Prix</label>
        <input id="price" type="number" name="price" placeholder="Saisissez le Prix">
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>

    <button type="submit">Créer</button>

</form>

