<?php
chdir(dirname(__FILE__));
include_once ("../db/TPgsql.php");

class Product_model {

    public function find_many() {
        $db = new TPgsql();
        $sql = "select * from pre_products order by addtime";
        $result = $db->query_two($sql);
        return $result;
    }

    public function find_one($id) {
        $db = new TPgsql();
        $sql = "select * from pre_products where entity_id=" . $id;
        $result = $db->query_two($sql);
        return $result;
    }

    public function insert($data) {
        $product_name = $data['product_name'];
		$cover = $data['cover'];
		$smallcover = $data['smallcover'];
        $price = $data['price'];
        $weight = $data['weight'];
        $methods = $data['methods'];
        $description = $data['description'];
        $picture = $data['picture'];
        $auth_code  = $data['auth_code'];
        $addtime = $data['addtime'];

        $db=new TPgsql();
        $sql_product = "insert into pre_products(product_name,description,picture,auth_code,addtime,cover,smallcover,price,weight,methods) values('".$product_name."','" . $description . "', '". $picture . "','".$auth_code."','".$addtime."','".$cover."','".$smallcover."','".$price."','".$weight."','".$methods."')";
        return $db->query($sql_product);
    }

    public function update($data) {
        $id = $data['id'];
        $cover = $data['cover'];
        $smallcover = $data['smallcover'];
        $product_name = $data['product_name'];
        $description = $data['description'];
        $picture = $data['picture'];
        $auth_code  = $data['auth_code'];
        $addtime = $data['addtime'];
        $price = $data['price'];
        $weight = $data['weight'];
        $methods = $data['methods'];
        $db = new TPgsql();
        $sql_product = "update pre_products set product_name='".$product_name."',cover='".$cover."',smallcover='".$smallcover."',description='".$description."',picture='".$picture."', auth_code='".$auth_code."',price='".$price."',weight='".$weight."',methods='".$methods."',addtime='".$addtime."' where entity_id='".$id."'";
        return $db->query($sql_product);
    }

    public function delete($id) {
        $sql_product = "delete from pre_products where entity_id=".$id;
        $db = new TPgsql();
        return $db->query($sql_product);
    }
	
	public function get_recommend_product() {
        $sql_product = "select * from pre_products where isrecommend=1";
        $db = new TPgsql();
        return $db->query_two($sql_product);
    }
	
	public function searchProduct($keyword) {
        $sql_product = "select * from pre_products where product_name like '%".$keyword."%'";
        $db = new TPgsql();
		$product = $db->query_two($sql_product);
		if(count($product[0]) > 0){
			return $product;
		}
        return 0;
    }
    public function get_recommend_products() {
        $sql_review_agv = "select r.product_id,p.product_name,p.cover,AVG(score) as avg from pre_product_review r,pre_products p where p.entity_id=r.product_id GROUP BY r.product_id ORDER BY avg desc limit 0,2";
        $db = new TPgsql();
        $result = $db->query_two($sql_review_agv);
        return $result;
    }
}