<h1><?= $person_info->name ?></h1>

<ul>
    <?php foreach ($person_info as $key => $value) : ?>
    <?php if(is_array($value)): ?>

    <?php else: ?>
    <li><?= $key ?>: <?= $value ?></li>
    <?php endif ?>
    <?php endforeach; ?>
</ul>