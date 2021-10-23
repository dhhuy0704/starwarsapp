<h1><?= $planet_info->name ?></h1>

<ul>
    <li>Rotation Period: <?= $planet_info->rotation_period ?></li>
    <li>Orbital Period: <?= $planet_info->orbital_period ?></li>
    <li>Diameter: <?= $planet_info->diameter ?></li>
    <li>Climate: <?= $planet_info->climate ?></li>
    <li>Gravity: <?= $planet_info->gravity ?></li>
    <li>Terrain: <?= $planet_info->terrain ?></li>
    <li>Surface Water: <?= $planet_info->surface_water ?></li>
    <li>Population: <?= $planet_info->population ?></li>
    <li>Residents:
        <ul>
            <?php foreach ($planet_info->residents as $id => $person) : ?>
                <li>
                    <a href="/people/view/<?= $id ?>">
                        <?= $person ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </li>
    <li>Films:
        <ul>
            <?php foreach ($planet_info->films as $id => $film) : ?>
                <li>
                    <a href="/films/view/<?= $id ?>">
                        <?= $film ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </li>
</ul>