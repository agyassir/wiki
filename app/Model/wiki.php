<?php
namespace App\Model;
use PDO;
use PDOException;
use App\Database\Database;
class wiki{
    private $id;
    private $title;
    private $desc;
    private $content;
    private $categorie;
    private $author;
private $db;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc): void
    {
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie): void
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


    /**
     * @param $db
     */
    public function __construct()
    {
        $this->db = new Database();

    }


    public function getwiki(){
        $conn = $this->db->getConnection();
        $sql = "SELECT * FROM `wiki` where `archivee` = 0";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public function getAllwiki(){
        $conn = $this->db->getConnection();
        $sql = "SELECT wiki.*,users.username FROM `wiki` join users on wiki.author=users.id where archivee = 1 ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function latestWiki(){
        $conn = $this->db->getConnection();
        $sql = "SELECT wiki.* ,users.username FROM wiki join users on wiki.author=users.id   where `archivee` = 1 ORDER BY wiki.id DESC LIMIT 4";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public function randomwiki(){
        $conn = $this->db->getConnection();
        $sql = "SELECT wiki.* , users.username FROM `wiki` join users on wiki.author=users.id  where `archivee` = 1 ORDER BY RAND() LIMIT 1;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchObject();
        return $result;
    }
    public function tagswiki($id){
        $conn = $this->db->getConnection();
        $sql = "SELECT wiki.* , users.username FROM `wiki` join users on wiki.author=users.id join tagger on tagger.wiki=wiki.id join tag on tagger.tag=tag.id join categorie on wiki.cat=categorie.id where tag.id=? AND  `archivee` = 0;";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public function specificwiki($id){
        $conn = $this->db->getConnection();
        $sql = "SELECT wiki.* , users.username , categorie.name FROM `wiki` join users on wiki.author=users.id join categorie on wiki.cat = categorie.id where wiki.id=? AND `archivee` = 1;";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetchObject();
        return $result;
    }
    public function MyWiki($id){
        $conn = $this->db->getConnection();
        $sql = "SELECT wiki.*  FROM wiki  where author=?  ";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public function ajout(){
        $conn = $this->db->getConnection();
        $title=$this->getTitle();
        $desc=$this->getDesc();
        $cont=$this->getContent();
        $cat=$this->getCategorie();
        $aut=$this->getAuthor();
        $sql = "INSERT INTO `wiki`( `title`, `description`, `contenue`, `cat`, `author`) VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $rs=$stmt->execute([$title,$desc,$cont,$cat,$aut]);
        return $rs;
    }
    public function update(){
        $conn = $this->db->getConnection();
        $title=$this->getTitle();
        $desc=$this->getDesc();
        $cont=$this->getContent();
        $cat=$this->getCategorie();
        $aut=$this->getAuthor();
        $id=$this->getId();
        $sql = "UPDATE `wiki` SET  `title`=? , `description` = ? , `contenue`= ?, `cat`=?, `author`=? where id=?";
        $stmt = $conn->prepare($sql);
        $rs=$stmt->execute([$title,$desc,$cont,$cat,$aut,$id]);
        return $rs;
    }
    public function delete(){
        $conn = $this->db->getConnection();
        $id=$this->getId();
        $sql = "delete from `wiki`where id = ?";
        $stmt = $conn->prepare($sql);
        $rs=    $stmt->execute([$id]);
        return $rs;
    }
    public function archive(){
        $conn = $this->db->getConnection();
        $id=$this->getId();
        $sql = "UPDATE `wiki` SET  `archivee` = 1 where id = ?";
        $stmt = $conn->prepare($sql);
        $rs=    $stmt->execute([$id]);
        return $rs;
    }
    public function getarchwiki(){
        $conn = $this->db->getConnection();
        $sql = "SELECT * FROM `wiki` where `archivee` = 0";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public function CMyWiki($id){
        $conn = $this->db->getConnection();
        $sql = "SELECT COUNT(id) AS num FROM wiki WHERE author = ? AND archivee = 1;";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetchObject();
        return $result;
    }
    public function CALLWikis(){
        $conn = $this->db->getConnection();
        $sql = "SELECT COUNT(id) AS num FROM wiki;";
        $stmt = $conn->prepare($sql);
        $stmt->execute([]);
        $result = $stmt->fetchObject();
        return $result;
    }
    public function CArchivedWikis(){
        $conn = $this->db->getConnection();
        $sql = "SELECT COUNT(id) AS num FROM wiki where archivee = 0;";
        $stmt = $conn->prepare($sql);
        $stmt->execute([]);
        $result = $stmt->fetchObject();
        return $result;
    }
}