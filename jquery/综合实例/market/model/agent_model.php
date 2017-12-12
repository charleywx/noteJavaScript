<?php
chdir(dirname(__FILE__));
include_once ("../db/TPgsql.php");

class Agent_model {

    public function find_many() {
        $db = new TPgsql();
        $sql = "select * from pre_agent order by addtime desc";
        $result = $db->query_two($sql);
        return $result;
    }

    public function find_one($id) {
        $db = new TPgsql();
        $sql = "select * from pre_agent where entity_id=" . $id;
        $result = $db->query_two($sql);
        return $result;
    }

    public function insert($data) {
        $province = $data['province'];
		$city = $data['city'];
		$area = $data['area'];
        $companyname = $data['companyname'];
        $tel = $data['tel'];
        $mobile = $data['mobile'];
        $fax = $data['fax'];
        $email = $data['email'];
        $addtime  = $data['addtime'];

        $db=new TPgsql();
        $sql_agent = "insert into pre_agent(province,city,area,companyname,tel,mobile,fax,email,addtime) values('".$province."','" . $city . "', '". $area . "','".$companyname."','".$tel."','".$mobile."','".$fax."','".$email."','".$addtime."')";
        return $db->query($sql_agent);
    }
}