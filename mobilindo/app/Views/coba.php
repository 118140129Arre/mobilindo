<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<table class="table">

    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($order as $value) : ?>
            <tr>
                <th><?= $value['user_id']; ?></th>
                <td><?= $value['user_nama']; ?></td>
                <td><?= $value['user_email']; ?></td>
                <td><?= $value['user_pass']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?= $this->endSection(); ?>