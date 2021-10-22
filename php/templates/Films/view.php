<h1>Episode <?= $film_info->episode_id ?> - <?= $film_info->title ?></h1>
<ul>
    <li>Opening Cawl: <?= $film_info->opening_crawl ?></li>
    <li>Director: <?= $film_info->director ?></li>
    <li>Producer: <?= $film_info->producer ?></li>
    <li>Release: <?= $film_info->release_date ?></li>
    <li>Characters:
    <ul>
        <?php foreach ($film_info->characters as $character) : ?>
            <li><?= $character ?></li>
        <?php endforeach; ?>
    </ul>
</ul>