<?php
include_once '../app/View/dashboard/includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
        <?php include_once '../app/View/dashboard/includes/asside.php'; ?>
        <main class="col-md-10 p-3 main-content">

        <div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">#</th>
            </tr>
            </thead>
            <?php

            foreach ($tag as $rs):
            ?>
            <th scope="row"><?=$rs->type?></th>
            <td>
                <a href="./user/deletetagss/<?=$rs->id?>" type="button" class="btn btn-danger">supprimer</a>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tags<?=$rs->id?>">
                    modifier
                </button></td>
            </tr>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>
</main>