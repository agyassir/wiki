<?php

namespace App\Model;
use PDO;
use PDOException;
use App\Database\Database;
class tagger
{
    private $wiki;
    private $tag;
    private $db;
    public function __construct()
    {
        $this->db = new Database();

    }

    /**
     * @return mixed
     */
    public function getWiki()
    {
        return $this->wiki;
    }

    /**
     * @param mixed $wiki
     */
    public function setWiki($wiki): void
    {
        $this->wiki = $wiki;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param mixed $tag
     */
    public function setTag($tag): void
    {
        $this->tag = $tag;
    }

    public function ajouterTagger(){
        $tags=$this->getTag();
        foreach ($tags as $tag){
        $conn = $this->db->getConnection();
        $sql = "insert into `tagger` values (?,?)";
        $stmt = $conn->prepare($sql);
        $rs=$stmt->execute([$this->getWiki(),$tag]);
        }
        return $rs;
    }

}