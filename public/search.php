<?php

function searchWikisByTitle($input)
{
    try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "wiki";

        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM wiki WHERE wiki.title LIKE :input ";

$stmt = $conn->prepare($query);
$stmt->bindValue(':input', '%' . $input . '%', PDO::PARAM_STR);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_OBJ);

return $result;
} catch (PDOException $e) {
// Handle the exception appropriately (log, show user-friendly message, etc.)
return [];
}
}

// Example usage:
if (isset($_POST["input"])) {
$input = $_POST["input"];
$wikis = searchWikisByTitle($input);

if (!empty($wikis)) {
    ?>
<div class="container">
    <div class="mbr-section-head">
        <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
            <strong>selected Wikis</strong></h4>
    </div>
    <div class="row mt-4">
    <?php
foreach ($wikis as $wiki) { ?>



    <div class="item features-image  mb-5 col-lg-4 active">
        <div class="item-wrapper">
            <div class="d-flex justify-content-between flex-column mbr-bg-white" style="border-radius: 8%; height: 550px;">

                <div class="item-img">
                    <img src="./assets/images/photo-1546410531-bb4caa6b424d.jpeg" alt="Mobirise Website Builder" title="" data-slide-to="0" data-bs-slide-to="0">
                </div>
                <div class="item-content" >
                    <h5 class="item-title mbr-fonts-style display-5 mx-2"><strong><?=$wiki->title?></strong></h5>
                    <h6 class="item-subtitle mbr-fonts-style mt-1 display-7 mx-2"><?=$wiki->description?></h6>
                </div>
                <div class="mbr-section-btn item-footer mt-2 mx-2"><a href="./wikis?uri=wikis/detail/<?=$wiki->id?>" class="btn item-btn btn-black display-7">read Now
                        &gt;</a></div>
            </div>
        </div>
    </div>

<?php     }
    } else { ?>

<div class="section__wikis__container col-12 col-md-10 col-lg-6  d-flex justify-content-around">
    <div class="card"   style="width: 100%;">
        <div class="card-header text-muted  ">

            <h6>aucune resultat.</h6>
        </div>


        <img class="card-img-bottom " src="assets/images/no_result.jpg" alt="Card image cap" style="height: 50vh; border-radius : 0 !important">

        <div class="card-footer text-muted  ">

            <h6>ressayez ....</h6>
        </div>

    </div>
</div>



<?php    }
} else {
    // Handle the case where input is not set
    echo "Input is not set";
}
 ?>
