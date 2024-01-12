<?php
include_once '../app/View/dashboard/includes/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <?php include_once '../app/View/dashboard/includes/asside.php'; ?>

        <main class="col-md-10 p-3 main-content">
            <div class="d-flex gap-4 " style="margin-bottom:30px;">
            <div class="shadow-sm p-3 d-grid mb-3 bg-body rounded" style="width: 250px; height:150px; position: relative; ">
                    <div class="text-center" style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">
                        <span style="font-size: 2em; opacity: 0.3;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/> </svg>
                        </span>
                    </div>
                    Total wikis: <?=$mine->num?>
                </div>

            <div class="shadow-sm  d-grid p-3 mb-3 bg-body rounded" style="width: 250px; height:150px;  position: relative; ">
            <div class="text-center" style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">
                        <span style="font-size: 2em; opacity: 0.3;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/> <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> </svg>
                        </span>
                    </div>
               total readers :100
             
            </div>
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajouter">
                ajouter
            </button>
            <div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">title</th>
                        <th scope="col">description</th>
                        <th scope="col">#</th>
                    </tr>
                    </thead>
<?php

foreach ($wiki as $rs):
    $tags=$this->tagdisponible($rs->id);
?> <tr>
                        <th scope="row"><?=$rs->title?></th>
                        <td><?=$rs->description?></td>
                        <td>
                            <a href="./user/deleteWikis/<?=$rs->id?>" type="button" class="btn btn-danger">supprimer</a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#update<?=$rs->id?>">
                                modifier
                            </button>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tags<?=$rs->id?>">
                                ajouter tags
                            </button></td>
                    </tr>
    <div class="modal fade" id="update<?=$rs->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form inside the modal -->
                    <form method="post" action="./user/updateWikis/<?=$rs->id?>">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">title</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="title" value="<?=$rs->title?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"><?=$rs->description?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">contenue</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"><?=$rs->contenue?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">categorie</label>
                            <select id="category" name="cat" required>
                                <?php foreach ($cate as $cat):?>
                                    <option value="<?=$cat->id?>"><?=$cat->name?></option>
                                <?php endforeach; ?>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="updateWikis">modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tags<?=$rs->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ajouter des tags</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form inside the modal -->
                    <form method="post" action="../user/tagWikis/<?=$rs->id?>">
                        <label class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">categorie</label>
                            <?php foreach ($tags as $tag): ?>

                                <div class="form-check mb-2" >
                                    <input class="form-check-input" type="checkbox" name="type[]" value="<?php echo $tag->id ; ?>">
                                    <label class="form-check-label" for="tag_id[]"> <?php echo $tag->type; ?> </label>
                                </div>
                            <?php endforeach; ?>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="Ajoutertags">ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
                    <?php
    include_once '../app/View/dashboard/includes/modal.php';
endforeach; ?>
            </div>
        </main>
    </div>
</div>
<?php
include_once "../app/view/dashboard/includes/footer.php";
?>

</body>

</html>
