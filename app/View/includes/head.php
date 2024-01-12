<!doctype html>
<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>wiki</title>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./assets/dropdown/css/style.css">
    <link rel="stylesheet" href="./assets/socicon/css/styles.css">   <link rel="stylesheet" href="assets/parallax/jarallax.css">

    <link rel="stylesheet" href="././assets/theme/css/style.css">
    <link rel="preload" as="style" href="./assets/mobirise/css/mbr-additional.css?v=Czi4k3"><link rel="stylesheet" href="./assets/mobirise/css/mbr-additional.css?v=Czi4k3" type="text/css">

    <link rel="stylesheet" href="./assets/css/style">
</head>

<body>
<section data-bs-version="5.1" class="menu menu2 cid-u13Wz1ufB1" once="menu" id="menu-5-u13Wz1ufB1">


    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
				<span class="navbar-logo">

						<img src="assets/images/wikipedia-icon-icons.com-50721-192x192.png" alt="Mobirise Website Builder" style="height: 4.3rem;">

				</span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="./?uri=user/home">Wiki</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

<?php
if(isset($_SESSION['role_id'])){

switch ($_SESSION['role_id']){
    case 1:

?>
                <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-primary display-4" href="./user/getUsers">Continuer l'aventure</a>
                </div>
                <?php
   break;
    case 2:?>
        <div class="navbar-buttons mbr-section-btn">
            <a class="btn btn-primary display-4" href="./user/">Continuer l'aventure</a>
        </div>
<?php
break;
}}else{
    ?>
    <div class="navbar-buttons mbr-section-btn">
        <a class="btn btn-primary display-4" href="./user/login">Commencer l'aventure</a>
    </div>     <?php
}
                ?>
            </div>
        </div>
    </nav>
</section>
