<?php
class protypes extends Db
{
    public function getAllProtype()
    {
        $sql = self::$connection->prepare("SELECT * FROM `protype` WHERE protype.type_ID >0");
        return $this->select($sql);
    }
}