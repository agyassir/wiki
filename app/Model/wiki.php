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
     * @param $db
     */
    public function __construct()
    {
        $this->db = new Database();

    }


    public function getwiki(){
        $conn = $this->db->getConnection();
        $sql = "SELECT * FROM `wiki` ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public function latestWiki(){
        $conn = $this->db->getConnection();
        $sql = "SELECT wiki.* ,users.username FROM wiki join users on wiki.author=users.id ORDER BY wiki.id DESC LIMIT 5";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public function randomwiki(){
        $conn = $this->db->getConnection();
        $sql = "SELECT wiki.* , users.username FROM `wiki` join users on wiki.author=users.id ORDER BY RAND() LIMIT 1;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchObject();
        return $result;
    }
    public function tagswiki($id){
        $conn = $this->db->getConnection();
        $sql = "SELECT wiki.* , users.username FROM `wiki` join users on wiki.author=users.id join tagger on tagger.wiki=wiki.id join tag on tagger.tag=tag.id join categorie on wiki.cat=categorie.id where tag.id=?;";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}