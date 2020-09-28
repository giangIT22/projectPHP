<?php
class ProductImageModel extends BaseModel{
    const TABLE = 'product_images';
    
    public function createData($data){
        $this->create(self::TABLE, $data);
    }

    public function getByProductId($id)
    {
    	$sql = "SELECT * FROM product_images WHERE product_id='" . $id . "'";
    	
    	return $this->getByQuery($sql);
    }

    public function destroy($id)
    {
        return $this->delete(self::TABLE, $id);
    }
}