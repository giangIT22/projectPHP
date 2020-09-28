<?php
 
class ProductModel extends BaseModel{
    const TABLE = 'products';

    public function getAll($select = ['*'], $orderBys = [], $limit = 15){
        return $this->all(self::TABLE, $select, $orderBys, $limit);
    }

    public function findProductById($select = ['*'],$id){
        return $this->find(self::TABLE, $select, $id);
    }

    public function createData($data){
        $this->create(self::TABLE, $data);
    }
    
    public function deleteData($id){
        $this->delete(self::TABLE, $id);
    } 

    public function updateData($id, $data){
        $this->update(self::TABLE, $id, $data);
    }

    public function getByCategoryId($categoryId, $productId = null){//lấy dánh sách 
        $sql = "SELECT * FROM " .self::TABLE." WHERE category_id = ${categoryId}";
        if($productId){
            $sql = "SELECT * FROM " .self::TABLE." WHERE category_id = ${categoryId} and id !=${productId}";
        }

        return $this->getByQuery($sql);
    }

    public function search(array $input){
        $sql = "SELECT * FROM products ";

        if(!empty($input['product_name'])){
           $whereName = ' name like "%'. $input['product_name'] . '%"';

           $sql .= "WHERE ${whereName}";
        }

        $whereCheckPrice = false;
        if(!empty($input['start_price']) && !empty($input['end_price'])){
           $whereCheckPrice = true;
           $wherePrice = "price >= " . $input['start_price'] . " AND price <= " . $input['end_price'];

           if(!empty($input['product_name'])){
                $sql .= " AND ${wherePrice}";
           }else{
                $sql .= "WHERE ${wherePrice}";
           }
        }

        if(!empty($input['category_id'])){
           $whereCategory = 'category_id = ' .$input['category_id'];

           if(!empty($input['product_name']) || $whereCheckPrice){
                $sql .= " AND ${whereCategory}";
           }else if(!empty($input['product_name']) && $whereCheckPrice==false){
                $sql .= " WHERE ${whereCategory}";
           }
           else{
                $sql .= " WHERE ${whereCategory}";
           }
        }
  
        return $this->getByQuery($sql);
    }
   

    public function getProducts()
    {
        $sql = "SELECT products.*, categories.name as category_name FROM products
            JOIN categories ON products.category_id = categories.id ORDER BY id DESC" ;

        return $this->getByQuery($sql);
    }
}
