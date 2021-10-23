<h1>People list</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Birth Year</th>
        <th>Gender</th>
        <th>Height</th>
    </tr>

    <?php foreach ($people as $person) : ?>
        <tr>
            <td>
                <?= $this->Html->link($person->name, ['action' => 'view', get_id_from_url($person->url)]) ?>
            </td>
            <td>
                <?= $person->gender ?? "Unknown" ?>
            </td>
            <td>
                <?= $person->director ?? "Unknown" ?>
            </td>
            <td>
                <?= $person->height ?? "Unknown" ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>