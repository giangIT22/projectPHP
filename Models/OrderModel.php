<?php

class OrderModel extends BaseModel{
    const TABLE = 'orders';

    public function getAll($select = ['*'], $orderBys = [], $limit = 15){
        return $this->all(self::TABLE, $select, $orderBys, $limit);
    }

    public function store($input){
        return $this->create(self::TABLE, [
            'code'           => rand(100,100000),
            'customer_name'  => $input['customer_name'],
            'customer_email' => $input['customer_email'],
            'customer_phone' => $input['customer_phone']
        ]);

    }

    public function storeOrderDetail($input){//luu thong tin vao ban detail
        $this->create('order_details', [
            'order_id'           => $input['order_id'],
            'product_id'         => $input['product_id'],
            'product_name'         => $input['product_name'],
            'product_price'         => $input['product_price'],
            'product_qty'         => $input['product_qty'],
        ]);

    }

    public function findOrderById($select = ['*'],$id){
        return $this->find(self::TABLE, $select, $id);
    }

    public function getProductsByOrderId($id){
        $sql = 'SELECT * FROM order_details WHERE order_id=' . $id;

        return $this->getByQuery($sql);
    }
}