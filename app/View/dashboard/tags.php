<?php
include_once '../app/View/dashboard/includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
        <?php include_once '../app/View/dashboard/includes/asside.php'; ?>
        <div class="col-md-10 p-3 main-content">
<div class="d-flex justify-content-between">
    <h3>Tags</h3>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Addtags">
        ajouter
    </button>
</div>
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
            ?><tr>
            <th scope="row"><?=$rs->type?></th>
            <td>
                <a href="./user/deletetagss/<?=$rs->id?>" type="button" class="btn btn-danger">supprimer</a>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Mtags<?=$rs->id?>">
                    modifier
                </button></td>
            </tr>
                <div class="modal fade" id="Mtags<?=$rs->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">modifier Tags</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form inside the modal -->
                                <form method="post" action="./updatetags/<?=$rs->id?>">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">id</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="name"  value="<?=$rs->id?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">type</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1" name="type" value="<?=$rs->type?>" >
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="updatetags">modifier</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Addtags" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">modifier Tags</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form inside the modal -->
                                <form method="post" action="./createtag">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">type</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1" name="type" placeholder="tag type" >
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="createtags">ajouter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
        </div>
        </table>
    </div>
</div>

</main>
<?php
include_once "../app/view/dashboard/includes/footer.php";

?>