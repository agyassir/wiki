<?php
namespace App\Controller;
use App\Model\tags;
use App\Model\wiki;

class UserController
{
    private $firstname;
    private $lastname;
    private $birth;
    private $email;
    private $password;

    public function __construct()
    {
    }

    public function index()
    {
        $tag=$this->getTags();
        $wikis=$this->getlatestWiki();
        $rand=$this->getrandomWiki();
        include "../app/View/includes/header.php";
        include_once '../app/View/main/home.php';
    }
public function getTags()
{
$tags=new tags();
$tag=$tags->tagsexisting();
return $tag;
}
public function getlatestWiki(){
    $wiki=new wiki();
    $rs=$wiki->latestWiki();
    return $rs;
}
    public function getrandomWiki(){
        $wiki=new wiki();
        $rs=$wiki->randomwiki();
        return $rs;
    }
    public function  getres($id){
        $wiki=new wiki();
        $tags=new tags();
        $rs=$wiki->tagswiki($id);
        $tag=$tags->tagsbyId($id);

        include_once '../app/View/main/wikisbyfilter.php';

    }
    public function getwikibytagId($id){
        $this->getres($id);

    }
}