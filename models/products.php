<?php
class Products extends Db{
    //viet cau truy van lay tat ca gia tri trong bang products
    public function getAllProducts()
    {
        $sql= self::$connection->prepare("SELECT * FROM `products` WHERE products.id > 0");
        return $this->select($sql);
    }
    //truy vấn giá sản phẩm theo tên sản phẩm
    public function getProductsById($id)
    {         
        $sql = self::$connection->prepare("SELECT * FROM products WHERE products.id = ?");
        $sql->bind_param('i', $id);
        return $this->select($sql);
    }
 //truy vấn giá sản phẩm theo tên hảng
    public function getProductManuid($manuid)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE products.id > 0 AND products.manu_id = ?");
        $sql->bind_param('i', $manuid);
        return $this->select($sql);
    }
    //truy vấn sản phẩm theo từ khóa
    public function getProductsbySearch($search)
    {
        $key = "%$search%";
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE products.name LIKE ?");
        $sql->bind_param('s', $key);
        return $this->select($sql);
    }
    public function getProductsSearch($search, $page, $perpage)
    {
        $start = ($page - 1) * $perpage;
        $key = "%$search%";
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE products.name LIKE ? ORDER BY id DESC LIMIT $start , $perpage");
        $sql->bind_param('s', $key);
        return $this->select($sql);
    }
    public function paginationSearch($totalRow, $perpage)
    {
        $link = '';
        $totalPage = ceil($totalRow/$perpage);
        for($i = 1; $i <= $totalPage;$i++)
        {
            $link .="<button> <a href='products.php?page=$i'>$i </a></button>";
        }
        return $link;
    }
    //get prodcuts theo ten hang
    public function getProductManuName($manuName)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products`,`manufactures` WHERE products.manu_id = manufactures.manu_ID AND manufactures.manu_name = ?");
        $sql->bind_param('s', $manuName);
        return $this->select($sql);
    }
    //phân trang
    public function pagination($totalRow, $perpage)
    {
        $link = '';
        $totalPage = ceil($totalRow/$perpage);
        for($i = 1; $i <= $totalPage;$i++)
        {
            $link .="<button> <a href='index.php?page=$i'>$i </a></button>";
        }
        return $link;
    }
    //lấy sang phẩm theo phân trang
    public function getProducts($page, $perpage)
    {
        $start = ($page - 1) * $perpage;
        $sql= self::$connection->prepare("SELECT * FROM `products` ORDER BY id DESC LIMIT $start , $perpage");
        return $this->select($sql);
    }

    //phân trang Quản Lý
    public function paginationAdmin($totalRow, $perpage)
    {
        $link = '';
        $totalPage = ceil($totalRow/$perpage);
        for($i = 1; $i <= $totalPage;$i++)
        {
            $link .="<button> <a href='indexAdmin.php?page=$i'>$i </a></button>";
        }
        return $link;
    }
    public function getAlltable()
    {
        $sql= self::$connection->prepare("SELECT products.id, products.image, products.name, protype.type_name, manufactures.manu_name, products.description, products.price FROM `products`, `protype`,`manufactures` WHERE products.manu_id = manufactures.manu_ID AND products.type_id = protype.type_ID ");
        return $this->select($sql);
    }
    public function gettableProducts($page1, $perpage1)
    {
        $start1 = ($page1 - 1) * $perpage1;
        $sql= self::$connection->prepare("SELECT products.id, products.image, products.name, protype.type_name, manufactures.manu_name, products.description, products.price FROM `products`, `protype`,`manufactures` WHERE products.manu_id = manufactures.manu_ID AND products.type_id = protype.type_ID ORDER BY products.id DESC LIMIT $start1 , $perpage1 ");
        return $this->select($sql);
    }
    public function delProducts($delID1)
    {
        $sql = self::$connection->prepare("DELETE  FROM `products` WHERE products.id = $delID1 ");      
        return $sql->execute();
    }
    public function addNewProducts($name, $price, $image, $description, $manuid, $typeid)
    {
        $sql= self::$connection->prepare("INSERT INTO `products`(`name`, `price`, `image`, `description`, `manu_id`, `type_id`) 
        VALUES ( ?, ?, ?, ?, ?, ?)");
         $sql->bind_param('sissii', $name, $price, $image, $description, $manuid, $typeid);
        return $sql->execute();
    }
    public function updatesProducts($name, $price, $image, $description, $manuid, $typeid,$id)
    {
        $sql = self::$connection->prepare("UPDATE `products` SET `name`=?,`price`=?,`image`=?,`description`=?,`manu_id`=?,`type_id`=? WHERE id = ?");
        $sql->bind_param('sissiii', $name, $price, $image, $description, $manuid, $typeid, $id);
        return $sql->execute();
    }
    public function updatesProducts_2($name, $price, $description, $manuid, $typeid,$id)
    {
        $sql = self::$connection->prepare("UPDATE `products` SET `name`=?,`price`=?, `description`=?,`manu_id`=?,`type_id`=? WHERE id = ?");
        $sql->bind_param('sisiii', $name, $price, $description, $manuid, $typeid, $id);
        return $sql->execute();
    }
    public function getLaptop($manu_name)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products`,`manufactures` WHERE products.type_id = 2 AND manufactures.manu_name = ? AND manufactures.manu_id = products.manu_id ORDER BY products.id DESC ");
        $sql->bind_param('s', $manu_name);
        return $this->select($sql);
    }
    public function getDienThoai($manuN)
    {

        $sql = self::$connection->prepare("SELECT * FROM `products`,`manufactures` 
        WHERE products.manu_id = manufactures.manu_ID AND manufactures.manu_name = ? AND products.type_id = 1
        ORDER BY products.id");
        $sql->bind_param('s', $manuN);
        return $this->select($sql);
    }
    public function getTaiNghe($manuN)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products`,`manufactures` 
        WHERE products.manu_id = manufactures.manu_ID AND manufactures.manu_name = ? AND products.type_id = 3
        ORDER BY products.id");
        $sql->bind_param('s', $manuN);
        return $this->select($sql);
    }
    public function getMayTinhBang($manuN)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products`,`manufactures` 
        WHERE products.manu_id = manufactures.manu_ID AND manufactures.manu_name = ? AND products.type_id = 4
        ORDER BY products.id");
        $sql->bind_param('s', $manuN);
        return $this->select($sql);
    }
    public function getNewDienThoai($page)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `products`.`type_id` = 1 ORDER BY products.id DESC LIMIT $page,4 ");
        return $this->select($sql);
    }
    public function getNewLapTop($page)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `products`.`type_id` = 2 ORDER BY products.id DESC LIMIT $page,4");
        return $this->select($sql);
    }
}