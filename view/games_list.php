<?php include('header.php'); ?>

<div class="py-5">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Votes</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($games['games'] as $game) : ?>
                    <tr>
                        <th scope="row"><?= $game['id']; ?></th>
                        <td><?= $game['name']; ?></td>
                        <td><?= $game['votes']; ?></td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('footer.php'); ?>