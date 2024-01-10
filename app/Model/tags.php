<?php
namespace App\Model;

use PDO;
use PDOException;
use App\Database\Database;
class tags{
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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    public function tagsexisting()
    {
        $conn = $this->db->getConnection();
        $sql = "SELECT * FROM `tag` ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

return $result;
    }
    public function tagsbyId($id)
    {
        $conn = $this->db->getConnection();
        $sql = "SELECT * FROM `tag` where id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetchObject();
        return $result;
    }

    public function ajout($name){
        $conn = $this->db->getConnection();
        $sql = "insert into `tag`('type') values (?)";
        $stmt = $conn->prepare($sql);
        $rs=    $stmt->execute([$name]);
        return $rs;
    }
    public function delete($id){
        $conn = $this->db->getConnection();
        $sql = "delete from `tag`where id = ?";
        $stmt = $conn->prepare($sql);
        $rs=    $stmt->execute([$id]);
        return $rs;
    }
    public function update($id,$name){
        $conn = $this->db->getConnection();
        $sql = "UPDATE `tag` SET `tag`= ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $rs=    $stmt->execute([$name,$id]);
        return $rs;
    }
}