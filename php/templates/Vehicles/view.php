<h1><?= $vehicle_info->name ?></h1>

<ul>
    <li>Cargo Capacity: <?= $vehicle_info->cargo_capacity ?></li>
    <li>Consumables: <?= $vehicle_info->consumables ?></li>
    <li>Cost In Credits: <?= $vehicle_info->cost_in_credits ?></li>
    <li>Crew: <?= $vehicle_info->crew ?></li>
    <li>Length: <?= $vehicle_info->length ?></li>
    <li>Manufacturer: <?= $vehicle_info->manufacturer ?></li>
    <li>Model: <?= $vehicle_info->manufacturer ?></li>
    <li>Vehicle class: <?= $vehicle_info->vehicle_class ?></li>
    <li>Passengers: <?= $vehicle_info->passengers ?></li>
    <li>Films:
        <ul>
            <?php foreach ($vehicle_info->films as $id => $film) : ?>
                <li>
                    <a href="/films/view/<?= $id ?>">
                        <?= $film ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </li>
</ul>