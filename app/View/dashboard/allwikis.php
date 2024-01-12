<?php
include_once '../app/View/dashboard/includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
        <?php include_once '../app/View/dashboard/includes/asside.php'; ?>
        <main class="col-md-10 p-3 main-content">

            <div>
                <div class="col-lg-12 p-0">
                    <div class="card border-0 mb-4">
                        <div class="card-body p-0 d-flex gap-2"
                             style="flex-wrap: wrap; margin-left: 30px;">
                            <?php
                            foreach ($wiki as $OBJ):
                            ?>
                <div class="card flex-shrink-0 mb-2" style="width: 15rem; height: 300px;">
                    <img src="../public/assets/images/logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $OBJ->title ?>
                        </h5>
                        <p class="card-text">
                            <?= $OBJ->description ?>
                        </p>
                        <span class="text-muted">
                   By:
                      <?= $OBJ->username?>
                       </span>
                        <br>

                    </div>
                </div>
                            <?php endforeach;?>
            </div>
    </div>
</div>
</main>
        <?php
include_once "../app/view/dashboard/includes/footer.php";

?>