<?php
class manufactures extends db{
    //phuonwg thuc lay san pham tu hang
    public function getProductsbyManu($manuid)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE products.id > 0 AND products.manu_id = ?");
        $sql->bind_param('i', $manuid);
        return $this->select($sql);
    }
    //phuong thuc lay ra tat ca cac hang
    public function getAllManu()
    {
        $sql = self::$connection->prepare("SELECT * FROM `manufactures` ORDER BY `manufactures`.`manu_ID` ASC");
        return $this->select($sql);
    }
    public function addNewManu($manu_name, $manu_img)
    {
        $sql = self::$connection->prepare("INSERT INTO `manufactures`(`manu_name`, `manu_img`) VALUES (?,?)");
        $sql->bind_param('ss', $manu_name, $manu_img);
        return $sql->execute();
    }
    public function delManufactures($delID)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE manu_ID = $delID ");      
        return $sql->execute();
    }
    public function getManubyID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `manufactures` WHERE `manufactures`.`manu_ID` = ?");
        $sql->bind_param('i', $id);
        return $this->select($sql);
    }
    public function updateManufactures($manu_name, $manu_img,$id)
    {
        $sql = self::$connection->prepare("UPDATE `manufactures` SET `manu_name`=?,`manu_img`=? WHERE `manufactures`.`manu_id` = ?");
        $sql->bind_param('ssi', $manu_name, $manu_img, $id);
        return $sql->execute();
    }
    public function updateManufactures2($manu_name, $id)
    {
        $sql = self::$connection->prepare("UPDATE `manufactures` SET `manu_name`=? WHERE `manufactures`.`manu_id` = ?");
        $sql->bind_param('si', $manu_name, $id);
        return $sql->execute();
    }
}