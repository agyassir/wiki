<?php

include '../app/view/includes/head.php';

?>

<div style="margin-bottom: 10rem"></div>
<section data-bs-version="5.1" class="start article2 cid-u15xV8ESUe" id="article02-f">





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-6 image-wrapper">
                <img class="w-100" src="./assets/images/photo-1517673132405-a56a62b18caf.jpeg" alt="Mobirise Website Builder">
            </div>
            <div class="col-12 col-md-12 col-lg">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                        <strong><?=$wiki->title?></strong>
                    </h1>
                    <h3 class="mbr-section-title mbr-fonts-style mb-4 display-5">
                        <strong><?=$wiki->description?></strong>
                    </h3>
                    <h3 class="mbr-section-title mbr-fonts-style mb-4 display-7">
                        <strong>autheur: <?=$wiki->username?></strong>
                    </h3>
                    <p class="mbr-text align-left mbr-fonts-style mb-4 display-7">
                        categorie : <?=$wiki->name?>
                    </p>
                    <ul class="list-inline widget-list-inline">
                        <?php
                        foreach($tags as $rs):
                        ?>
                        <li class="list-inline-item" style="border: solid 1px;border-radius: 50px;background-color: aliceblue;"><a href="tags.html">#<?=$rs->type?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <p class="mbr-text align-left mbr-fonts-style mt-5 display-7">
            <?=$wiki->contenue?>
        </p>
    </div>
</section>

</body>
</html>
