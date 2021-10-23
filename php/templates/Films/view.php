<h1>Episode <?= $film_info->episode_id ?> - <?= $film_info->title ?></h1>
<ul>
    <li>Opening Cawl: <?= $film_info->opening_crawl ?></li>
    <li>Director: <?= $film_info->director ?></li>
    <li>Producer: <?= $film_info->producer ?></li>
    <li>Release: <?= $film_info->release_date ?></li>
    <li>Characters:
    <ul>
        <?php foreach ($film_info->characters as $id => $character) : ?>
            <li>
                <a href="/people/view/<?= $id ?>">
                    <?= $character ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <li>Vehicles:
    <ul>
        <?php foreach ($film_info->vehicles as $key => $vehicle) : ?>
            <li>
                <a href="/vehicles/view/<?= $key ?>">
                    <?= $vehicle ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <li>Planets:
    <ul>
        <?php foreach ($film_info->planets as $key => $planet) : ?>
            <li>
                <a href="/planets/view/<?= $key ?>">
                    <?= $planet ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</ul>