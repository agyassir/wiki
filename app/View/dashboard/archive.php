<?php

include_once '../app/View/dashboard/includes/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <?php include_once '../app/View/dashboard/includes/asside.php'; ?>

        <main class="col-md-10 p-3 main-content">
            <div class="d-flex justify-content-between">
            <h3>Archive </h3>
           </div>
            <table class="table">
                <thead>
                <tr>

                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">contenue</th>
                    <th scope="col">#</th>
                </tr>
                </thead>
<?php

foreach ($wiki as $rs):
    ?>
                <tr>
                    <th scope="row">
                    <?=$rs->title?></th>
                    <td><?=$rs->description?></td>
                    <td><?=$rs->contenue?></td>
                    <td>
                        <a href="./deleteAWikis/<?=$rs->id?>" type="button" class="btn btn-danger">supprimer</a>
                        <a href="./approve/<?=$rs->id?>" type="button" class="btn btn-success">
                            approve
                        </a></td>
                </tr>
                <?php
endforeach; ?>
</table>
<?php
include_once "../app/view/dashboard/includes/footer.php";
?>