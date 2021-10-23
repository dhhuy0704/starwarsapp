<h1>Planets list</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Population</th>
        <th>Terrain</th>
        <th>Has Water?</th>
    </tr>

    <?php foreach ($planets as $planet) : ?>
        <tr>
            <td>
                <?= $this->Html->link($planet->name, ['action' => 'view', get_id_from_url($planet->url)]) ?>
            </td>
            <td>
                <?= $planet->population ?? "Unknown" ?>
            </td>
            <td>
                <?= $planet->terrain ?? "Unknown" ?>
            </td>
            <td>
                <?= $planet->surface_water == 1 ? "Yes" : "No" ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>