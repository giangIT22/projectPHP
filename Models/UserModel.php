<?php

class UserModel extends BaseModel{
    const TABLE = 'users';

    public function exists($email, $password){
        $sql = "SELECT * FROM " . self::TABLE . " WHERE email = '" . $email . "' AND password = '" . md5($password) . "'";
        return $this-> getFirstByQuery($sql);
    }

    public function getAll($select = ['*'], $orderBys = [], $limit = 15){
        return $this->all(self::TABLE, $select, $orderBys, $limit);
    }

    public function findUserById($select = ['*'],$id){
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
}