<?php
class News
{
    private $db;
    function __construct($conn)
    {
        $this->db = $conn;
    }
    public function all()
    {
        $sql = 'SELECT * FROM `news`';
        $res = $this->db->prepare($sql);
        $res->execute();
        return $res;
    }
    public function single($id)
    {
        $sql = 'SELECT * FROM `news` WHERE id=' . $id;
        $res = $this->db->prepare($sql);
        $res->execute();
        return $res;
    }
    public function add(string $image_url, string $title, string $description)
    {
        $sql = "INSERT INTO `news`(`image_url`, `title`, `description`) VALUES ('$image_url','$title','$description')";
        $res = $this->db->prepare($sql);
        $res->execute();
    }
    public function update(int $id, string $image_url, string $title, string $description)
    {
        $sql = "UPDATE `news` SET `image_url`='$image_url',`title`='$title',`description`='$description' WHERE id = $id";
        $res = $this->db->prepare($sql);
        $res->execute();
    }
    public function drop($id)
    {
        $sql = 'DELETE FROM `news` WHERE id=' . $id . '';
        $res = $this->db->prepare($sql);
        $res->execute();
    }
}