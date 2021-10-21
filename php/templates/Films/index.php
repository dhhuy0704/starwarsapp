<h1>Films list</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Episode #</th>
        <th>Director</th>
        <th>Release Date</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($films as $film) : ?>
        <tr>
            <td><?= $film->episode_id ?></td>
            <td>
                <?= $this->Html->link($film->title, ['action' => 'view', $film->episode_id]) ?>
            </td>
            <td>
                <?= $film->director ?? "Unknown" ?>
            </td>
            <td>
                <?= $film->release_date ?? "N/D" ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>