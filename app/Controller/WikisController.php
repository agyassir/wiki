<?php

namespace App\Controller;
use App\Model\tags;
use App\Model\wiki;
use App\Model\categorie;
use App\Model\user;
class WikisController
{
private $id;
    private $title;
    private $desc;
    private $cat;
    private $contenue;

    public function index(){
        $wiki=$this->allwikis();

        include "../app/view/main/wikis.php";
    }
    public function allwikis(){
        $wikis=new wiki();
        $wiki=$wikis->getAllwiki();
        return $wiki;
    }
    public function detail($id){
        $wikis=new wiki();
        $tag=new tags();
        $wiki=$wikis->specificwiki($id);
        $tags= $tag->TagsbyWikisId($id);
//        var_dump($tags);
//        die();
        include "../app/view/main/detail.php";
    }

}