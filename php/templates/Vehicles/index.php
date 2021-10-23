<h1>Vehicles list</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Manufacturer</th>
        <th>Model</th>
        <th>Vehicle Class</th>
    </tr>

    <?php foreach ($vehicles as $vehicle) : ?>
        <tr>
            <td>
                <?= $this->Html->link($vehicle->name, ['action' => 'view', get_id_from_url($vehicle->url)]) ?>
            </td>
            <td>
                <?= $vehicle->manufacturer ?? "Unknown" ?>
            </td>
            <td>
                <?= $vehicle->model ?? "Unknown" ?>
            </td>
            <td>
                <?= $vehicle->vehicle_class ?? "Unknown" ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>