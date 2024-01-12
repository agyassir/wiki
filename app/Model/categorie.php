<?php
namespace App\Model;

use PDO;
use PDOException;

use App\Database\Database;
class categorie{
    private $id;
    private $name;
    private $db;

    /**
     * @param $db
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function ajout($name){
        $conn = $this->db->getConnection();
        $sql = "INSERT INTO `categorie`( `name`) VALUES (?)";
        $stmt = $conn->prepare($sql);
    $rs=    $stmt->execute([$name]);
    return $rs;
    }
    public function delete($id){
        $conn = $this->db->getConnection();
        $sql = "delete from `categorie`where id = ?";
        $stmt = $conn->prepare($sql);
        $rs=    $stmt->execute([$id]);
        return $rs;
    }
    public function update($id,$name){
        $conn = $this->db->getConnection();
        $sql = "UPDATE `categorie` SET `name`= ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $rs=    $stmt->execute([$name,$id]);
        return $rs;
    }
    public function allcategories()
    {
        $conn = $this->db->getConnection();
        $sql = "SELECT * FROM `categorie`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function categorieswiki($id){
        $conn = $this->db->getConnection();
        $sql = "SELECT wiki.* , users.username FROM `wiki` join users on wiki.author=users.id join  categorie on wiki.cat=categorie.id where categorie.id=?;";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

}