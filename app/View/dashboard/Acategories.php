<?php
include_once '../app/View/dashboard/includes/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <?php include_once '../app/View/dashboard/includes/asside.php'; ?>

        <main class="col-md-10 p-3 main-content">
            <div class="d-flex justify-content-between">
            <h3>Categories </h3>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajouterCat">
                ajouter categorie
            </button></div>
            <div class="modal fade" id="ajouterCat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Modal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Form inside the modal -->
                            <form method="post" action="./createCategorie">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">title</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name of the categorie" name="name" >
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="creatcat">modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">#</th>
                </tr>
                </thead>
<?php

foreach ($cat as $rs):
    ?>
                <tr>
                    <th scope="row"><?=$rs->id?></th>
                    <td><?=$rs->name?></td>
                    <td>
                        <a href="./deleteCategorie/<?=$rs->id?>" type="button" class="btn btn-danger">supprimer</a>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#update<?=$rs->id?>">
                            modifier
                        </button></td>
                </tr>
                <?php
endforeach;
include_once "../app/view/dashboard/includes/footer.php";

?>
