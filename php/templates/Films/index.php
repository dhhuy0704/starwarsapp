<h1>Films list</h1>

<?= $this->Form->create(null, ['url' => ['action' => 'index'], 'type' => 'get']); ?>
<?= $this->Form->text('search', [
    'value' => $this->request->getQuery('search'),
    'placeholder' => 'What episode would you like to watch tonight?'
]); ?>
<?= $this->Form->submit('Search'); ?>

<table>
    <tr>
        <th>Episode #</th>
        <th>Title</th>
        <th>Director</th>
        <th>Release Date</th>
    </tr>

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