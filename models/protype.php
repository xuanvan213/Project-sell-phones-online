<?php
class protypes extends Db
{
    public function getAllProtype()
    {
        $sql = self::$connection->prepare("SELECT * FROM `protype`");
        return $this->select($sql);
    }
    public function delProtype($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `protype` WHERE `protype`.`type_ID`= ?");
        $sql->bind_param('i', $id);
        return $sql->execute();
    }
    public function addNewProtype($type_name, $type_img)
    {
        $sql= self::$connection->prepare("INSERT INTO `protype`(`type_name`, `type_img`) VALUES (?,?)");
        $sql->bind_param('ss', $type_name, $type_img);
        return $sql->execute();
    }
    public function getProtypebyId($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `protype` WHERE protype.type_ID = ?");
        $sql->bind_param('i', $id);
        return $this->select($sql);
    }

    public function updateProtype($type_name, $type_img, $id)
    {
        $sql = self::$connection->prepare("UPDATE `protype` SET `type_name`=?,`type_img`=? WHERE `protype`.`type_ID`= ?");
        $sql->bind_param('ssi', $type_name, $type_img, $id);
        return $sql->execute();
    }
    public function updateProtype2($type_name, $id)
    {
        $sql = self::$connection->prepare("UPDATE `protype` SET `type_name`=? WHERE `protype`.`type_ID` = ?");
        $sql->bind_param('si', $type_name, $id);
        return $sql->execute();
    }
}