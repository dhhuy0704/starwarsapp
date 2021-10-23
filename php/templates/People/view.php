<h1><?= $person_info->name ?></h1>

<ul>
    <li>Height: <?= $person_info->height ?></li>
    <li>Mass: <?= $person_info->mass ?></li>
    <li>Hair Color: <?= $person_info->hair_color ?></li>
    <li>Skin Color: <?= $person_info->skin_color ?></li>
    <li>Eyes Color: <?= $person_info->eye_color ?></li>
    <li>Films:
        <ul>
            <?php foreach ($person_info->films as $id => $film) : ?>
                <li>
                    <a href="/films/view/<?= $id ?>">
                        <?= $film ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </li>
    <li>Vehicles:
        <ul>
            <?php foreach ($person_info->vehicles as $id => $vehicle) : ?>
                <li>
                    <a href="/vehicles/view/<?= $id ?>">
                        <?= $vehicle ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </li>
</ul>