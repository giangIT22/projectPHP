<?php
 
class CategoryModel extends BaseModel{
    const TABLE = 'categories';

    public function getAll($select = ['*'], $orderBys = [], $limit = 15){
        return $this->all(self::TABLE, $select, $orderBys, $limit);
    }

    public function findCategoryById($select = ['*'],$id){
        return $this->find(self::TABLE, $select, $id);
    }

    public function getCategoryForMenu(){
        return $this->getByQuery("SELECT * FROM ". self::TABLE. " WHERE is_home = 0 ");
    }

    public function getCategoryPickHome(){
        return $this->getByQuery("SELECT * FROM ". self::TABLE. " WHERE is_home = 1 ");
    }

    public function deleteData($id){
        $this->delete(self::TABLE, $id);
    } 

    public function updateData($id, $data){
        $this->update(self::TABLE, $id, $data);
    }

    public function createData($data){
        $this->create(self::TABLE, $data);
    }

   
}
