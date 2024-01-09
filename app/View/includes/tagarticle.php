<?php
include "../app/View/includes/header.php";
foreach ($rs as $wiki):
?>

<article class="card mb-4">
    <div class="post-slider">
        <img src="images/post/post-7.jpg" class="card-img-top" alt="post-thumb">
    </div>
    <div class="card-body">
        <h3 class="mb-3"><a class="post-title" href="post-details.html"><?=$wiki->title?></a></h3>
        <ul class="card-meta list-inline">
            <li class="list-inline-item">
                <a href="author-single.html" class="card-meta-author">
                    <img src="images/john-doe.jpg">
                    <span><?=$wiki->username?></span>
                </a>
            </li>
            <li class="list-inline-item">
                <i class="ti-timer"></i>2 Min To Read
            </li>
            <li class="list-inline-item">
                <i class="ti-calendar"></i>14 jan, 2020
            </li>
            <li class="list-inline-item">
                <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">Color</a></li>
                    <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
                    <li class="list-inline-item"><a href="tags.html">Fish</a></li>
                </ul>
            </li>
        </ul>
        <p><?=$obj->description?>.</p>
        <a href="wiki-details/<?=$obj->id?>" class="btn btn-outline-primary">Read More</a>
    </div>
</article>
<?php
endforeach;
include "../app/View/includes/footer.php";
?>