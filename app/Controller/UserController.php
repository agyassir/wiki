<?php
namespace App\Controller;
use App\Model\tags;
use App\Model\wiki;
use App\Model\categorie;
use App\Model\user;

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
//        $tag=$this->getTags();
//        $wikis=$this->getlatestWiki();
//        $rand=$this->getrandomWiki();
//        include "../app/View/includes/header.php";
//        include_once '../app/View/main/home.php';
        if (!empty($_SESSION['role_id'])){
             if($_SESSION['role_id']=='2'){
                 $mine=$this->countmyWikis();
                 $wiki=$this->getmyWikis();
                 $cate=$this->getAllCategorie();
//                 var_dump($cate);
//                 die();
                include_once '../app/View/dashboard/dashboard.php';
                exit();
            }else{
                 $mine=$this->countAllWikis();
                 $Awiki=$this->countArchivedWikis();
                 $cate=$this->getAllCategorie();
                 $users= $this->getAllUsers();
                include_once '../app/View/dashboard/dashboard_admin.php';
                exit();
            }
        } else {
            include_once '../app/View/login.php';
        }
    }
public function getTags()
{
$tags=new tags();
$tag=$tags->tagsexisting();
return $tag;
}
    public function AgetTags()
    {
        $tags=new tags();
        $tag=$tags->tagsexisting();
        include_once "../app/View/dashboard/tags.php";
        exit();
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
    public function getAllCategorie(){
        $cat= new Categorie();

        return $cat->allcategories();
    }
    public function createCategorie(){
        $name=$_POST['name'];
        $cat= new Categorie();
        $cat->ajout($name);
    }
    public function modifyCategorie(){
        $name=$_POST['name'];
        $id=$_POST['id'];
        $cat= new Categorie();
        $cat->modify($id,$name);
    }
    public function deleteCategorie($id){
        $cat= new Categorie();
        $cat->delete($id);
    }
    public function createtag(){
        $name=$_POST['type'];
        $tag= new tags();
        $tag->ajout($name);
    }
    public function modifytag(){
        $name=$_POST['name'];
        $id=$_POST['id'];
        $tag= new tags();
        $tag->modify($id,$name);
    }
    public function deletetag($id){
        $tag= new tags();
        $tag->delete($id);
    }
    public function getmyWikis(){
        $id=$_SESSION['user_id'];
        $wiki=new wiki();
        $rs=$wiki->MyWiki($id);
        return $rs;
    }
    public function addWikis(){
        $wiki=new wiki();
        if (isset($_POST['ajouterWiki'])){
        $wiki->setTitle($_POST['title']);
        $wiki->setCategorie($_POST['cat']);
        $wiki->setAuthor($_SESSION['user_id']);
        $wiki->setContent($_POST['content']);
        $wiki->setDesc($_POST['desc']);
        $rs=$wiki->ajout();
        if ($rs){
            header('location:/wiki/');
        }
        }
    }
    public function updateWikis($id){
        $wiki=new wiki();
        if (isset($_POST['updateWikis'])){
        $wiki->setid($id);
        $wiki->setTitle($_POST['title']);
        $wiki->setCategorie($_POST['cat']);
        $wiki->setAuthor($_SESSION['user_id']);
        $wiki->setContent($_POST['content']);
        $wiki->setDesc($_POST['desc']);
        $rs=$wiki->update();
            if ($rs){
                header('location:/wiki/');
            }
        }
    }
    public function deleteWikis($id){
        $wiki=new wiki();
        $wiki->setid($id);
        $rs=$wiki->delete();
        if ($rs){
            header('location:/wiki/');
        }
    }
    public function archiveWikis($id){
        $wiki=new wiki();
        $wiki->setid($id);
        $rs=$wiki->archive();
        return $rs;
    }
    public function countmyWikis(){
        $id=$_SESSION['user_id'];
        $wiki=new wiki();
        $rs=$wiki->CMyWiki($id);
        return $rs;
    }
    public function countAllWikis(){
        $wiki=new wiki();
        $rs=$wiki->CALLWikis();
        return $rs;
    }
    public function countArchivedWikis(){

        $wiki=new wiki();
        $rs=$wiki->CArchivedWikis();
        return $rs;
    }
    public function getAllUsers(){
        $user=new user();
        $rs=$user->findAll();
        return $rs;

    }
}