<?php
include '../app/view/includes/head.php';
?>

<section data-bs-version="5.1" class="header2 cid-u15hzfEahA " id="header02-b" style="background-color: #a0e1e1;">


    <div style="height:10rem; color: #a0e1e1"></div>

    <div class="container">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-8 mbr-form">
                <div class="">
                    <h1 class="mbr-section-title mbr-fonts-style mb-5 display-1">
                        <strong>Dive into the world of your own favorite wiki</strong>
                    </h1>
                </div>

                <div class="text-wrapper align-left" data-form-type="formoid">
                        </div>
                        <div class=" row ">
                            <div data-for="email" class="col-lg-9 form-group"">
                                <input type="email" name="email" placeholder="search"  class="form-control display-7" value="" id="search"  style="min-height: 80px;">
                            </div>
                            <div class="col-auto mbr-section-btn"><button type="submit" class="w-100 w-100 w-100 w-100 w-100 w-100 btn btn-primary display-7">Type Text<span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span></button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="features4 cid-u15bZU2whQ" id="search_result" style="background-color: #a0e1e1;">


    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>All Wikis</strong></h4>
        </div>
        <div class="row mt-4">
<?php
foreach($wiki as $rs):
?>
            <div class="item features-image  mb-5 col-lg-4 active">
                <div class="item-wrapper">
                    <div class="d-flex justify-content-between flex-column mbr-bg-white" style="border-radius: 8%; height: 550px;">

                    <div class="item-img">
                        <img src="./assets/images/photo-1546410531-bb4caa6b424d.jpeg" alt="Mobirise Website Builder" title="" data-slide-to="0" data-bs-slide-to="0">
                    </div>
                    <div class="item-content" >
                        <h5 class="item-title mbr-fonts-style display-5 mx-2"><strong><?=$rs->title?></strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7 mx-2"><?=$rs->description?></h6>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2 mx-2"><a href="./wikis?uri=wikis/detail/<?=$rs->id?>" class="btn item-btn btn-black display-7">read Now
                            &gt;</a></div>
                </div>
                </div>
            </div>
<?php
endforeach;
?>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="footer3 cid-u13Wz1zGiZ" once="footers" id="footer03-8">





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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var SearchInput = document.getElementById("search");
        var searchResultContainer = document.getElementById("search_result");

        SearchInput.addEventListener("keyup", function () {
            var input = SearchInput.value;

            if (input !== "") {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "search.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        // Clear previous results
                        searchResultContainer.innerHTML = "";
                        // Append the new search results
                        searchResultContainer.innerHTML += xhr.responseText;
                        searchResultContainer.style.display = "flex";
                    }
                };
                xhr.send("input=" + input);
            }
        });
    });
</script>