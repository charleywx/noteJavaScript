<?php
chdir(dirname(__FILE__));
include_once ("../db/TPgsql.php");

class Review_model {

    public function find_many() {
        $db = new TPgsql();
        $sql = "select * from pre_product_review order by addtime desc";
        $result = $db->query_two($sql);
        return $result;
    }

    public function find_by_entity_id($entity_id) {
        $db = new TPgsql();
        $sql = "select * from pre_product_review where entity_id=".$entity_id;
        $result = $db->query_two($sql);
        return $result;
    }

    public function find_by_product_id($product_id) {
        $db = new TPgsql();
        $sql = "select * from pre_product_review where product_id=".$product_id;
        $result = $db->query_two($sql);
        return $result;
    }

    public function insert($data) {
        $customer_name = $data['customer_name'];
        $score = $data['score'];
        $message = $data['message'];
        $addtime = $data['addtime'];
        $product_id = $data['product_id'];

        $db=new TPgsql();
        $sql_review = "insert into pre_product_review(product_id,score,message,customer_name,addtime) values(".$product_id."," . $score . ", '". $message . "','".$customer_name."','".$addtime."')";
        return $db->query($sql_review);
    }

    public function delete($id) {
        $sql_review = "delete from pre_product_review where entity_id=".$id;
        $db = new TPgsql();
		if($db->query($sql_review)){
			echo "<script>alert('删除成功！');</script>";
		}else{
			echo "<script>alert('删除失败！');</script>";
		}
    }
	
	public function getPageTotal($product_id) {
        $sql_total = "select count(*) as total from pre_product_review where product_id=".$product_id;
		//echo $sql_total;exit;
        $db = new TPgsql();
        return $db->query_two($sql_total);
    }
	
	public function getPageInfo($page,$pagesize,$product_id,$type='') {
	if($type == 'time'){
	$sql_pageinfo = "select * from pre_product_review where product_id=".$product_id." order by addtime desc limit ".($page-1)*$pagesize.",".$pagesize;
	
	}elseif($type == 'recom'){
	$sql_pageinfo = "select * from pre_product_review where product_id=".$product_id." order by score desc limit ".($page-1)*$pagesize.",".$pagesize;
	}else{
	 $sql_pageinfo = "select * from pre_product_review where product_id=".$product_id." order by addtime limit ".($page-1)*$pagesize.",".$pagesize;
	}
       
        $db = new TPgsql();
        return $db->query_two($sql_pageinfo);
    }

    public function getReviewTotal($product_id) {
        $sql_review_agv = "select AVG(score) as avg from pre_product_review where product_id =".$product_id;
        $db = new TPgsql();
        return $db->query_two($sql_review_agv);
    }
	
	public function get_recommend_products() {
        $sql_review_agv = "select product_id,product_name,cover,AVG(score) as avg from pre_product_review r,pre_products p where p.entity_id=r.product_id GROUP BY product_id ORDER BY avg desc limit 0,2";
        $db = new TPgsql();
        return $db->query_two($sql_review_agv);
    }
}