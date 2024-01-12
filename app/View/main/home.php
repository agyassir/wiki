<?php
include '../app/view/includes/head.php';
?>

<body>


<section data-bs-version="5.1" class="header16 cid-u13Wz1uQyf mbr-fullscreen mbr-parallax-background" id="hero-17-u13Wz1uQyf">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="content-wrap col-12 col-md-12">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-1">
                    <strong>Wiki</strong></h1>

                <p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7">Plongez dans un monde de connaissances infinies et explorez des wikis passionnants sur tous les sujets imaginables.</p>
                <div class="mbr-section-btn"><a class="btn btn-white-outline display-7" href="./wikis">Découvrir plus</a> <a class="btn btn-white-outline display-7" href="./user/register">Rejoignez-nous</a></div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="article4 cid-u13Wz1uAuj" id="about-us-4-u13Wz1uAuj">





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-6 image-wrapper">
                <img class="w-100" src="assets/images/tkloe7nnq7mnmsiuijby-hm.jpeg" >
            </div>
            <div class="col-12 col-md-12 col-lg">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-2"><strong>Wiki sélectionné par l'éditeur pour vous&nbsp;</strong></h1>
                    <p class="mbr-text mbr-fonts-style mb-3 display-4"><?=$rand->title?></p>

                    <p class="mbr-text mbr-fonts-style mb-3 display-7"><?=$rand->description?></p>
                    <p class="mbr-text mbr-fonts-style mb-3 display-7"><?=$rand->contenue?></p>

                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features03 cid-u13Wz1v5Y9" id="events-1-u13Wz1v5Y9">


    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-12 content-head">
                <div class="mbr-section-head">
                    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>wikis de la semain</strong>
                    </h4>

                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($wikis as $OBJ):
            ?>
            <div class="item features-image col-12 col-md-6 col-lg-3 active">
                <div class="item-wrapper">
                    <div class="item-img mb-3">
                        <img src="assets/images/photo-1497796742626-fe30f204ec54.jpeg" alt="Mobirise Website Builder" title="">
                    </div>
                    <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style mt-0 mb-2 display-5">
                            <strong><?=$OBJ->title?></strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">20 Février 2024</p>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7"><?=$OBJ->description?></p>
                        <div class="mbr-section-btn item-footer">
                            <a href="?uri=wikis/detail/<?=$OBJ->id?>" class="btn item-btn btn-primary display-7">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="article13 cid-u140toWEwu" id="article13-2">



    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-md-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-left">
                        <h4 class="card-title mbr-fonts-style display-2">
                            <strong>Tell knowledge through WIKIS</strong>
                        </h4>
                        <p class="mbr-text mbr-fonts-style mt-4 display-7">

                            Wikis, as dynamic knowledge-sharing platforms, offer a unique avenue to disseminate information collaboratively. Through wikis, individuals contribute their expertise, creating a collective reservoir of insights and data. These collaborative environments enable the seamless exchange of knowledge, fostering a sense of community-driven learning
                        </p>
                        <div class="mbr-section-btn mt-4">
                            <a class="btn btn-secondary display-4" href="./user/login">
                                Start now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="people06 cid-u13Wz1vuMd" id="testimonials-7-u13Wz1vuMd">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-md-12 col-lg-8">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <p class="card-text mbr-fonts-style display-5">WikiMania a changé ma vie! J'ai découvert des passions que je ne savais même pas que j'avais.</p>
                        <div class="img-wrapper mt-3 justify-content-center">
                            <img src="assets/images/photo-1598992616139-5ed3d0fa4eeb.jpeg" alt="" data-slide-to="0" data-bs-slide-to="0">
                        </div>
                        <p class="card-title mbr-fonts-style mt-3 display-7">
                            <strong>Sophie Martin</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features023 cid-u13Wz1w54M" id="metrics-1-u13Wz1w54M">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="card-wrapper mb-5">
                    <div class="card-box align-center">



                    </div>
                </div>
            </div>
        </div>
        <div class="row content-row">
            <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                <div class="item-wrapper">
                    <div class="title mb-3">
                        <span class="num mbr-fonts-style display-1">
                            <strong>100K+</strong></span>
                    </div>
                    <h4 class="card-title mbr-fonts-style display-5">
                        <strong>Auteurs passionnants</strong>
                    </h4>

                </div>
            </div>
            <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                <div class="item-wrapper">
                    <div class="title mb-3">
                        <span class="num mbr-fonts-style display-1">
                            <strong>500+</strong></span>
                    </div>
                    <h4 class="card-title mbr-fonts-style display-5">
                        <strong>Tags et Categories</strong>
                    </h4>

                </div>
            </div>
            <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                <div class="item-wrapper">
                    <div class="title mb-3">
                        <span class="num mbr-fonts-style display-1">
                            <strong>5000+</strong></span>
                    </div>
                    <h4 class="card-title mbr-fonts-style display-5">
                        <strong>Wikis Differents</strong>
                    </h4>

                </div>
            </div>
        </div>
    </div>
</section>








<section data-bs-version="5.1" class="footer3 cid-u13Wz1zGiZ" once="footers" id="footer-6-u13Wz1zGiZ">





    <div class="container">
        <div class="row">
            <div class="row-links">
                <ul class="header-menu">




                    <li class="header-menu-item mbr-fonts-style display-5">
                        <a href="#" class="text-white">Accueil</a>
                    </li><li class="header-menu-item mbr-fonts-style display-5">
                        <a href="#" class="text-white">À Propos</a>
                    </li><li class="header-menu-item mbr-fonts-style display-5">
                        <a href="#" class="text-white">Communauté</a>
                    </li><li class="header-menu-item mbr-fonts-style display-5">
                        <a href="#" class="text-white">Contact</a>
                    </li></ul>
            </div>


            <div class="col-12 mt-4">
                <p class="mbr-fonts-style copyright display-7">© 2024 WikiMania. Tous droits réservés.</p>
            </div>
        </div>
    </div>
</section>

</body>
<?php
//include "../app/View/includes/footer.php";
?>
