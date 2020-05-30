<?php
class manufactures extends db{
    //phuonwg thuc lay san pham tu hang
    public function getProductsbyManu($manu)
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
        $sql = self::$connection->prepare("INSERT INTO `manufactures` (`manu_ID`, `manu_name`, `manu_img`) VALUES (NULL, $manu_name, $manu_img)");
        $sql->execute();
    }
    public function delManufactures($delID)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE manu_ID = $delID ");      
        return $sql->execute();
    }
}