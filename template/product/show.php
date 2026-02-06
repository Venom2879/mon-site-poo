<h1><?= $title ?></h1>

<img src="<?= $product->getPicture() ?>" alt="" width="50%" height="50%">

<div>
    <p>Voici mon prix : <?= $product->getPrice() ?></p>
    <p>Voici ma description : <?= $product->getDescription() ?></p>
</div>
