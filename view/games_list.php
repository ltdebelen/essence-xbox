<?php include('header.php'); ?>

<div class="py-5">
    <div class="container">
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary pull-right" data-bs-toggle="modal" data-bs-target="#addGameModal">
                Add Game
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="addGameModal" tabindex="-1" aria-labelledby="addGameModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addGameModalLabel">Add Game</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="." method="post">
                            <div class="mb-3">
                                <label for="gameNameInput" class="form-label">Game Name</label>
                                <input type="hidden" name="action" value="add_game">
                                <input type="text" class="form-control" id="gameNameInput" name="game_name" placeholder="Enter Game Name..." required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                        <td>
                            <form action="." method="post">
                                <input type="hidden" name="game_id" value="<?= $game['id']; ?>">
                                <input type="submit" class="btn btn-success" name="action" value="Upvote">
                                <input type="submit" class="btn btn-warning" name="action" value="Downvote">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('footer.php'); ?>